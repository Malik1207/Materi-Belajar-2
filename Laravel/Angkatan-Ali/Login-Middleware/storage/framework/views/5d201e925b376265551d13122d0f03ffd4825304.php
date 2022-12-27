<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Sistem Informasi Mahasiswa</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="<?php echo e(url('/daftar-mahasiswa')); ?>" class="nav-link">
                        Daftar Mahasiswa
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(url('/tabel-mahasiswa')); ?>" class="nav-link">
                        Tabel Mahasiswa
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(url('/blog-mahasiswa')); ?>" class="nav-link">
                        Blog Mahasiswa
                    </a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h2 class="my-4">Form Login</h2>
        <hr>

        <?php if(session()->has('pesan')): ?>
            <div class="alert alert-info w-50">
                <?php echo e(session()->get('pesan')); ?>

            </div>
        <?php endif; ?>

        <form action="<?php echo e(url('/login')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="" class="form-label">
                    Username
                </label>
                <input type="text" class="form-control" id="username" name="username" value="<?php echo e(old('username')); ?>">
                <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e(message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <button class="btn btn-primary my-2" type="submit">Login</button>
        </form>
    </div>
</body>
</html>
<?php /**PATH /home/abdmalik/laravel/login-middleware/resources/views/form-login.blade.php ENDPATH**/ ?>