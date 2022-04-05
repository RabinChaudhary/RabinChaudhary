@extends('master')

@section('title', 'login page')
@section('content')
    <div class="container">


        <form style="width:50%; margin:0 auto; margin-top:8vh;" action="/login" method="POST" id="login-form">

            @include('formsuccess')

            {{-- <div class="error-msg center error-text"></div> --}}

            {{ csrf_field() }}
            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="email">Email address</label>
                <input type="email" name="email" id="email" class="form-control" />
                <span class="error-msg center error-text"></span>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" />
                <span class="error-msg center error-text"></span>
            </div>



            <!-- Checkbox -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="form2Example34" checked />
                <label class="form-check-label" for="form2Example34"> Remember me </label>
            </div>
            <!-- Submit button -->
            <button type="submit" name="login" id="login" class="btn btn-primary btn-block mb-4 mt-4">Sign in</button>
            <div class="text-center">
                <a href="('forgotpassword')">Forgot Password?</a>
                <p>Not a member? <a href="/register">Register</a></p>
            </div>

        </form>

    @endsection
