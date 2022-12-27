<?php $__env->startSection('content'); ?>
   Hi <?php echo e(Auth::user()->name); ?>,its your dashboard.
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/Documents/Pembelajaran-2/Laravel/Parsinta/Auth/resources/views/dashboard.blade.php ENDPATH**/ ?>