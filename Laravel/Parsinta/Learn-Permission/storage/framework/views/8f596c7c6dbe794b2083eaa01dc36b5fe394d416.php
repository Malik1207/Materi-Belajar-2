<div>
    <?php $__currentLoopData = $navigations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $navigation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check($navigation->permission_name)): ?>
        <div class="mb-4">
            <small class="d-block text-secondary mb-2 text-uppercase"><?php echo e($navigation->name); ?></small>
            <div class="list-group">
                <?php $__currentLoopData = $navigation->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(url($child->url)); ?>" class="list-group-item list-group-item-action"><?php echo e($child->name); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <div class="list-group">
        <small class="d-block text-secondary mb-2 text-uppercase">Logout</small>
        <a class="list-group-item list-group-item-action" href="<?php echo e(route('logout')); ?>"
        onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
        <?php echo e(__('Logout')); ?>

        </a>

        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
            <?php echo csrf_field(); ?>
        </form>
    </div>
</div><?php /**PATH /home/abdmalik/learn-permission/resources/views/components/layouts/sidebar.blade.php ENDPATH**/ ?>