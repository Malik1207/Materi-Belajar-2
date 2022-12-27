<?php $__env->startSection('title'); ?>
    Store Success Page
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="page-content page-success">
      <div class="section-success" data-aos="zoom-in">
        <div class="container">
          <div class="row align-items-center row-login justify-content-center">
            <div class="col-lg-6 text-center">
              <img src="/images/success.svg" alt="" class="mb-4" />
              <h2>Transaction Processed!</h2>
              <p>
                Silahkan tunggu konfirmasi email dari kami dan kami akan
                menginformasikan resi secept mungkin!
              </p>
              <div>
                <a href="/dashboard.html" class="btn btn-success w-50 mt-4">
                  My Dashboard
                </a>
                <a href="/index.html" class="btn btn-signup w-50 mt-2">
                  Go to Shopping
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/Documents/Belajar/Laravel/BuildWithAngga/bwastore-laravel/resources/views/pages/success.blade.php ENDPATH**/ ?>