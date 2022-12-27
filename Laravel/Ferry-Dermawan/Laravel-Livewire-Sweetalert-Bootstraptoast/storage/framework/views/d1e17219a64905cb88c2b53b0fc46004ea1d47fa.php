<?php $__env->startPush('styles'); ?>
    <?php echo \Livewire\Livewire::styles(); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Livewire.on('success', data => {
            console.log(data.pesan);
            Swal.fire({
                title: 'Ini Notifikasi!',
                text: data.pesan,
                icon: 'success',
                confirmButtonText: 'Cool'
            })
        })
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Livewire Sweetalert & Bootstrap Toast</h1>
        <div class="toast-container position-fixed bottom-0 end-0 p-3" style="z-index: 11;">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">Bootstrap</strong>
                    <small>11 mins ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body" id="alert-message">
                </div>
            </div>
        </div>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('tutorial')->html();
} elseif ($_instance->childHasBeenRendered('MgUlPjA')) {
    $componentId = $_instance->getRenderedChildComponentId('MgUlPjA');
    $componentTag = $_instance->getRenderedChildComponentTagName('MgUlPjA');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('MgUlPjA');
} else {
    $response = \Livewire\Livewire::mount('tutorial');
    $html = $response->html();
    $_instance->logRenderedChild('MgUlPjA', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/livewire-sweetalert-bootstraptoast/resources/views/home.blade.php ENDPATH**/ ?>