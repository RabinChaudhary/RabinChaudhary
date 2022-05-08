@extends('layouts.app')
@section('content')
<div class="login-form">
    <form action="{{route('user.update')}}" method="post">
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif

        @csrf
        <h2 class="text-center">Update</h2>
        <input type="hidden" name="user_id" value="{{$user->id}}" />
        <div class="form-group">
            <input name="first_name" type="text" class="form-control" placeholder="First Name" value={{$user->first_name}} required="required">
        </div>
        <div class="form-group">
            <input name="last_name" type="text" class="form-control" placeholder="Last Name" value={{$user->last_name}} required="required">
        </div>
        <div class="form-group">
            <input name="email" type="text" class="form-control" placeholder="Email" value={{$user->email}} required="required">
        </div>
        <div class="form-group">
            <input name="gender" type="text" class="form-control" placeholder="Gender" value={{$user->gender}} required="required">
        </div>
        <div class="form-group">
            <input name="mobile" type="text" class="form-control" placeholder="Mobile" value={{$user->mobile}} required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Update</button>
        </div>
        <!--   <div class="clearfix">
            <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
            <a href="#" class="float-right">Forgot Password?</a>
        </div>  
-->
    </form>
</div>
@stop