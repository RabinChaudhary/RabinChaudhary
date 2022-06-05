@extends('layouts.app')
@section('title', 'register page')
@section('content')
    <div class="container mb-4">
        <div class="mx-auto" style="max-width:50rem; width:100%">
            <div class="bg-white rounded shadow input-group-lg p-3 mt-5 w-lg-75">
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                    <h2 class="fs-2 text-primary">Create New Account</h2>
                    @if (session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif
                    <div class="row">
                        <div class="col-lg-6 col-12">

                            <input id="name" type="text" placeholder="Full Name"
                                class="form-control my-3 @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror


                            <input type="text" placeholder="Phone-number" name="phone" id="phone"  value="{{ old('phone') }}" 
                                class="form-control my-3  @error('phone') is-invalid @enderror" autocomplete="phone">

                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <input id="password" type="password" placeholder="Password"
                                class="form-control my-3 @error('password') is-invalid @enderror" name="password" 
                                autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input id="image" type="file" placeholder="Profile Image"
                                class="form-control my-3 @error('image') is-invalid @enderror" name="image">

                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror


                        </div>
                        <div class="col-lg-6 col-12">
                            <input id="email" type="email" placeholder="Email"
                                class="form-control my-3 @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}"  autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input type="text" placeholder="Address" name="address" id="address"  value="{{ old('address') }}" 
                                class="form-control my-3 @error('address') is-invalid @enderror" autocomplete="address">
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input id="password-confirm" placeholder="Confirm Password" type="password"
                                class="form-control" name="password_confirmation"  autocomplete="new-password">
                        </div>


                        <div class="d-flex justify-content-lg-end justify-content-center mt-2">
                            <button class="btn btn-primary btn-lg w-50">Sign Up</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
