<?php $__env->startSection('style'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quests</title>
    <?php echo HTML::style('css/User/userViewQuests1.css'); ?>


<?php $__env->stopSection(); ?>


<?php
$arr = array("first","first","first","first");
?>

<body>

<div class="container-fluid">
    <ul class="gallery-post-grid holder">
        <div class='row'>
            <!-- Gallery Item 1 -->
            <?php
            foreach($arr as $key => $val){
                if(count($arr) == 1){
                    echo "<div class='col-xs-12 col-sm-12 col-md-12 dQ'><li class='quest' data-id='id-$key' data-type='illustration'>
                    <span class='gallery-hover-3col hidden-phone hidden-tablet'>
                        <span class='gallery-icons'>
                            <a href='img/gallery/gallery-img-1-full.jpg' class='item-zoom-link lightbox' title='Просмотр' data-rel='prettyPhoto'></a>
                            <a href='gallery-single.htm' class='item-details-link' title='Играть'></a>
                        </span>
                    </span>
                    <span class='project-details'><a href='gallery-single.htm'>Custom Illustration</a>For an international add campaign.</span>
                </li></div>";
                }elseif(count($arr) < 3){
                    echo "<div class='col-xs-12 col-sm-6 col-md-6 dQ'><li class='quest' data-id='id-$key' data-type='illustration'>
                    <span class='gallery-hover-3col hidden-phone hidden-tablet'>
                        <span class='gallery-icons'>
                            <a href='img/gallery/gallery-img-1-full.jpg' class='item-zoom-link lightbox' title='Просмотр' data-rel='prettyPhoto'></a>
                            <a href='gallery-single.htm' class='item-details-link' title='Играть'></a>
                        </span>
                    </span>
                    <span class='project-details'><a href='gallery-single.htm'>Custom Illustration</a>For an international add campaign.</span>
                </li></div>";
                }else{
                    echo "<div class='col-xs-12 col-sm-6 col-md-4 dQ'><li class='quest' data-id='id-$key' data-type='illustration'>
                        <span class='gallery-hover-3col hidden-phone hidden-tablet'>
                        <a href='#' class='pp'></a>
                            <span class='gallery-icons'>
                                <a href='img/gallery/gallery-img-1-full.jpg' class='item-zoom-link lightbox' title='Просмотр' data-rel='prettyPhoto'></a>
                                <a href='gallery-single.htm' class='item-details-link' title='Играть'></a>
                            </span>
                        </span>
                        <span class='project-details'><a href='gallery-single.htm'>Custom Illustration</a>For an international add campaign.</span>
                    </li></div>";
                }
            }
            ?>
        </div>
    </ul>
</div>
</body>
</html>
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>