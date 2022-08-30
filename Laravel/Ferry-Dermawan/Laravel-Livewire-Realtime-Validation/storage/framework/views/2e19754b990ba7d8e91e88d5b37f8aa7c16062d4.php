<?php $__env->startPush('styles'); ?>
    <?php echo \Livewire\Livewire::styles(); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Register')); ?></div>

                <div class="card-body">
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('register')->html();
} elseif ($_instance->childHasBeenRendered('z4886mx')) {
    $componentId = $_instance->getRenderedChildComponentId('z4886mx');
    $componentTag = $_instance->getRenderedChildComponentTagName('z4886mx');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('z4886mx');
} else {
    $response = \Livewire\Livewire::mount('register');
    $html = $response->html();
    $_instance->logRenderedChild('z4886mx', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/livewire-realtime-validation/resources/views/auth/register.blade.php ENDPATH**/ ?>