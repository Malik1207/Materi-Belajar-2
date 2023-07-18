<?php $__env->startSection('content'); ?>

    <div class="my-3">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group d-flex" style="color: black;">
                <strong style="width:100px;">Story</strong>
                : <?php echo e($story->story); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" style="color: black">
            <div class="form-group d-flex">
                <strong style="width:100px;">Image User</strong>
                <div><img src="/image/<?php echo e($story->image); ?>" width="80px" height="80px" style="border-radius: 80px"></div>
            </div>
        </div>
        <div class="pull-left">
            <a class="btn btn-primary mx-3" href="<?php echo e(route('stories.index')); ?>">Back</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('stories.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/laravel/landing_page/resources/views/stories/show.blade.php ENDPATH**/ ?>