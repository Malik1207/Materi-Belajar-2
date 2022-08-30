<?php echo csrf_field(); ?>
                <div class="form-group mb-4">
                    <label for="parent_id">Parent</label>
                    <select name="parent_id" id="parent_id" class="form-control">
                        <option selected disabled>Choose a parent</option>
                        <?php $__currentLoopData = $navigations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option <?php echo e($item->id == $navigation->parent_id ? 'selected' : ''); ?> value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group mb-4">
                    <label for="permission_name">Permissions</label>
                    <select name="permission_name" id="permission_name" class="form-control">
                        <option selected disabled>Choose a Permissions</option>
                        <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option <?php echo e($permission->name == $navigation->permission_name ? 'selected' : ''); ?> value="<?php echo e($permission->name); ?>"><?php echo e($permission->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php $__errorArgs = ['permission_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger mt-2 d-block"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Create new post" value="<?php echo e(old('name') ?? $navigation->name); ?>">
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger mt-2 d-block"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="url">Url</label>
                            <input type="text" name="url" id="url" class="form-control" placeholder="posts/create" value="<?php echo e(old('url') ?? $navigation->url); ?>">
                        </div>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-success mt-2"><?php echo e($submit); ?></button><?php /**PATH /home/abdmalik/learn-permission/resources/views/navigation/partials/form-control.blade.php ENDPATH**/ ?>