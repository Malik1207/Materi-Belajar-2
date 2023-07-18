<?php $__env->startSection('content'); ?>

    <div class="my-3">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group d-flex" style="color: black;">
                <strong style="width:100px;">Name</strong>
                : <?php echo e($testimonial->name); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="d-flex" style="color: black;">
                <strong style="width:100px;">Review</strong>
                : <div style="word-break: break-all; text-align:justify; width: 700px;"><?php echo $testimonial->review; ?></div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group d-flex" style="color: black">
                <strong style="width:100px;">Business</strong>
                : <?php echo e($testimonial->business); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" style="color: black">
            <div class="form-group d-flex">
                <strong style="width:100px;">Image User</strong>
                <div><img src="/image/<?php echo e($testimonial->image); ?>" width="80px" height="80px" style="border-radius: 80px"></div>
            </div>
        </div>
        <div class="pull-left">
            <a class="btn btn-primary mx-3" href="<?php echo e(route('testimonials.index')); ?>">Back</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('..dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/Laravel/landing_page/resources/views/testimonials/show.blade.php ENDPATH**/ ?>