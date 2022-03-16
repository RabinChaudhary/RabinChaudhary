@extends('master')

@section('title', 'login page')
@section('content')
    <form style="width:50%; margin:0 auto; margin-top:8vh;">
        <!-- Email input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form2Example1">Email address</label>
            <input type="email" id="form2Example1" class="form-control" />
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form2Example2">Password</label>
            <input type="password" id="form2Example2" class="form-control" />
        </div>

        <!-- 2 column grid layout for inline styling -->

        <!-- Checkbox -->
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="form2Example34" checked />
            <label class="form-check-label" for="form2Example34"> Remember me </label>
        </div>
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4 mt-4">Sign in</button>
        <div class="text-center">
            <p>Not a member? <a href="/register">Register</a></p>
        </div>

    </form>
@endsection
