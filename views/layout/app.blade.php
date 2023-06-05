<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- please do not remove this section -->
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<meta name="generator" content="{{config('name')}}">
		<title>@yield('title')</title>
		<!-- please do not remove this section -->
		<meta content="{{config('name')}} is a groundbreaking multilanguage text content detection app system that effortlessly determines whether content is human-written or AI-generated. With its advanced natural language processing capabilities, Sentinel enables users to verify authenticity, combat fake news, and ensure compliance with ethical guidelines. Stay ahead in the AI era with Sentinel, your trusted guardian against artificially generated content." name="description">
		<meta content="gptzero, chatgpt, autogpt, gpt4, gpt3, bard" name="keywords">
		<!-- Favicons -->
		<link href="/favicon.ico" rel="icon">
		<link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Modak&display=swap" rel="stylesheet">
		<!-- Vendor CSS Files -->
		@css("/assets/vendor/aos/aos.css")
		@css("/assets/vendor/bootstrap/css/bootstrap.min")
		@css("/assets/vendor/bootstrap-icons/bootstrap-icons")
		@css("/assets/vendor/glightbox/css/glightbox.min")
		@css("/assets/vendor/swiper/swiper-bundle.min")
		@css("/assets/css/style")
		@css("/assets/css/custom")
	</head>
	<body>

		<header id="header" class="header fixed-top d-flex align-items-center">
			<div class="container d-flex align-items-center justify-content-between">
				<div id="logo">
					<a href="/"><img src="assets/img/logo.svg" alt="Sentinel" class="w-50" title="Sentinel" /></a>
				</div>
				<nav id="navbar" class="navbar">
					<ul>
						<li><a class="nav-link scrollto" href="/about">About</a></li>
						<li><a class="nav-link scrollto" href="https://donate.stripe.com/dR68wO7cS0rr6Os4gg">Sponsor</a></li>
					</ul>
					<i class="bi bi-list mobile-nav-toggle"></i>
				</nav>
				<!-- .navbar -->
			</div>
		</header>

		@yield('content')
		<!-- Vendor JS Files -->
		@js('/assets/vendor/aos/aos')
		@js('/assets/vendor/bootstrap/js/bootstrap.bundle.min')
		@js('/assets/vendor/glightbox/js/glightbox.min')
		@js('/assets/vendor/php-email-form/validate')
		@js('/assets/vendor/swiper/swiper-bundle.min')
		@js('/assets/js/main')

		@js('https://code.jquery.com/jquery-3.7.0.min.js')
		@js('https://unpkg.com/sweetalert/dist/sweetalert.min.js')

		@yield('script')
	</body>
</html>