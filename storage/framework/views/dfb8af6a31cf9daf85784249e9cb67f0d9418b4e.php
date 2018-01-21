<?php $__env->startSection('style'); ?>
    <?php echo HTML::style('css/User/userProfile.css'); ?>

    <?php echo HTML::style('css/UserGeneral/headerNav.css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <header>
        <?php echo $__env->make('Users.General.headerNav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </header>

    <main>
        <aside>
            <div class="avatar"></div>
            <p class="name">Имя: <?php echo e(Auth::user()->name); ?></p>
            <p class="name">Возраст: <?php echo e(Auth::user()->age); ?></p>
            <p class="name">Пол: <?php echo e(Auth::user()->gender); ?></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>

            <button class="btn btn-link link"><a href="<?php echo e(route('userProfile')); ?>">Назад</a></button>
        </aside>

        <section class="section">
            <div id="section_inner">

                <div class="column">
                    <div class="row">
                        <div class="text-center">Название</div>
                        <div class="text-center">Описание</div>
                        <div class="text-center">Длительность</div>
                        <div class="text-center">Вес</div>
                    </div>
                    <div class="row">
                        <div class="text-center"><?php echo $task->name; ?></div>
                        <div class="text-center"><?php echo $task->description; ?></div>
                        <div class="text-center"><?php echo $task->duration; ?></div>
                        <div class="text-center"><?php echo $task->weight; ?></div>
                    </div>
                </div>

                <?php if($ok): ?>
                    <p>Click the button to get your coordinates.</p>
                    <button onclick="getLocation()">Try It</button>
                    <p id="demo"></p>
                <?php endif; ?>
            </div> <!-- div section inner-->
        </section>

    </main>

    <footer></footer>

    <script type="text/javascript">
        function openbox(id) {
            display = document.getElementById(id).style.display;
            if (display == 'none') {
                document.getElementById(id).style.display = 'block';
            } else {
                document.getElementById(id).style.display = 'none';
            }
        }
    </script>
    <script>
        var x = document.getElementById("demo");

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }

        function showPosition(position) {
            x.innerHTML = "Latitude: " + position.coords.latitude +
                "<br>Longitude: " + position.coords.longitude;
        }
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>