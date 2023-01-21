<?php $__env->startSection('judul', 'Halaman Siswa'); ?>

<?php $__env->startSection('content'); ?>
    <table class="table table-striped container mt-5 table-dark">
        <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Makanan</th>
              <th scope="col">Minuman</th>
            </tr>
        </thead>
        <?php
            $i = 1;
            $makan = ['Nasi', 'Ikan', 'Gandum', 'Indomie'];
            $minum = ['Air', 'Teh', 'Kopi', 'Jus'];
            $va = 0;
            $ar = 0;
        ?>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $murid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
              <th scope="row"><?php echo e($i++); ?></th>
              <td><?php echo e($murid); ?></td>
              <td><?php echo e($makan[$va++]); ?></td>
              <td><?php echo e($minum[$ar++]); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p>Tidak ada data</p>
            <?php endif; ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('includes.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/laravel/controller/resources/views/views/siswa.blade.php ENDPATH**/ ?>