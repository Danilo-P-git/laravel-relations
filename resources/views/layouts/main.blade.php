<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('page-title', 'App Fumetti')</title>
        <link rel="stylesheet" href="{{asset("css/app.css")}}">
    </head>
    <body>
        <!-- header -->
        <header></header>
        <!-- /header -->

        <main>@yield('page-content')</main>        
        
        <!-- footer -->
        <footer></footer>
        <!-- /footer -->
    </body>
</html>