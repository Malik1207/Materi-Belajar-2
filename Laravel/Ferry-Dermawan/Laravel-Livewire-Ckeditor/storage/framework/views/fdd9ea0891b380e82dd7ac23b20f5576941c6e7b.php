<?php $__env->startPush('styles'); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="//cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
    <?php echo \Livewire\Livewire::styles(); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
   <h1>Livewire CKEDITOR</h1>
   <hr>
   <div class="row">
    <div class="col-md-8">
      <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('my-editor')->html();
} elseif ($_instance->childHasBeenRendered('H0dp2pX')) {
    $componentId = $_instance->getRenderedChildComponentId('H0dp2pX');
    $componentTag = $_instance->getRenderedChildComponentTagName('H0dp2pX');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('H0dp2pX');
} else {
    $response = \Livewire\Livewire::mount('my-editor');
    $html = $response->html();
    $_instance->logRenderedChild('H0dp2pX', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/livewire-ckeditor/resources/views/tutorial.blade.php ENDPATH**/ ?>