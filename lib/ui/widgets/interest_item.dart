import 'package:booking_tiket/shared/theme.dart';
import 'package:flutter/material.dart';

class ItemInterest extends StatelessWidget {
  
  final String imageUrl;
  final String title; 

  const ItemInterest({Key? key, required this.imageUrl, required this.title}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Expanded(
      child: Row(
        children: [
          Container(
            margin: EdgeInsets.only(right: 6),
            width: 16,
            height: 16,
            decoration: BoxDecoration(
              image: DecorationImage(
                image: AssetImage(imageUrl),
              ),
            ),
          ),
          Text(
            title,
            style: blackTextStyle,
          ),
        ],
      ),
    );
  }
}
