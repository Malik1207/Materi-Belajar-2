<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo e($title); ?></title>
    </head>
    <body>
        <?php echo $__env->make('/includes/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html><?php /**PATH /home/sendal/laravel/basic_laravel/resources/views//layouts/app.blade.php ENDPATH**/ ?>