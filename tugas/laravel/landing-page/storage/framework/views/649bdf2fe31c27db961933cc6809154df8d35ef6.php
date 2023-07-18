<?php $__env->startSection('content'); ?>

    <div class="my-3">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group d-flex" style="color: black;">
                <strong style="width:100px;">Name</strong>
                : <?php echo e($product->name); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 d-flex">
            <div class="form-group d-flex" style="color: black">
                <strong style="width:100px;">Category</strong>
                : <?php echo e($product->category); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 d-flex">
            <div class="form-group d-flex" style="color: black">
                <strong style="width:100px;">Category</strong>
                : <?php echo e($product->type); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group d-flex" style="color: black">
                <strong style="width:100px;">Price</strong>
                : <?php echo e($product->price); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group d-flex" style="color: black">
                <strong style="width:100px;">Details</strong>
                : <?php echo e($product->detail); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" style="color: black">
            <div class="form-group d-flex">
                <strong style="width:100px;">Image</strong>
                <div><img src="/image/<?php echo e($product->image); ?>" width="200px"></div>
            </div>
        </div>
        <div class="pull-left">
            <a class="btn btn-primary mx-3" href="<?php echo e(route('products.index')); ?>">Back</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/laravel/landing_page/resources/views/products/show.blade.php ENDPATH**/ ?>