@extends('layouts.app')
@section('content')
    @if(Auth::check())
        <!-- User already logged in-->
        header('/');
        exit;
    @else
    <div class="login-form" style=" height: 40vh;">
        <form action="{{route('user.auth')}}" method="post">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if(Session::has('autherror'))
            <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('autherror') }}</p>
            @endif
            @csrf
            <div class="error-msg center error-text"></div>
            <h2 class="text-center">Login</h2>
            <div class="form-group">
                <input name="email" id="email" type="text" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <input name="password" id="password" type="password" class="form-control" placeholder="Password">
            </div>
    
            <div class="clearfix">
                <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
                <a href="{{route('user.forgotpassword')}}" class="float-right">Forgot Password?</a>
            </div>  
            <div class="form-group">
                <button type="submit" id="login-btn" class="btn btn-primary btn-block">Login</button>
            </div>

        </form>
        <p class="text-center">Dont 'have a account? <a href="{{route('user.register')}}">Register</a></p>
    </div>
    @endif
@stop