<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">

    {{HTML::style('../bootstrap/bootstrap/css/bootstrap.css',array(), true)}}
    @yield('style')
</head>
<body>
    @yield('content')
    {{HTML::script('../bootstrap/bootstrap/js/bootstrap.js',array(), true)}}

</body>
</html>
