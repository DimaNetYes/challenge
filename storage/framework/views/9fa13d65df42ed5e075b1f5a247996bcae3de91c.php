<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo e(HTML::style('../bootstrap/bootstrap/css/bootstrap.css')); ?>

    <?php echo $__env->yieldContent('style'); ?>
</head>
<body>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo e(HTML::script('../bootstrap/bootstrap/js/bootstrap.js')); ?>


</body>
</html>
