<?php $__env->startSection('style'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MoreQuests</title>
    <?php echo e(HTML::style('css/User/userMoreQuests.css')); ?>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <header>
        <?php echo $__env->make('Users.General.headerNav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
    </header>
    <main>
        <div class="container" id="main-container">
            <div class="row" id="row">
                <!-- Gallery Items
                ================================================== -->
                <div class="moreQuest">
                    <div class="row" id="row">
                        <div class="moreQuestPicture">
                            <img src="../../../img/moreQuest/cowboy.jpg" class="thum" alt="image">
                        </div>
                        <div class="moreQuestAbout">
                            <h2><?php echo $q->name; ?></h2>
                            <p class="lead-m"><?php echo $q->description; ?></p>
                            <p class="description"><?php echo $q->fullDescription; ?>.</p>
                            <ul class="project-info">
                                <li><h6>Дата Старта:</h6> <?php echo $q->date; ?></li>
                                <li><h6>Время Старта:</h6> <?php echo $q->time; ?></li>
                                <li><h6>Конец Квеста:</h6> Дата</li>
                                <li><h6>Сложность:</h6> Хард Басс</li>
                                <li><h6>Автор Квеста:</h6> Сидоров Мойша</li>
                            </ul>
                            <a class="btn btn-inverse pull-left" href="<?php echo e(route('play', ['id'=>$q->id])); ?>">Играть</a>
                            <a href="<?php echo e(route('user_view_quest')); ?>" class="pull-right"><i class="icon-arrow-left"></i>Back to Gallery</a>
                        </div>
                    </div>
                </div><!-- End gallery-single-->
            </div><!-- End container row -->
        </div> <!-- End Container -->

    </main>
    <footer></footer>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>