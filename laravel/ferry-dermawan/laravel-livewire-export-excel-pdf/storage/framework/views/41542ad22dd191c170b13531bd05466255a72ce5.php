<div>
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card mb-5">
                <div class="card-header">User</div>
                <div class="card-body">
                    <div>
                        <button class="btn btn-success" wire:click='downloadExcel' <?php if(empty($mySelected)): ?> disabled <?php endif; ?>>Export Excel</button>
                        <button class="btn btn-danger" wire:click='downloadPdf' <?php if(empty($mySelected)): ?> disabled <?php endif; ?>>Export Pdf</button>
                    </div>
                    <?php dump($mySelected); ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th></th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($users->firstItem() + $key); ?></td>
                                    <td><input type="checkbox" wire:model='mySelected' value="<?php echo e($item->id); ?>"></td>
                                    <td><?php echo e($item->email); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <?php echo e($users->links()); ?>

            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/abdmalik/Documents/Belajar/Laravel/Ferry Dermawan/livewire-export-excel-pdf/resources/views/livewire/tutorial.blade.php ENDPATH**/ ?>