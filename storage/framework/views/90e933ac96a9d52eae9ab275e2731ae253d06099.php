<?php $__env->startSection('style'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>MoreQuests</title>
    <?php echo e(HTML::style('css/User/userMoreQuests.css')); ?>

    <?php echo e(HTML::style('css/UserGeneral/headerNav.css')); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

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
                        <div class="moreQuestInfo">
                               <div class="links">
                                <a class="icon-arrow-left right" href="#" onclick="play()">Играть</a>
                                <a href="<?php echo e(route('view quest')); ?>" class=""><i
                                            class="icon-arrow-left"></i>Back
                                    to Gallery</a>
                               </div>

                            <div class="select" id="sel-team">
                                    <label for="msg"> Выбирите команду: </label>
                                    <select id="msg" onchange="getMessage()">;
                                        <?php $__currentLoopData = $team; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option name="option" id="option" value="<?php echo $value->id; ?>">
                                                <?php echo $value->name; ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                            </div>
                            <div id="res"></div>
                            <div class="moreQuestAbout">
                                <h2><?php echo $q->name; ?></h2>
                                <p class="lead-m"><?php echo $q->description; ?></p>
                                 <ul class="project-info">
                                    <li><h6>Дата Старта:</h6> <?php echo $q->date; ?></li>
                                    <li><h6>Время Старта:</h6> <?php echo $q->time; ?></li>
                                    <li><h6>Сложность:</h6> <?php echo $q->hard; ?></li>
                                    <li><h6>Автор Квеста:</h6> <?php echo $q->autor; ?></li>
                                    <li><h6>Описание:</h6><?php echo $q->fullDescription; ?></li>
                                </ul>

                            </div>
                        </div>

                    </div>
                </div>
            </div><!-- End gallery-single-->
        </div><!-- End container row -->
        </div> <!-- End Container -->

    </main>
    <footer></footer>

    <script>

        function play() {
            document.getElementById('sel-team').style.visibility = 'visible';
        }

        function getMessage($q) {
            var a = "<?php echo $q->id ?>";
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                url: '/public/users/selectTeam',
                data: {"team": $('#msg').val(), "quest": a},
                success: function (data) {
                    $("#res").html(data.msg);
                }
            });
        }
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>