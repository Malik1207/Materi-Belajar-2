<?php $__env->startSection('title', 'Gallery'); ?>

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-center">
        <div class="nav col-10 d-flex justify-content-center">
            <div class="card-body text-center">
                Ini Gallery
                <ol>
                    <?php $__empty_1 = true; $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <li><?php echo e($gallery->name); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <li>Tidak ada data</li>
                    <?php endif; ?>
                </ol>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sendal/laravel/basic_laravel/resources/views/pages/gallery.blade.php ENDPATH**/ ?>