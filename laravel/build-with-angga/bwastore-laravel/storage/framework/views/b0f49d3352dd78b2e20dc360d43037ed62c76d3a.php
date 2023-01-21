<nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top" data-aos="fade-down">
		<div class="container">
				<a href="/<?php echo e(route('home')); ?>" class="navbar-brand">
						<img src="/images/logo.svg" alt="Logo" />
				</a>
				<botton class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
						<span class="navbar navbar-toggler-icon"></span>
				</botton>
				<div class="collapse navbar-collapse" id="navbarResponsive">
						<ul class="navbar-nav ml-auto">
								<li class="nav-item">
										<a href="<?php echo e(route('home')); ?>" class="nav-link">Home</a>
								</li>
								<li class="nav-item">
										<a href="<?php echo e(route('categories')); ?>" class="nav-link">Categories</a>
								</li>
								<li class="nav-item">
										<a href="/#" class="nav-link">Reward</a>
								</li>
								<?php if(auth()->guard()->guest()): ?>
								<li class="nav-item">
										<a href="<?php echo e(route('register')); ?>" class="nav-link">Sign Up</a>
								</li>
								<li class="nav-item">
										<a href="<?php echo e(route('login')); ?>" class="btn btn-success nav-link px-4 text-white">Sign In</a>
								</li>
								<?php endif; ?>
						</ul>
						<?php if(auth()->guard()->check()): ?>
								<ul class="navbar-nav d-none d-lg-flex">
            <li class="nav-item dropdown">
              <a
                href="#"
                class="nav-link"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
              >
                <img
                  src="/images/icon-user.png"
                  alt=""
                  class="rounded-circle mr-2 profile-picture"
                />
                Hi, <?php echo e(Auth::user()->name); ?>

              </a>
              <div class="dropdown-menu">
                <a href="<?php echo e(route('dashboard')); ?>" class="dropdown-item">Dashboard</a>
                <a href="<?php echo e(route('dashboard-settings-account')); ?>" class="dropdown-item"
                  >Settings</a
                >
                <div class="dropdown-divider"></div>
                <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
              </div>
              <form action="<?php echo e(route('logout')); ?>" id="logout-form" method="POST" style="display: none;">
                <?php echo csrf_field(); ?>
              </form>
            </li>
            <li class="nav-item">
                <a href="<?php echo e(route('cart')); ?>" class="nav-link d-inline-block mt-2">
                    <?php
                        $carts = \App\Models\Cart::where('users_id', Auth::user()->id)->count();
                    ?>
                    <?php if($carts > 0): ?>
                        <img src="/images/icon-cart-filled.svg" alt="" />
                        <div class="card-badge"><?php echo e($carts); ?></div>
                    <?php else: ?>
                        <img src="/images/icon-cart-empty.svg" alt="" />
                    <?php endif; ?>
                </a>
            </li>
          </ul>
          <ul class="navbar-nav d-block d-lg-none">
            <li class="nav-item">
              <a href="#" class="nav-link"> Hi,<?php echo e(Auth::user()->name); ?></a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link d-inline-block"> Cart </a>
            </li>
          </ul>
						<?php endif; ?>
				</div>
		</div>
</nav>
<?php /**PATH /home/abdmalik1207/Documents/Pembelajaran-2/Laravel/Build-With-Angga/Bwastore-Laravel/resources/views/includes/navbar.blade.php ENDPATH**/ ?>