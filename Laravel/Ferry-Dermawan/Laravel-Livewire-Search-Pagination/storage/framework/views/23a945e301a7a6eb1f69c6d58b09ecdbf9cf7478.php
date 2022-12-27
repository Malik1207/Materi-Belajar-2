<?php $__env->startPush('styles'); ?>
  <?php echo \Livewire\Livewire::styles(); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
  <div class="container">
    <h1>Products</h1>
    <hr>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('product-table')->html();
} elseif ($_instance->childHasBeenRendered('Y85ccF0')) {
    $componentId = $_instance->getRenderedChildComponentId('Y85ccF0');
    $componentTag = $_instance->getRenderedChildComponentTagName('Y85ccF0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Y85ccF0');
} else {
    $response = \Livewire\Livewire::mount('product-table');
    $html = $response->html();
    $_instance->logRenderedChild('Y85ccF0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
  <?php echo \Livewire\Livewire::scripts(); ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/livewire-search-pagination/resources/views/products.blade.php ENDPATH**/ ?>