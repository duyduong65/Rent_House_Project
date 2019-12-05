@extends('layouts.app')
@section('content')
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="./index.html"><img src="{{asset('storage/img/logo.png')}}" alt=""></a>
                </div>
                <div class="nav-right">
                    <!-- Button trigger modal -->
                    @guest
                        <li class="nav-item">
                            <button type="button" data-backdrop="false" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal">
                                Login
                            </button>

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
                                                    <div class="col-md-8 offset-md-4">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <button type="submit" class="btn btn-primary">
                                                                    {{ __('Login') }}
                                                                </button>
                                                            </div>
                                                            <div class="col-md-8">
                                                            @if (Route::has('register'))

                                                                <!-- Button trigger modal -->
                                                                    <button type="button" class="btn btn-success"
                                                                            data-backdrop="false" data-toggle="modal"
                                                                            data-target="#staticBackdrop">
                                                                        Register
                                                                    </button>

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
                                                                                        <span
                                                                                            aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">

                                                                                    <form method="POST"
                                                                                          action="{{ route('register') }}">
                                                                                        @csrf

                                                                                        <div class="form-group row">
                                                                                            <label for="name"
                                                                                                   class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                                                                            <div class="col-md-6">
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
                                                                                                <button type="button"
                                                                                                        class="btn btn-secondary m-4"
                                                                                                        data-dismiss="modal">
                                                                                                    Close
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
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </li>
                    @else
                        <li class="nav-item dropdown">
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

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest

                </div>
                {{--                <div class="nav-right">--}}
                {{--                   --}}
                {{--                </div>--}}
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="./index.html">Home</a></li>
                        <li><a href="./about-us.html">About</a></li>
                        <li><a href="rooms.html">Rooms</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="drop-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="rooms.html">Rooms</a></li>
                                <li><a href="services.html">Services</a></li>
                            </ul>
                        </li>
                        <li><a href="./blog.html">News</a></li>
                        <li><a href="./contact.html">Contact</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Area Section Begin -->
    <section class="hero-area set-bg" data-setbg="{{asset('storage/img/hero-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="hero-text">
                        <h1>A Luxury Stay</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Area Section End -->

    <!-- Search Filter Section Begin -->
    <section class="search-filter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form action="#" class="check-form">
                        <h4>Check Availability</h4>
                        <div class="datepicker">
                            <p>From</p>
                            <input type="text" class="datepicker-1" value="dd / mm / yyyy">
                            <img src="{{asset('storage/img/calendar.png')}}" alt="">
                        </div>
                        <div class="datepicker">
                            <p>To</p>
                            <input type="text" class="datepicker-2" value="dd / mm / yyyy">
                            <img src="{{asset('storage/img/calendar.png')}}" alt="">
                        </div>
                        <div class="room-quantity">
                            <div class="single-quantity">
                                <p>Adults</p>
                                <div class="pro-qty"><input type="text" value="0"></div>
                            </div>
                            <div class="single-quantity">
                                <p>Children</p>
                                <div class="pro-qty"><input type="text" value="0"></div>
                            </div>
                            <div class="single-quantity last">
                                <p>Rooms</p>
                                <div class="pro-qty"><input type="text" value="0"></div>
                            </div>
                        </div>
                        <div class="room-selector">
                            <p>Room</p>
                            <select class="suit-select">
                                <option>Eg. Master suite</option>
                                <option value="">Double Room</option>
                                <option value="">Single Room</option>
                                <option value="">Special Room</option>
                            </select>
                        </div>
                        <button type="submit">Go</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Search Filter Section End -->

    <!-- Intro Text Section Begin -->
    <section class="intro-section spad">
        <div class="container">
            <div class="row intro-text">
                <div class="col-lg-6">
                    <div class="intro-left">
                        <div class="section-title">
                            <span>a memorable holliday</span>
                            <h2>A great stay in a<br/> lovely hotel.</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                            viverra maecenas. Donec in sodales dui, a blandit nunc. Pellentesque id eros venenatis,
                            sollicitudin neque sodales, vehicula nibh. Nam massa odio, porttitor vitae efficitur non,
                            ultricies volutpat tellus.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="intro-right">
                        <p>Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra.</p>
                        <a href="#" class="primary-btn">Make a Reservation</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Intro Text Section End -->

    <!-- Facilities Section Begin -->
    <section class="facilities-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="facilities-item set-bg" data-setbg="{{asset('storage/img/faci-1.jpg')}}">
                        <div class="fi-title">
                            <h2>Luxury Suite Room</h2>
                            <p>From $399</p>
                        </div>
                        <div class="fi-features">
                            <div class="fi-info">
                                <i class="flaticon-019-television"></i>
                                <p>Smart TV</p>
                            </div>
                            <div class="fi-info">
                                <i class="flaticon-029-wifi"></i>
                                <p>High Wi-fii</p>
                            </div>
                            <div class="fi-info">
                                <i class="flaticon-003-air-conditioner"></i>
                                <p>AC</p>
                            </div>
                            <div class="fi-info">
                                <i class="flaticon-036-parking"></i>
                                <p>Parking</p>
                            </div>
                            <div class="fi-info">
                                <i class="flaticon-007-swimming-pool"></i>
                                <p>Pool</p>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">Make a Reservation</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="facilities-item set-bg fi-right" data-setbg="{{asset('storage/img/faci-2.jpg')}}">
                        <div class="fi-title">
                            <h2>Infinity Pool</h2>
                            <p>For all our guests</p>
                        </div>
                        <a href="#" class="primary-btn">Make a Reservation</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Facilities Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2>Guestbook</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="testimonial-item">
                        <div class="ti-time">
                            02 / 02 / 2019
                        </div>
                        <h4>We loved our stay</h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiselit. Vivamus libero mauris, bibendum eget
                            sapien ac, ultrices rhoncus ipsum. Donec nec sapien in urna fermentum ornare.</p>
                        <div class="ti-author">
                            <div class="author-pic">
                                <img src="{{asset('storage/img/author-1.png')}}" alt="">
                            </div>
                            <div class="author-text">
                                <h6>JOHN DOE <span>Madrid</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-item">
                        <div class="ti-time">
                            02 / 02 / 2019
                        </div>
                        <h4>I will come back again</h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Ipsum dolor sit amet, consectetur adipiselit. Vivamus libero mauris, bibendum eget sapien ac,
                            ultrices rhoncus ipsum. Donec nec sapien in urna fermentum ornare.</p>
                        <div class="ti-author">
                            <div class="author-pic">
                                <img src="{{asset('storage/img/author-2.png')}}" alt="">
                            </div>
                            <div class="author-text">
                                <h6>Maria Smith <span>Madrid</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Video Section Begin -->
    <div class="video-section">
        <div class="video-bg set-bg" data-setbg="{{asset('storage/img/video-bg.jpg')}}"></div>
        <div class="container">
            <div class="video-text set-bg" data-setbg="{{asset('storage/img/video-inside-bg.jpg')}}">
                <a href="https://www.youtube.com/watch?v=j56YlCXuPFU" class="pop-up"><i class="fa fa-play"></i></a>
            </div>
        </div>
    </div>
    <!-- Video Section End -->

    <!-- Home Page About Section Begin -->
    <section class="homepage-about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-title">
                            <h2>“Customers love our <br/>facilities”</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus libero mauris, bibendum eget
                            sapien ac, ultrices rhoncus ipsum. Donec nec sapien in urna fermentum ornare. Morbi vel
                            ultrices leo. Sed eu turpis eu arcu vehicula fringilla ut vitae orci. Suspendisse maximus
                            malesuada. </p>
                        <a href="#" class="primary-btn">Make a Reservation</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="about-img">
                                <img src="{{asset('storage/img/home-about-1.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-img">
                                <img src="{{asset('storage/img/home-about-2.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-img">
                                <img src="{{asset('storage/img/home-about-3.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-img">
                                <img src="{{asset('storage/img/home-about-4.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Page About Section End -->

    <!-- Footer Section Begin -->
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
@endsection
