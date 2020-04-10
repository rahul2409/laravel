<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <ul>
        <li><a href="/about">About Us</a></li>
        <li><a href="/">Index</a></li>
        <li><a href="/services">Services</a></li>
    </ul>
    @yield('body')
</body>
</html>