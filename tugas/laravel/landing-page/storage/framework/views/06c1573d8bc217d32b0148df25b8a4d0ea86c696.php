<?php $__env->startSection('content'); ?>

    <div class="my-3">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group d-flex" style="color: black;">
                <strong style="width:100px;">Name</strong>
                : <?php echo e($officer->name); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group d-flex" style="color: black">
                <strong style="width:100px;">Position</strong>
                : <?php echo e($officer->position); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group d-flex" style="color: black">
                <strong style="width:100px;">Biography</strong>
                : <div style="word-break: break-all; text-align:justify; width: 600px;"><?php echo $officer->biography; ?></div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" style="color: black">
            <div class="form-group d-flex">
                <strong style="width:100px;">Image Officer</strong>
                <div><img src="/image/<?php echo e($officer->image); ?>" width="80px" height="80px" style="border-radius: 80px"></div>
            </div>
        </div>
        <div class="pull-left">
            <a class="btn btn-primary mx-3" href="<?php echo e(route('officers.index')); ?>">Back</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('..dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/Laravel/landing_page/resources/views/officers/show.blade.php ENDPATH**/ ?>