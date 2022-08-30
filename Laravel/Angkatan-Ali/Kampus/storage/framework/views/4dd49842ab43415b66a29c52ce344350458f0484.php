<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <title>Halaman Admin</title>
    </head>
    <body>
        <div class="container text-center mt-3 p-4 bg-white">
            <h1 class="mb-3">Halaman Admin</h1>
            <div class="row">
                <div class="col-12">

                    <?php $__env->startComponent('layouts.alert', ['class' => 'warning', 'judul' => 'Peringatan']); ?>
                        100 Mahasiswa perlu diperbaiki
                    <?php echo $__env->renderComponent(); ?>

                    <?php $__env->startComponent('layouts.alert', ['class' => 'danger', 'judul' => 'Pelanggaran']); ?>
                        1000 Mahasiswa dikeluarkan
                    <?php echo $__env->renderComponent(); ?>

                    <?php $__env->startComponent('layouts.alert'); ?>
                        <?php $__env->slot('class'); ?>
                            success
                        <?php $__env->endSlot(); ?>
                        <?php $__env->slot('judul'); ?>
                            Kebanggan
                        <?php $__env->endSlot(); ?>
                        100 Mahasiswa telah lulus
                    <?php echo $__env->renderComponent(); ?>

                </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH /home/sendal/kampus/resources/views/admin.blade.php ENDPATH**/ ?>