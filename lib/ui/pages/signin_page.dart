import 'package:booking_tiket/cubit/auth_cubit.dart';
import 'package:booking_tiket/shared/theme.dart';
import 'package:booking_tiket/ui/widgets/custom_field.dart';
import 'package:flutter/material.dart';
import 'package:flutter_bloc/flutter_bloc.dart';

import '../widgets/custom_bottom.dart';

class SignInPage extends StatelessWidget {
  SignInPage({Key? key}) : super(key: key);

  final TextEditingController emailController = TextEditingController(text: '');
  final TextEditingController passwordController =
      TextEditingController(text: '');

  @override
  Widget build(BuildContext context) {
    Widget tittle() {
      return Center(
        child: Container(
          margin: EdgeInsets.only(top: 60),
          child: Text(
            'LOGIN',
            style: blackTextStyle.copyWith(fontSize: 34, fontWeight: semiBold),
          ),
        ),
      );
    }

    Widget inputSection() {
      Widget emailInput() {
        return CustomField(
          title: 'Email',
          hintText: 'Email Address',
          obsText: false,
          controller: emailController,
        );
      }

      Widget passwordInput() {
        return CustomField(
          title: 'Password',
          hintText: 'Your Password',
          obsText: true,
          controller: passwordController,
        );
      }

      Widget submitButton() {
        return BlocConsumer<AuthCubit, AuthState>(
          listener: (context, state) {
            if (state is AuthSuccess) {
              Navigator.pushNamedAndRemoveUntil(
                  context, '/main', (route) => false);
            } else if (state is AuthFailed) {
              ScaffoldMessenger.of(context).showSnackBar(SnackBar(
                  backgroundColor: kRedColor, content: Text(state.error)));
            }
          },
          builder: (context, state) {
            if (state is AuthLoading) {
              return Center(
                child: CircularProgressIndicator(),
              );
            }

            return CustomBottom(
                title: 'Login',
                width: 220,
                margin: EdgeInsets.only(top: 30),
                onPressed: () {
                  context.read<AuthCubit>().signIn(
                        email: emailController.text,
                        password: passwordController.text,
                      );
                });
          },
        );
      }

      return Container(
        margin: EdgeInsets.only(top: 5),
        padding: EdgeInsets.symmetric(
          horizontal: 20,
          vertical: 30,
        ),
        decoration: BoxDecoration(
            color: Colors.white,
            borderRadius: BorderRadius.circular(defaultRadius)),
        child: Column(
          children: [emailInput(), passwordInput(), submitButton()],
        ),
      );
    }

    Widget tacButton() {
      return GestureDetector(
        onTap: () {
          Navigator.pushNamed(context, '/sign-up');
        },
        child: Container(
          alignment: Alignment.center,
          margin: EdgeInsets.only(top: 10, bottom: 73),
          child: Text(
            'Do you have account? Sign-up',
            style: greyTextStyle.copyWith(
                fontSize: 16,
                fontWeight: light,
                decoration: TextDecoration.underline),
          ),
        ),
      );
    }

    return Scaffold(
      backgroundColor: kBackgroundColor,
      body: Center(
        child: ListView(
          padding: EdgeInsets.symmetric(
            horizontal: defaultMargin,
            vertical: 100,
          ),
          children: [tittle(), inputSection(), tacButton()],
        ),
      ),
    );
  }
}
