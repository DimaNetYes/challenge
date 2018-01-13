<?php $__env->startSection('style'); ?>
    <?php echo e(HTML::style('css/stylesStart.css')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="content">
    <header>
        <nav>
            <ul class="nav masthead-nav">
                <li class="active"><a href="">Home</a></li>
                <li><a href="/public/login">Login</a></li>
                <li><a href="contact-form">Contacts</a></li>
            </ul>
        </nav>
    </header>

    <main class="cover">
        <p class="lead button">
            <a href="users/view" class="btn btn-lg btn-default">GET STARTED</a>
        </p>
    </main>

    <footer>
        <p class="footer">C© 2017. Все права защищены</p>
    </footer>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>