<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- Bootstrap core CSS -->
	<?= link_tag(base_url('assets/vendor/bootstrap/css/bootstrap.css')) ?>
	<!-- Custom styles for this template -->
	<?= link_tag(base_url('assets/public/css/homepage.css')) ?>
	<title>Login/Signup</title>
</head>

<body class="auth bg">
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="home">SELL VIDEOS</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				Menu
				<i class="fas fa-bars"></i>
			</button>
		</div>
	</nav>
	<div class="container">
		<!-- <h2 class="text-center">Sellvideo</h2> -->
		<div class="row">
			<div class="col-md-6">
				<?php showFlash() ?>
				<div class="card text-light" style="background-color:rgb(10,10,10,0.8)">
					<nav>
						<div class="nav nav-tabs nav-justifieds" id="nav-tab" role="tablist">

							<a class="nav-item nav-link active" id="nav-login-tab" data-toggle="tab" href="#nav-login" role="tab" aria-controls="nav-login" aria-selected="true">Login</a>

							<a class="nav-item nav-link" id="nav-signup-tab" data-toggle="tab" href="#nav-signup" role="tab" aria-controls="nav-signup" aria-selected="false">Register</a>

							<a class="nav-item nav-link" id="nav-reset-tab" data-toggle="tab" href="#nav-reset" role="tab" aria-controls="nav-reset" aria-selected="false">Forget</a>

						</div>
					</nav>

					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fade show active" id="nav-login" role="tabpanel" aria-labelledby="nav-login-tab">

							<form id="loginForm" class="form p-3" action="auth/login" method="post">
								<div class="control-group">
									<div class="form-group controls">
										<label for="email">Email</label>
										<input type="email" name="email" id="email" class="form-control" data-validation-required-message="Please Enter Valid Email Address">
										<p class="help-block"></p>
									</div>
								</div>


								<div class="control-group">
									<div class="form-group controls">
										<label for="pass">Password</label>
										<input type="password" name="pass" id="pass" class="form-control" data-validation-required-message="Please Enter Password">
										<p class="help-block"></p>
									</div>
								</div>

								<div class="form-group custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="remember">
									<label class="custom-control-label" for="remember">Remember me</label>
								</div>
								<button type="submit" value="login" name="submit" id="login-btn" class="btn btn-primary btn-block">Login</button>

							</form>

						</div>

						<div class="tab-pane fade" id="nav-signup" role="tabpanel" aria-labelledby="nav-signup-tab">


							<form id="registerForm" class="form p-3" action="auth/signup" method="post">
								<div class="control-group">
									<div class="form-group controls">
										<label for="signup-email">Email Address</label>
										<input type="email" name="email" id="signup-email" class="form-control" data-validation-required-message="Please Enter Valid Email Address">
										<small id="emailHelp" class="form-text text-muted">We'll never share your
											email with anyone else.</small>
										<p class="help-block"></p>
									</div>
								</div>

								<div class="control-group">
									<div class="form-group controls">
										<label for="password">Password</label>
										<input type="password" name="pass" id="password" class="form-control" data-validation-required-message="Please Enter Password">
										<p class="help-block"></p>
									</div>
								</div>

								<div class="control-group">
									<div class="form-group controls">
										<label for="passcnf">Confirm Password</label>
										<input type="password" id="passcnf" class="form-control" data-validation-matches-match="pass" data-validation-matches-message="Password and Confirm Must be same">
										<p class="help-block"></p>
									</div>
								</div>
								<div class="control-group">
									<div class="form-group controls custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="terms" data-validation-required-message="You must agree with our term and privacy policy">
										<label class="custom-control-label" for="terms">I accept <a href="#">Term</a> and
											<a href="#">Privacy Policy</a>.</label>
										<p class="help-block"></p>
									</div>
								</div>
								<button type="submit" name="submit" value="signup" id="signup-btn" class="btn btn-success btn-block">Register</button>

							</form>


						</div>

						<div class="tab-pane fade" id="nav-reset" role="tabpanel" aria-labelledby="nav-reset-tab">

							<form id="resetForm" class="resetForm p-3" action="auth/reset" method="post">
								<div class="control-group">
									<div class="form-group controls">
										<label for="reset-email">Email Address</label>
										<input type="email" name="email" id="reset-email" class="form-control" data-validation-required-message="Please Enter Your Registered Email Address">
										<p class="help-block"></p>
									</div>
								</div>
								<button type="submit" name="submit" value="reset" id="login-btn" class="btn btn-warning btn-block">Send Password Reset Link</button>

							</form>


						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Bootstrap core JavaScript -->
	<script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
	<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqBootstrapValidation/1.3.6/jqBootstrapValidation.js" integrity="sha256-clknYhjtCNZEILGaJmx/iSKaZmfYAH1NzI3PUqLeWUs=" crossorigin="anonymous"></script>

	<!-- Custom scripts for this template -->
	<script src="<?= base_url('assets/public/js/homepaage.js') ?>"></script>
</body>



</html>
