<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 mt-5">
            <div class="pull-left" style="color: black;">
                <h2>Costumer / LIST Costumer</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="<?php echo e(route('costumers.create')); ?>">Create New</a>
            </div>
        </div>
    </div>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success alert-dismissible ">
            <?php echo e($message); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <?php if($message = Session::get('danger')): ?>
        <div class="alert alert-danger alert-dismissible ">
            <?php echo e($message); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <?php if($message = Session::get('primary')): ?>
        <div class="alert alert-primary alert-dismissible ">
            <?php echo e($message); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <table class="table my-5">
        <tr>
            <th>No</th>
            <th width="200px">Name</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        <?php $__currentLoopData = $costumers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $costumer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($costumer->name); ?></td>
            <td><img src="/image/<?php echo e($costumer->image); ?>" width="120px"></td>
            <td>
                <form action="<?php echo e(route('costumers.destroy',$costumer->id)); ?>" method="POST" class="d-flex flex-column" style="width: 5rem;">

                    <a class="btn btn-success"  href="<?php echo e(route('costumers.show',$costumer->id)); ?>">Show</a>

                    <a class="btn btn-primary my-1"  href="<?php echo e(route('costumers.edit',$costumer->id)); ?>">Edit</a>

                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <?php echo $costumers->links(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('costumers.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/laravel/landing_page/resources/views/costumers/index.blade.php ENDPATH**/ ?>