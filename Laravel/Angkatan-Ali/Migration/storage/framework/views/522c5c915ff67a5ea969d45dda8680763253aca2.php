<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Student</h1>
    <table class="container table-striped table table-dark table-hover">
        <tr>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Nilai</th>
        </tr>
        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $students): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td> <?php echo e($students->name); ?> </td>
            <td> <?php echo e($students->jurusan); ?> </td>
            <td> <?php echo e($students->tanggal_lahir); ?> </td>
            <td> <?php echo e($students->alamat); ?> </td>
            <td> <?php echo e($students->nilai); ?> </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html>
<?php /**PATH /home/abdmalik/laravel/migration/resources/views/student.blade.php ENDPATH**/ ?>