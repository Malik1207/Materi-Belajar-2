<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1px">
        <tr>
            <th>Nama</th>
        </tr>

        <?php $__empty_1 = true; $__currentLoopData = $arrsiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td><?php echo e($data); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p>Tidak ada data</p>
        <?php endif; ?>
    </table>
</body>
</html>
<?php /**PATH /home/sendal/controller/resources/views/pages/siswa.blade.php ENDPATH**/ ?>