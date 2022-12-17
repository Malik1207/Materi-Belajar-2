<div>
    <?php echo $__env->make('livewire.product-edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($products->firstItem() + $index); ?></td>
                    <td><?php echo e($item->name); ?></td>
                    <td>Rp.<?php echo e(number_format($item->price)); ?></td>
                    <td>
                        <button class="btn badge bg-warning" wire:click='productEdit(<?php echo e($item); ?>)' data-bs-toggle="modal" data-bs-target="#editModal">Update</button>
                        <button class="btn badge bg-danger" wire:click='productDelete(<?php echo e($item->id); ?>)'>Delete</button>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo e($products->links()); ?>

</div>
<?php /**PATH /home/abdmalik/Documents/Pembelajaran-2/Laravel/Ferry-Dermawan/Laravel-Livewire-Crud/resources/views/livewire/product-table.blade.php ENDPATH**/ ?>