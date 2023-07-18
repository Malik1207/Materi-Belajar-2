<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 mt-5">
            <div class="pull-left" style="color: black;">
                <h2>OFFICER / LIST OFFICER</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="<?php echo e(route('officers.create')); ?>">Create New</a>
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
            <th width="200rem" >Image Office</th>
            <th>Name</th>
            <th>Position</th>
            <th>Biography</th>
            <th>Action</th>
        </tr>
        <?php $__currentLoopData = $officers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $officer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><img src="/image/<?php echo e($officer->image); ?>" width="80px" height="80px" style="border-radius: 80px;"></td>
            <td><?php echo e($officer->name); ?></td>
            <td><?php echo e($officer->position); ?></td>
            <td style="word-break: break-all; text-align:justify;"><?php echo $officer->biography; ?></td>
            <td>
                <form action="<?php echo e(route('officers.destroy',$officer->id)); ?>" method="POST" class="d-flex flex-column" style="width: 5rem;">

                    <a class="btn btn-success"  href="<?php echo e(route('officers.show',$officer->id)); ?>">Show</a>

                    <a class="btn btn-primary my-1"  href="<?php echo e(route('officers.edit',$officer->id)); ?>">Edit</a>

                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <?php echo $officers->links(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('..dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/Documents/Laravel/landing-page/resources/views/officers/index.blade.php ENDPATH**/ ?>