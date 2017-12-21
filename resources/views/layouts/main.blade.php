<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
@stack('meta')
@stack('favicon')
@stack('css')
@stack('header_js')
@stack('title')
</head>
<body style="background-color:#2c3e50;">
@yield('content')
@stack('footer_js')
</body>
</html>