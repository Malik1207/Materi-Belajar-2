<?php $__env->startSection('body'); ?>
    <?php if (isset($component)) { $__componentOriginal7516113767c62317105643ff49ca883262b0277e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Layouts\Navigation::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.navigation'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Layouts\Navigation::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7516113767c62317105643ff49ca883262b0277e)): ?>
<?php $component = $__componentOriginal7516113767c62317105643ff49ca883262b0277e; ?>
<?php unset($__componentOriginal7516113767c62317105643ff49ca883262b0277e); ?>
<?php endif; ?>
    <main class="py-4">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/learn-permission/resources/views/layouts/app.blade.php ENDPATH**/ ?>