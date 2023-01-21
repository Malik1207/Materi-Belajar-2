<?php $__env->startPush('styles'); ?>
  <?php echo \Livewire\Livewire::styles(); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('edit-profile')->html();
} elseif ($_instance->childHasBeenRendered('rJW0KBQ')) {
    $componentId = $_instance->getRenderedChildComponentId('rJW0KBQ');
    $componentTag = $_instance->getRenderedChildComponentTagName('rJW0KBQ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('rJW0KBQ');
} else {
    $response = \Livewire\Livewire::mount('edit-profile');
    $html = $response->html();
    $_instance->logRenderedChild('rJW0KBQ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
  <?php echo \Livewire\Livewire::scripts(); ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/livewire-dropdown/resources/views/users/edit.blade.php ENDPATH**/ ?>