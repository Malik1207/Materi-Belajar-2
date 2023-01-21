<?php $__env->startSection('content'); ?>
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('messages')->html();
} elseif ($_instance->childHasBeenRendered('jewsS77')) {
    $componentId = $_instance->getRenderedChildComponentId('jewsS77');
    $componentTag = $_instance->getRenderedChildComponentTagName('jewsS77');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('jewsS77');
} else {
    $response = \Livewire\Livewire::mount('messages');
    $html = $response->html();
    $_instance->logRenderedChild('jewsS77', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/livewire-chat/resources/views/chats.blade.php ENDPATH**/ ?>