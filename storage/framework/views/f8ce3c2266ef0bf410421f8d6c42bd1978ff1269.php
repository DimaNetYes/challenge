<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE QUEST</title>
    <link media="all" type="text/css" rel="stylesheet" href="/bootstrap/bootstrap/css/bootstrap.css">
    <?php echo $__env->yieldContent('style'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
    <?php echo $__env->yieldContent('content'); ?>
    <script src="<?php echo e(url('../bootstrap/bootstrap/js/bootstrap.js')); ?>"></script>
    <script src="<?php echo e(url('/js/main.js')); ?>"></script>
    
    
    
</body>
</html>
