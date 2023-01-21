<?php $__env->startSection('title', 'Detail Travel'); ?>

<?php $__env->startSection('content'); ?>
<main>
  <section class="section-details-header"></section>
  <section class="section-details-content">
    <div class="container">
      <div class="row">
        <div class="col p-0">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                Paket Travel
              </li>
              <li class="breadcrumb-item active">
                Details
              </li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 pl-lg-0">
          <div class="card card-details">
            <h1><?php echo e($item->title); ?></h1>
            <p>
              <?php echo e($item->location); ?>

            </p>
            <?php if($item->galleries->count() > 0): ?>
                  <div class="gallery">
                      <div class="xzoom-container">
                          <img
                              src="<?php echo e(Storage::url($item->galleries->first()->image)); ?>"
                              class="xzoom"
                              id="xzoom-default"
                              xoriginal="<?php echo e(Storage::url($item->galleries->first()->image)); ?>"
                          />
                      </div>
                      <div class="xzoom-thumbs">
                          <?php $__currentLoopData = $item->galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <a href="<?php echo e(Storage::url($gallery->image)); ?>">
                                  <img
                                      src="<?php echo e(Storage::url($gallery->image)); ?>"
                                      class="xzoom-gallery"
                                      width="128"
                                      xpreview="<?php echo e(Storage::url($gallery->image)); ?>"
                                  />
                              </a>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </div>
                  </div>
            <?php endif; ?>
            <h2>Tentang Wisata</h2>
            <?php echo $item->about; ?>

            <div class="features row">
              <div class="col-md-4">
                <img
                  src="<?php echo e(url('frontend/images/ic_event.png')); ?>"
                  alt=""
                  class="features-image"
                />
                <div class="description">
                  <h3>Featured Event</h3>
                  <p><?php echo e($item->featured_event); ?></p>
                </div>
              </div>
              <div class="col-md-4 border-left">
                <div class="description">
                  <img
                    src="<?php echo e(url('frontend/images/ic_language.png')); ?>"
                    alt=""
                    class="features-image"
                  />
                  <div class="description">
                    <h3>Language</h3>
                    <p><?php echo e($item->language); ?></p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 border-left">
                <div class="description">
                  <img
                    src="<?php echo e(url('frontend/images/ic_foods.png')); ?>"
                    alt=""
                    class="features-image"
                  />
                  <div class="description">
                    <h3>Foods</h3>
                    <p><?php echo e($item->foods); ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card card-details card-right">
            <h2>Members are going</h2>
            <div class="members my-2">
              <img
                src="<?php echo e(url('frontend/images/member1.jpg')); ?>"
                class="member-image mr-1"
              />
              <img
                src="<?php echo e(url('frontend/images/member2.png')); ?>"
                class="member-image mr-1"
              />
              <img
                src="<?php echo e(url('frontend/images/member3.png')); ?>"
                class="member-image mr-1"
              />
              <img
                src="<?php echo e(url('frontend/images/member4.png')); ?>"
                class="member-image mr-1"
              />
              <img
                src="<?php echo e(url('frontend/images/member5.png')); ?>"
                class="member-image mr-1"
              />
            </div>
            <hr />
            <h2>Trip Informations</h2>
            <table class="trip-informations">
              <tr>
                <th width="50%">Date of Departure</th>
                <td width="50%" class="text-right">
                    <?php echo e(\Carbon\Carbon::create($item->date_of_departure)->format('F n, Y')); ?>

                </td>
              </tr>
              <tr>
                <th width="50%">Duration</th>
                <td width="50%" class="text-right">
                  <?php echo e($item->duration); ?>

                </td>
              </tr>
              <tr>
                <th width="50%">Type</th>
                <td width="50%" class="text-right">
                  <?php echo e($item->type); ?>

                </td>
              </tr>
              <tr>
                <th width="50%">Price</th>
                <td width="50%" class="text-right">
                  $<?php echo e($item->price); ?> / person
                </td>
              </tr>
            </table>
          </div>
          <div class="join-container">
              <?php if(auth()->guard()->check()): ?>
              <form action="<?php echo e(route('checkout_process', $item->id)); ?>" method="post">
                  <?php echo csrf_field(); ?>
                  <button class="btn btn-block btn-join-now mt-3 py-2" type="submit">
                      Join Now
                  </button>
              </form>
              <?php endif; ?>
              <?php if(auth()->guard()->guest()): ?>
                  <a href="<?php echo e(route('login')); ?>" class="btn btn-block btn-join-now mt-3 py-2">
                      Login or Register to Join
                  </a>
              <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('prepend-style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('frontend/libraries/xzoom/src/xzoom.css')); ?>" />
<?php $__env->stopPush(); ?>

<?php $__env->startPush('addon-script'); ?>
    <script src="<?php echo e(asset('frontend/libraries/xzoom/src/xzoom.js')); ?>"></script>
    <script>
      $(document).ready(function() {
        $('.xzoom, .xzoom-gallery').xzoom({
          zoomWidth: 500,
          title: false,
          tint: '#333',
          Xoffset: 15
        });
      });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/Laravel/ramadhan/resources/views/pages/detail.blade.php ENDPATH**/ ?>