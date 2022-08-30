<div>
    <input type="text" wire:model="hobi" placeholder="Properti Hobi">
    <input type="text" wire:model="warna_kesukaan" placeholder="Properti Warna Kesukaan">
    <div>
        <div>Hobi: <?php echo e($hobi); ?> </div>
        <div>Warna Kesukaan: <?php echo e($warna_kesukaan); ?></div>
    </div>

    <ul>
        <?php $__currentLoopData = $proses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($item); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php /**PATH /home/abdmalik/laravel-livewire/resources/views/livewire/life-cycle.blade.php ENDPATH**/ ?>