<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Transaksi <?php echo e($item->user->name); ?></h1>
      </div>

      <!-- Content Row -->
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <div class="card shadow">
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <td><?php echo e($item->id); ?></td>
                    </tr>
                    <tr>
                        <th>Paket Travel</th>
                        <td><?php echo e($item->travel_package->title); ?></td>
                    </tr>
                    <tr>
                        <th>Pembeli</th>
                        <td><?php echo e($item->user->name); ?></td>
                    </tr>
                    <tr>
                        <th>Additional Visa</th>
                        <td>$0<?php echo e($item->additional_visa); ?></td>
                    </tr>
                    <tr>
                        <th>Total Transaksi</th>
                        <td>$<?php echo e($item->transaction_total); ?></td>
                    </tr>
                    <tr>
                        <th>Status Transaksi</th>
                        <td><?php echo e($item->transaction_status); ?></td>
                    </tr>
                    <tr>
                        <th>Pembelian</th>
                        <td>
                            <table class="table table-bordered">
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Nationality</th>
                                    <th>Visa</th>
                                    <th>DOE Passport</th>
                                </tr>
                                <?php $__currentLoopData = $item->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($detail->id); ?></td>
                                        <td><?php echo e($detail->username); ?></td>
                                        <td><?php echo e($detail->nationality); ?></td>
                                        <td><?php echo e($detail->is_visa ? '30 Days' : 'N/A'); ?></td>
                                        <td><?php echo e($detail->doe_passport); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/Laravel/ramadhan/resources/views/pages/admin/transaction/detail.blade.php ENDPATH**/ ?>