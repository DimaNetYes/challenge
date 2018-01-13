@extends('layouts.dashboard')
@section('style')
    {{HTML::style('css/stylesStart.css')}}
@stop
@section('content')

<div class="content">
    <header>
        <nav>
            <ul class="nav masthead-nav">
                <li class="active"><a href="">Home</a></li>
                <li><a href="/public/login">Login</a></li>
                <li><a href="contact-form">Contacts</a></li>
            </ul>
        </nav>
    </header>

    <main class="cover">
        <p class="lead button">
            <a href="users/view" class="btn btn-lg btn-default">GET STARTED</a>
        </p>
    </main>

    <footer>
        <p class="footer">C© 2017. Все права защищены</p>
    </footer>
</div>


@stop
