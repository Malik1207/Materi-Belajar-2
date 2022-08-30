<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home Validation</title>
    </head>
    <body>
        <section>
            <?php if($errors->any()): ?>
            <div>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php endif; ?>

            <form id="submit" action="<?php echo e(route('school.input')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('POST'); ?>
                <label for="name">School Name</label>
                <br>
                <input type="text" placeholder="School Name" name="name">
                <br>

                <br>
                <label for="head">Head Office</label>
                <br>
                <input type="text" placeholder="Head Office" name="head">
                <br>

                <br>
                <label for="build">Build Date</label>
                <br>
                <input type="date" placeholder="Build Date" name="build">
                <br>

                <br>
                <label for="address">Address</label>
                <br>
                <textarea name="address"></textarea>
                <br>
            </form>
            <br>
            <button for="submit" form="submit">Submit</button>
        </section>

    </body>
</html>
<?php /**PATH /home/sendal/formvalidation/resources/views/school.blade.php ENDPATH**/ ?>