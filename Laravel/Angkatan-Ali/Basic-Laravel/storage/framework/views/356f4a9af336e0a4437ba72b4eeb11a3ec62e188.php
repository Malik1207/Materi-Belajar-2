<?php $__env->startSection('title', 'Teman'); ?>
<?php $__env->startSection('copyright', 'Teman'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <table class="table table-dark table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Tempat Tinggal</th>
              </tr>
            </thead>
            <tbody>
                <?php
                    $i = 1;
                ?>
                <?php $__currentLoopData = $teman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($i++); ?></td>
                        <td><?php echo e($item); ?></td>
                    <?php $__currentLoopData = $home; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rumah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td><?php echo e($rumah); ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('koneksi.koneksi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sendal/laravel/basic_laravel/resources/views/halaman/teman.blade.php ENDPATH**/ ?>