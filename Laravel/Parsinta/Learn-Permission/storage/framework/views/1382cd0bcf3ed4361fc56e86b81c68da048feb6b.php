<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">Data Table Navigation</div>
        <div class="card-body">
           <table class="table table-hover">
                <tr>
                    <th>Parent</th>
                    <th>Name</th>
                    <th>Url</th>
                    <th>Permission Name</th>
                    <th>Action</th>
                </tr>
                <?php $__currentLoopData = $navigations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $navigation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><strong><?php echo e($navigation->parent->name); ?></strong></td>
                        <td><?php echo e($navigation->name); ?></td>
                        <td><?php echo e($navigation->url ?? "Its a parent"); ?></td>
                        <td><?php echo e($navigation->permission_name); ?></td>
                        <td><a href="<?php echo e(route('navigation.edit', $navigation)); ?>">Edit or Remove</a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/learn-permission/resources/views/navigation/table.blade.php ENDPATH**/ ?>