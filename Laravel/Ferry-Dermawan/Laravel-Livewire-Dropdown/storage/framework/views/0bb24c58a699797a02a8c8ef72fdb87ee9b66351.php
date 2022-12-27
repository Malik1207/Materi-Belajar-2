<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
            <span>Profile</span>
            <a href="<?php echo e(route('users.edit')); ?>" class="badge bg-warning text-decoration-none text-dark">
              Edit
            </a>
          </div>
          <div class="card-body">
            <div class="mb-2">
              <label for="name">Name</label>
              <input type="text" id="name" class="form-control" value="<?php echo e(Auth::user()->name); ?>" disabled>
            </div>
            <div class="mb-2">
              <label for="email">Email</label>
              <input type="text" id="email" class="form-control" value="<?php echo e(Auth::user()->email); ?>" disabled>
            </div>
            <div class="mb-2">
              <label for="province">Province</label>
              <?php if(Auth::user()->myProvince): ?>
                <input type="text" id="province" class="form-control" value="<?php echo e(Auth::user()->myProvince->name); ?>" disabled>
                <?php else: ?>
                <input type="text" id="province" class="form-control" disabled>
              <?php endif; ?>
            </div>
            <div class="mb-2">
              <label for="city">City</label>
              <?php if(Auth::user()->myCity): ?>
                <input type="text" id="city" class="form-control" value="<?php echo e(Auth::user()->myCity->name); ?>" disabled>
                <?php else: ?>
                <input type="text" id="city" class="form-control" disabled>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/livewire-dropdown/resources/views/users/profile.blade.php ENDPATH**/ ?>