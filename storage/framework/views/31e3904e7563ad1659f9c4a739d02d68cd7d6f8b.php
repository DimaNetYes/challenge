<?php $__env->startSection('style'); ?>
    <?php echo HTML::style('css/User/userContact.css'); ?>

    <?php echo HTML::style('css/UserGeneral/headerNav.css'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <header>
        <?php echo $__env->make('Users.General.headerNav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </header>

    <h1>ОБРАТНАЯ СВЯЗЬ</h1>

    <div class="contact_info">

        <div class="detail">
            <h4>О нас</h4>
            <p>г. Харьков пл. Свободы</p>

            <h4>Связаться с нами</h4>
            <p>+38 066 0085535</p>

            <h4>Email us</h4>
            <p>realwindrunner@gmail.com</p>
        </div>

        <?php echo e(Form::open(array('url' => 'contact-form'))); ?>

        <?php echo e(Form::email('email')); ?>

        <?php echo e(Form::textarea('message')); ?>

        <?php echo e(Form::submit('send')); ?>

        <?php echo e(Form::close()); ?>


    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>