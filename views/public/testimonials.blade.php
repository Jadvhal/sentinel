@extends('layout.header')
@section('title', 'Testimonials')
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
                <h2 class="breadcrumbs-custom-title">Love Stories</h2>
                <p class="big">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit.  </p>
              </div>
            </div>
          </div>
        </section>
      </header>
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-30 row-md-50 justify-content-center justify-content-lg-start">
            <div class="col-md-6">
              <!-- Quote Classic-->
              <blockquote class="quote-classic">
                <div class="quote-classic-inner">
                  <div class="quote-classic-header">
                    <div class="quote-classic-profile"><img class="quote-classic-avatar" src="asset/images/testimonials-1-84x84.jpg" alt="" width="84" height="84"/>
                      <cite class="quote-classic-cite heading-3 ls-ng-1">Jane Smith</cite>
                    </div>
                    <div class="quote-classic-links"><a class="quote-classic-social-link mdi mdi-facebook" href="#"></a></div>
                  </div>
                  <div class="quote-classic-text">
                    <p>Duis convallis convallis tellus id. Vitae et leo duis ut diam quam nulla porttitor consequat semper.</p>
                  </div>
                  <time class="quote-classic-time" datetime="2021">Mar 21, 2021</time>
                </div>
              </blockquote>
            </div>
            <div class="col-md-6">
              <!-- Quote Classic-->
              <blockquote class="quote-classic">
                <div class="quote-classic-inner">
                  <div class="quote-classic-header">
                    <div class="quote-classic-profile"><img class="quote-classic-avatar" src="asset/images/testimonials-2-84x84.jpg" alt="" width="84" height="84"/>
                      <cite class="quote-classic-cite heading-3 ls-ng-1">Peter McMillan</cite>
                    </div>
                    <div class="quote-classic-links"><a class="quote-classic-social-link mdi mdi-facebook" href="#"></a></div>
                  </div>
                  <div class="quote-classic-text">
                    <p>Semper risus in hendrerit gravida rutrum quisque non nulla pharetra diam interdum elementum.</p>
                  </div>
                  <time class="quote-classic-time" datetime="2021">Mar 21, 2021</time>
                </div>
              </blockquote>
            </div>
            <div class="col-md-6">
              <!-- Quote Classic-->
              <blockquote class="quote-classic">
                <div class="quote-classic-inner">
                  <div class="quote-classic-header">
                    <div class="quote-classic-profile"><img class="quote-classic-avatar" src="asset/images/testimonials-3-84x84.jpg" alt="" width="84" height="84"/>
                      <cite class="quote-classic-cite heading-3 ls-ng-1">Samantha Lee</cite>
                    </div>
                    <div class="quote-classic-links"><a class="quote-classic-social-link mdi mdi-facebook" href="#"></a></div>
                  </div>
                  <div class="quote-classic-text">
                    <p>Et netus et malesuada fames ac turpis egestas maecenas. Risus quis varius quam quisque.</p>
                  </div>
                  <time class="quote-classic-time" datetime="2021">Mar 21, 2021</time>
                </div>
              </blockquote>
            </div>
            <div class="col-md-6">
              <!-- Quote Classic-->
              <blockquote class="quote-classic">
                <div class="quote-classic-inner">
                  <div class="quote-classic-header">
                    <div class="quote-classic-profile"><img class="quote-classic-avatar" src="asset/images/testimonials-4-84x84.jpg" alt="" width="84" height="84"/>
                      <cite class="quote-classic-cite heading-3 ls-ng-1">Kate Wilson</cite>
                    </div>
                    <div class="quote-classic-links"><a class="quote-classic-social-link mdi mdi-facebook" href="#"></a></div>
                  </div>
                  <div class="quote-classic-text">
                    <p>Ultricies leo integer malesuada nunc. Egestas purus viverra accumsan in nisl maecenas.</p>
                  </div>
                  <time class="quote-classic-time" datetime="2021">Mar 21, 2021</time>
                </div>
              </blockquote>
            </div>
          </div>
        </div>
      </section>
@include('layout.footer')