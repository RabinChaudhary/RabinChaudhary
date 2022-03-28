@extends('master')

@section('title', 'registraion page')
@section('content')

    <div class="container">


        @include('formerrors')


        <form id="regform" method="POST" action="/register">
            {{ csrf_field() }}
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="first_name">First name</label>
                        <input type="text" id="first_name" class="form-control" name="first_name" />
                        <span class="error-msg center error-text"></span>

                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="last_name">Last name</label>
                        <input type="text" id="last_name" class="form-control" name="last_name" />
                        <span class="error-msg center error-text"></span>

                    </div>
                </div>
            </div>
            {{-- email --}}
            <div class="form-outline mb-4">
                <label class="form-label" for="email">Email address</label>
                <input type="email" id="email" class="form-control" name="email" />
                <span class="error-msg center error-text"></span>

            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="password">Password</label>
                <input type="password" id="password" class="form-control" name="password" />
                <span class="error-msg center error-text"></span>

            </div>
            {{-- Confirm Password --}}
            <div class="form-outline mb-4">
                <label class="form-label" for="confirm_password">Confirm password</label>
                <input type="password" id="confirm_password" class="form-control" name="confirm_password" />
                <span class="error-msg center error-text"></span>

            </div>
            <div class="form-outline mb-4">

                <label for="inputState">Gender</label>
                <select id="inputState" class="form-control" name="gender" id="gender">
                    <option selected value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                </select>
                <span class="error-msg center error-text"></span>


            </div>
            <div class="form-outline mb-4">
                <label class="form-label" for="mobile">Mobile</label>
                <input type="text" id="mobile" class="form-control" name="mobile" />
                <span class="error-msg center error-text"></span>
            </div>


            <!-- Submit button -->
            <button type="submit" name="register" id="reg_submit" class="btn btn-primary btn-block mb-4">Sign up</button>

        </form>

        <script>
            $(document).ready(function() {
                $("#regform").validate({
                    rules: {
                        first_name: "required",
                        last_name: "required",
                        email: "required",
                        mobile: "required",
                        password: "required",
                        confirm_Password: "required",
                        gender: "required",
                    },
                    messages: {
                        first_name: "First name is required",
                        last_name: "Last name is required",
                        email: "Email is required",
                        mobile: "Phone number is required and minumum 10 digits",
                        password: "Password is required",
                        confirm_Password: "Confirm password is required and should be same with the password",
                        gender: "Please select the gender",
                    },
                });
            });
        </script>
    </div>
@endsection
