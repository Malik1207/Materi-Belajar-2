<div>
    <table class="table">
        <thead>
            <tr>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>        
                <tr>
                    <td><?php echo e($item->email); ?></td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault<?php echo e($item->id); ?>" wire:click="userStatus(<?php echo e($item->id); ?>)" <?php echo e($item->deleted_at != NULL ? '' : 'checked'); ?>>
                            <label class="form-check-label" for="flexSwitchCheckDefault<?php echo e($item->id); ?>"><?php echo e($item->deleted_at != NULL ? 'Tidak Aktif' : 'Aktif'); ?></label>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH /home/abdmalik/livewire-switch/resources/views/livewire/user-active.blade.php ENDPATH**/ ?>