@extends('layouts/reg')
@section('title', 'FormRegister')

@section('regcontent')
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="wrapper wrapper-login">
		<div class="container container-login animated fadeIn">
			<h3 class="text-center">Register Akun</h3>
			<div class="login-form">
                <div class="form-group form-floating-label">
					<input id="name" name="name" type="text" class="form-control input-border-bottom @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    <label for="name" class="placeholder">{{ __('Name') }}</label>

                        @error('name')
                                <strong>{{ $message }}</strong>
                        @enderror

				</div>
				<div class="form-group form-floating-label">
					<input id="email" name="email" type="email" class="form-control input-border-bottom @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email">
                    <label for="email" class="placeholder">{{ __('E-Mail Address') }}</label>

                        @error('email')
                                <strong>{{ $message }}</strong>
                        @enderror

				</div>
				<div class="form-group form-floating-label">
					<input id="password" name="password" type="password" class="form-control input-border-bottom @error('password') is-invalid @enderror" required autocomplete="new-password">
					<label for="password" class="placeholder">{{ __('Password') }}</label>
					<div class="show-password">
						<i class="flaticon-interface"></i>
					</div>
                </div>
                <div class="form-group form-floating-label">
					<input id="password-confirm" name="password_confirmation" type="password" class="form-control input-border-bottom" required autocomplete="new-password">
					<label for="password" class="placeholder">{{ __('Confirm Password') }}</label>
					<div class="show-password">
						<i class="flaticon-interface"></i>
					</div>
				</div>
				<div class="form-action mb-3">
					<button type="submit" class="btn btn-primary btn-rounded btn-login">
                            {{ __('Register') }}
                    </button>
                    <a href="{{ route('login') }}" id="show-signin" class="btn btn-danger btn-rounded btn-login mr-3">Cancel</a>
				</div>
			</div>
		</div>
    </div>
</form>
@endsection
