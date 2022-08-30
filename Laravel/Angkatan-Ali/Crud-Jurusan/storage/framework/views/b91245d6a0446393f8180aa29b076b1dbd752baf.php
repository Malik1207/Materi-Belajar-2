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
        <h1>Tabel Jurusan</h1>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', App\Models\Jurusan::class)): ?>
                <div>
                    <a href="<?php echo e(route('jurusans.create')); ?>" class="btn btn-info"> Tambah Jurusan</a>
                </div>
            <?php endif; ?>

            


    </div>
    <?php if(session()->has('pesan')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(session()->get('pesan')); ?>

        </div>
    <?php endif; ?>
    <?php if(session()->has('pesanDelete')): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo e(session()->get('pesanDelete')); ?>

        </div>
    <?php endif; ?>
    <div class="m-2">
        <table class=" table table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nama Jurusan</th>
                <th>Nama Dekan</th>
                <th>Action</th>

              </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $jurusans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jurusan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th><?php echo e($loop->iteration); ?></th>
                        <td><?php echo e($jurusan->nama); ?></td>
                        <td><?php echo e($jurusan->nama_jurusan); ?></td>
                        <td><?php echo e($jurusan->nama_dekan); ?></td>
                        <td><?php echo e($jurusan->mahasiswa); ?></td>
                        <td>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view',$jurusan)): ?>
                                 <a href="<?php echo e(route('jurusans.show', $jurusan->id)); ?>" class="btn btn-info"> Detail</a>
                            <?php endif; ?>

                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->denies('view',$jurusan)): ?>
                                <a href="<?php echo e(route('jurusans.show', $jurusan->id)); ?>" class="btn btn-info disabled"> Detail</a>
                            <?php endif; ?>
                        </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
    </div>
</div>
</body>
</html>
<?php /**PATH /home/yaser/laravel/crud_jurusan/resources/views/jurusan/index.blade.php ENDPATH**/ ?>