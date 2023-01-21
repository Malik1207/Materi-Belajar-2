<ul class="navbar">

    <?php $__currentLoopData = $navbar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <li>
            <a href="<?php echo e($url); ?>"><?php echo e($name); ?></a>
        </li>
        
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
</ul><?php /**PATH /home/abdmalik/laravel-parsinta/resources/views/components/navbar.blade.php ENDPATH**/ ?>