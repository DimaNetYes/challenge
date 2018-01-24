@extends('layouts.dashboard')
@section('style')
    <link media="all" type="text/css" rel="stylesheet" href="/public/css/User/userContact.css">
    <link media="all" type="text/css" rel="stylesheet" href="/public/css/UserGeneral/headerNav.css">
@stop

@section('content')
    <header>
        @include('Users.General.headerNav')
    </header>

    <h1>ОБРАТНАЯ СВЯЗЬ</h1>

    <div class="contact_info">

        <div class="detail">
            <h4>Адрес</h4>
            <p>г. Харьков пл. Свободы</p>

            <h4>Связаться с нами</h4>
            <p>+38 077-777-77-77</p>

            <h4>Email</h4>
            <p>777quest777@gmail.com</p>
        </div>

        <div class="form">
            {{ Form::open(array('url' => 'contact-form')) }}
            <div claas="label">Email:</div>
            {{ Form::email('email') }}
            <div class="label">Cooбщение:</div>
            {{ Form::textarea('message') }}
            {{ Form::submit('send') }}
            {{ Form::close() }}
        </div>

    </div>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2565.075972770354!2d36.23030491525082!3d49.99118507941462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a0f00948c297%3A0xb1ae000554c43aec!2z0L_Qu9C-0YnQsCDQmtC-0L3RgdGC0LjRgtGD0YbRltGXLCDQpdCw0YDQutGW0LIsINCl0LDRgNC60ZbQstGB0YzQutCwINC-0LHQu9Cw0YHRgtGMLCA2MTAwMA!5e0!3m2!1suk!2sua!4v1516802052133"
                width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
@stop
