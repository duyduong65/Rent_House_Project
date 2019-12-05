@extends('layouts.app')
@section('content')

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="{{asset('storage/img/logonha.jpg')}}" style="height: 80%" alt="">
                </div>
                <div class="signup-form">

                    <form method="POST" action="{{route('houses.add')}}" class="register-form" id="register-form">
                        <h2>NEW HOUSES</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">NAME :</label>
                                <input type="text" name="name" id="name" required/>
                            </div>
                            <div class="form-group">
                                <label for="father_name">KIND OF HOUSE :</label>
                                <input type="text" name="kindHouse" id="father_name" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">KIND OF ROOM :</label>
                            <input type="text" name="kindRoom" id="address" required/>
                        </div>
                        <div class="form-group">
                            <label for="address">CITY :</label>
                            <input type="text" name="city_id" id="address" required/>
                        </div>
                        <div class="form-group">
                            <label for="address">ADDRESS :</label>
                            <input type="text" name="address" id="address" required/>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="state">NUMBER BEDROOM :</label>
                                <input type="text" name="numBedroom" id="name" required/>
                            </div>
                            <div class="form-group">
                                <label for="state">NUMBER BATHROOM :</label>
                                <input type="text" name="numBathroom" id="name" required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="birth_date">DESCRIPTION :</label>
                            <input type="text" name="description" id="birth_date">
                        </div>
                        <div class="form-group">
                            <label for="pincode">PRICE :</label>
                            <input type="text" name="price" id="pincode">
                        </div>
                        <div class="form-group">
                            <label for="email">IMAGE :</label>
                            <input type="file" name="image">
                        </div>
                        <div class="form-submit">
                            <button class="btn btn-primary m-2">ADD</button>
                            <button class="btn btn-dark">CANCEL</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection
