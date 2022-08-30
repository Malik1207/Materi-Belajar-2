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
      @guest  
      <li>
         <a href="/register" class="px-4 py-5 inline-block">Register</a>
      </li>
      <li>
         <a href="/login" class="px-4 py-5 inline-block">Login</a>
      </li>
      @else
      <li>
         <a href="/profile" class="px-4 py-5 inline-block">{{ Auth::user()->name }}</a>
      </li>
      <li>
         <form action="{{ route('logout') }}" method="POST" class="px-4 py-5 inline-block">
            @csrf
            <button type="submit" class="focus:outline-none">Logout</button>
         </form>
      </li>
      @endguest
   </ul>
</div>