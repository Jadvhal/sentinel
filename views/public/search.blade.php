@extends('layout.header')
@section('title', 'Search Inmates')
	<body>
		@include('layout.loader')
		<div class="page">
			<!-- Page Header-->
			<header class="section page-header page-header-1 context-dark">
				<div class="page-header-1-figure" style="background-image: url(asset/images/bg-image-2.jpg);"></div>
				<!-- RD Navbar-->
				<div class="rd-navbar-wrap">
					<nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
						<div class="rd-navbar-main-outer">
							<div class="rd-navbar-main">
								<!-- RD Navbar Panel-->
								<div class="rd-navbar-panel">
									<!-- RD Navbar Toggle-->
									<button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
									<!-- RD Navbar Brand-->
									<div class="rd-navbar-brand"><a class="brand" href="/"><img class="brand-logo-dark" src="asset/images/logo-inverse-316x92.png" alt="" width="158" height="46"/><img class="brand-logo-light" src="asset/images/logo-default-316x92.png" alt="" width="158" height="46"/></a>
									</div>
								</div>
								@include('layout.menu')
							</div>
						</div>
					</nav>
				</div>
				<section class="breadcrumbs-custom">
					<div class="breadcrumbs-custom-inner">
						<div class="container">
							<div class="breadcrumbs-custom-main">
								<h2 class="breadcrumbs-custom-title">Search Results</h2>
								<p class="big">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit.  </p>
							</div>
						</div>
					</div>
				</section>
			</header>
			<!-- Search results-->
			<section class="section section-md bg-default">
				<div class="container">
					<div class="row row-40 justify-content-center">
						<div class="col-xl-10"> 
							<!-- RD Search-->
							<form class="rd-search rd-search-inline" action="search-results.html" method="GET">
								<div class="form-wrap">
									<label class="form-label" for="rd-search-form-input">Search...</label>
									<input class="form-input" id="rd-search-form-input" type="text" name="s" autocomplete="off">
								</div>
								<div class="form-button">
									<button class="rd-search-submit" type="submit"></button>
								</div>
							</form>
							<div class="rd-search-results"> </div>
						</div>
					</div>
				</div>
			</section>
@include('layout.footer')