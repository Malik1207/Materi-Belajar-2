<div class="alert alert-<?php echo e($class); ?> fade alert-dismissible show">
    <h4 class="alert-heading">
        <u>
            <?php echo e($judul); ?>

        </u>
    </h4>
    <?php echo e($slot); ?>

    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sendal/kampus/resources/views/layouts/alert.blade.php ENDPATH**/ ?>