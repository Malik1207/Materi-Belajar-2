<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Belajar view blade</h1>
    Nama : <?php echo e($nama); ?> <br>

    
    

    


    <?php $__empty_1 = true; $__currentLoopData = $score; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        nilai : <?php echo e($item); ?> <br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        tidak ada nilai <br>
    <?php endif; ?>


    <?php
        $i = 0;
    ?>
    <?php while($i < 10): ?>
        <?php echo e($i); ?>

        <?php
            $i++
        ?>
    <?php endwhile; ?>


    


    

    <br>

    <?php echo e(date(now())); ?>

</body>
</html><?php /**PATH /home/abdmalik/Laravel/6.blade-view/resources/views//siswa.blade.php ENDPATH**/ ?>