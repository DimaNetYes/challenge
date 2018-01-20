@extends('layouts.dashboard')
@section('style')
    {{HTML::style('css/AdminGeneral/forms.css')}}
@stop
@section('content')


    <?php
    echo "<br>";
    echo Form::open(array('action' => 'Creator\CreateController@addTasks'));
?>
    <h2>Количество заданий в квесте</h2>
    {{Form::select('number', [1, 2, 3, 4]) }}
    {{Form::hidden('user_id', $user_id)}}
    <?php
    echo "<br>";

    echo Form::submit('Добавить');
    echo  Form::close();
    ?>

@stop

