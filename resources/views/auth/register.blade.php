@extends('layouts.app')

@section('content')
<style>
    #mandes {
        width: 10%;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header w3-xlarge w3-padding-16 w3-blue">{{ __('Register') }}</div>

                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <form method="POST" action="{{ route('mankind') }}" class=" w3-container w3-card-4 w3-light-gray w3-text-blue">
                                @csrf

                                <div class="w3-row w3-section">
                                    <div class="w3-col w3-xlarge w3-center" id="mandes">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </div>
                                    <div class="w3-rest">
                                        <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror"
                                        placeholder="Enter First Name" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>

                                        @error('fname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="w3-row w3-section">
                                    <div class="w3-col w3-xlarge w3-center" id="mandes">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </div>
                                    <div class="w3-rest">
                                        <input id="lname" type="text"
                                        placeholder="Enter Last name" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>

                                        @error('lname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="w3-row w3-section">
                                    <div class="w3-col w3-xlarge w3-center" id="mandes">
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="w3-rest">
                                        <input id="email" type="email" placeholder="Email address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                        <input id="password" type="password"
                                        placeholder="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
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
                                        <input id="password-confirm"
                                        placeholder="Retype password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="w3-row w3-section d-flex justify-content-end">
                                    <div class="offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
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
