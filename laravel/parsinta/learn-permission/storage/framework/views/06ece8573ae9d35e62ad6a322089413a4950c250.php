<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">Table of Posts</div>
        <div class="card-body">
            Hi <?php echo e(auth()->user()->name); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/learn-permission/resources/views/posts/table.blade.php ENDPATH**/ ?>