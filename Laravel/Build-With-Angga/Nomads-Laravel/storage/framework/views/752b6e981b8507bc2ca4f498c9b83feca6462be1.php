<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Paket Travel</h1>
          <a href="<?php echo e(route('travel-package.create')); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
              <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Paket Travel
          </a>
      </div>

      <!-- Content Row -->
      <div class="row">
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                      <tr>
                          <th>ID</th>
                          <th>Title</th>
                          <th>Location</th>
                          <th>Type</th>
                          <th>Departure Date</th>
                          <th>Type</th>
                          <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                          <tr>
                              <td><?php echo e($item->id); ?></td>
                              <td><?php echo e($item->title); ?></td>
                              <td><?php echo e($item->location); ?></td>
                              <td><?php echo e($item->type); ?></td>
                              <td><?php echo e($item->departure_date); ?></td>
                              <td><?php echo e($item->type); ?></td>
                              <td>
                                  <a href="<?php echo e(route('travel-package.edit', $item->id)); ?>" class="btn btn-info">
                                      <i class="fa fa-pencil-alt"></i>
                                  </a>
                                  <form action="<?php echo e(route('travel-package.destroy', $item->id)); ?>" method="post" class="d-inline">
                                      <?php echo csrf_field(); ?>
                                      <?php echo method_field('delete'); ?>
                                      <button class="btn btn-danger">
                                          <i class="fa fa-trash"></i>
                                      </button>
                                  </form>

                              </td>
                          </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                          <td colspan="7" class="text-center">
                              Data Kosong
                          </td>
                      <?php endif; ?>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
    </div>
    <!-- /.container-fluid -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik1207/Documents/Pembelajaran-2/Laravel/Build-With-Angga/Nomads-Laravel/resources/views/pages/admin/travel-package/index.blade.php ENDPATH**/ ?>