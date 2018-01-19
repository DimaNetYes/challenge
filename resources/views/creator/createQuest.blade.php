@extends('layouts.dashboard')
@section('style')
    {{HTML::style('css/AdminGeneral/forms.css')}}
@stop
@section('content')

    <h2>Новый Квест!</h2>
    <?php
    echo "<br>";
    echo Form::open(array('action' => 'Creator\CreateController@addQuest'));
    echo Form::label('name', 'Название') . Form::text('name');
    echo "<br>";
    echo Form::label('description', 'Описание') . Form::text('description');
    echo "<br>";
    echo Form::label('fullDescription', 'Полное описание') . Form::text('fullDescription');
    echo "<br>";
    echo Form::label('date', 'Дата планируемого проведения проведения:') . Form::date('date');
    echo "<br>";
    ?>
    {{Form::hidden('status', '-1')}}
    {{Form::hidden('user_id', Auth::id())}}

    <?php
    echo "<br>";
    echo Form::submit('Добавить');

    echo  Form::close();
    ?>

@stop