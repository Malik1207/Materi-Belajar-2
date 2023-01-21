<?php $__env->startSection('isActive', 'active'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo $__env->make('style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title>Mahasiswa Create</title>
</head>
<body>
    <?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="py-4 bg  container">
        <h2>Table Mahasiswa</h2>
    </div>

    <div class="justify-content-center container bg">
        <?php if($errors->any()): ?>
        <div class="alert alert-danger" role="alert">
            <ol>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ol>
        </div>
        <?php endif; ?>
        <form class="card-body" action="<?php echo e(route('mahasiswa.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('POST'); ?>
            <div class="form-group mb-3">
                <label for="nim">NIM</label>
                <input value="<?php echo e(old('nim')); ?>" type="number" name="nim" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="nama">nama</label>
                <input value="<?php echo e(old('nama')); ?>" type="text" name="nama" class="form-control">
            </div>
            
            <div class="form-group mb-3 mt-3">
                <label for="" class="mb-1">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin">
                    <option <?php echo e(old('jenis_kelamin') == 'laki-laki' ? 'selected' : ''); ?> value="laki-laki" name="jenis_kelamin">Laki-laki</option>
                    <option <?php echo e(old('jenis_kelamin') == 'prempuan' ? 'selected' : ''); ?> value="prempuan" name="jenis_kelamin">Prempuan</option>
                </select>
            </div>

            
            <div class="form-group mb-3 mt-3">
                <label class="mb-1">Jurusan</label>
                <select id="jurusan" name="jurusan">
                    <option name="jurusan" <?php echo e(old('jurusan') == 'Akutansi' ? 'selected' : ''); ?> value="Akutansi">Akutansi</option>
                    <option name="jurusan" <?php echo e(old('jurusan') == 'Kedokteran' ? 'selected' : ''); ?> value="Kedokteran" class="form-control">Kedokteran</option>
                    <option name="jurusan" <?php echo e(old('jurusan') == 'Hotel' ? 'selected' : ''); ?> value="Hotel" class="form-control">Hotel</option>
                    <option name="jurusan" <?php echo e(old('jurusan') == 'Bengkel' ? 'selected' : ''); ?> value="Bengkel">Bengkel</option>
                    <option name="jurusan" <?php echo e(old('jurusan') == 'Agama' ? 'selected' : ''); ?> value="Agama">Agama</option>
                    <option name="jurusan" <?php echo e(old('jurusan') == 'Design' ? 'selected' : ''); ?> value="Design">Design</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="alamat">alamat</label>
                <textarea name="alamat" id="alamat" class="form-control"><?php echo e(old('alamat')); ?></textarea></textarea>
            </div>
            <button class="btn btn-primary btn-sm mt-2">buat</button>
        </form>
    </div>
</body>
</html>
<?php /**PATH /home/sendal/laravel01/resources/views/form-pendaftaran.blade.php ENDPATH**/ ?>