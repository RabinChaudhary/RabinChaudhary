@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @push('style')
                <style>
                    .card-img-top {
                        width: 50%;
                        margin: auto;
                    }

                </style>
            @endpush

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            Welcome {{ Auth::user()->name }}
            this is your

            {{ __('You are logged in!') }}
            <div class="d-flex justify-content-center align-items-center">
                <div class="card" style="background-color: rgb(0, 255, 170);">
                    <img src="/storage/images/{{ Auth::user()->image }}" class="card-img-top rounded-circle">
                     <div class="card-body" style="background-color: aquamarine; ">
                        <h2 class="card-title">{{ Auth::user()->name }}</h2>
                        <p class="card-text">Hi, I am {{ Auth::user()->name }}. I am interested in
                            Lorem
                            ipsum dolor sit amet consectetur adipisicing elit. </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class=" list-group-item" style="background-color: rgb(18, 181, 99);">Email:
                        {{ Auth::user()->email }}</li>
                    <li class=" list-group-item" style="background-color: rgb(24, 140, 144);">Phone No:
                        {{ Auth::user()->phone }}
                    </li>
                    <li class="list-group-item" style="background-color: rgb(20, 179, 176);">Address:
                        {{ Auth::user()->address }}</li>
                    <li class="list-group-item" style="background-color: rgb(27, 163, 159);">Gender:
                    </li>
                </ul>
                <div class="card-body">



                    <button class="btn btn-success"><a href="{{ url('/') }}" class="card-link"
                            style="text-decoration: none; color:white;">Home</a></button>
                    {{-- <button class="btn btn-success"><a href="{{ route('edit', ['id' => $user->id]) }}" class="card-link"
                                style="text-decoration: none; color:white;">Edit
                                Profile</a></button> --}}
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
@endsection
