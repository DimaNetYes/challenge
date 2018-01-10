<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="UTF-8">


    <?php echo $__env->yieldContent('style'); ?>

</head>
<body>
<?php echo $__env->yieldContent('content'); ?>
<?php echo HTML::script('http://code.jquery.com/jquery-1.8.3.min.js'); ?>

<?php echo HTML::script('js/bootstrap.js'); ?>

<?php echo HTML::script('js/jquery.prettyPhoto.js'); ?>

<?php echo HTML::script('js/jquery.custom.js'); ?>


</body>
</html>