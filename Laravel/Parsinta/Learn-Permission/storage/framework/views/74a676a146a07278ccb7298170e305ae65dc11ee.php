<?php $__env->startSection('content'); ?>
    <div class="card mb-4">
        <div class="card-header">Edit Role</div>
        <div class="card-body">
            <form action="<?php echo e(route('roles.edit', $role)); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('put'); ?>
                <?php echo $__env->make('permissions.roles.partials.form-control', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/learn-permission/resources/views/permissions/roles/edit.blade.php ENDPATH**/ ?>