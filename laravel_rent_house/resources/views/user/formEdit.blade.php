@extends('layouts.app')
@section('content')
    <br><br><br><br><br><br>

    <div class="container">
        <div class="card bg-light mb-3" style="max-width: 100%;">
            <div class="card-header">
                <p style="text-align: center;font-size: 60px;font-weight: bold;font-family: 'Apple Color Emoji';color: blueviolet; padding-top: 10px">
                    UPDATE INFORMATION
                </p>
            </div>
            <form method="POST" action="{{route('updateProfile', $user->id)}}">
                @csrf
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                    <div class="col-6 col-md-6">
                        <input id="widthInput" type="text" class="form-control @error('name') is-invalid @enderror"
                               name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                    <div class="col-md-6">
                        <input id="widthInput" type="email" class="form-control @error('email') is-invalid @enderror"
                               name="email" value="{{$user->email}}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="phone" class="col-md-4 col-form-label text-md-right">Phone</label>
                    <div class="col-6 col-md-6">
                        <input id="widthInput" type="text" class="form-control @error('phone') is-invalid @enderror"
                               name="phone" value="{{ $user->phone}}" required autocomplete="phone" autofocus>
                        @error('phone')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="idCard" class="col-md-4 col-form-label text-md-right">ID Card</label>
                    <div class="col-6 col-md-6">
                        <input id="widthInput" type="text" class="form-control @error('idCard') is-invalid @enderror"
                               name="idCard" value="{{$user->idCard }}" required autocomplete="idCard" autofocus>
                        @error('idCard')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="dob" class="col-md-4 col-form-label text-md-right">Date of birth</label>
                    <div class="col-6 col-md-6">
                        <input id="widthInput" type="date" class="form-control @error('dob') is-invalid @enderror"
                               name="dob"
                               value="{{$user->dob }}" required autocomplete="dob" autofocus>
                        @error('dob')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="gender" class="col-md-4 col-form-label text-md-right">Gender</label>
                    <div class="col-6 col-md-6">
                        <select id="widthInput" class="custom-select my-1 mr-sm-2 @error('gender') is-invalid @enderror"
                                name="gender"
                                autocomplete="gender" autofocus>
                            <option @if($user->gender=="Male") selected @endif>Male</option>
                            <option @if($user->gender=="Female") selected @endif>Female</option>
                        </select>
                        @error('gender')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
                    <div class="col-6 col-md-6">
                        <input id="widthInput" type="text" class="form-control @error('address') is-invalid @enderror"
                               name="address" value="{{ $user->address}}" required autocomplete="address" autofocus>
                        @error('address')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
                <div style="text-align: center">
                    <button type="submit" class="btn btn-primary m-2">UPDATE</button>
                    <a class="btn btn-dark" href="{{route('home')}}">CANCLE</a>
                </div>
            </form>
        </div>
    </div>

@endsection
