<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

    <link href="{{ asset('css/login.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>

    <div class="body-1">

        <nav class="menu" >
            <div class="d-inline-block">
                <img src="https://renscube.files.wordpress.com/2017/10/full-moon.jpg" alt="" width="70" height="70" class="rounded-circle me-2">
                {{-- <strong>{{ Auth::user()->name }}</strong> --}}
            </div>

            <ul>
                <a href="{{ route('dashboard') }}" class="" style="text-decoration: none; color: white;">
                    <li class="icon-dashboard">
                        <i class="fa-solid fa-gauge"></i>
                        <span class="mx-3">Dashboard</span>
                    </li>
                </a >
                <a href="{{ route('products.index') }}" class="" style="text-decoration: none; color: white;">
                    <li class="icon-settings">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span class="mx-3">
                            Products
                        </span>
                    </li>
                </a >
                <a href="{{ route('testimonials.index') }}" class="" style="text-decoration: none; color: white;">
                    <li class="icon-settings">
                        <i class="fa-solid fa-calendar-minus"></i>
                        <span class="mx-3">Testimonial</span>
                    </li>
                </a>
                <a href="{{ route('articles.index') }}" class="" style="text-decoration: none; color: white;">
                    <li class="icon-settings">
                    <i class="fa-solid fa-newspaper"></i>
                        <span class="mx-3">
                            Post / Article
                        </span>
                    </li>
                </a >
                <a href="{{ route('costumers.index') }}" class="" style="text-decoration: none; color: white;">
                    <li class="icon-customers">
                        <i class="fa-brands fa-intercom"></i>
                        <span class="mx-3">Costumers</span>
                    </li>
                </a>
                <a href="{{ route('stories.index') }}" class="" style="text-decoration: none; color: white;">
                    <li class="icon-settings">
                        <i class="fas fa-book"></i>
                        <span class="mx-3">Story</span>
                    </li>
                </a>
                <a href="{{ route('officers.index') }}" class="" style="text-decoration: none; color: white;">
                    <li class="icon-settings">
                        <i class="fa-solid fa-building"></i>
                        <span class="mx-3">Officers</span>
                    </li>
                </a>
                <a class="" href="{{ route('logout') }}" style="text-decoration: none; color: white;">
                    <li class="icon-settings">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        <span class="mx-3">Logout</span>
                    </li>
                </a>
            </ul>

        </nav>

        <div class="container">
            @yield('content')
        </div>

    </div>

    @stack('scripts')

</body>
</html>
