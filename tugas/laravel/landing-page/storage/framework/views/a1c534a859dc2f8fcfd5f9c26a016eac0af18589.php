<?php $__env->startSection('content'); ?>

    <div class="my-3">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group d-flex" style="color: black;">
                <strong style="width:100px;">Title</strong>
                : <?php echo e($product->title); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group d-flex" style="color: black">
                <strong style="width:100px;">Content</strong>
                : <?php echo e($product->content); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" style="color: black">
            <div class="form-group d-flex">
                <strong style="width:100px;">Article Image</strong>
                <div><img src="/image/<?php echo e($product->article_image); ?>" width="200px"></div>
            </div>
        </div>
        <div class="pull-left">
            <a class="btn btn-primary mx-3" href="<?php echo e(route('articles.index')); ?>">Back</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('articles.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/laravel/landing_page/resources/views/articles/show.blade.php ENDPATH**/ ?>