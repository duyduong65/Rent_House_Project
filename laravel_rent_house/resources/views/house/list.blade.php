@extends('layouts.app')
@section('content')



    <!-- Hero Area Section Begin -->
    <div class="hero-area set-bg other-page" data-setbg="{{asset('storage/img/house-3.jpg')}}">
    </div>
    <!-- Hero Area Section End -->

    <!-- Search Filter Section Begin -->
    <section class="search-filter other-page-filter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form action="#" class="check-form">
                        <h4>Check Availability</h4>
                        <div class="datepicker">
                            <p>From</p>
                            <input type="text" class="datepicker-1" value="dd / mm / yyyy">
                            <img src="img/calendar.png" alt="">
                        </div>
                        <div class="datepicker">
                            <p>To</p>
                            <input type="text" class="datepicker-2" value="dd / mm / yyyy">
                            <img src="img/calendar.png" alt="">
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

    <!-- Room Section Begin -->
    <section class="room-section">
        <div class="container-fluid">
            @foreach($houses as $house)
            <div class="row mb-2">
                <div class="col-lg-6">
                    <div class="ri-slider-item">
                        <div class="ri-sliders owl-carousel">
                            <div class="single-img set-bg" data-setbg="{{asset('storage/'.$house->image)}}"></div>
                            <div class="single-img set-bg" data-setbg="{{asset('storage/img/rooms/room-2.jpg')}}"></div>
                            <div class="single-img set-bg" data-setbg="{{asset('storage/img/rooms/room-3.jpg')}}"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ri-text">
                        <div class="section-title">
                            <div class="section-title">
                                <span>a memorable holliday</span>
                                <h2>{{$house->name}}</h2>
                            </div>
                            <p>{{$house->description}}</p>
                            <div class="ri-features">
                                <div class="ri-info">
                                    <i class="flaticon-019-television"></i>
                                    <p>Smart TV</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <p>High Wi-fii</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <p>AC</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-036-parking"></i>
                                    <p>Parking</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-007-swimming-pool"></i>
                                    <p>Pool</p>
                                </div>
                            </div>
                            <a href="#" class="primary-btn">Make a Reservation</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- Room Section End -->




@endsection
