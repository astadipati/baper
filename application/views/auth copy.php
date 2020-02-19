
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Baper</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url()?>assets/auth/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/auth/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/auth/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/auth/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/auth/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/auth/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/auth/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/auth/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/auth/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/auth/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/auth/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(<?php echo base_url()?>assets/auth/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						B A P E R
					</span>
				</div>
				<form action="<?=site_url('auth/process')?>" method="post">
				<div class="form-group has-feedback">
					<input type="text" name="username" class="form-control" placeholder="User Name" required>
					<span class="glyphicon gliphicon-envelope form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="password" name="password" class="form-control" placeholder="password" required>
					<span class="glyphicon gliphicon-envelope form-control-feedback"></span>
				</div>
				<div class="row">
					<button type="submit" name="login" class="btn btn-primary">Login</button>
				</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>assets/auth/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script href="<?php echo base_url()?>assets/auth/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script href="<?php echo base_url()?>assets/auth/vendor/bootstrap/js/popper.js"></script>
	<script href="<?php echo base_url()?>assets/auth/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script href="<?php echo base_url()?>assets/auth/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script href="<?php echo base_url()?>assets/auth/vendor/daterangepicker/moment.min.js"></script>
	<script href="<?php echo base_url()?>assets/auth/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script href="<?php echo base_url()?>assets/auth/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>