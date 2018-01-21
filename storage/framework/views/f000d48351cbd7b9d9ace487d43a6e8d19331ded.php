<nav class="nav1">
    <ul class="ul1">
        <li class="active"><a href="/public/" class="a1">Home</a></li>
        <?php if(Auth::check()): ?>
            <li><a class="a1" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit()"> Logout </a></li>
        <?php else: ?>
            <li><a href="/public/login" class="a1">Login</a></li>
        <?php endif; ?>
        <?php if(Auth::check()): ?>
            <?php echo '<li><a href="/public/users/profile" class="a1">Profile</a></li>'; ?>
        <?php endif; ?>
        <li><a href="/public/contact-form" class="a1">Contacts</a></li>
    </ul>
</nav>
<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;"><?php echo e(csrf_field()); ?></form>
