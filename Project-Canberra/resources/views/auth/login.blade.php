@extends('layouts.app')

@section('content')
    <div class="container mb-4">
        <div class="mx-auto" style="max-width:40rem; width:100%">
            <div class="bg-white rounded shadow  input-group-lg p-3 mt-5 w-lg-50">
                <div class="login-form p-3">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h2 class="fs-2 text-primary">LOGIN</h2>
                        <div class="row">

                            <input type="text" placeholder="Email or Username" name="email" id="email"
                                class="form-control my-3 @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row">

                            <input placeholder="Password" class="form-control my-3" id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password"
                                autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-lg btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
