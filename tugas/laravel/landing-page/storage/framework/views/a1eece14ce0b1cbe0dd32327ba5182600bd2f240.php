<?php $__env->startSection('content'); ?>

    <div class="body-1">

        <nav class="menu" >
            <div class="d-inline-block">
                <img src="https://renscube.files.wordpress.com/2017/10/full-moon.jpg" alt="" width="70" height="70" class="rounded-circle me-2">
                <strong><?php echo e(Auth::user()->name); ?></strong>
            </div>

            <ul>
                <li class="icon-dashboard">
                    <i class="fa-solid fa-gauge"></i>
                    <span class="mx-3">Dashboard</span>
                </li>
                <a href="<?php echo e(route('products.index')); ?>" class="" style="text-decoration: none; color: white;">
                    <li class="icon-settings">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span class="mx-3">
                            Products
                        </span>
                    </li>
                </a >
                <li class="icon-customers">
                    <i class="fa-solid fa-table-columns"></i>
                    <span class="mx-3">Page</span>
                </li>
                <li class="icon-users">
                    <i class="fa-solid fa-newspaper"></i>
                    <span class="mx-3">Post / Article</span>
                </li>
                <li class="icon-settings">
                    <i class="fa-solid fa-calendar-minus"></i>
                    <span class="mx-3">Menu</span>
                </li>
                <li class="icon-settings">
                    <i class="fa-solid fa-gear"></i>
                    <span class="mx-3">Setting</span>
                </li>
            </ul>
            <div class="logout">
                <a id="navbarDropdown" class="nav-link dropdown-toggle text-reset" href="#" role="button"   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <?php echo e(__('Logout')); ?>

                </a>

                <div class="dropdown-menu dropdown-menu-start" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <?php echo e(__('Logout')); ?>

                    </a>

                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                        <?php echo csrf_field(); ?>
                    </form>
                </div>
            </div>

        </nav>

    </div>

    <div class="py-4">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/laravel/landing_page/resources/views/home.blade.php ENDPATH**/ ?>