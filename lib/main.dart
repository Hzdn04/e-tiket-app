import 'package:booking_tiket/cubit/auth_cubit.dart';
import 'package:booking_tiket/cubit/destination_cubit.dart';
import 'package:booking_tiket/cubit/page_cubit.dart';
import 'package:booking_tiket/cubit/seat_cubit.dart';
import 'package:booking_tiket/cubit/transaction_cubit.dart';
import 'package:booking_tiket/ui/pages/bonus_page.dart';
import 'package:booking_tiket/ui/pages/checkout_page.dart';
import 'package:booking_tiket/ui/pages/detail_page.dart';
import 'package:booking_tiket/ui/pages/get_started_page.dart';
import 'package:booking_tiket/ui/pages/signin_page.dart';
import 'package:booking_tiket/ui/pages/signup_page.dart';
import 'package:booking_tiket/ui/pages/splash_page.dart';
import 'package:booking_tiket/ui/pages/success_checkout_page.dart';
import 'package:cloud_firestore/cloud_firestore.dart';
import 'package:firebase_core/firebase_core.dart';
import 'package:flutter/material.dart';
import 'package:flutter_bloc/flutter_bloc.dart';
import 'ui/pages/main_page.dart';

void main() async {
  WidgetsFlutterBinding.ensureInitialized();
  await Firebase.initializeApp();

  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return MultiBlocProvider(
      providers: [
        BlocProvider(
          create: (context) => PageCubit(),
        ),
        BlocProvider(
          create: (context) => AuthCubit(),
        ),
        BlocProvider(create: (context) => DestinationCubit()),
        BlocProvider(create: (context) => SeatCubit()),
        BlocProvider(create: (context) => TransactionCubit()),
      ],
      child: MaterialApp(
        debugShowCheckedModeBanner: false,
        routes: {
          '/': (context) => SplashPage(),
          '/get-started': (context) => StartedPage(),
          '/sign-up': (context) => SignUpPage(),
          '/sign-in': (context) => SignInPage(),
          '/bonus': (context) => BonusPage(),
          '/main': (context) => MainPage(),
          '/success': (context) => SuccessPage(),
          // '/checkout': (context) => CheckoutPage(),
        },
      ),
    );
  }
}
