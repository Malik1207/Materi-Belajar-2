<?php $__env->startSection('content'); ?>

    <div class="body-1">

        <nav class="menu" >
            <div class="d-inline-block">
                <img src="https://renscube.files.wordpress.com/2017/10/full-moon.jpg" alt="" width="70" height="70" class="rounded-circle me-2">
                <strong><?php echo e(Auth::user()->name); ?></strong>
            </div>

            <ul>
                <a href="<?php echo e(route('dashboard')); ?>" class="" style="text-decoration: none; color: white;">
                    <li class="icon-dashboard">
                        <i class="fa-solid fa-gauge"></i>
                        <span class="mx-3">Dashboard</span>
                    </li>
                </a >
                <a href="<?php echo e(route('products.index')); ?>" class="" style="text-decoration: none; color: white;">
                    <li class="icon-settings">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span class="mx-3">
                            Products
                        </span>
                    </li>
                </a >
                <a href="<?php echo e(route('testimonials.index')); ?>" class="" style="text-decoration: none; color: white;">
                    <li class="icon-settings">
                        <i class="fa-solid fa-calendar-minus"></i>
                        <span class="mx-3">Testimonial</span>
                    </li>
                </a>
                <a href="<?php echo e(route('articles.index')); ?>" class="" style="text-decoration: none; color: white;">
                    <li class="icon-settings">
                    <i class="fa-solid fa-newspaper"></i>
                        <span class="mx-3">
                            Post / Article
                        </span>
                    </li>
                </a >
                <a href="<?php echo e(route('costumers.index')); ?>" class="" style="text-decoration: none; color: white;">
                    <li class="icon-customers">
                        <i class="fa-brands fa-intercom"></i>
                        <span class="mx-3">Costumers</span>
                    </li>
                </a>
                <a href="<?php echo e(route('stories.index')); ?>" class="" style="text-decoration: none; color: white;">
                    <li class="icon-settings">
                        <i class="fas fa-book"></i>
                        <span class="mx-3">Story</span>
                    </li>
                </a>
                <a href="<?php echo e(route('officers.index')); ?>" class="" style="text-decoration: none; color: white;">
                    <li class="icon-settings">
                        <i class="fa-solid fa-building"></i>
                        <span class="mx-3">Officers</span>
                    </li>
                </a>
                <a class="" href="<?php echo e(route('logout')); ?>" style="text-decoration: none; color: white;">
                    <li class="icon-settings">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        <span class="mx-3">Logout</span>
                    </li>
                </a>
            </ul>

        </nav>

    </div>

    <div class="">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/laravel/landing_page/resources/views/dashboard.blade.php ENDPATH**/ ?>