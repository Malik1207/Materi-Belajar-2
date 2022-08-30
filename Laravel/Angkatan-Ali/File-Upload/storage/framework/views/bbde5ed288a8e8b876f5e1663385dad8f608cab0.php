<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>File upload Rename</title>
</head>
<body>
    <div class="container mt-3">
        <h2>File Upload</h2>
        <hr>

        <form action="<?php echo e(url('/file-upload-rename')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="mb-3">
                <label for="nama_gambar" class="form-label">Nama Gambar</label>
                <input type="text" class="form-control" name="nama_gambar" value="<?php echo e(old('nama_gambar')); ?>">
                <?php $__errorArgs = ['nama_gambar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-3">
                <lable class="form-label" for="nama_profile">Gambar Profile</lable>
                <input type="file" id="nama_profile" class="form-control" name="nama_profile">
                <?php $__errorArgs = ['nama_profile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger">
                        <?php echo e($message); ?>

                    </div>
                 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <button type="submit" class="btn btn-primary my-2">Upload</button>
        </form>
    </div>
</body>
</html>
<?php /**PATH /home/abdmalik/laravel/file-upload/resources/views/file-upload-rename.blade.php ENDPATH**/ ?>