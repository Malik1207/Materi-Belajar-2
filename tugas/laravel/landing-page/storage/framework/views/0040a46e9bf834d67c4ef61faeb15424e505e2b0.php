<?php $__env->startSection('content'); ?>

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<form action="<?php echo e(route('products.store')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

     <div class="my-3">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="color: black">Name:</strong>
                <input type="text" name="name" class="form-control my-1" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="color: black">Category:</strong>
                
                <select class="form-select my-1" aria-label="Default select example" name="category" value="<?php echo e(old('category')); ?>" >
                    <option>Mesin Makanan</option>
                    <option>Mesin Minuman</option>
                    <option>Mesin Industri</option>
                    <option>Mesin Limbah</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="color: black">Type:</strong>
                
                <select class="form-select my-1" aria-label="Default select example" name="type" value="<?php echo e(old('type')); ?>" >
                    <option>A0001</option>
                    <option>A0002</option>
                    <option>A0003</option>
                    <option>A0004</option>
                    <option>A0005</option>
                    <option>A0006</option>
                    <option>A0007</option>
                    <option>A0008</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="color: black">Price:</strong>
                <input type="number" name="price" class="form-control my-1" placeholder="Price">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="color: black">Detail:</strong>
                <textarea name="detail" class="my-editor form-control" id="my-editor" cols="30" rows="10"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="color: black">Image:</strong>
                <input type="file" name="image" class="form-control my-1" placeholder="image">
            </div>
        </div>
        <div class="mx-3">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-success" href="<?php echo e(route('products.index')); ?>"> Back</a>
        </div>
    </div>

</form>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('ckeditor/ckeditor.js')); ?>"></script>
<script>
    CKEDITOR.replace('my-editor');
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('..dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/Documents/Belajar/Laravel/AngkatanAli/landing-page/resources/views/products/create.blade.php ENDPATH**/ ?>