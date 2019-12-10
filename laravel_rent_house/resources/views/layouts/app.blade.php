<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Hotel Template">
    <meta name="keywords" content="Hotel, unica, creative, html">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('storage/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('storage/css/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('storage/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('storage/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('storage/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('storage/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('storage/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('storage/css/style.css')}}">

</head>
<body>
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header Section Begin -->
<header class="header-section">
    <div class="container-fluid">
        <div class="inner-header">
            <div class="logo">
                <a href="{{route('home')}}"><img src="{{asset('storage/img/logo.png')}}" alt=""></a>
            </div>
            <div class="nav-right">
                @guest

                    <div style="float: left" class="mr-3 mt-3">
                        <a href="#" data-backdrop="false" data-toggle="modal"
                           data-target="#exampleModal">
                            Login
                        </a>
                        <div class="modal fade" id="exampleModal" data-backdrop="false" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">LOGIN</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <div class="form-group row">
                                                <label for="email"
                                                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                                <div class="col-md-6">
                                                    <input id="email" type="email"
                                                           class="form-control @error('email') is-invalid @enderror"
                                                           name="email" value="{{ old('email') }}" required
                                                           autocomplete="email" autofocus>

                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                             <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="password"
                                                       class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                <div class="col-md-6">
                                                    <input id="password" type="password"
                                                           class="form-control @error('password') is-invalid @enderror"
                                                           name="password" required autocomplete="current-password">

                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-6 offset-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                               name="remember"
                                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                        <label class="form-check-label" for="remember">
                                                            {{ __('Remember Me') }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row mb-0">
                                                <div class="col-md-8 offset-md-4 row">
                                                    <div class="col-6 col-md-6">
                                                        <button type="submit" class="btn btn-primary">
                                                            {{ __('Login') }}
                                                        </button>
                                                    </div>
                                                    <div class="col-6 col-md-6">
                                                        <a href="redirect/facebook">
                                                            <img
                                                                src="https://img.icons8.com/doodle/30/000000/facebook-new.png">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="float: left" class="mt-3">
                    @if (Route::has('register'))

                        <!-- Button trigger modal -->
                            <a href="#"
                               data-backdrop="false" data-toggle="modal"
                               data-target="#staticBackdrop">
                                Register
                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop"
                                 data-backdrop="false" tabindex="-1"
                                 role="dialog"
                                 aria-labelledby="staticBackdropLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"
                                                id="staticBackdropLabel">
                                                REGISTER</h5>
                                            <button type="button" class="close"
                                                    data-dismiss="modal"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <form method="POST"
                                                  action="{{ route('register') }}">
                                                @csrf

                                                <div class="form-group row">
                                                    <label for="name"
                                                           class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                                    <div class="col-6 col-md-6">
                                                        <input id="name"
                                                               type="text"
                                                               class="form-control @error('name') is-invalid @enderror"
                                                               name="name"
                                                               value="{{ old('name') }}"
                                                               required
                                                               autocomplete="name"
                                                               autofocus>

                                                        @error('name')
                                                        <span
                                                            class="invalid-feedback"
                                                            role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="email"
                                                           class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="email"
                                                               type="email"
                                                               class="form-control @error('email') is-invalid @enderror"
                                                               name="email"
                                                               value="{{ old('email') }}"
                                                               required
                                                               autocomplete="email">

                                                        @error('email')
                                                        <span
                                                            class="invalid-feedback"
                                                            role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="phone"
                                                           class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                                                    <div class="col-6 col-md-6">
                                                        <input id="phone"
                                                               type="text"
                                                               class="form-control @error('phone') is-invalid @enderror"
                                                               name="phone"
                                                               value="{{ old('phone') }}"
                                                               required
                                                               autocomplete="phone"
                                                               autofocus>
                                                        @if($errors->has('phone'))
                                                            <p>{{$errors->first('phone')}}</p>
                                                        @endif

                                                        @error('phone')
                                                        <span
                                                            class="invalid-feedback"
                                                            role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="idCard"
                                                           class="col-md-4 col-form-label text-md-right">{{ __('ID Card') }}</label>

                                                    <div class="col-6 col-md-6">
                                                        <input id="idCard"
                                                               type="text"
                                                               class="form-control @error('idCard') is-invalid @enderror"
                                                               name="idCard"
                                                               value="{{ old('idCard') }}"
                                                               required
                                                               autocomplete="idCard"
                                                               autofocus>

                                                        @error('idCard')
                                                        <span
                                                            class="invalid-feedback"
                                                            role="alert">
                                                                                                     <strong>{{ $message }}</strong>
                                                                                                </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="dob"
                                                           class="col-md-4 col-form-label text-md-right">{{ __('Date of birth') }}</label>

                                                    <div class="col-6 col-md-6">
                                                        <input id="dob"
                                                               type="date"
                                                               class="form-control @error('dob') is-invalid @enderror"
                                                               name="dob"
                                                               value="{{ old('dob') }}"
                                                               required
                                                               autocomplete="dob"
                                                               autofocus>

                                                        @error('dob')
                                                        <span
                                                            class="invalid-feedback"
                                                            role="alert">
                                                                                                     <strong>{{ $message }}</strong>
                                                                                                </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="gender"
                                                           class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                                                    <div class="col-6 col-md-6">
                                                        <select
                                                            class="custom-select my-1 mr-sm-2 @error('gender') is-invalid @enderror"
                                                            name="gender"
                                                            autocomplete="gender"
                                                            autofocus
                                                            id="gender">
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                        @error('gender')
                                                        <span
                                                            class="invalid-feedback"
                                                            role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="address"
                                                           class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                                                    <div class="col-6 col-md-6">
                                                        <input id="address"
                                                               type="text"
                                                               class="form-control @error('address') is-invalid @enderror"
                                                               name="address"
                                                               value="{{ old('address') }}"
                                                               required
                                                               autocomplete="address"
                                                               autofocus>

                                                        @error('address')
                                                        <span
                                                            class="invalid-feedback"
                                                            role="alert">
                                                                                                     <strong>{{ $message }}</strong>
                                                                                                </span>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                    <label for="password"
                                                           class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="password"
                                                               type="password"
                                                               class="form-control @error('password') is-invalid @enderror"
                                                               name="password"
                                                               required
                                                               autocomplete="new-password">

                                                        @error('password')
                                                        <span
                                                            class="invalid-feedback"
                                                            role="alert">
                                                                                                       <strong>{{ $message }}</strong>
                                                                                                 </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label
                                                        for="password-confirm"
                                                        class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                                    <div class="col-md-6">
                                                        <input
                                                            id="password-confirm"
                                                            type="password"
                                                            class="form-control"
                                                            name="password_confirmation"
                                                            required
                                                            autocomplete="new-password">
                                                    </div>
                                                </div>

                                                <div
                                                    class="form-group row mb-0">
                                                    <div
                                                        class="col-md-6 offset-md-4">
                                                        <button type="submit"
                                                                class="btn btn-primary">
                                                            {{ __('Register') }}
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                        <div class="modal-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>

                @else
                    <div style="margin-top: -15px">
                        <li class="nav-item dropdown">
                    </div>
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <a class="dropdown-item"
                           href="{{route('editProfile',\Illuminate\Support\Facades\Auth::user()->id)}}">Edit
                            Profile</a>
                        <a data-target="#exampleModal_1" data-toggle="modal" class="dropdown-item" href="">Change
                            Password</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            @csrf
                        </form>
                    </div>
                @endguest

            </div>
            <nav class="main-menu mobile-menu">
                <ul>
                    <li class="active"><a href="{{route('home')}}">Home</a></li>
                    <li><a href="./about-us.html">Houses</a></li>
                    <li><a href="{{route('houses.list')}}">Rooms</a></li>
                    <li><a href="#">Pages</a>
                        <ul class="drop-menu">
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="">Rooms</a></li>
                            <li><a href="services.html">Services</a></li>
                        </ul>
                    </li>
                    <li><a href="./blog.html">News</a></li>
                    <li><a href="{{route('houses.create')}}">Upload House <i class="fa fa-upload"
                                                                             style="font-size:30px;color:red"></i></a>
                    </li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
        </div>
    </div>
</header>
<!-- Header End -->
<main class="py-4" style="margin-top: -31px">
    @yield('content')
</main>
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="footer-item">
                    <div class="footer-logo">
                        <a href="#"><img src="{{asset('storage/img/logo.png')}}" alt=""></a>
                    </div>
                    <p>Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="footer-item">
                    <h5>Newsletter</h5>
                    <div class="newslatter-form">
                        <input type="text" placeholder="Your Email Here">
                        <button type="submit">Subscribe</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="footer-item">
                    <h5>Contact Info</h5>
                    <ul>
                        <li><img src="{{asset('storage/img/placeholder.png')}}" alt="">1525 Boring Lane,<br/>Los
                            Angeles, CA
                        </li>
                        <li><img src="{{asset('storage/img/phone.png')}}" alt="">+1 (603)535-4592</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <ul>
                        <li class="active"><a href="./index.html">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Rooms</a></li>
                        <li><a href="#">Facilities</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-lg-12 ">
                    <div class="small text-white text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        All rights reserved | This template is made with <i class="fa fa-heart-o"
                                                                            aria-hidden="true"></i> by <a
                            href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                </div>
            </div>

        </div>
    </div>
</footer>

<div class="modal fade" id="exampleModal_1" data-backdrop="false" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-weight: bold; font-size: 20px" class="modal-title" id="exampleModalLabel">CHANGE
                    PASSWORD</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('changePassword') }}">
                    @csrf

                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Old Password</label>
                        <div class="col-md-6">
                            <input id="passwordOld" name="passwordOld" type="password" class="form-control" required
                                   autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>
                        <div class="col-md-6">
                            <input id="passwordNew1" type="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   name="passwordNew1" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Re-enter Password</label>
                        <div class="col-md-6">
                            <input id="passwordNew2" type="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   name="passwordNew2" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-success">
                                Change
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


</body>
<script src="{{asset('storage/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('storage/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('storage/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('storage/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('storage/js/jquery.slicknav.js')}}"></script>
<script src="{{asset('storage/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('storage/js/main.js')}}"></script>

</html>

