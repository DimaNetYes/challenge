<?php $__env->startSection('style'); ?>
    <?php echo HTML::style('css/Admin/adminQR.css'); ?>

    <?php echo HTML::style('css/AdminGeneral/tables.css'); ?>

    <?php echo HTML::style('css/AdminGeneral/adminNav.css'); ?>

    <?php echo HTML::style('css/AdminGeneral/adminBody.css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <header>
        <?php echo $__env->make('Admin.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
    </header>

    <div class="row">

        <?php echo $__env->make('Admin.leftNav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;

        <main>
            <div class="text-center">
                <?php echo QrCode::size(300)->generate(/*Request::url()*/ $qr );; ?>

                <p>Scan me...</p>
            </div>
        </main>
    </div>
    </body>
    </html>
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>