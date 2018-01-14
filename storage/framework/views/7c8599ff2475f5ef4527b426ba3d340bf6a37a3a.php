<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE QUEST</title>
    <meta charset="UTF-8">
    <?php echo e(HTML::style('../bootstrap/bootstrap/css/bootstrap.css')); ?>

    <?php echo e(HTML::style('css/AdminGeneral/adminBody.css')); ?>

    <?php echo e(HTML::style('css/AdminGeneral/adminNav.css')); ?>

    <?php echo e(HTML::style('css/AdminGeneral/tables.css')); ?>

    <?php echo $__env->yieldContent('style'); ?>
</head>
<body>

<header>
    <?php echo $__env->make('Admin.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
</header>
<div class="row">
    <?php echo $__env->make('Admin.leftNav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
    <?php echo $__env->yieldContent('content'); ?>
</div>
<footer></footer>

<?php echo e(HTML::script('../bootstrap/bootstrap/js/bootstrap.js')); ?>


</body>
</html>
