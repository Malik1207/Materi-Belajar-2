<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Email Verification</div>
                    <div class="card-body">
                       <?php if(session('status')): ?>
                              <div class="alert alert-success" role="alert">
                                Verifikasi email sudah dikirim
                              </div>
                       <?php endif; ?>
                        Untuk mengunjungi halaman ini anda butuh verifikasi email
                        <form action="/email/verification-notification" method="post" class="mt-2">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-primary mt-4">Kirim Ulang</button>
                        </form>
                    </div>
                 </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['title' => 'Email Verification'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/Documents/Belajar/Laravel/Parsinta/fortify-auth/resources/views/auth/verify-email.blade.php ENDPATH**/ ?>