{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html lang="en">
<head>
    @include('master.css')

    <style type="text/css">
      .preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background-color: #99daec;
      }
      .preloader .loading {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
        font: 14px arial;
      }
      </style>
</head>
<body class="sea">
    <div class="container" style="padding-top:180px;">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row mt-4">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <img src="{{ asset('image/asyifa.png') }}" style="width:100px;">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <h4>PT. Assyifa Berkah Abadi</h4>
                            </div>
                        </div>
                        <form method="post" action="{{ route('login') }}">
                            @csrf
                            <div class="row mt-5 d-flex justify-content-center">
                                <div class="col-lg-11">
                                    <div class="md-form md-outline input-with-pre-icon mb-0">
                                        <i class="fas fa-envelope input-prefix"></i>
                                        <input type="email" name="email" class="form-control @error('password') is-invalid @enderror" id="email">
                                        <label for="email">Email</label>
                                    </div>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-11">
                                    <div class="md-form md-outline input-with-pre-icon mt-0">
                                        <i class="fas fa-lock input-prefix"></i>
                                        <input type="password" name="password" class="form-control" id="password">
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center mt-5">
                                <div class="col-lg-11">
                                    <button type="submit" class="btn btn-md btn-block green-bg text-white">
                                        Sign In
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="row mt-5 d-flex justify-content-center">
                            <div class="col-lg-11 d-flex justify-content-center">
                                <small class="text-muted">PT. Assyifa Berkah Abadi 2021 &copy; All rights reserved</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('master.js')
</body>
</html>
