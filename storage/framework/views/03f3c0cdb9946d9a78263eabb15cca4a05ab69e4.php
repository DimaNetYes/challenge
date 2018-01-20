<?php $__env->startSection('style'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quests</title>
    <?php echo e(HTML::style('css/User/userViewQuests1.css')); ?>

    <?php echo e(HTML::style('css/UserGeneral/headerNav.css')); ?>

    
    <?php echo e(HTML::script('js/uilang.js')); ?>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<header>
    <?php echo $__env->make('Users.General.headerQuestView', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</header>

<?php if(session()->has('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session()->get('success')); ?>

    </div>
<?php endif; ?>
<main>
    <div class="container-fluid">
        <ul class="gallery-post-grid holder">
            <div class='row'>

                <?php $__currentLoopData = $quests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $q): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(count($quests) == 1): ?>
                        <div class='col-xs-12 col-sm-12 col-md-12 dQ'><li class='quest' data-id='id-<?= $key ?>' data-type='illustration'>
                        <span class='gallery-hover-3col hidden-phone hidden-tablet'>
                            <span class='gallery-icons'>
                                <a href='#' class='item-zoom-link lightbox' title='Просмотр' onclick='showDetails(this)' data-rel="<?php echo $q->name; ?>"></a>
                                <a href='<?php echo e(route('more', ['id'=>$q->id])); ?>' class='item-details-link ' title='Играть'></a>
                            </span>
                        </span>
                        <span class='project-details'><a href='<?php echo e(route('more', ['id'=>$q->id])); ?>'><?php echo $q->name; ?></a><?php echo $q->description; ?><br><?php echo $q->date; ?>.</span>
                    </li></div>
                    <?php elseif(count($quests) < 3): ?>
                        <div class='col-xs-12 col-sm-6 col-md-6 dQ'><li class='quest' data-id='id-<?= $key ?>' data-type='illustration'>
                        <span class='gallery-hover-3col hidden-phone hidden-tablet'>
                            <span class='gallery-icons'>
                                <a href='#' class='item-zoom-link lightbox' title='Просмотр' onclick='showDetails(this)' data-rel="<?php echo $q->name; ?>"></a>
                                <a href='<?php echo e(route('more', ['id'=>$q->id])); ?>' class='item-details-link' title='Играть'></a>
                            </span>
                        </span>
                        <span class='project-details'><a href='<?php echo e(route('more', ['id'=>$q->id])); ?>'><?php echo $q->name; ?></a><?php echo $q->description; ?><br><?php echo $q->date; ?>.</span>
                    </li></div>
                    <?php else: ?>
                        <div class='col-xs-12 col-sm-6 col-md-4 dQ'><li class='quest' data-id='id-<?= $key ?>' data-type='illustration'>
                            <span class='gallery-hover-3col hidden-phone hidden-tablet'>
                            <a href='#' class='pp'></a>
                                <span class='gallery-icons'>
                                    <a href='#' class='item-zoom-link lightbox' title='Просмотр' onclick='showDetails(this)' data-rel="<?php echo $q->name; ?>"></a>
                                    <a href='<?php echo e(route('more', ['id'=>$q->id])); ?>' class='item-details-link' title='Играть'></a>
                                </span>
                            </span>
                            <span class='project-details'><a href='<?php echo e(route('more', ['id'=>$q->id])); ?>'><?php echo $q->name; ?></a><?php echo $q->description; ?><br><?php echo $q->date; ?>.</span>
                        </li></div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </ul>
    </div>
</main>
    <footer>
        <div class="position">
            <div class="picture_center ">
                <div class="picture_center_center">
                    <a href="#" class="glyphicon glyphicon-fullscreen" id="top_right_screen"></a>
                    <div>
                        <img src="" alt="">
                    </div>
                </div>
                <div class="bottom_desc">
                    <p class="questName"></p>
                    <a href="#" class=" glyphicon glyphicon-remove-sign" id="bottom_right_close"></a>
                </div>
            </div>
        </div>
        <div class="bg"></div>
        <script>
               // работает с data type в <a>
            function showDetails(quest) {
                var questType = quest.getAttribute("data-rel");
                $('.questName').html(questType);
            }
        </script>
        <code>
            clicking on ".item-zoom-link" adds class "open_bg" on ".bg"
            clicking on ".item-zoom-link" adds class "open_position" on ".position, .picture_center"
            clicking on "#bottom_right_close" removes class "open_bg" on ".bg"
            clicking on "#bottom_right_close" removes class "open_position" on ".picture_center, .position"
            clicking on "#bottom_right_close" removes class ".big_screen" on ".picture_center"
            clicking on "#bottom_right_close" removes class ".big_screen_inside" on ".picture_center_center"
            clicking on "#top_right_screen" toggle class "big_screen" on ".picture_center"
            clicking on "#top_right_screen" toggle class "big_screen_inside" on ".picture_center_center"
        </code>
    </footer>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>