<?php $__env->startSection('isActive','active'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo $__env->make('bootstrap', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title>Document</title>
</head>
<body>
    <?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="py-4 container col-10">
        <h2>Edit Mahasiswa</h2>
    </div>

    <div class="d-flex justify-content-center mt-3">
        <div class="car col-10">
            <?php if($errors->any()): ?>
                <div class="alert alert-danger" role="alert">
                   <ul>
                       <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <li><?php echo e($error); ?></li>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   </ul>
                </div>
            <?php endif; ?>
            <form method="POST" action="<?php echo e(route('mahasiswa.update', $mahasiswa->id)); ?>" class="card-body">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="form-group mb-3">
                    <label>NIM</label>
                    <input value="<?php echo e(empty(old('nim')) ? $mahasiswa->nim : old('nim')); ?>" type="number" class="form-control" name="nim">
                </div>
                <div class="form-group mb-3">
                    <label>Nama</label>
                    <input value="<?php echo e(empty(old('nama')) ? $mahasiswa->nama : old('nama')); ?>" type="text" class="form-control" name="nama">
                </div>
                <div class="form-group mb-3">
                    <label>Laki-Laki</label>
                    <input type="radio" <?php echo e((old('jenis_kelamin') ?? $mahasiswa->jenis_kelamin) == 'L'? 'checked' : ''); ?> class="form-check-input" name="jenis_kelamin" value="L">
                    <label>Perempuan</label>
                    <input type="radio" <?php echo e((old('jenis_kelamin') ?? $mahasiswa->jenis_kelamin) == 'P'? 'checked' : ''); ?> class="form-check-input" name="jenis_kelamin" value="P">
                </div>
                <!-- <div class="form-group mb-3">
                    <label>Jurusan</label>
                    <input value="<?php echo e(empty(old('jurusan' )) ? $mahasiswa->jurusan : old('jurusan')); ?>" type="text" class="form-control" name="jurusan">
                </div> -->
                <select id="jurusan" name="jurusan" value="<?php echo e(old('jurusan')); ?>" >
                    <option value="Programming" name="jurusan" <?php echo e((old('jurusan' ) ?? $mahasiswa->jurusan) == 'Programming' ? 'selected' : ''); ?>>Programming</option>
                    <option value="Graphic Design" name="jurusan" <?php echo e((old('jurusan' ) ?? $mahasiswa->jurusan) == 'Graphic Design' ? 'selected' : ''); ?>>Graphic Design</option>
                    <option value="Photography" name="jurusan" <?php echo e((old('jurusan' ) ?? $mahasiswa->jurusan) == 'Photography' ? 'selected' : ''); ?>>Photography</option>
                    <option value="Videography" name="jurusan" <?php echo e((old('jurusan' ) ?? $mahasiswa->jurusan) == 'Videography' ? 'selected' : ''); ?>>Videography</option>
                </select>
                <div class="form-group mb-3">
                    <label>Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control"><?php echo e(old('alamat') ?? $mahasiswa->alamat); ?></textarea>
                </div>

                <button class="btn btn-primary btn-sm mt-3">Edit</button>
            </form>
        </div>
    </div>
</body>
</html>
<?php /**PATH /home/abdmalik/laravel/laravel_01/resources/views/form-edit.blade.php ENDPATH**/ ?>