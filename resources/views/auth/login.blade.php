@extends('layouts.app')

@section('content')
<div class="container">
    <style>
        #mandes{
            width: 10%;
        }
    </style>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header w3-blue w3-padding-16 w3-xlarge">{{ __('Login') }}</div>

                <div class="card-body">
                    <div class=" row justify-content-center ">
                        <div class="col-md-8">
                            <form method="POST" action="{{ route('separation') }}" class=" w3-container w3-text-blue w3-light-gray w3-card-4">
                                @csrf

                                <div class="w3-row w3-section">
                                    <div class="w3-col w3-xlarge w3-center" id="mandes">
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="w3-rest">
                                        <input id="email"
                                        placeholder="Email address" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="w3-row w3-section">
                                    <div class="w3-col w3-xlarge w3-center" id="mandes">
                                        <i class="fa fa-lock" aria-hidden="true"></i>
                                    </div>
                                    <div class="w3-rest">
                                        <input id="password"
                                        placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="w3-row w3-section">
                                    <div class=" offset-md-0">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="w3-row w3-section">
                                    <div class="offset-md-0">
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
    </div>
</div>
@endsection
