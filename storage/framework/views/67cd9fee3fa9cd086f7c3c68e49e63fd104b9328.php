<?php $__env->startSection('style'); ?>
    <?php echo e(HTML::style('css/AdminGeneral/forms.css')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <h2>Редактирование</h2>

    <?php
    echo "<br>";
    dd($quest);
    echo Form::open(array('url' => route('edit', $quest), 'method' => 'post', 'role' => 'form', 'class' => 'form-vertical'));

    echo Form::label('name', 'Название') . Form::text('name', $quest->name);
    echo "<br>";
    echo Form::label('description', 'Описание') . Form::text('description', $quest->description);
    echo "<br>";
    echo Form::label('fullDescription', 'Полное описание') . Form::text('fullDescription', $quest->fullDescription);
    echo "<br>";
    echo Form::label('date', 'Дата проведения:') . Form::date('date', $quest->date);
    echo "<br>";
    echo Form::label('time', 'Время начала:') . Form::time('time', $quest->time);
    echo "<br>";
    echo Form::label('status', 'STATUS:') . Form::text('status', $quest->status);
    echo "<br>";


    echo Form::submit('Edit');

    echo Form::token() . Form::close();

    ?>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>