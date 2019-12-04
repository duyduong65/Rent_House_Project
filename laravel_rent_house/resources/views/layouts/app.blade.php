<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Hotel Template">
    <meta name="keywords" content="Hotel, unica, creative, html">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
{{--    <link rel="stylesheet" href="{{asset('storage/css/bootstrap.min.css')}}" type="text/css">--}}
    <link rel="stylesheet" href="{{asset('storage/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('storage/css/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('storage/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('storage/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('storage/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('storage/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('storage/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('storage/css/style.css')}}" type="text/css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<script src="{{asset('storage/js/jquery-3.3.1.min.js')}}"></script>
{{--<script src="{{asset('storage/js/bootstrap.min.js')}}"></script>--}}
<script src="{{asset('storage/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('storage/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('storage/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('storage/js/jquery.slicknav.js')}}"></script>
<script src="{{asset('storage/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('storage/js/main.js')}}"></script>
</html>
