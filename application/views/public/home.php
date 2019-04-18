<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Video Sell</title>

	<!-- Bootstrap core CSS -->
	<?= link_tag(base_url('assets/vendor/bootstrap/css/bootstrap.css')) ?>

	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<!-- Custom styles for this template -->
	<?= link_tag(base_url('assets/public/css/homepage.css')) ?>

</head>

<body id="page-top">
	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="#page-top">SELL VIDEOS</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-bars fa-2x"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#about">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#features">Features</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="auth">Login/Signup</a>
					</li>
				</ul>

			</div>
		</div>
	</nav>

	<header class="masthead">
		<div class="container h-100">
			<div class="row h-100">
				<div class="col-lg-5 my-auto">
					<div class="header-content p-3 text-center" style="background-color:rgb(10,10,10,0.8)">
						<h1>SELL VIDEOS is a Platform where you can earn lot of money by selling videos! its
							simple and easy!</h1>
						<a href="dashboard" class="btn btn-outline btn-xl js-scroll-trigger">Start Selling Videos!</a>
					</div>
				</div>

			</div>
		</div>
	</header>

	<section class="about bg-primary text-center text-light" id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-8 mx-auto">
					<h2 class="section-heading">Upload Videos and Get Reward </h2>
					<p>Our Services is for those who want to promote his videos but they do not have any platform. No worry we are here to do this. just upload your video here we will take care about this.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="features" id="features">
		<div class="container">
			<div class="section-heading text-center">
				<h2>Unlimited Earning, Unlimited Fun</h2>
				<p class="text-muted">Sell or promote your videos to online world!</p>
				<hr>
			</div>
			<div class="row">
				<div class="col-lg-4 my-auto">
					<div class="device-container">
						<div class="device-mockup iphone6_plus portrait white">
							<div class="device">
								<div class="screen">
									<!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
									<img src="<?= base_url('assets/public/img/features.png') ?>" class="img-fluid" alt="">
								</div>
								<div class="button">
									<!-- You can hook the "home button" to some JavaScript events or just remove it -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8 my-auto">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-6">
								<div class="feature-item">
									<i class="fas fa-video fa-5x text-primary"></i>
									<h3>Shoot!</h3>
									<p class="text-muted">Just Shoot Video with your DSLR Camera or simply mobile!</p>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="feature-item">
									<i class="fas fa-file-video fa-5x text-primary"></i>
									<h3>Edit!</h3>
									<p class="text-muted">customize it with effects, songs etc!
									</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="feature-item">
									<i class="fas fa-upload fa-5x text-primary"></i>
									<h3>Upload!</h3>
									<p class="text-muted">Upload to website and wait for approval!
									</p>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="feature-item">
									<i class="fas fa-hand-holding-usd fa-5x text-primary"></i>
									<h3>Get Reward!</h3>
									<p class="text-muted">Great! find reward for that video!</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="cta">
		<div class="cta-content">
			<div class="container">
				<h2>Stop waiting.<br>Start Uploading.</h2>
				<a href="dashboard" class="btn btn-outline btn-xl js-scroll-trigger">Let's Upload!</a>
			</div>
		</div>
		<div class="overlay"></div>
	</section>

	<section class="contact bg-primary text-white" id="contact">
		<div class="container">
			<h2>We
				<i class="fas fa-heart text-danger"></i>
				new friends!</h2>
			<ul class="list-inline list-social">
				<li class="list-inline-item social-twitter">
					<a href="#">
						<i class="fab fa-twitter"></i>
					</a>
				</li>
				<li class="list-inline-item social-facebook">
					<a href="#">
						<i class="fab fa-facebook-f"></i>
					</a>
				</li>
				<li class="list-inline-item social-google-plus">
					<a href="#">
						<i class="fab fa-google-plus-g"></i>
					</a>
				</li>
			</ul>
		</div>
	</section>

	<footer>
		<div class="container">
			<p>sellvideo.com &copy; 2019. All Rights Reserved.</p>
			<ul class="list-inline">
				<li class="list-inline-item">
					<a href="#">Privacy</a>
				</li>
				<li class="list-inline-item">
					<a href="#">Terms</a>
				</li>
				<li class="list-inline-item">
					<a href="#">FAQ</a>
				</li>
			</ul>
		</div>
	</footer>

	<!-- Bootstrap core JavaScript -->
	<script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
	<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

	<!-- Plugin JavaScript -->
	<script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

	<script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous">
	</script>

	<!-- Custom scripts for this template -->
	<script src="<?= base_url('assets/public/js/homepage.js') ?>"></script>

</body>

</html>
