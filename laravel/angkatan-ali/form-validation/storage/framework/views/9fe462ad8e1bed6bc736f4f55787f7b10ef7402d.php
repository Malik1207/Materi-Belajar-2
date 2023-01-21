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

            <form id="submit" action="<?php echo e(route('store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('POST'); ?>
                <label for="name">Nama</label>
                <br>
                <input type="text" placeholder="Name" name="name">
                <br>

                <br>
                <label for="nisn">NISN</label>
                <br>
                <input type="number" placeholder="NISN" name="nisn">
                <br>

                <br>
                <label for="tempat-lahir">Tempat Lahir</label>
                <br>
                <input type="text" placeholder="Tempat Lahir" name="tempat-lahir">
                <br>

                <br>
                <textarea name="alamat"></textarea>
                <br>

                <br>
                <label for="umur">Umur</label>
                <br>
                <input type="number" placeholder="umur" name="umur">
                <br>

                <br>
                <label for="password">Password</label>
                <br>
                <input type="password" placeholder="Password" name="password">
                <br>
            </form>
            <br>
            <button for="submit" form="submit">masukkan</button>
        </section>

    </body>
</html>
<?php /**PATH /home/sendal/formvalidation/resources/views/students/index.blade.php ENDPATH**/ ?>