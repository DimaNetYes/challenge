<?php $__env->startSection('style'); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Quest</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <?php echo HTML::style('css/bootstrap.css'); ?>

    <?php echo HTML::style('css/bootstrap-responsive.css'); ?>

    <?php echo HTML::style('css/prettyPhoto.css'); ?>

    <?php echo HTML::style('css/custom-styles.css'); ?>

    <!-- JS
    ================================================== -->
    <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
    <?php echo HTML::script('js/bootstrap.js'); ?>

    <?php echo HTML::script('js/jquery.prettyPhoto.js'); ?>

    <?php echo HTML::script('js/jquery.custom.js'); ?>


    <script type="text/javascript">
        $(document).ready(function () {

            $("#btn-blog-next").click(function () {
                $('#blogCarousel').carousel('next')
            });
            $("#btn-blog-prev").click(function () {
                $('#blogCarousel').carousel('prev')
            });

            $("#btn-client-next").click(function () {
                $('#clientCarousel').carousel('next')
            });
            $("#btn-client-prev").click(function () {
                $('#clientCarousel').carousel('prev')
            });

            $('#myCarousel').carousel({
                interval: 4000
            });
            $('#myCarousel').carousel('cycle');
        });

    </script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row"><!-- Begin Gallery Row -->
        <div class="span12 gallery">

            <!-- Gallery Thumbnails
            ================================================== -->

            <div class="row clearfix">
                <ul class="gallery-post-grid holder">
                    <!-- Gallery Item 1 -->
                    <?php $__currentLoopData = $quests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $q): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li  class="span4 gallery-item" data-id="id-<?= $key ?>" data-type="illustration">
                            <span class="gallery-hover-3col hidden-phone hidden-tablet">
                                <span class="gallery-icons">
                                    <a href="img/gallery/Quest/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Вид" data-rel="prettyPhoto"></a>
                                    <a href="<?php echo e(route('more', ['id'=>$q->id])); ?>" class="item-details-link"></a>
                                </span>
                            </span>
                        <a href="gallery-single.htm"><img src="img/gallery/Quest/gallery-img-1-3col.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm"><?php echo $q->name; ?></a><?php echo $q->date; ?>.</span>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>

    </div><!-- End Gallery Row -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>