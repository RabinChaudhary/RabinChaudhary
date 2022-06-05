@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Add Users</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="">Users Management</a></li>
                        <li class="breadcrumb-item active">Add Users</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">

            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Add Users</h4>
                    <p class="card-title-desc">Yo can add new Users.</p>


                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between ms-8" style="z-index: -1;">
                        <h1 class="h3 mb-0 text-gray-800">Add Users</h1>
                        <a href="{{ route('admin.dashboard') }}"
                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-arrow-left fa-sm text-white-50"></i> Back</a>
                    </div>


                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Add New User</h6>

                        </div>
                        <div class="card-body">

                            <form action="{{ route('users.save') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                @if (session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif

                                {{-- @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif --}}

                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <label class="form-label" for="firstName">Full Name</label>

                                            <input type="text" id="name" name="name" class="form-control form-control-lg"
                                                class="@error('name') is-invalid @enderror">
                                            @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <label class="form-label" for="email">Email</label>

                                            <input type="email" id="email" name="email" class="form-control form-control-lg"
                                                class="@error('email') is-invalid @enderror">
                                            @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline datepicker w-100">
                                            <label for="address" class="form-label">Address</label>

                                            <input type="text" name="address" class="form-control form-control-lg"
                                                id="address" class="@error('address') is-invalid @enderror">
                                            @error('address')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>


                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <label class="form-label" for="phone">Phone Number</label>

                                            <input type="text" id="phone" name="phone" class="form-control form-control-lg"
                                                class="@error('phone') is-invalid @enderror">
                                            @error('phone')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>


                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <label class="form-label" for="password">Password</label>
                                            <input type="password" id="password" name="password"
                                                class="form-control form-control-lg"
                                                class="@error('password') is-invalid @enderror">
                                            @error('password')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <label class="form-label" for="password">Confirm Password</label>
                                            <input type="password" id="confirm_password"
                                                class="form-control form-control-lg" name="password_confirmation">


                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">
                                        <label for="profile_picture" class="form-label">Upload your picture</label>
                                        <input class="form-control form-control-lg" id="image"
                                            name="image" type="file"
                                            class="@error('image') is-invalid @enderror">
                                        @error('image')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">
                                        <label for="stats" class="form-label">Status</label>
                                        <input class="form-control form-control-lg" id="stats"
                                            name="status" type="text" value="active">
                                            
                                    </div>
                                </div>



                                <div class="mt-4 pt-2">
                                    <input class="btn btn-primary btn-lg" type="submit" name="submit_register"
                                        id="submit_register" value="Submit" />
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
