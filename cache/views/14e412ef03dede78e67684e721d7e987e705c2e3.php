
<?php $__env->startSection('title', 'Dynamic Framework'); ?>
<?php $__env->startSection('content'); ?>
	<header id="header" class="header fixed-top d-flex align-items-center">
		<div class="container d-flex align-items-center justify-content-between">
			<div id="logo">
				<h1><a href="index.html"><span>D</span>ynamic</a></h1>
				<!-- Uncomment below if you prefer to use an image logo -->
				<!-- <a href="index.html"><img src="assets/img/logo.png" alt="" title="" /></a>-->
			</div>
			<nav id="navbar" class="navbar">
				<ul>
					<li><a class="nav-link scrollto active" href="#hero">Home</a></li>
					<li><a class="nav-link scrollto" href="#get-started">About</a></li>
					<li><a class="nav-link scrollto" href="#features">Features</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav>
			<!-- .navbar -->
		</div>
	</header>
	<!-- End Header -->
	<!-- ======= Hero Section ======= -->
	<section id="hero">
		<div class="hero-container" data-aos="fade-in">
			<h1><span>D</span>ynamic Framework</h1>
			<h2>A php starter kit for Noobs 🥴</h2>
			<img src="assets/img/hero-img.png" alt="Hero Imgs" data-aos="zoom-out" data-aos-delay="100">
			<a href="#get-started" class="btn-get-started scrollto">Documentation</a>
		</div>
	</section>
	<!-- End Hero Section -->
	<main id="main">
		<!-- ======= Get Started Section ======= -->
		<section id="get-started" class="padd-section text-center">
			<div class="container" data-aos="fade-up">
				<div class="section-title text-center">
					<h2><span class="text-primary">D</span>ynamic Framework</h2>
					<p class="separator">What to Expect</p>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
						<div class="feature-block">
							<img src="assets/img/svg/cloud.svg" alt="img">
							<h4>Pretty URL/URIs</h4>
							<p>Everyone likes a URL that is easy to ready and cram</p>
						</div>
					</div>
					<div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
						<div class="feature-block">
							<img src="assets/img/svg/planet.svg" alt="img">
							<h4>Documentation</h4>
							<p>We can't guarantee that you'll understand it, We'll try to do our best</p>
						</div>
					</div>
					<div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
						<div class="feature-block">
							<img src="assets/img/svg/asteroid.svg" alt="img">
							<h4>Pretty Errors</h4>
							<p>Everyone loves errors as long as they are easy to read and understand</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dyn\views/welcome.blade.php ENDPATH**/ ?>