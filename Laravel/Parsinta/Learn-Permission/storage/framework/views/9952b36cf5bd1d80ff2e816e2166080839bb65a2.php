<?php $__env->startSection('content'); ?>
    <div class="card mb-4">
        <div class="card-header">Create new role</div>
        <div class="card-body">
            <form action="<?php echo e(route('permissions.create')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo $__env->make('permission.permissions.partials.form-control', ['submit' => 'Create'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </form>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">Table of permission</div>
        <div class="card-body">
            <table class="table table-hover">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Guard Name</th>
                    <th>Create at</th>
                    <th>Act</th>
                </tr>
                <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($index + 1); ?></td>
                        <td><?php echo e($permission->name); ?></td>
                        <td><?php echo e($permission->guard_name); ?></td>
                        <td><?php echo e($permission->created_at->format("d F Y")); ?></td>
                        <td>
                            <a href="<?php echo e(route('permissions.edit', $permission)); ?>" class="btn btn-primary btn-sm">Edit</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/learn-permission/resources/views/permission/permissions/index.blade.php ENDPATH**/ ?>