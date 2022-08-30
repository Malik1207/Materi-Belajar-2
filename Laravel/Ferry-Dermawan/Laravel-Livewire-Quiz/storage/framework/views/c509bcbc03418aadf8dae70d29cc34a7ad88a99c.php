<?php $__env->startPush('styles'); ?>
  <?php echo \Livewire\Livewire::styles(); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('quiz')->html();
} elseif ($_instance->childHasBeenRendered('xfGm9gW')) {
    $componentId = $_instance->getRenderedChildComponentId('xfGm9gW');
    $componentTag = $_instance->getRenderedChildComponentTagName('xfGm9gW');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('xfGm9gW');
} else {
    $response = \Livewire\Livewire::mount('quiz');
    $html = $response->html();
    $_instance->logRenderedChild('xfGm9gW', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
  <?php echo \Livewire\Livewire::scripts(); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/livewire-quiz/resources/views/question.blade.php ENDPATH**/ ?>