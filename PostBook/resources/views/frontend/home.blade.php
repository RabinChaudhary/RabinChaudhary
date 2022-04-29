@extends('layouts.app')
@section('title', 'homepage')

@section('content')
    {{-- login --}}
    <div class="container d-flex flex-column flex-lg-row justify-content-evenly align-items-center">
        {{-- heading --}}
        <div class="text-center text-lg-start mt-lg-5 pt-lg-5">
            <h1 class="text-primary fw-bold fs-0">Postbook</h1>
            <p class="w-75 mx-auto mx-lg-0 fs-4">Postbook helps you connect aand share with the people in your life.</p>

        </div>
        {{-- form --}}
        <div style="max-width:28rem; width:100%">
            <div class="bg-white shadow rounded p-3 input-group-lg mt-lg-5">

                <form action="" method="POST">
                    {{ csrf_field() }}
                    <input type="email" class="form-control my-3" placeholder="Your Email address" autofocus />
                    <input type="password" class="form-control my-3" placeholder="Your Password" />
                    <button class="btn btn-primary w-100 my-3">Login</button>
                    <a href="#" class="text-decoration-none text-center">
                        <p>Forgotten password?</p>
                    </a>
                </form>
                {{-- create form --}}
                <hr>
                <div class="text-center my-4">
                    <a class="text-decoration-none" href="{{ url('/register') }}">
                        <button class="btn btn-success btn-lg">Create New Account</button></a>
                </div>
            </div>
            <div class="my-3 pb-5 text-center">
                <p>Create a Page for a celebrity, brand or business..</p>
            </div>
        </div>



    </div>



    @include('inc.footer')


@endsection
