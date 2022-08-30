<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jurusan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container my-5">
        <div class="d-flex justify-content-between">
                <h1>Update Jurusan</h1>
        </div>




        <div class="m-2">
            <form action="<?php echo e(route('jurusans.update',$jurusan->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Nama</span>
                    <input name ="nama" type="text" class="form-control" placeholder="Nama" aria-label="nama" aria-describedby="basic-addon1" value="<?php echo e($jurusan->nama); ?>">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Nama Jurusan</span>
                    <input name ="nama_jurusan" type="text" class="form-control" placeholder="Nama Jurusan" aria-label="nama_jurusan" aria-describedby="basic-addon1" value="<?php echo e($jurusan->nama_jurusan); ?>">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Nama Dekan</span>
                    <input name ="nama_dekan" type="text" class="form-control" placeholder="Nama Dekan" aria-label="nama_dekan" aria-describedby="basic-addon1" value="<?php echo e($jurusan->nama_dekan); ?>">
                </div>
                <a href="<?php echo e(route('jurusans.index', $jurusan->id)); ?>" class="btn btn-info"> Balik ke-Tabel</a>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $jurusan)): ?>
                    <div class="float-end">
                        <button class="btn btn-success">
                            Update
                        </button>
                    </div>
                <?php endif; ?>



                
            </form>
        </div>
    </div>
</body>
</html>
<?php /**PATH /home/yaser/laravel/crud_jurusan/resources/views/jurusan/edit.blade.php ENDPATH**/ ?>