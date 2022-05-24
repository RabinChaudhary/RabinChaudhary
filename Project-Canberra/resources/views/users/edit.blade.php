@extends('layouts.app')
@section('title', 'Update Page')
@section('content')


    <div class="container py-5 h-99">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" style="font-weight: bold">Update Your Profile</h3>


                        <form action="{{ route('update') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @if (session()->has('status'))
                                <div class="alert alert-success">
                                    {{ session()->get('status') }}
                                </div>
                            @endif


                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <input type="hidden" name="user_id" value="{{ $user->id }}" />

                                    <div class="form-outline">
                                        <label class="form-label" for="name">Name</label>

                                        <input type="text" id="name" name="name" class="form-control form-control-lg"
                                            value={{ $user->name }} class="@error('name') is-invalid @enderror">
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-md-6 mb-4 pb-2">

                                    <label for="image" class="form-label">Change your picture</label>
                                    <input class="form-control form-control-lg" id="image" name="image"
                                        value="{{ $user->image }}" type="file"
                                        class="@error('image') is-invalid @enderror">
                                    @error('image')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-4 pb-2">
                                    <img src="/storage/images/{{ $user->image }}" style="width:100%; "
                                        alt="{{ $user->image }}">
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4 pb-2">

                                    <div class="form-outline">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" id="email" name="email" value={{ $user->email }}
                                            class="form-control form-control-lg"
                                            class="@error('email') is-invalid @enderror">
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                    </div>

                                </div>
                                <div class="col-md-6 mb-4 pb-2">

                                    <div class="form-outline">
                                        <label class="form-label" for="phone">Phone Number</label>

                                        <input type="text" id="phone" name="phone" value="{{ $user->phone }}"
                                            class="form-control form-control-lg"
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
                                        <label class="form-label" for="phone">Address</label>

                                        <input type="text" id="address" name="address" value="{{ $user->address }}"
                                            class="form-control form-control-lg"
                                            class="@error('address') is-invalid @enderror">
                                        @error('address')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>
                            </div>


                            <div class="mt-4 pt-2">
                                <input class="btn btn-primary btn-lg" type="submit" name="submit_update" id="submit_update"
                                    value="Update" />

                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
