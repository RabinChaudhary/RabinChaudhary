@extends('layouts.app')
@section('title', 'register page')
@section('content')
    <div class="container">
        <div class="mx-auto" style="max-width:50rem; width:100%">
            <div class="bg-white rounded shadow  input-group-lg p-3 mt-5 w-lg-75">

                <form action="" method="POST" >
                    <h2 class="fs-2 text-primary">Create New Account</h2>
                    <div class="row">
                        <div class="col">
                            <input type="text" placeholder="First Name" name="firstname" id="firstname"
                                class="form-control my-3" autofocus>
                            <input type="email" placeholder="Email" name="email" id="email" class="form-control my-3">
                            <input type="password" placeholder="Password" name="password" id="password"
                                class="form-control my-3">
                            <input type="number" placeholder="Age" name="aage" id="age" class="form-control my-3">



                        </div>
                        <div class="col">
                            <input type="text" placeholder="Last Name" name="lastname" id="lastname"
                                class="form-control my-3">
                            <input type="date" placeholder="Date of Birth" name="dateofbirth" id="dateofbirth"
                                class="form-control my-3">
                            <input type="password" placeholder="Confirm password" name="password_confirmation"
                                id="password_confirmation" class="form-control my-3">
                            <input type="text" placeholder="Mobile or Phone-number" name="mobile" id="mobile"
                                class="form-control my-3">


                        </div>
                        <div class="d-flex justify-content-lg-end justify-content-center">
                            <button class="btn btn-primary btn-lg w-25">Sign Up</button>
                        </div>
                </form>
                <hr class=" mt-3 w-50 mx-auto ">
                <div class="d-flex justify-content-center mt-3 fs-6">
                    <p>Aready a member? </p> &nbsp; <a class="text-decoration-none" href="{{ url('/') }}">Sign In
                    </a>
                </div>

            </div>
        </div>
    </div>
@endsection