<?php $__env->startSection('title', 'Mahasiswa'); ?>
<?php $__env->startSection('menuMahasiswa', 'active'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container text-center mp-3 p-4 bg-white">
        <h1>Informasi Fakultas <?php echo e($data); ?></h1>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sendal/laravel/kampus/resources/views//pages/mahasiswa.blade.php ENDPATH**/ ?>