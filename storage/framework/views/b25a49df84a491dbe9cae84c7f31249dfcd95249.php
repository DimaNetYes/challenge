<?php $__env->startSection('style'); ?>
       <?php echo HTML::style('css/AdminGeneral/forms.css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <h2>Новый Квест!</h2>

    <?php
    echo "<br>";
    echo Form::open(array('url' => route('post'), 'method' => 'post', 'role' => 'form', 'class' => 'form-vertical'));

    echo Form::label('name', 'Название') . Form::text('name');
    echo "<br>";
    echo Form::label('description', 'Описание') . Form::text('description');
    echo "<br>";
    echo Form::label('fullDescription', 'Полное описание') . Form::text('fullDescription');
    echo "<br>";
    echo Form::label('date', 'Дата проведения:') . Form::date('date');
    echo "<br>";
    echo Form::label('time', 'Время начала:') . Form::time('time');
    echo "<br>";
    echo Form::label('status', 'Status:') . Form::text('status');
    echo "<br>";

    echo Form::submit('Add');

    echo  Form::close();

    ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>