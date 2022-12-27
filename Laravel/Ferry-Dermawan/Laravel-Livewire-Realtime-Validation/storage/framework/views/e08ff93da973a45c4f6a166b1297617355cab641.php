<div>
    <form action="<?php echo e(route('register')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="name">Nama Lengkap</label>
            <input type="text" name="name" wire:model='name' id="name" class="form-control <?php if($errors->has('name')): ?> is-invalid <?php elseif($name == NULL): ?> <?php else: ?> is-valid <?php endif; ?>" placeholder="Nama Lengkap">
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
        <div class="mb-3">
            <label for="email">Alamat Email</label>
            <input type="text" name="email" wire:model='email' id="email" class="form-control <?php if($errors->has('email')): ?> is-invalid <?php elseif($email == NULL): ?> <?php else: ?> is-valid <?php endif; ?>"" placeholder="user@example.com">
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
        <div class="mb-3">
            <label for="password">Kata Sandi</label>
            <input type="password" name="password" wire:model='password' id="password" class="form-control <?php if($errors->has('password')): ?> is-invalid <?php elseif($password == NULL): ?> <?php else: ?> is-valid <?php endif; ?>"" placeholder="Password">
            <?php $__errorArgs = ['password'];
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
        <div class="mb-3">
            <label for="password_confirmation">Ulangi Kata Sandi</label>
            <input type="password" name="password_confirmation" wire:model='password_confirmation' id="password_confirmation" class="form-control <?php if($errors->has('password_confirmation')): ?> is-invalid <?php elseif($password_confirmation == NULL): ?> <?php else: ?> is-valid <?php endif; ?>"" placeholder="Password">
            <?php $__errorArgs = ['password_confirmation'];
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
        <button wire:click='storeUser' type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php /**PATH /home/abdmalik/livewire-realtime-validation/resources/views/livewire/register.blade.php ENDPATH**/ ?>