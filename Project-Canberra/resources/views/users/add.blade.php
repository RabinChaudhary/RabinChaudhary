@extends('layouts.masters')

@section('content')

    <div class="container">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between ms-8" style="z-index: -1;">
            <h1 class="h3 mb-0 text-gray-800">Add Users</h1>
            <a href="{{ route('users.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-arrow-left fa-sm text-white-50"></i> Back</a>
        </div>

        
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add New User</h6>
                @if (Session::has('message'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert">
                        <i class="fa fa-check" aria-hidden="true"></i>
                    </button>
                    <strong>Success !</strong> {{ session('message') }}
                </div>
            @endif
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('addUser') }}" enctype="multipart/form-data">

                    @csrf
                    <div class="form-group row">

                        {{-- Name --}}
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <span style="color:red;">*</span>Name</label>
                            <input type="text" class="form-control form-control-user" id="name" placeholder="Name" required
                                name="name" value="">

                        </div>
                        {{-- Email --}}
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <span style="color:red;">*</span>Email</label>
                            <input type="email" class="form-control form-control-user" id="email" placeholder="Email"
                                required name="email" value="">

                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <span style="color:red;">*</span>Password</label>
                            <input type="password" class="form-control form-control-user" id="password"
                                placeholder="Password" required name="password" value="">

                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <span style="color:red;">*</span>Confirm Password</label>
                            <input type="password" class="form-control form-control-user" id="password"
                                placeholder="Confirm Password" required name="password_confirmation" value="">

                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <span style="color:red;">*</span>Address</label>
                            <input type="address" class="form-control form-control-user" id="address" placeholder="Address"
                                required name="address" value="">

                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <span style="color:red;">*</span>Status</label>
                            <input type="text" class="form-control form-control-user" id="status" placeholder="Status"
                                required name="status" value="{{ __('active') }}">

                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <span style="color:red;">*</span>Profile Picture</label>
                            <input type="file" class="form-control form-control-user" id="image"
                                placeholder="Profile Pictre" required name="image" value="{{ old('image') }}">

                        </div>

                    </div>
                    <button type="submit" class="btn btn-success mt-2 btn-block">
                        Save
                    </button>

                </form>
            </div>
        </div>

    </div>
