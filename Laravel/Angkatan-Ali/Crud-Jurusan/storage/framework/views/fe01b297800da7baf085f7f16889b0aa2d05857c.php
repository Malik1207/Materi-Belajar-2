<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container my-5">
        <div class="d-flex justify-content-between">
            <h1>Detail Informasi Jurusan</h1>

            <div class="d-flex gap-2">
                    <div>
                        <a href="<?php echo e(route('sales.edit', $sale->id)); ?>" class="btn btn-info"> Edit</a>
                    </div>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete',$sale)): ?>
                    <form action="<?php echo e(route('sales.destroy',$sale->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>

                        <button class="btn btn-danger">
                            Delete
                        </button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
        <?php if(session()->has('pesan')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e(session()->get('pesan')); ?>

            </div>
        <?php endif; ?>
        <div class="m-2">
            <ul>
                <li>Nama : <?php echo e($sale->nama); ?></li>
                <li>Nama Jurusan: <?php echo e($sale->nama_jurusan); ?></li>
                <li>Nama Dekan: <?php echo e($sale->nama_dekan); ?></li>
            </ul>
        </div>
        <div>
            <a href="<?php echo e(route('sales.index', $sale->id)); ?>" class="btn btn-info"> Balik</a>
        </div>
    </div>
</body>
</html>
<?php /**PATH /home/abdmalik/laravel/crud_jurusan/resources/views/sale/show.blade.php ENDPATH**/ ?>