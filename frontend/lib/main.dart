import 'package:flutter/material.dart';
import 'home.dart';

void main() => runApp(App());

class App extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      theme: ThemeData(
          primaryColor: Color.fromARGB(255, 53, 23, 119),
          scaffoldBackgroundColor: Color.fromARGB(234, 251, 117, 249),
          appBarTheme: AppBarTheme(
              backgroundColor: Color.fromARGB(218, 105, 25, 79), elevation: 0)),
      title: 'Putri Julisa Martadina',
      initialRoute: '/',
      routes: {
        '/': (context) => Home(),
      },
    );
  }
}
