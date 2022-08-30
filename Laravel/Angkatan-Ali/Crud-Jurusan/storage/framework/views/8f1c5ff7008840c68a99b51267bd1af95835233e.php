<?php $__env->startSection('content'); ?>

<div class="body-1">

    <div>
        <div class="container">
            <div class="d-flex justify-content-between">
                <h1>Tabel Jurusan</h1>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', App\Models\Sale::class)): ?>
                        <div>
                            <a href="<?php echo e(route('jurusans.create')); ?>" class="btn btn-info">Create User</a>
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
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/laravel/crud_jurusan/resources/views/jurusan/index.blade.php ENDPATH**/ ?>