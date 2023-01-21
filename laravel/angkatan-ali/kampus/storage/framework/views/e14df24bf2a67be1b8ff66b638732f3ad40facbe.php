<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <title><?php echo $__env->yieldContent('title', 'Kampus UGM'); ?></title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid container">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link <?php echo $__env->yieldContent('menuMahasiswa'); ?>" aria-current="page" href="<?php echo e(route('mahasiswa', 'ekonomi')); ?>">Mahasiswa</a>
                        <a class="nav-link <?php echo $__env->yieldContent('menuDosen'); ?>" href="<?php echo e(route('dosen', 'jono')); ?>">Dosen</a>
                        <a class="nav-link <?php echo $__env->yieldContent('menuGallery'); ?>" href="<?php echo e(route('gallery')); ?>">Gallery</a>
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </div>
                </div>
            </div>
        </nav>

        <?php echo $__env->yieldContent('content'); ?>

        <footer class="bg-dark py-4 text-white mt-4">
            <div class="container">
                <a href="<?php echo e(url('https://giphy.com/search/pixel')); ?>">Giphy</a> | Laravel Basic Blade Template Enjine | Copyright &copy; <?php echo e(date('Y')); ?> Dunia Laravel
            </div>
        </footer>
    </body>
</html>
<?php /**PATH /home/sendal/kampus/resources/views/layouts/master.blade.php ENDPATH**/ ?>