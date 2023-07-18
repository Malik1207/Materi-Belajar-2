<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 mt-5">
            <div class="pull-left" style="color: black;">
                <h2>PRODUCT / LIST PRODUCT</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="<?php echo e(route('products.create')); ?>">Create New</a>
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

    <table class="table my-5" width="500px">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th width="200px">Name</th>
            <th width="200px">Category</th>
            <th>Type</th>
            <th>Price</th>
            <th>Details</th>
            <th>Action</th>
        </tr>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><img src="/image/<?php echo e($product->image); ?>" width="120px"></td>
            <td><?php echo e($product->name); ?></td>
            <td><?php echo e($product->category); ?></td>
            <td><?php echo e($product->type); ?></td>
            <td><?php echo e($product->price); ?></td>
            <td style="word-break: break-all; text-align:justify; width: 600px;">
                <?php echo $product->detail; ?>

            </td>
            <td>
                <form action="<?php echo e(route('products.destroy',$product->id)); ?>" method="POST" class="d-flex flex-column" style="width: 5rem;">

                    <a class="btn btn-success"  href="<?php echo e(route('products.show',$product->id)); ?>">Show</a>

                    <a class="btn btn-primary my-1"  href="<?php echo e(route('products.edit',$product->id)); ?>">Edit</a>

                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('..dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik1207/Documents/Tugas-Belajar/Laravel/Landing-Page/resources/views/products/index.blade.php ENDPATH**/ ?>