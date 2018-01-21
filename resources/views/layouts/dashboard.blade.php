<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE QUEST</title>
    {{HTML::style('../bootstrap/bootstrap/css/bootstrap.css')}}
    @yield('style')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
    @yield('content')
    {{HTML::script('../bootstrap/bootstrap/js/bootstrap.js')}}
    {{HTML::script("http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js")}}
    {{HTML::script('js/main.js')}}
</body>
</html>
