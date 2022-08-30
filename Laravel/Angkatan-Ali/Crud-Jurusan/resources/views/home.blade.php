<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('styles/login.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="body-1">

        <nav class="menu" >
            <div class="d-inline-block">
                <img src="https://renscube.files.wordpress.com/2017/10/full-moon.jpg" alt="" width="70" height="70" class="rounded-circle me-2">
                <strong>{{ Auth::user()->name }}</strong>
            </div>

            <ul>
                <li class="icon-dashboard">
                    <i class="fa-solid fa-gauge"></i>
                    <span class="mx-3">Dashboard</span>
                </li>
                <li class="icon-customers">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span class="mx-3">Sales</span>
                </li>
                <li class="icon-users">
                    <i class="fa-solid fa-newspaper"></i>
                    <span class="mx-3">Post / Article</span>
                </li>
                <li class="icon-settings">
                    <i class="fa-solid fa-calendar-minus"></i>
                    <span class="mx-3">Menu</span>
                </li>
                <a href="{{ route('sales.index') }}" class="" style="text-decoration: none; color: white;">
                    <li class="icon-settings">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span class="mx-3">
                            Sales
                        </span>
                    </li>
                </a >
                <li class="icon-settings">
                    <i class="fa-solid fa-gear"></i>
                    <span class="mx-3">Setting</span>
                </li>
            </ul>
            <div class="logout">
                <a id="navbarDropdown" class="nav-link dropdown-toggle text-reset" href="#" role="button"   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ __('Logout') }}
                </a>

                <div class="dropdown-menu dropdown-menu-start" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>

        </nav>

    </div>

    <div class="py-4">
        @yield('content')
    </div>

</body>
</html>
