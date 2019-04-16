<?php
include 'layouts/header.php';
?>

<header class="masthead">
	<div class="container h-100">
		<div class="row h-100">
			<div class="col-lg-5 my-auto">
				<div class="header-content p-3 text-center" style="background-color:rgb(10,10,10,0.8)">
					<h1>SELL VIDEOS is a Platform where you can earn lot of money by selling videos! its
						simple and easy!</h1>
					<a href="#about" class="btn btn-outline btn-xl js-scroll-trigger">Start Selling Videos!</a>
				</div>
			</div>

		</div>
	</div>
</header>

<section class="download bg-primary text-center" id="about">
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
								<img src="<?= base_url('assets/public/img/demo-screen-1.jpg') ?>" class="img-fluid" alt="">
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
			<a href="#contact" class="btn btn-outline btn-xl js-scroll-trigger">Let's Upload!</a>
		</div>
	</div>
	<div class="overlay"></div>
</section>

<section class="contact bg-primary" id="contact">
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


<?php
include 'layouts/footer.php';
