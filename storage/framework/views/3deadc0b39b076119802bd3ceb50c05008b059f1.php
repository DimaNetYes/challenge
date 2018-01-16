<?php $__env->startSection('style'); ?>
    <?php echo e(HTML::style('css/User/userProfile.css')); ?>

    <?php echo e(HTML::style('css/User/userProfile2.css')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <header>
        <?php echo $__env->make('Users.General.headerNav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </header>
    <main>
        <div class="wrapper">
            <div class="menu-container">
                <div id="logo-container">
                    <div id="logo-container-pict"></div>
                </div>
                <div class="menu-main-container">
                    <ul class="menu">
                        <li><a class="about"> <?php echo e(Auth::user()->name); ?>  <span>Возраст:<?php echo e(Auth::user()->age); ?> &nbsp; Пол:<?php echo e(Auth::user()->gender); ?></span></a></li>
                        <li><a href="#" onclick="openbox('idTQ'); return false">Текущий Квест <span>Информация о квесте.</span></a></li>
                        <li><a href="#" onclick="openbox('idFQ'); return false">Грядущий квест <span>Предстоящие квесты.</span></a></li>
                        <li><a href="#" onclick="openbox('idLQ'); return false">Архив <span>Архив квестов.</span></a></li>
                    </ul>
                </div>

            </div>
            <div id="container">
                
                <div class="column" id="idTQ">
                    <div class="row">
                        <div class="text-center">Название</div>
                        <div class="text-center">Дата</div>
                        <div class="text-center">Время</div>
                        <div class="text-center">Команда</div>
                        <div></div>
                    </div>
                    <?php $__currentLoopData = $questGeneral; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $q): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row quest">
                            <div class="text-center"><?php echo json_decode($q)->name; ?></div>
                            <div class="text-center"><?php echo json_decode($q)->date; ?></div>
                            <div class="text-center"><?php echo json_decode($q)->time; ?></div>
                            <div class="text-center"><?php echo $teamGeneral; ?></div>
                            <div>
                                <button class="btn btn-link"><a
                                            href="<?php echo e(route('playQuest', ['idQuest'=> json_decode($q)->id])); ?>"
                                            class="glyphicon glyphicon-play"></a>
                                </button>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="column" id="idFQ">
                    <div class="row">
                        <div class="text-center">Название</div>
                        <div class="text-center">Дата</div>
                        <div class="text-center">Время</div>
                        <div class="text-center">Команда</div>
                        <div></div>
                    </div>
                    <?php $__currentLoopData = $questFuture; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $q): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row quest">
                            <div class="text-center"><?php echo json_decode($q)->name; ?></div>
                            <div class="text-center"><?php echo json_decode($q)->date; ?></div>
                            <div class="text-center"><?php echo json_decode($q)->time; ?></div>
                            <div class="text-center"><?php echo $teamFuture[$key]; ?></div>
                            <div>
                                <button class="btn btn-link"><a
                                            href="<?php echo e(route('editTeam', ['id'=>json_decode($q)->id])); ?>"
                                            class="glyphicon glyphicon-pencil"></a>
                                </button>
                                <button class="btn btn-link"><a
                                            href="<?php echo e(route('outQuest', ['id'=>json_decode($q)->id])); ?>"
                                            class="glyphicon glyphicon-remove-circle"></a>
                                </button>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="column" id="idLQ">
                    <div class="row">
                        <div class="text-center">Название</div>
                        <div class="text-center">Дата</div>
                        <div class="text-center">Время</div>
                        <div class="text-center">Команда</div>
                        <div class="text-center">Результат</div>
                        <div></div>
                    </div>
                    <?php $__currentLoopData = $questLast; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $q): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row quest">
                            <div class="text-center"><?php echo json_decode($q)->name; ?></div>
                            <div class="text-center"><?php echo json_decode($q)->date; ?></div>
                            <div class="text-center"><?php echo json_decode($q)->time; ?></div>
                            <div class="text-center"><?php echo $teamLast[$key]; ?></div>
                            <div class="text-center"><?php echo $result[$key]; ?></div>
                            <div>
                                <button class="btn btn-link"><a href="" class="glyphicon glyphicon-th-list"
                                                                onclick="openboxt('id<?php echo e($key); ?>'); return false"></a>
                                </button>
                                <button class="btn btn-link"><a href="<?php echo e(route('maps', ['id'=>json_decode($q)->id])); ?>" class="glyphicon glyphicon-map-marker"></a>
                                </button>
                            </div>
                        </div>
                        <div class="column task" id="id<?php echo e($key); ?>">
                            <div class="row">
                                <div class="text-center">Название</div>
                                <div class="text-center">Описание</div>
                                <div class="text-center">Очки</div>
                                <div class="text-center">Выполнение</div>
                            </div>
                            <?php $__currentLoopData = $tasksLast; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kk => $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($kk == $key): ?>
                                    <?php $__currentLoopData = json_decode($task); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="row">
                                            <div class="text-center"><?php echo $t->name; ?></div>
                                            <div class="text-center"><?php echo $t->description; ?></div>
                                            <div class="text-center"><?php echo $t->weight*100; ?></div>
                                            <?php if($executeTask[$kk][$k]): ?>
                                                <div><input type="checkbox" checked disabled></div>
                                            <?php else: ?>
                                                <div><input type="checkbox" disabled></div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </main>
    <footer></footer>
    <script type="text/javascript">
        function openbox(id) {
            if (id == 'idTQ') {
                document.getElementById('idTQ').style.display = 'block';
                document.getElementById('idLQ').style.display = 'none';
                document.getElementById('idFQ').style.display = 'none';
            } else if (id == 'idLQ') {
                document.getElementById('idLQ').style.display = 'block';
                document.getElementById('idTQ').style.display = 'none';
                document.getElementById('idFQ').style.display = 'none';
            } else if (id == 'idFQ') {
                document.getElementById('idFQ').style.display = 'block';
                document.getElementById('idTQ').style.display = 'none';
                document.getElementById('idLQ').style.display = 'none';
            }
        }
        function openboxt(id) {
            display = document.getElementById(id).style.display;
            if (display == 'none') {
                document.getElementById(id).style.display = 'block';
            } else {
                document.getElementById(id).style.display = 'none';
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>