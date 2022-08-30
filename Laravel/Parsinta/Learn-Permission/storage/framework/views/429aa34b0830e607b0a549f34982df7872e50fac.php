<?php $__env->startSection('styles'); ?>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                placeholder: "Select permission"
            });
        });
    </script>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    <div class="card">
        <div class="card-header">Pick user by email address</div>
        <div class="card-body">
            <form action="<?php echo e(route('assign.user.create')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="user">User</label>
                    <input type="text" name="email" id="user" class="form-control">
                </div>

                <div class="form-group">
                    <label for="roles">Pick Roles</label>
                    <select name="roles[]" id="roles" class="form-control select2" multiple>
                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-secondary mt-2">Assign</button>
            </form>
        </div>

        <div class="card mt-4">
            <div class="card-header">Table of Role & Permission</div>
            <div class="card-body">
                <table class="table table-hover">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>The Roles</th>
                        <th>Action</th>
                    </tr>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($index + 1); ?></td>
                            <td><?php echo e($user->name); ?></td>
                            <td><?php echo e(implode(', ', $user->getRoleNames()->toArray())); ?></td>
                            <td><a href="<?php echo e(route('assign.user.edit', $user)); ?>">Sync</a></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/learn-permission/resources/views/permission/assign/user/create.blade.php ENDPATH**/ ?>