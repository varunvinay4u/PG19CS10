import 'package:mind_buddy/splash_screen.dart';
import 'package:flutter/material.dart';
import 'package:mind_buddy/home_screen.dart';
import 'package:flutter/services.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    SystemChrome.setPreferredOrientations([
      DeviceOrientation.portraitUp,
      DeviceOrientation.portraitDown,
    ]);
    return MaterialApp(
        home: SplashScreen(),
        theme: ThemeData(primaryColor: Colors.red, primarySwatch: Colors.blue));
  }
}
