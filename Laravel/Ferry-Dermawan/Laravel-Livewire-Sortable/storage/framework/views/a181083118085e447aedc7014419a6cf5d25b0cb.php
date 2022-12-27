<?php $__env->startPush('styles'); ?>
  <?php echo \Livewire\Livewire::styles(); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('todolists')->html();
} elseif ($_instance->childHasBeenRendered('rw0uLX3')) {
    $componentId = $_instance->getRenderedChildComponentId('rw0uLX3');
    $componentTag = $_instance->getRenderedChildComponentTagName('rw0uLX3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('rw0uLX3');
} else {
    $response = \Livewire\Livewire::mount('todolists');
    $html = $response->html();
    $_instance->logRenderedChild('rw0uLX3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
  <?php echo \Livewire\Livewire::scripts(); ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/livewire-sortable/resources/views/activity.blade.php ENDPATH**/ ?>