<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title><?php echo e($title ?? config('app.name')); ?></title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
   <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><?php echo e(config('app.name')); ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dashboard">Dashboard</a>
            </li>
          </ul>

          <ul class="navbar-nav mb-2 mb-lg-0">
            <?php if(auth()->guard()->guest()): ?>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="register">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login">Login</a>
              </li>
            <?php else: ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?php echo e(Auth::user()->name); ?>

                </a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">View Profile</a></li>
                  <li><a class="dropdown-item" href="<?php echo e(route('profile.edit')); ?>">Edit Profile</a></li>
                  <li><a class="dropdown-item" href="<?php echo e(route('password.edit')); ?>">Update Password</a></li>
                  <li><a class="dropdown-item" href="logout"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a>
                    <form action="logout" method="POST" id="logout-form"><?php echo csrf_field(); ?></form></li>
                </ul>
              </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>
</body>
</html><?php /**PATH /home/abdmalik/Documents/Belajar/Laravel/Parsinta/fortify-auth/resources/views/components/navbar.blade.php ENDPATH**/ ?>