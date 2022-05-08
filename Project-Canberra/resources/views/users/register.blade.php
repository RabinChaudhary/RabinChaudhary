@extends('layouts.app')
@section('title', 'register page')
@section('content')
    <div class="container mb-4">
        <div class="mx-auto" style="max-width:50rem; width:100%">
            <div class="bg-white rounded shadow  input-group-lg p-3 mt-5 w-lg-75">
                <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @if(Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                    @endif
                    @csrf
                    <h2 class="fs-2 text-primary">Create New Account</h2>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <input type="text" placeholder="Full Name" name="name" id="name"
                                class="form-control my-3" autofocus>
                            <input type="text" placeholder="Phone" name="phone" id="phone" class="form-control my-3">
                            <input type="password" placeholder="Password" name="password" id="password"
                                class="form-control my-3">
                                <input type="file" placeholder="Profile Image" name="image" id="image" class="form-control my-3">
                        </div>
                        <div class="col-lg-6 col-12">
                            <input type="email" placeholder="Email" name="email" id="email" class="form-control my-3">
                            <input type="text" placeholder="Address" name="address" id="address" class="form-control my-3">
                            <input type="password" placeholder="Confirm password" name="password_confirmation"
                                id="password_confirmation" class="form-control my-3">
                                <div class="d-flex justify-content-lg-end justify-content-center">
                                    <button class="btn btn-primary btn-lg w-50">Sign Up</button>
                                </div>
                        </div> 
                </form>
                <hr class=" mt-3 w-50 mx-auto ">
                <div class="d-flex justify-content-center mt-3 fs-6">
                    <p class="text-center">Already have an account? <a href="{{route('user.login')}}">Login</a></p>
                </div>

            </div>
        </div>
    </div>
@endsection