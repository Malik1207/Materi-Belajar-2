<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
      </div>

      <!-- Content Row -->
      <div class="row">
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                      <tr>
                          <th>ID</th>
                          <th>Travel</th>
                          <th>User</th>
                          <th>Visa</th>
                          <th>Total</th>
                          <th>Status</th>
                          <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                          <tr>
                              <td><?php echo e($item->id); ?></td>
                              <td><?php echo e($item->travel_package->title); ?></td>
                              <td><?php echo e($item->user->name); ?></td>
                              <td>$<?php echo e($item->additional_visa); ?></td>
                              <td>$<?php echo e($item->transaction_total); ?></td>
                              <td><?php echo e($item->transaction_status); ?></td>
                              <td>
                                  <a href="<?php echo e(route('transaction.show', $item->id)); ?>" class="btn btn-primary">
                                      <i class="fa fa-eye"></i>
                                  </a>
                                  <a href="<?php echo e(route('transaction.edit', $item->id)); ?>" class="btn btn-info">
                                      <i class="fa fa-pencil-alt"></i>
                                  </a>
                                  <form action="<?php echo e(route('transaction.destroy', $item->id)); ?>" method="post" class="d-inline">
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/Laravel/ramadhan/resources/views/pages/admin/transaction/index.blade.php ENDPATH**/ ?>