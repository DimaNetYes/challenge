<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE QUEST</title>
    <?php echo e(HTML::style('../bootstrap/bootstrap/css/bootstrap.css')); ?>

    <?php echo $__env->yieldContent('style'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo e(HTML::script('../bootstrap/bootstrap/js/bootstrap.js')); ?>

    <?php echo e(HTML::script("http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js")); ?>

    <?php echo e(HTML::script('js/main.js')); ?>

</body>
</html>
