@extends('layouts/log')
@section('title', 'PPDB|Wikrama')

@section('logcontent')

<form method="POST" action="{{ route('login') }}">
    @csrf
    {{ csrf_field() }}
        <div class="wrapper wrapper-login">
            <div class="container container-login animated fadeIn">
                <h3 class="text-center">Login Dahulu</h3>
                <div class="login-form">
                    <div class="form-group form-floating-label">
                        <input id="email" name="email" type="email" class="form-control input-border-bottom @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="off" autofocus>
                        <label for="email" class="placeholder">{{ __('E-Mail Address') }}</label>
                    </div>
                    <div class="form-group form-floating-label">
                        <input id="password" name="password" type="password" class="form-control input-border-bottom @error('password') is-invalid @enderror" autocomplete required>

                        @error('password')
                            <strong>{{ $message }}</strong>
                        @enderror

                        <label for="password" class="placeholder">{{ __('Password') }}</label>
                        <div class="show-password">
                            <i class="flaticon-interface"></i>
                        </div>
                    </div>
                    <div class="row form-sub m-0">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="custom-control-label" for="remember">{{ __('Remember Me') }}</label>
                        </div>
                    </div>
                    <div class="form-action mb-3">
                        <button type="submit" class="btn btn-primary btn-rounded btn-login">{{ __('Login') }}</button>
                    </div>
                    <div class="login-account">
                        <span class="msg">Tidak Punya Akun ?</span>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
</form>
@endsection
