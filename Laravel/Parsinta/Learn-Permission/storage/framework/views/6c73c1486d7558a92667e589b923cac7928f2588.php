<?php $__env->startSection('body'); ?>
    <div class="container-fluid">
        <div class="py-3">
            <div class="row">
                <div class="col-md-3">
                    <?php if (isset($component)) { $__componentOriginalad22dded56e1c9a9e7ca0949d4a6fad2a6c222bd = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Layouts\Sidebar::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Layouts\Sidebar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalad22dded56e1c9a9e7ca0949d4a6fad2a6c222bd)): ?>
<?php $component = $__componentOriginalad22dded56e1c9a9e7ca0949d4a6fad2a6c222bd; ?>
<?php unset($__componentOriginalad22dded56e1c9a9e7ca0949d4a6fad2a6c222bd); ?>
<?php endif; ?>
                </div>
                <div class="col-md-9">
                    <div class="mt-4">
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>
            </div>
        </div>  
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/learn-permission/resources/views/layouts/back.blade.php ENDPATH**/ ?>