@extends('layouts.dashboard')
@section('style')
    <script src="{{ asset('assets/js/respond-1.1.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/html5shiv.js') }}"></script>
    <script src="{{ asset('assets/js/html5element.js') }}"></script>
@stop


@section('content')

    {{ Form::open(array('url' => 'contact-form')) }}
    {{ Form::email('email') }}
    {{ Form::textarea('message') }}
    {{ Form::submit('send') }}
    {{ Form::close() }}

@stop
