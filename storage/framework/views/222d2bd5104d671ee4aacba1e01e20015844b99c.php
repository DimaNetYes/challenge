<?php $__env->startSection('style'); ?>
    <?php echo e(HTML::style('css/stylesStart.css')); ?>

  <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="splash fade-in">

        <a href="#" class="splash-arrow fade-in"><img src="img/down-arrow.png" alt="" /></a>

    </div> <!-- END .splash -->

    <div class="cont">
        <header>
            <nav>

                <a href="" class="active">Home</a>
                <a href="/public/login">Login</a>
                <a href="contact-form">Contacts</a>
            </nav>

            <div class="shadow"></div>
        </header>

        <main class="cover">
            <p class="lead button">

                <a href="users/view" class="start-button">GET STARTED</a>

            </p>
        </main>

        <footer>
            <div class="footer">

                <div class="rows"><div class="img img1"></div><div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate tempore perferendis, quo delectus quidem nesciunt praesentium ut sequi reiciendis, laboriosam sit nemo! Alias, maxime, atque! Nam sequi quia saepe cupiditate.</div></div>
                <div class="rows"><div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione ab error distinctio nesciunt, id qui laboriosam, quod veritatis nam, repellendus quaerat. Rerum placeat, illum, iusto eius maiores eos accusantium repellendus!</div><div class="img img2"></div></div>
                <div class="rows"><div class="img img3"></div><div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, debitis, corrupti? Tenetur sapiente dolore, dolores consequatur dolorem accusantium cum est. Qui rerum, officiis odit ut provident, harum vel. Molestias, laboriosam!</div></div>

            </div>

            <div class="block-link">

                    <a href="#" class="footer-link">Lorem ipsum</a>
                    <a href="#" class="footer-link">Lorem ipsum</a>
                    <a href="#" class="footer-link">Lorem ipsum</a>
                    <a href="#" class="footer-link">Lorem ipsum</a>
                </div>
                <div class="column">
                    <a href="#" class="footer-link">Lorem ipsum</a>
                    <a href="#" class="footer-link">Lorem ipsum</a>
                    <a href="#" class="footer-link">Lorem ipsum</a>
                    <a href="#" class="footer-link">Lorem ipsum</a>
                </div>
                <div class="column">
                    <a href="#" class="footer-link">Lorem ipsum</a>
                </div>
            </div>
            <p class="copyrite text-center">C© 2017. Все права защищены</p>
        </footer>
    </div>

    </div>

    </div>

    <script>
        window.onload(function(){
           document.keydown(function(){
               alert('down');
           });
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>