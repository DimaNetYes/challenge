<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    {{HTML::style('../bootstrap/bootstrap/css/bootstrap.css', array(), true}}
    {{HTML::style('css/AdminGeneral/adminBody.css', array(), true)}}
    {{HTML::style('css/AdminGeneral/adminNav.css', array(), true))}}
    {{HTML::style('css/AdminGeneral/tables.css', array(), true))}}
    @yield('style')
</head>
<body>

<header>
    @include('Admin.nav');
</header>
<div class="row">
    @include('Admin.leftNav');
    @yield('content')
</div>
<footer></footer>

{{HTML::script('../bootstrap/bootstrap/js/bootstrap.js'), array(), true}}

</body>
</html>
