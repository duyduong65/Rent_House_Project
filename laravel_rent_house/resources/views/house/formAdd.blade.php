@extends('layouts.app')
@section('content')

    <body style="background: url({{url('storage/img/hero-bg.jpg')}}); background-size: cover">
    <div class="main mt-5">
        <div class="container">
            <div class="card bg-light mb-3" style="max-width: 100%;">
                <div class="card-header">
                    <p class="newhouses"> NEW HOUSES</p>
                </div>
                <form method="POST" action="{{route('houses.add')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-5 offset-1">
                            <div class="form-group">
                                <label class="label" for="exampleInputEmail1">NAME :</label>
                                <input type="text" placeholder="Enter Name House" name="name" class="form-control"
                                       id="exampleInputEmail1" aria-describedby="emailHelp">
                                @if($errors->has('name'))
                                    <p class="text-danger">{{$errors->first('name')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="label" for="exampleInputEmail1">CITY :</label>
                                <select class="form-control" name="city_id" id="">
                                    @foreach($cities as $city)
                                        <option value="{{$city->id}}">{{$city->name}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('city'))
                                    <p class="text-danger">{{$errors->first('city')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="label" for="exampleInputEmail1">ADDRESS :</label>
                                <input type="text" placeholder="Enter Address House" name="address" class="form-control"
                                       id="exampleInputEmail1" aria-describedby="emailHelp">
                                @if($errors->has('address'))
                                    <p class="text-danger">{{$errors->first('address')}}</p>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-lg-4 offset-2">
                                    <div class="form-group">
                                        <label class="label" for="exampleInputEmail1">KIND OF HOUSE :</label>
                                        <select class="form-control" name="kindHouse">
                                            <option>Home Stay</option>
                                            <option>Hotel</option>
                                            <option>Family Home</option>
                                        </select>
                                    </div>
                                    @if($errors->has('kindHouse'))
                                        <p class="text-danger">{{$errors->first('kindHouse')}}</p>
                                    @endif
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="label" for="exampleInputEmail1">KIND OF ROOM :</label>
                                        <select class="form-control" name="kindRoom">
                                            <option>SOLO</option>
                                            <option>COUPLE</option>
                                            <option>FAMILY</option>
                                        </select>
                                        @if($errors->has('kindRoom'))
                                            <p class="text-danger">{{$errors->first('kindRoom')}}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="label" for="exampleInputEmail1">NUMBER BEDROOM :</label>
                                <input type="number" name="numBedroom" placeholder="Enter Number Bedroom"
                                       class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                @if($errors->has('numBedroom'))
                                    <p class="text-danger">{{$errors->first('numBedroom')}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label class="label" for="exampleInputEmail1">NUMBER BATHROOM :</label>
                                <input type="number" name="numBathroom" placeholder="Enter Number Bathroom"
                                       class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                @if($errors->has('numBathroom'))
                                    <p class="text-danger">{{$errors->first('numBathroom')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="label" for="exampleInputEmail1">DESCRIPTION :</label>
                                <textarea class="form-control" placeholder="Enter Description" name="description"
                                          id="exampleFormControlTextarea1" rows="3"></textarea>
                                @if($errors->has('description'))
                                    <p class="text-danger">{{$errors->first('description')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="label" for="exampleInputEmail1">PRICE :</label>
                                <input type="number" name="price" placeholder="Enter Price" class="form-control"
                                       id="exampleInputEmail1"
                                       aria-describedby="emailHelp">
                                @if($errors->has('price'))
                                    <p class="text-danger">{{$errors->first('price')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="label" for="exampleInputEmail1">IMAGE :</label>
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                @if($errors->has('image'))
                                    <p class="text-danger">{{$errors->first('image')}}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div style="text-align: right; padding-right: 100px">
                        <button style="width: 80px" type="submit" class="btn btn-primary">UP</button>
                        <a class="btn btn-dark" href="{{route('home')}}">CANCEL</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
    </body>
@endsection
