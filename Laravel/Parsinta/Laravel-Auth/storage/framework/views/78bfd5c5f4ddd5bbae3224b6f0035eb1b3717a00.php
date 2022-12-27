<?php $__env->startSection('content'); ?>
   <div class="w-full lg:w-5/12">
      <div class="bg-white shadow p-8 rounder-lg">
         <h1 class="font-medium text-xl mb-5">
            <?php echo e($title); ?>

         </h1>
         <form action="<?php echo e(route('login')); ?>" method="post">
            <?php echo csrf_field(); ?>

            <div class="mb-5">
               <label for="email"class="text-sm mb-2 block font-medium">Email</label>
               <input type="email"class="px-4 py-2 rounded border w-full focus:border-blue-500 focus:outline-none focus:shadow-outline" name="email" id="email">
               <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                   <span role="alert" class="mt-2 text-red-500 block text-sm">
                     <?php echo e($message); ?>

                   </span>
               <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-5">
               <label for="password"class="text-sm mb-2 block font-medium">Password</label>
               <input type="password" class="px-4 py-2 rounded border w-full focus:border-blue-500 focus:outline-none focus:shadow-outline" name="password" id="password">
               <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                   <span role="alert" class="mt-2 text-red-500 block text-sm">
                     <?php echo e($message); ?>

                   </span>
               <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-5 flex items-center">
               <input type="checkbox" name="remember" id="remember" class="mr-2">
               <label for="remember" class="select-none">Remember me</label>
            </div>
            
            <button type="submit" class="px-4 py-2 rounded bg-blue-500 hover:bg-blue-600 text-white transition-colors duration-150 focus:outline-none focus:shadow-outline">
               Login
            </button>
         </form>
      </div>
   </div>
   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/Documents/Pembelajaran-2/Laravel/Parsinta/Auth/resources/views/auth/login.blade.php ENDPATH**/ ?>