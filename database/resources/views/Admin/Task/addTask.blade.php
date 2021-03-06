@extends('layouts.dashboard')
@section('style')
       {!!HTML::style('css/AdminGeneral/forms.css')!!}
@stop

@section('content')

    <h2>Новaя Задача!</h2>

    <?php
    echo "<br>";
    echo Form::open(array('url' => route('postTask', ['idQuest'=>$idQuest]), 'method' => 'post', 'role' => 'form', 'class' => 'form-vertical'));

    echo Form::label('name', 'Название') . Form::text('name');
    echo "<br>";
    echo Form::label('description', 'Описание') . Form::text('description');
    echo "<br>";
    echo Form::label('duration', 'Длительность:') . Form::time('duration');
    echo "<br>";
    echo Form::label('weight', 'Вес задачи:') . Form::number('weight');
    echo "<br>";
    echo Form::submit('Add');
    Form::close();

    ?>

@stop
