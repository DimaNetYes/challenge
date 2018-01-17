<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
<h1>Если вы хотите создать квест напишите нам</h1>
    {!! Form::open() !!}
Email{{ Form::email('email') }}   <br><br>
Message{{ Form::textarea('message') }} <br><br>
    {{ Form::submit('send') }}
    {{ Form::close() }}

<a href="{{ route("start") }}"> назад</a>
    </body>
</html>
