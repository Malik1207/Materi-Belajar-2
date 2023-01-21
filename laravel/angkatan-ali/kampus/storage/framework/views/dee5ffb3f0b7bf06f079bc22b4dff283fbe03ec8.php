<?php $__env->startSection('title', 'Dosen'); ?>
<?php $__env->startSection('menuDosen', 'active'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container text-center mp-3 p-4 bg-white">
        <h1>Nama dosen <?php echo e($name); ?></h1>

        <img src="<?php echo e(asset('giphy_5.gif')); ?>" alt="">
        <img src="<?php echo e(url('https://media.giphy.com/media/pVGsAWjzvXcZW4ZBTE/giphy.gif')); ?>" alt="">
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sendal/kampus/resources/views//pages/dosen.blade.php ENDPATH**/ ?>