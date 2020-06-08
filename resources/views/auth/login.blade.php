@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color: #ffffff">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<<<<<<< HEAD
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
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
=======
                                <div class="col-6">
                                    {{-- <button class="btn btn-primary px-4">Login</button> --}}
                                </div>
                                <div class="col-6 text-right">
                                    {{-- <button class="btn btn-link px-0" type="button">Forgot password?</button> --}}
                                </div>
                            </div>
                        </form>
                        <div>
                            {{-- @if (Route::has('register'))
                                <a href="{{ route('auth.register') }}" class="btn btn-primary">Register</a>
                            @endif --}}
                            @if (Route::has('login'))
                            <div class="center links">
                                @auth
                                    <a href="{{ url('/home') }}" class="btn btn-primary">Home</a>
                                @else
                                    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
            
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                                    @endif
                                @endauth
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                    <div class="card-body text-center">
                        
                    </div>
>>>>>>> 30516eb37fec550e4877ce437a72fa061826eea4
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
