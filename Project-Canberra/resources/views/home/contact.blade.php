<!-- Wrapper container -->
@extends('layouts.app')
@section('content')
    <div class="container my-4">
        <div class="d-grid text-center">
            <p class="text-danger">Write us a message</p>
            <h1>Request a callback</h1>
        </div>
        <form class="needs-validation" novalidate>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Organization's Name</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="Organization's name"
                        value="" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom02">Full name</label>
                    <input type="text" class="form-control" id="validationCustom02" placeholder="Full name" value=""
                        required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6 mb-3">
                    <label for="validationCustomUsername">Email or username</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                        </div>
                        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username"
                            aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom03">Phone Number</label>
                    <input type="text" class="form-control" id="validationCustom03" placeholder="Phone Number" required>
                    <div class="invalid-feedback">
                        Please provide a valid Phone Number.
                    </div>
                </div>
            </div>
            <div class="row">
                <label for="validationCustom04">Message</label>
                <textarea rows="10" class="form-control" id="validationCustom04" placeholder="Message..." required></textarea>
                <div class="invalid-feedback">
                    Please leave us some message.
                </div>
            </div>


            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
            </div>
            <button class="btn btn-primary btn-lg px-5 my-2" type="submit">Submit form</button>
        </form>
    </div>
@endsection
