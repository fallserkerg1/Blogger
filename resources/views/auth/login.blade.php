<!DOCTYPE html>
<html lang="en">
<head>
	<title>Blog Anime</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('base/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('base/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('base/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('base/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('base/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('base/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('base/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('base/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('base/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('base/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('base/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('https://i.pinimg.com/originals/68/b2/ed/68b2ed067812b576fb834f2729afd1b4.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					<center><h2>{{ __('Login') }}</h2></center>
				</span>
				<form method="POST" action="{{ route('login') }}" class="login100-form validate-form p-b-33 p-t-5">
					@csrf
					<div class="wrap-input100 validate-input" data-validate = "Enter username" placeholder= "{{ __('E-Mail Address') }}">
						<input id="email" type="email" class="input100" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
					@error('email')

					<span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

					<div class="wrap-input100 validate-input" data-validate="Enter password" placeholder="{{ __('Password') }}">
						<input id="password" type="password" class="input100" name="password" required autocomplete="current-password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>
					@error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							{{ __('Login') }}
						</button>
					</div>
					@if (Route::has('password.request'))
                        <!--<a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a> -->
                    @endif
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{ asset('base/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('base/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('base/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{ asset('base/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('base/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('base/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{ asset('base/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('base/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('base/js/main.js')}}"></script>

</body>
</html>