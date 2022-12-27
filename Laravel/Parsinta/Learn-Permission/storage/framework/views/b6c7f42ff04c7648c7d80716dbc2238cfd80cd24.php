<?php $__env->startSection('content'); ?>
    <div class="card mb-2">
        <div class="card-header">Create new Navigation</div>
        <div class="card-body">
            <form action="<?php echo e(route('navigation.edit', $navigation)); ?>" method="POST">
                <?php echo method_field('PUT'); ?>
                <?php echo $__env->make('navigation.partials.form-control', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </form>
        </div>
    </div>
    <?php echo $__env->make('navigation.delete', ['navigation' => $navigation], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/learn-permission/resources/views/navigation/edit.blade.php ENDPATH**/ ?>