import 'package:booking_tiket/shared/theme.dart';
import 'package:flutter/material.dart';

class DetailCheckoutPage extends StatelessWidget {
  final String title;
  final String valueText;
  final Color valueColor;

  const DetailCheckoutPage({
    Key? key,
    required this.title,
    required this.valueText,
    required this.valueColor,
  }) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Container(
      margin: EdgeInsets.only(top: 16),
      child: Row(
        children: [
          Container(
            width: 16,
            height: 16,
            margin: EdgeInsets.only(right: 6),
            decoration: BoxDecoration(
                image: DecorationImage(
                    image: AssetImage('assets/icon_check.png'))),
          ),
          Text(
            title,
            style: blackTextStyle,
          ),
          Spacer(),
          Text(
            valueText,
            style: blackTextStyle.copyWith(
              color: valueColor,
              fontWeight: semiBold),
          )
        ],
      ),
    );
  }
}
