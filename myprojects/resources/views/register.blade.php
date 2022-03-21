@extends('master')

@section('title', 'registration page')
@section('content')

    <div class="container">
        @include('formerrors')
        @include('formsuccess')


        <form method="POST" action="/register">
            {{ csrf_field() }}
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="first_name">First name</label>
                        <input type="text" id="first_name" class="form-control" name="first_name" />
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="last_name">Last name</label>
                        <input type="text" id="last_name" class="form-control" name="last_name" />
                    </div>
                </div>
            </div>
            {{-- email --}}
            <div class="form-outline mb-4">
                <label class="form-label" for="email">Email address</label>
                <input type="email" id="email" class="form-control" name="email" />
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="password">Password</label>
                <input type="password" id="password" class="form-control" name="password" />
            </div>
            {{-- Confirm Password --}}
            <div class="form-outline mb-4">
                <label class="form-label" for="confirm_password">Confirm password</label>
                <input type="password" id="confirm_password" class="form-control" name="confirm_password" />
            </div>
            <div class="form-outline mb-4">

                <label for="inputState">Gender</label>
                <select id="inputState" class="form-control" name="gender">
                    <option selected value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                </select>

            </div>
            <div class="form-outline mb-4">
                <label class="form-label" for="mobile">Mobile</label>
                <input type="text" id="mobile" class="form-control" name="mobile" />
            </div>
            <!-- Submit button -->
            <button type="submit" name="register" class="btn btn-primary btn-block mb-4">Sign up</button>

        </form>
    </div>
@endsection
