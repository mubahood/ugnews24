<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UGNEWS24 - @yield('title')</title>
</head>
<body>

    <h2>@yield('heading')</h2>

    <hr>
    <ul>
        <li><a href="/">HOME PAGE</a></li>
        <li><a href="/about">ABOUT US</a></li>
        <li><a href="/contact">CONTACT US</a></li>
    </ul>
    <hr>

    
 
    @yield('content')

    <hr>
    <b>(C) 2022 - UGNEWS24</b>
</body>
</html>