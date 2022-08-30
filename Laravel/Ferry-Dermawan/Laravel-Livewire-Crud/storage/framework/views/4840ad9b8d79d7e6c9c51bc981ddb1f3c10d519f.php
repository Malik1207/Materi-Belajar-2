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
} elseif ($_instance->childHasBeenRendered('RWLt9o4')) {
    $componentId = $_instance->getRenderedChildComponentId('RWLt9o4');
    $componentTag = $_instance->getRenderedChildComponentTagName('RWLt9o4');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('RWLt9o4');
} else {
    $response = \Livewire\Livewire::mount('product-form');
    $html = $response->html();
    $_instance->logRenderedChild('RWLt9o4', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
} elseif ($_instance->childHasBeenRendered('5d31ZtA')) {
    $componentId = $_instance->getRenderedChildComponentId('5d31ZtA');
    $componentTag = $_instance->getRenderedChildComponentTagName('5d31ZtA');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('5d31ZtA');
} else {
    $response = \Livewire\Livewire::mount('product-table');
    $html = $response->html();
    $_instance->logRenderedChild('5d31ZtA', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/livewire-crud/resources/views/home.blade.php ENDPATH**/ ?>