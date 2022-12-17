<?php $__env->startPush('styles'); ?>
    <?php echo \Livewire\Livewire::styles(); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="mb-3">
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('product-form')->html();
} elseif ($_instance->childHasBeenRendered('H3j9D9H')) {
    $componentId = $_instance->getRenderedChildComponentId('H3j9D9H');
    $componentTag = $_instance->getRenderedChildComponentTagName('H3j9D9H');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('H3j9D9H');
} else {
    $response = \Livewire\Livewire::mount('product-form');
    $html = $response->html();
    $_instance->logRenderedChild('H3j9D9H', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
                <div class="card">
                    <div class="card-header">Product</div>
                    <div class="card-body">
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('product-table')->html();
} elseif ($_instance->childHasBeenRendered('FTVIjsv')) {
    $componentId = $_instance->getRenderedChildComponentId('FTVIjsv');
    $componentTag = $_instance->getRenderedChildComponentTagName('FTVIjsv');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('FTVIjsv');
} else {
    $response = \Livewire\Livewire::mount('product-table');
    $html = $response->html();
    $_instance->logRenderedChild('FTVIjsv', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        window.addEventListener('productDeleteConfirmation', event => {
            console.log(event);
            Swal.fire({
            title: 'Apakah kamu yakin?',
            text: "Produk"+event.detail.product.name+"akan kamu hapus?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                Livewire.emit('productDestroy');
                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
            }
            })
        })
    </script>
    <script>
        Livewire.on('productStore', ()  => {
            $('#exampleModal').modal('hide');
            $('#editModal').modal('hide');
        })
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/Documents/Pembelajaran-2/Laravel/Ferry-Dermawan/Laravel-Livewire-Crud/resources/views/home.blade.php ENDPATH**/ ?>