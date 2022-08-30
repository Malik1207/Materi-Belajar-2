<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">\
    <?php echo $__env->make('bootstrap', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title>Tabel Mahasiswa</title>
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="py-4">
                    <h2>Tabel Mahasiswa</h2>
                </div>

                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nim</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Jurusan</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $mahasiswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <th><?php echo e($loop->iteration); ?></th>
                                <td><?php echo e($data->nim); ?></td>
                                <td><?php echo e($data->nama); ?></td>
                                <td>
                                    <?php echo e($data->jenis_kelamin == 'L' ? 'Laki-Laki' : 'Perempuan'); ?>

                                </td>
                                <td><?php echo e($data->jurusan); ?></td>
                                <td><?php echo e($data->alamat); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <th colspan="6" class="text-center">Tidak Ada Data</th>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH /home/aal/Laravel/laravel01/resources/views/index.blade.php ENDPATH**/ ?>