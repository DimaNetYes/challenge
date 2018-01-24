<?php $__env->startSection('style'); ?>
    <?php echo e(HTML::style('css/User/userTeamQuest.css')); ?>

    <?php echo e(HTML::style('css/UserGeneral/headerNav.css')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <header>
        <?php echo $__env->make('Users.General.headerNav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </header>

    <main>
        <p>Здравствуйте, пользователь <?php echo e(Auth::user()->name); ?></p>
        <p> Вы принимаете участвие в квесте <?php echo e(App\Models\Quest::find($idQuest)->name); ?></p>

        <?php
        echo Form::open(array('url' => route('ok',['idQuest' => $idQuest]), 'method' => 'post', 'role' => 'form', 'class' => 'form-vertical'));
        ?>
        <label for="select"> Выбирайте вашу команду: </label> <select id="select" onchange="document.querySelector('#input').value =this.options[this.selectedIndex].value;" >;
            <?php $__currentLoopData = $team; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option name="option" id="option" value="<?php echo $value->id; ?>">
                <?php echo $value->name; ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        <input type="hidden" id="input" name="input">
        <script>document.querySelector('#input').value = document.querySelector('#option').value</script>
        <button type="submit" class="btn btn-link"><a>Выбрать</a></button>

        <?php
        echo Form::close();
        ?>
    </main>

    <footer></footer>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>