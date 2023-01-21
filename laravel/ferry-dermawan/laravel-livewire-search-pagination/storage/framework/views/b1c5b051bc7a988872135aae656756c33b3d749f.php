<div>
    <div class="mb-3">
        <input type="text" class="form-control" wire:model='search' placeholder="Cari Produk">
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($product_id == $item->id): ?>
                    <tr>
                        <td><?php echo e($products->firstItem() + $index); ?></td>
                        <td>
                            <input type="text" class="form-control" wire:model='name'>
                        </td>
                        <td>
                            <input type="text" class="form-control" wire:model='price'>
                        </td>
                        <td>
                            <form wire:submit.prevent="changeProduct" class="d-inline">
                                <button class="btn btn-warning" type="submit">Update</button>
                            </form>
                            <button class="btn btn-danger" wire:click='cancelEdit'>Cancel</button>
                        </td>
                    </tr>
                <?php else: ?>
                    <tr>
                        <td><?php echo e($products->firstItem() + $index); ?></td>
                        <td><?php echo e($item->name); ?></td>
                        <td>Rp.<?php echo e(number_format($item->price,0,',','.')); ?></td>
                        <td>
                            <button class="btn btn-primary" wire:click="editProduct(<?php echo e($item); ?>)">Edit</button>
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo e($products->links()); ?>

</div>
<?php /**PATH /home/abdmalik/livewire-search-pagination/resources/views/livewire/product-table.blade.php ENDPATH**/ ?>