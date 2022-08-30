<?php $__env->startSection('title', 'Checkout'); ?>

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
              <li class="breadcrumb-item">
                Details
              </li>
              <li class="breadcrumb-item active">
                Checkout
              </li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 pl-lg-0">
          <div class="card card-details">
              <?php if($errors->any()): ?>
                  <div class="alert alert-danger">
                      <ul>
                          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <li><?php echo e($error); ?></li>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </ul>
                  </div>
              <?php endif; ?>
            <h1>Who is Going?</h1>
            <p>
              Trip to Ubud, Bali, Indonesia
            </p>
            <div class="attendee">
              <table class="table table-responsive-sm text-center">
                <thead>
                  <tr>
                    <td>Picture</td>
                    <td>Name</td>
                    <td>Nationality</td>
                    <td>Visa</td>
                    <td>Passport</td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  <?php $__empty_1 = true; $__currentLoopData = $item->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                      <tr>
                          <td>
                              <img src="https://ui-avatars.com/api/?name=<?php echo e($detail->username); ?>" height="60" class="rounded-circle"/>
                          </td>
                          <td class="align-middle">
                              <?php echo e($detail->username); ?>

                          </td>
                          <td class="align-middle">
                              <?php echo e($detail->nationality); ?>

                          </td>
                          <td class="align-middle">
                              <?php echo e($detail->is_visa ? '30 Days' : 'N/A'); ?>

                          </td>
                          <td class="align-middle">
                              <?php echo e(\Carbon\Carbon::createFromDate($detail->doe_passport) > \Carbon\Carbon::now() ? 'Active' : 'Inactive'); ?>

                          </td>
                          <td class="align-middle">
                              <a href="<?php echo e(route('checkout-remove', $detail->id)); ?>">
                                  <img src="<?php echo e(url('frontend/images/ic_remove.png')); ?>" alt="" />
                              </a>
                          </td>
                      </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                      <tr>
                          <td colspan="6" class="text-center">
                              No Visitor
                          </td>
                      </tr>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
            <div class="member mt-3">
              <h2>Add Member</h2>
              <form class="form-inline" method="post" action="<?php echo e(route('checkout-create', $item->id)); ?>">
                <?php echo csrf_field(); ?>
                <label for="username" class="sr-only">Name</label>
                <input
                  type="text"
                  name="username"
                  class="form-control mb-2 mr-sm-2"
                  id="inputUsername"
                  placeholder="Username"
                />

              <label for="nationality" class="sr-only">Name</label>
              <input
                  type="text"
                  name="nationality"
                  class="form-control mb-2 mr-sm-2"
                  style="width: 50px;"
                  id="inputNationality"
                  placeholder="Nationality"
              />

                <label for="is_visa" class="sr-only">Visa</label>
                <select
                  name="is_visa"
                  id="inputVisa"
                  class="custom-select mb-2 mr-sm-2"
                  required
                >
                  <option value="" selected>VISA</option>
                  <option value="1">30 Days</option>
                  <option value="0">N/A</option>
                </select>

                <label for="doePassport" class="sr-only"
                  >DOE Passport</label
                >
                <div class="input-group mb-2 mr-sm-2">
                  <input
                    type="text"
                    name="doe_passport"
                    class="form-control datepicker"
                    id="doePassport"
                    placeholder="DOE Passport"
                  />
                </div>

                <button type="submit" class="btn btn-add-now mb-2 px-4">
                  Add Now
                </button>
              </form>
              <h3 class="mt-2 mb-0">Note</h3>
              <p class="disclaimer mb-0">
                You are only able to invite member that has registered in
                Nomads.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card card-details card-right">
            <h2>Checkout Informations</h2>
            <table class="trip-informations">
              <tr>
                <th width="50%">Members</th>
                <td width="50%" class="text-right">
                  <?php echo e($item->details->count()); ?> person
                </td>
              </tr>
              <tr>
                <th width="50%">Additional VISA</th>
                <td width="50%" class="text-right">
                  $ <?php echo e($item->additional_visa); ?>,00
                </td>
              </tr>
              <tr>
                <th width="50%">Trip Price</th>
                <td width="50%" class="text-right">
                  $ <?php echo e($item->travel_package->price); ?>,00 / person
                </td>
              </tr>
              <tr>
                <th width="50%">Sub Total</th>
                <td width="50%" class="text-right">
                  $ <?php echo e($item->transaction_total); ?>,00
                </td>
              </tr>
              <tr>
                <th width="50%">Total (+Unique)</th>
                <td width="50%" class="text-right text-total">
                  <span class="text-blue">$ <?php echo e($item->transaction_total); ?>,</span
                  ><span class="text-orange"><?php echo e(mt_rand(0,99)); ?></span>
                </td>
              </tr>
            </table>

            <hr />
            <h2>Payment Instructions</h2>
            <p class="payment-instructions">
              You will be redirected to another page to pay using GO-PAY
            </p>
              <img src="<?php echo e(url('frontend/images/gopay.png')); ?>" class="w-50">
          </div>
          <div class="join-container">
            <a href="<?php echo e(route('checkout-success', $item->id)); ?>" class="btn btn-block btn-join-now mt-3 py-2">
              Continue to Payment
            </a>
          </div>
          <div class="text-center mt-3">
            <a href="<?php echo e(route('detail', $item->travel_package->slug)); ?>" class="text-muted">
              Cancel Booking
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('prepend-style'); ?>
  <link rel="stylesheet" href="<?php echo e(url('frontend/libraries/gijgo/css/gijgo.min.css')); ?>" />
<?php $__env->stopPush(); ?>

<?php $__env->startPush('addon-script'); ?>
  <script src="<?php echo e(url('frontend/libraries/gijgo/js/gijgo.min.js')); ?>"></script>
  <script>
    $(document).ready(function() {
      $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        uiLibrary: 'bootstrap4',
        icons: {
          rightIcon: '<img src="<?php echo e(url('frontend/images/ic_doe.png')); ?>" />'
        }
      });
    });
  </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.checkout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/Laravel/ramadhan/resources/views/pages/checkout.blade.php ENDPATH**/ ?>