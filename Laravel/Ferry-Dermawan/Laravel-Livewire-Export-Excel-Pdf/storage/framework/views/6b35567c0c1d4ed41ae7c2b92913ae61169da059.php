<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Livewire Export Excel & Pdf</title>
  <style>
    main {
      font-family: sans-serif;
    }
  </style>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <?php echo \Livewire\Livewire::styles(); ?>

  <?php echo $__env->yieldPushContent('css'); ?>
</head>
<body>
  <main class="container py-5">
    <h1>Livewire Export Excel & Pdf</h1>
    <hr>
    <?php echo $__env->yieldContent('content'); ?>
  </main>
  <?php echo \Livewire\Livewire::scripts(); ?>

  <?php echo $__env->yieldPushContent('js'); ?>
</body>
</html><?php /**PATH /home/abdmalik/Documents/Belajar/Laravel/Ferry Dermawan/livewire-export-excel-pdf/resources/views/layouts/master.blade.php ENDPATH**/ ?>