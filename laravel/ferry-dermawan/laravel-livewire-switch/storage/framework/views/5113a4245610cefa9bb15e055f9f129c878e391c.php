<?php $__env->startPush('styles'); ?>
  <?php echo \Livewire\Livewire::styles(); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
  <div class="container">
    <h1>User</h1>
    <hr>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user-active')->html();
} elseif ($_instance->childHasBeenRendered('FF4YVSb')) {
    $componentId = $_instance->getRenderedChildComponentId('FF4YVSb');
    $componentTag = $_instance->getRenderedChildComponentTagName('FF4YVSb');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('FF4YVSb');
} else {
    $response = \Livewire\Livewire::mount('user-active');
    $html = $response->html();
    $_instance->logRenderedChild('FF4YVSb', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/livewire-switch/resources/views/users.blade.php ENDPATH**/ ?>