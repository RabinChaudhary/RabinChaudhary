@extends('layouts.app')
@section('content')
<div class="login-form">
    <form action="{{route('user.resetpassword')}}" method="post">
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
        <h2 class="text-center">Reset Password</h2>
        <div class="form-group">
            <input name="email" type="text" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Send</button>
        </div>

    </form>
</div>
@stop