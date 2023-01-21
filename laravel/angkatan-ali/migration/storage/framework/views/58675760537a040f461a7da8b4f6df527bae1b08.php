<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Teacher List</title>
</head>
<body class="container">
    <h1>Teacher List</h1>
    <table class="container table-striped table table-dark table-hover">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Mata Pelajaran</th>
        </tr>
        <?php $__currentLoopData = $teacher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guru): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td> <?php echo e($guru->name); ?> </td>
            <td> <?php echo e($guru->alamat); ?> </td>
            <td> <?php echo e($guru->tanggal_lahir); ?> </td>
            <td> <?php echo e($guru->email); ?> </td>
            <td> <?php echo e($guru->phone); ?> </td>
            <td> <?php echo e($guru->mata_pelajaran); ?> </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html>
<?php /**PATH /home/sendal/laravel/migration/resources/views//teacher.blade.php ENDPATH**/ ?>