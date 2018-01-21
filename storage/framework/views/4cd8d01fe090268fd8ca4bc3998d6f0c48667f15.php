<?php $__env->startSection('style'); ?>
    <?php echo e(HTML::style('css/Admin/adminShowTeams.css')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

        <main>

            <h1>Список команд</h1>

            <submit class="btn btn-default btn-sm"><a
                        href="<?php echo e(route('createTeam')); ?>"
                        class="glyphicon glyphicon-plus"></a></submit>

            <?php

            echo "<table>";
            echo "<tr><th>id</th><th>name</th></tr>";
            foreach ($teams as $key => $value) {
            echo "<tr>";
            echo "<td> <div>" . $value->id . "</div>  </td>";
            echo "<td> <div>" . $value->name . "</div> </td>";
            echo "<td>";
            ?>
            <submit class="btn btn-default btn-sm"><a
                        href="<?php echo e(route('editTeam', ['id' => $value->id])); ?>"
                        class="glyphicon glyphicon-pencil"></a></submit>
            <submit class="btn btn-default btn-sm"><a
                        href="<?php echo e(route('deleteTeam', ['id' => $value->id])); ?>"
                        class="glyphicon glyphicon-trash"></a></submit>
            <?php

            echo " </td>";
            echo "</tr>";
            }
            echo "</table>";
            ?>
        </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminLayouts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>