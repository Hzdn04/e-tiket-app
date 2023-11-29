import 'package:booking_tiket/cubit/page_cubit.dart';
import 'package:booking_tiket/shared/theme.dart';
import 'package:booking_tiket/ui/pages/home_page.dart';
import 'package:booking_tiket/ui/pages/setting_page.dart';
import 'package:booking_tiket/ui/pages/transaction_page.dart';
import 'package:booking_tiket/ui/pages/wallet_page.dart';
import 'package:booking_tiket/ui/widgets/custom_bottom_navigation_items.dart';
import 'package:flutter/material.dart';
import 'package:flutter_bloc/flutter_bloc.dart';

class MainPage extends StatelessWidget {
  const MainPage({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    Widget buildContent(int currentIndex) {
      switch (currentIndex) {
        case 0:
          return HomePage();
        case 1:
          return TransactionPage();
        case 2:
          return WalletPage();
        case 3:
          return SettingPage();
        default:
          return HomePage();
      }
    }

    Widget customBottomNavigation() {
      return Align(
        alignment: Alignment.bottomCenter,
        child: Container(
          margin: EdgeInsets.fromLTRB(defaultMargin, 0, defaultMargin, 30),
          width: double.infinity,
          height: 60,
          decoration: BoxDecoration(
              color: Colors.white, borderRadius: BorderRadius.circular(18)),
          child: Row(
            mainAxisAlignment: MainAxisAlignment.spaceAround,
            children: [
              CustomBottomNavigationItem(
                index: 0,
                imageUrl: 'assets/fi_globe.png',
              ),
              CustomBottomNavigationItem(
                index: 1,
                imageUrl: 'assets/fi_book-open.png', 
              ),
              CustomBottomNavigationItem(
                index: 2,
                imageUrl: 'assets/fi_credit-card.png', 
              ),
              CustomBottomNavigationItem(
                index: 3,
                imageUrl: 'assets/fi_settings.png', 
              ),
            ],
          ),
        ),
      );
    }

    return BlocBuilder<PageCubit, int>(
      builder: (context, currentIndex) {
        return Scaffold(
          backgroundColor: kBackgroundColor,
          body: Stack(
            children: [buildContent(currentIndex), customBottomNavigation()],
          ),
        );
      },
    );
  }
}
