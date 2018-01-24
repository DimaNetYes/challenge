<?php $__env->startSection('style'); ?>
    <?php echo HTML::style('css/Admin/adminViewQuests.css'); ?>

    <?php echo HTML::style('css/AdminGeneral/tables.css'); ?>

    <?php echo HTML::style('css/AdminGeneral/adminNav.css'); ?>

    <?php echo HTML::style('css/AdminGeneral/adminBody.css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <header>
        <?php echo $__env->make('Admin.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </header>

    <div class="row">

        <?php echo $__env->make('Admin.leftNav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <main>
            <h1>Результаты</h1>

            <button class="btn btn-link"><a
                        href="<?php echo e(route('finishQuest', ['id'=>$results[0]->idQuest])); ?>"
                        class="glyphicon glyphicon-ok"></a>
            </button>

            <?php
            echo "<table>";
            echo "<tr><th>id</th><th>idQuest</th><th>idTeam</th><th>result</th><th>position</th></tr>";
            foreach ($results as $key => $value) {
            echo "<tr>";
            echo "<td> <div>" . $value->id . "</div> </td>";
            echo "<td> <div>" . $value->idQuest . "</div> </td>";
            echo "<td> <div >" . $value->idTeam . "</div> </td>";
            echo "<td> <div >" . $value->result . "</div> </td>";
            echo "<td> <div >" . $value->position . "</div> </td>";
            echo "<td>";
            ?>
            <button class="btn btn-link"><a
                        href="<?php echo e(route('selectPosition', ['id'=>$value->id])); ?>"
                        class="glyphicon glyphicon-pencil"></a>
            </button>
            <?php
            echo "</td>";
            echo "</tr> ";
            }
            echo "</table>";
            ?>

        </main>
    </div>
    <footer></footer>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>