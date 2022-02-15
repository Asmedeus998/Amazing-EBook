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
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

            <div class="container-fluid">

                <div class="row bg-primary">
                    <div class="col-6 d-flex justify-content-end  ">
                        <a class="navbar-brand text-center text-black d-flex justify-content-center " href="{{ url('/') }}">
                            Amazing E-Book
                        </a>
                    </div>
                    <div class="col-6">
                        <nav class="navbar navbar-expand-md navbar-light bg-primary ">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse text-md-center" id="navbarSupportedContent">
                                <!-- Left Side Of Navbar -->
                                {{-- <ul class="navbar-nav me-auto">

                                </ul> --}}

                                <!-- Right Side Of Navbar -->
                                <ul class="navbar-nav ms-auto bg-warning">
                                    <!-- Authentication Links -->
                                    @guest

                                    @if (Route::has('register') && Request::is('/'))
                                        <li class="nav-item ml-2 ">
                                            <a class="nav-link" href="{{ route('register') }}">Sign Up</a>
                                        </li>
                                    @endif
                                        @if (Route::has('login') && Request::is('/'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">Log In</a>
                                            </li>
                                        @endif

                                    @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest
                                </ul>
                            </div>
                        </nav>
                    </div>
                  </div>


            </div>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="text-center text-black py-2 fst-italic fixed-bottom bg-primary">
            <h5>&copy;Copyright Amazing E-Book 2022</h5>
        </footer>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
