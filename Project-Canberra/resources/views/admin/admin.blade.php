@extends('layouts.app')
@section('title', 'Admin')
@section('content')
    <div class="container mb-4">
        <div class="mx-auto" style="max-width:40rem; width:100%">
            <div class="bg-white rounded shadow  input-group-lg p-3 mt-5 w-lg-50">
                <div class="login-form p-3">
                    <form action="{{ route('admin') }}" method="post">
                        @if (Session::has('autherror'))
                            <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">
                                {{ Session::get('autherror') }}</p>
                        @endif 
                        @csrf
                        <div class="error-msg center error-text"></div>

                        <h2 class="fs-2 text-primary">Welcome Admin!</h2>
                        <div class="row">

                            <input type="text" placeholder="Email or Username" name="email" id="email"
                                class="form-control my-3 @error('email') is-invalid @enderror" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row">

                            <input type="password" placeholder="Password" name="password" id="password"
                                class="form-control my-3 @error('password') is-invalid @enderror" autofocus>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="d-flex justify-content-lg-end justify-content-center">
                                <button class="btn btn-primary btn-lg w-20">Sign In</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
