<div>
    <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <?php if($alert): ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Terima Kasih</strong> sudah melengkapi form profile.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php endif; ?>
        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
            <span>Edit</span>
            <a href="<?php echo e(route('users.profile')); ?>" class="badge bg-warning text-decoration-none text-dark">
              Back
            </a>
          </div>
          <div class="card-body">
            <div class="mb-2">
              <label for="name">Name</label>
              <input type="text" id="name" wire:model="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
              <?php $__errorArgs = ['name'];
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
            <div class="mb-2">
              <label for="email">Email</label>
              <input type="email" id="email" wire:model="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
              <?php $__errorArgs = ['email'];
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
            <div class="mb-2">
              <label for="province">Province</label>
              <select type="text" id="province" wire:model="myProvince" class="form-select">
                <option value="" selected hidden>Pilih Provinsi</option>
                <?php $__currentLoopData = $provinces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $province): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($province->code); ?>"><?php echo e($province->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
            <div class="mb-2">
              <label for="city">City</label>
              <?php if($city): ?>
                <select type="text" id="city" wire:model="myCity" class="form-select">
                  <option value="">Pilih Kota</option>
                  <?php $__currentLoopData = $city->cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($item->code); ?>"><?php echo e($item->name); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              <?php else: ?>
                <select type="text" id="city" wire:model="myCity" class="form-select" disabled>
                  <option value="">Pilih Kota</option>
                </select>
              <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-primary" wire:click="submit">Update</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><?php /**PATH /home/abdmalik/livewire-dropdown/resources/views/livewire/edit-profile.blade.php ENDPATH**/ ?>