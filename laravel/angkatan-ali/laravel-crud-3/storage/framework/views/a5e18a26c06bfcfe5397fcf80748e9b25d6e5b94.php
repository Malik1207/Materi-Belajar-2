<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo $__env->make('bootstrap', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title>Tabel Mahasiswa</title>
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="py-4 d-flex justify-content-between align-items-center">
                    <h2>Tabel Mahasiswa</h2>
                    <a href="<?php echo e(route('mahasiswa.create')); ?>" class="btn btn-primary">Tambah Mahasiswa</a>
                </div>

                <?php if(session()->has('create')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session()->get('create')); ?>

                    </div>
                <?php endif; ?>

                <?php if(session()->has('edit')): ?>
                    <div class="alert alert-primary">
                        <?php echo e(session()->get('edit')); ?>

                    </div>
                <?php endif; ?>

                <?php if(session()->has('hapus')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(session()->get('edit')); ?>

                    </div>
                <?php endif; ?>

                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nim</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Jurusan</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
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
                                <td>
                                    <form action="<?php echo e(route('mahasiswa.destroy', $data->id)); ?>" method="POST">
                                    <a href="<?php echo e(route('mahasiswa.show', $data->id)); ?>" class="btn btn-success btn-sm">Detail</a>
                                    <a href="<?php echo e(route('mahasiswa.edit', $data->id)); ?>" class="btn btn-primary btn-sm">Edit</a>
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            Hapus
                                        </button>
                                    </form>

                                </td>
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
<?php /**PATH /home/abdmalik/laravel/laravel_01/resources/views/index.blade.php ENDPATH**/ ?>