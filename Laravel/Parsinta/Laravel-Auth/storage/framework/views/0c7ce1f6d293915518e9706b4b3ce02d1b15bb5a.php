<div class="bg-white shadow flex justify-between">
   <ul class="flex item-center">
      <li>
         <a href="/" class="p-4 inline-block">Home</a>
      </li>
      <li>
         <a href="/dashboard" class="p-4 inline-block">Dashboard</a>
      </li>
   </ul>
   <ul class="flex item-center">
      <?php if(auth()->guard()->guest()): ?>  
      <li>
         <a href="/register" class="px-4 py-5 inline-block">Register</a>
      </li>
      <li>
         <a href="/login" class="px-4 py-5 inline-block">Login</a>
      </li>
      <?php else: ?>
      <li>
         <a href="/profile" class="px-4 py-5 inline-block"><?php echo e(Auth::user()->name); ?></a>
      </li>
      <li>
         <form action="<?php echo e(route('logout')); ?>" method="POST" class="px-4 py-5 inline-block">
            <?php echo csrf_field(); ?>
            <button type="submit" class="focus:outline-none">Logout</button>
         </form>
      </li>
      <?php endif; ?>
   </ul>
</div><?php /**PATH /home/abdmalik/Documents/Belajar/Laravel/Parsinta/auth/resources/views/components/navbar.blade.php ENDPATH**/ ?>