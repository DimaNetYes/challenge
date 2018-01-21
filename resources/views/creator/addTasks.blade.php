@extends('layouts.dashboard')
@section('style')
    {{HTML::style('css/AdminGeneral/forms.css')}}
    <style>
        body{
            background: #f9f9f9 url(../../../public/img/page-bg-1.jpg);
        }
    </style>
@stop
@section('content')

    <h2>Задания!</h2>
    <?php
    echo "<br>";
    echo Form::open(array('action' => 'Creator\CreateController@saveTasks'));
        for($i = 1; $i <= $number; $i++){
            echo Form::label('name', 'Название '.$i.' задания') . Form::text('name'.$i,'' ,array('required' => 'required'));
            echo "<br>";
            echo Form::label('description', 'Описание '.$i.' задания') . Form::text('description'.$i, '',array('required' => 'required'));
            echo "<br><hr><br>";
         }
    ?>
    {{Form::hidden('user_id', $user_id)}}
    {{Form::hidden('QR')}}
    <?php
    echo "<br>";
    echo Form::submit('Добавить');

    echo  Form::close();
    ?>

@stop