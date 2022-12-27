<div>
    <div class="container">
    <div class="row d-flex justify-content-center align-items-center" style="height: 100vh;">
      <div class="col-md-6">
        <div class="card mb-5">
            <div class="card-header">Form</div>
            <div class="card-body">
                <div class="mb-3">
                  <input type="text" class="form-control <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" wire:model="body" placeholder="Apa aktivitas kamu sekarang?">
                  <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <div class="invalid-feedback">
                        <?php echo e($message); ?>

                      </div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <button class="btn btn-primary" wire:click="submit">Tambahkan</button>
            </div>
        </div>
        <ul class="list-group" wire:sortable='updateTaskOrder'>
          <?php $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li wire:sortable.item="<?php echo e($activity->id); ?>" wire:key="activity-<?php echo e($activity->id); ?>" class="list-group-item d-flex justify-content-between">
                <span wire:sortable.handle role="button"><?php echo e($activity->body); ?></span>
                <button class="badge bg-danger" wire:click="delete(<?php echo e($activity->id); ?>)">Delete</button>
            </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php /**PATH /home/abdmalik/Documents/Pembelajaran-2/Laravel/Ferry-Dermawan/Laravel-Livewire-Sortable/resources/views/livewire/todolists.blade.php ENDPATH**/ ?>