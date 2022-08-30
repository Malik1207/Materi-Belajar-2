<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $__env->make('bootstrap', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title>Detail Data Mahasiswa <?php echo e($mahasiswa->nama); ?></title>
</head>
<body>
    <?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container mt-3">
        <div class="col-12">
            <div class="pt-3">
                <h1 class="h2">Biodata <?php echo e($mahasiswa->nama); ?></h1>
            </div>
            <hr>

            <ul>
                <li>NIM: <?php echo e($mahasiswa->nim); ?></li>
                <li>Nama: <?php echo e($mahasiswa->nama); ?></li>
                <li>Jenis Kelamin: <?php echo e($mahasiswa->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan'); ?></li>
                <li>Jurusan: <?php echo e($mahasiswa->jurusan); ?></li>
                <li>Alamat: <?php echo e($mahasiswa->alamat == '' ? 'N/A' : $mahasiswa->alamat); ?></li>
            </ul>
        </div>
    </div>

    
</body>
</html><?php /**PATH /home/abdmalik/laravel/laravel_01/resources/views/read.blade.php ENDPATH**/ ?>