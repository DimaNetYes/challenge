<?php $__env->startSection('style'); ?>
    <?php echo HTML::style('css/AdminGeneral/adminBody.css'); ?>

    <?php echo HTML::style('css/AdminGeneral/adminNav.css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <header>
        <?php echo $__env->make('Admin.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
    </header>

    <div class="row">

        <?php echo $__env->make('Admin.leftNav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;

        <main>
            <?php if($msg): ?>
                <h1><?php echo e($msg); ?></h1>
                <?php $msg = 0; ?>
            <?php else: ?>
                <h1>Ура! Ты - админ!</h1>
            <?php endif; ?>
        </main>

    </div>
    <footer></footer>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>