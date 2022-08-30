<div>
    <?php dump($firstId); ?>
    <?php dump($selectAll); ?>
    <?php dump($mySelected); ?>
    <button 
        class="btn btn-danger"
        wire:click.prevent='deletedSelected'
        onclick="confirm('Yakin?')"
        <?php if(empty($mySelected)): ?>
            disabled
        <?php endif; ?>
    >
        Delete
    </button>
    <table class="table">
        <thead>
            <th>No</th>
            <th>
                <input type="checkbox" wire:model='selectAll'>
                <input type="hidden" wire:model='firstId' value="<?php echo e($users[0]->id); ?>">
            </th>
            <th>Nama</th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($users->firstItem() + $index); ?></td>
                <td>
                    <input type="checkbox" wire:model='mySelected' value="<?php echo e($item->id); ?>">
                </td>
                <td><?php echo e($item->name); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo e($users->links()); ?>

    <?php $__env->startPush('js'); ?>
        <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
        <script>
            $(".page-item").on('click',function(event){
                Livewire.emit('resetMySelected');
            })
        </script>
    <?php $__env->stopPush(); ?>
</div>
<?php /**PATH /home/abdmalik/Documents/Belajar-2/Laravel/Ferry-Dermawan/Livewire-Bulk-Delete/resources/views/livewire/tutorial.blade.php ENDPATH**/ ?>