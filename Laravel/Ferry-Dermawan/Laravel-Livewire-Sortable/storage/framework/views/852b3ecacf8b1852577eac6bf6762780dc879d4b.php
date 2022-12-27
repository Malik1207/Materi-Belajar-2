<?php $__env->startPush('styles'); ?>
  <?php echo \Livewire\Livewire::styles(); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('todolists')->html();
} elseif ($_instance->childHasBeenRendered('um4vDoe')) {
    $componentId = $_instance->getRenderedChildComponentId('um4vDoe');
    $componentTag = $_instance->getRenderedChildComponentTagName('um4vDoe');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('um4vDoe');
} else {
    $response = \Livewire\Livewire::mount('todolists');
    $html = $response->html();
    $_instance->logRenderedChild('um4vDoe', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
  <?php echo \Livewire\Livewire::scripts(); ?>

  <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/livewire-sortable/resources/views/activities.blade.php ENDPATH**/ ?>