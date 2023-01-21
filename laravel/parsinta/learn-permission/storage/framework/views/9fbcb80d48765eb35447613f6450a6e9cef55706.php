<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" class="form-control" value="<?php echo e(old('name') ?? $role->name); ?>">
</div>
<div class="form-group">
    <label for="guard_name">Guard Name</label>
    <input type="text" name="guard_name" id="guard_name" placeholder='default to "web"' class="form-control" value="<?php echo e(old('guard_name') ?? $role->guard_name); ?>">
</div>
<button type="submit" class="btn btn-primary mt-4"><?php echo e($submit); ?></button><?php /**PATH /home/abdmalik/learn-permission/resources/views/permission/roles/partials/form-control.blade.php ENDPATH**/ ?>