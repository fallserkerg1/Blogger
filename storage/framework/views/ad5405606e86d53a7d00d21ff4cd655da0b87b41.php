<!DOCTYPE html>
<html lang="en">
<head>
	<title>Blog Anime</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo e(asset('base/images/icons/favicon.ico')); ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('base/vendor/bootstrap/css/bootstrap.min.css')); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('base/fonts/font-awesome-4.7.0/css/font-awesome.min.css')); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('base/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('base/vendor/animate/animate.css')); ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('base/vendor/css-hamburgers/hamburgers.min.css')); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('base/vendor/animsition/css/animsition.min.css')); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('base/vendor/select2/select2.min.css')); ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('base/vendor/daterangepicker/daterangepicker.css')); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('base/css/util.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('base/css/main.css')); ?>">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('https://i.pinimg.com/originals/68/b2/ed/68b2ed067812b576fb834f2729afd1b4.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					<center><h2><?php echo e(__('Login')); ?></h2></center>
				</span>
				<form method="POST" action="<?php echo e(route('login')); ?>" class="login100-form validate-form p-b-33 p-t-5">
					<?php echo csrf_field(); ?>
					<div class="wrap-input100 validate-input" data-validate = "Enter username" placeholder= "<?php echo e(__('E-Mail Address')); ?>">
						<input id="email" type="email" class="input100" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
					<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

					<span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

					<div class="wrap-input100 validate-input" data-validate="Enter password" placeholder="<?php echo e(__('Password')); ?>">
						<input id="password" type="password" class="input100" name="password" required autocomplete="current-password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>
					<?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							<?php echo e(__('Login')); ?>

						</button>
					</div>
					<?php if(Route::has('password.request')): ?>
                        <!--<a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                            <?php echo e(__('Forgot Your Password?')); ?>

                        </a> -->
                    <?php endif; ?>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo e(asset('base/vendor/jquery/jquery-3.2.1.min.js')); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo e(asset('base/vendor/animsition/js/animsition.min.js')); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo e(asset('base/vendor/bootstrap/js/popper.js')); ?>"></script>
	<script src="<?php echo e(asset('base/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo e(asset('base/vendor/select2/select2.min.js')); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo e(asset('base/vendor/daterangepicker/moment.min.js')); ?>"></script>
	<script src="<?php echo e(asset('base/vendor/daterangepicker/daterangepicker.js')); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo e(asset('base/vendor/countdowntime/countdowntime.js')); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo e(asset('base/js/main.js')); ?>"></script>

</body>
</html><?php /**PATH C:\xampp\htdocs\Blogger\resources\views/auth/login.blade.php ENDPATH**/ ?>