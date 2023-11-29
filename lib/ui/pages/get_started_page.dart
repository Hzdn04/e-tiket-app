import 'package:booking_tiket/shared/theme.dart';
import 'package:booking_tiket/ui/widgets/custom_bottom.dart';
import 'package:flutter/material.dart';

class StartedPage extends StatelessWidget {
  const StartedPage({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: Stack(
        children: [
          Container(
            height: double.infinity,
            width: double.infinity,
            decoration: BoxDecoration(
                image: DecorationImage(
                    image: AssetImage('assets/image_1.png'))),
          ),
          Center(
            child: Column(
              mainAxisAlignment: MainAxisAlignment.end,
              children: [
                Text(
                  "Away Days For Ever",
                  style: whiteTextStyle.copyWith(
                      fontSize: 32, fontWeight: semiBold),
                ),
                SizedBox(
                  height: 10,
                ),
                Text(
                  "Away Days For Ever",
                  style:
                      whiteTextStyle.copyWith(fontSize: 16, fontWeight: light),
                  textAlign: TextAlign.center,
                ),
                CustomBottom(
                    title: 'Go Away',
                    width: 220,
                    margin: EdgeInsets.only(top: 50, bottom: 80),
                    onPressed: () {
                      Navigator.pushNamed(context, '/sign-in');
                    })
              ],
            ),
          )
        ],
      ),
    );
  }
}
