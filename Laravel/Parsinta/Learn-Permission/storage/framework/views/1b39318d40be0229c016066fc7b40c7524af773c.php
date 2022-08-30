<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">Create new Navigation</div>
        <div class="card-body">
            <form action="<?php echo e(route('navigation.create')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo $__env->make('navigation.partials.form-control', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/learn-permission/resources/views/navigation/create.blade.php ENDPATH**/ ?>