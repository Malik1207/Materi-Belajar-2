<?php $__env->startPush('styles'); ?>
  <?php echo \Livewire\Livewire::styles(); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('todolists')->html();
} elseif ($_instance->childHasBeenRendered('AjqiVOy')) {
    $componentId = $_instance->getRenderedChildComponentId('AjqiVOy');
    $componentTag = $_instance->getRenderedChildComponentTagName('AjqiVOy');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('AjqiVOy');
} else {
    $response = \Livewire\Livewire::mount('todolists');
    $html = $response->html();
    $_instance->logRenderedChild('AjqiVOy', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
  <?php echo \Livewire\Livewire::scripts(); ?>

  <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/Documents/Pembelajaran-2/Laravel/Ferry-Dermawan/Laravel-Livewire-Sortable/resources/views/activities.blade.php ENDPATH**/ ?>