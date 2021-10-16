@extends('layout.header')
@section('title', 'About US')
  <body>
    @include('layout.loader')
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
                <h2 class="breadcrumbs-custom-title">About</h2>
                <p class="big">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit.  </p>
              </div>
            </div>
          </div>
        </section>
      </header>
      <!-- Basic Info-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-50 justify-content-center align-items-center">
            <div class="col-md-10 col-lg-7 d-flex flex-column justify-content-center align-items-start">
              <h2 class="text-black block-1">About Us</h2>
              <div class="heading-3 ls-ng-1 offset-xl-t-40 text-gray-600"><span class="d-xl-block">We are here to build emotions, connect people</span><span class="d-xl-block">and create happy stories.</span></div>
              <div class="block-2 mt-20 mt-md-30 mt-lg-40">
                <p class="text-gray-800 text-sm">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
              </div><a class="button button-lg button-icon button-icon-left button-primary offset-xl-t-45 wow fadeIn" href="#" data-wow-delay=".05s"><span class="icon mdi mdi-magnify"></span>Find your partner</a>
            </div>
            <div class="col-md-10 col-lg-5 text-lg-right text-center"><img src="asset/images/about-1-457x479.png" alt="" width="457" height="479"/>
            </div>
          </div>
        </div>
      </section>
      <!-- Features-->
      <section class="section section-lg bg-gray-100 text-center text-sm-left">
        <div class="container">
          <ul class="list-group-1 row row-30 row-md-40">
            <li class="col-sm-6 col-lg-3">
              <article class="lg-1-item wow fadeIn">
                <div class="icon lg-1-item-icon mdi mdi-account-search"></div>
                <div class="lg-1-item-main">
                  <h3 class="lg-1-item-title font-weight-normal"><span class="lg-1-item-counter"></span>Simple to Use</h3>
                  <p>Loven is very easy to use - just choose your and your partner’s gender, age, and location, and you’re all set!</p>
                </div>
              </article>
            </li>
            <li class="col-sm-6 col-lg-3">
              <article class="lg-1-item wow fadeIn" data-wow-delay=".025s">
                <div class="icon lg-1-item-icon mdi material-design-compass106"></div>
                <div class="lg-1-item-main">
                  <h3 class="lg-1-item-title font-weight-normal"><span class="lg-1-item-counter"></span>Smart Matching</h3>
                  <p>Our matching system is based on geolocation and interests. It helps you find the best people to meet or spend time with.</p>
                </div>
              </article>
            </li>
            <li class="col-sm-6 col-lg-3">
              <article class="lg-1-item wow fadeIn" data-wow-delay=".05s">
                <div class="icon lg-1-item-icon mdi mdi-comment-processing"></div>
                <div class="lg-1-item-main">
                  <h3 class="lg-1-item-title font-weight-normal"><span class="lg-1-item-counter"></span>Cool Community</h3>
                  <p>Besides being #1 dating service, we have a supportive and understanding community that’s always ready to help.</p>
                </div>
              </article>
            </li>
            <li class="col-sm-6 col-lg-3">
              <article class="lg-1-item wow fadeIn" data-wow-delay=".075s">
                <div class="icon lg-1-item-icon mdi mdi-filter"></div>
                <div class="lg-1-item-main">
                  <h3 class="lg-1-item-title font-weight-normal"><span class="lg-1-item-counter"></span>Quick Filtering</h3>
                  <p>Our travel agents are ready to offer extensive support on any tour with traveling guidance & recommendations.</p>
                </div>
              </article>
            </li>
          </ul>
        </div>
      </section>
      <!-- Testimonials-->
      <section class="section section-lg bg-default text-center">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2>Successful Love Stories</h2>
              <p class="offset-xl-t-35">Lobortis scelerisque fermentum dui faucibus in ornare quam viverra orci.</p>
            </div>
          </div>
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
                    <p>Elementum nisi quis eleifend quam adipiscing. Dictum varius duis at lorem consectetur.</p>
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
                    <p>Amet commodo nulla facilisi nullam. Pellentesque id nibh tortor id aliquet lectus proin.</p>
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
                    <p>Arcu dictum varius duis at consectetur lorem. Purus viverra accumsan in nisl nisi scelerisque.</p>
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
                    <p>Laoreet sit amet cursus sit. A scelerisque purus semper eget ut lectus arcu bibendum at varius.</p>
                  </div>
                  <time class="quote-classic-time" datetime="2021">Mar 21, 2021</time>
                </div>
              </blockquote>
            </div>
          </div>
        </div>
      </section>
      <!-- Our Team-->
      <section class="section bg-color-gray-100 section-lg">
        <div class="container">
          <h2 class="text-center text-black">Our Team</h2>
          <p class="text-center">Sed augue lacus viverra vitae congue eu consequat scelerisque fermentum dui faucibus.</p>
          <div class="row row-30">
            <div class="col-lg-3">
              <!-- Profile Classic-->
              <article class="profile-classic"><img class="profile-classic-image" src="asset/images/our-team-1-272x197.jpg" alt="" width="272" height="197"/>
                <div class="profile-classic-main">
                  <p class="profile-classic-position">Founder, CEO</p>
                  <p class="profile-classic-name heading-3"><a href="#">Linda Allen</a></p>
                </div>
              </article>
            </div>
            <div class="col-lg-3">
              <!-- Profile Classic-->
              <article class="profile-classic"><img class="profile-classic-image" src="asset/images/our-team-2-272x197.jpg" alt="" width="272" height="197"/>
                <div class="profile-classic-main">
                  <p class="profile-classic-position">Lead Designer</p>
                  <p class="profile-classic-name heading-3"><a href="#">Scott Evans</a></p>
                </div>
              </article>
            </div>
            <div class="col-lg-3">
              <!-- Profile Classic-->
              <article class="profile-classic"><img class="profile-classic-image" src="asset/images/our-team-3-272x197.jpg" alt="" width="272" height="197"/>
                <div class="profile-classic-main">
                  <p class="profile-classic-position">Web Developer</p>
                  <p class="profile-classic-name heading-3"><a href="#">Patricia Parker</a></p>
                </div>
              </article>
            </div>
            <div class="col-lg-3">
              <!-- Profile Classic-->
              <article class="profile-classic"><img class="profile-classic-image" src="asset/images/our-team-4-272x197.jpg" alt="" width="272" height="197"/>
                <div class="profile-classic-main">
                  <p class="profile-classic-position">Head of Support</p>
                  <p class="profile-classic-name heading-3"><a href="#">Mary Lee</a></p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
      <!-- Counters-->
      <section class="section section-lg section-decoration-1 section-decoration-1-figure">
        <div class="container">
          <h2 class="text-center">Counters</h2>
          <div class="row row-50 text-center">
            <div class="col-6 col-sm-3">
              <!--Counter-->
              <article class="counter-classic">
                <div class="counter-classic-main"><span class="counter">5690</span>
                </div>
                <h5 class="counter-classic-title">Daily matches</h5>
              </article>
            </div>
            <div class="col-6 col-sm-3">
              <!--Counter-->
              <article class="counter-classic">
                <div class="counter-classic-main"><span class="counter">1346</span>
                </div>
                <h5 class="counter-classic-title">New users</h5>
              </article>
            </div>
            <div class="col-6 col-sm-3">
              <!--Counter-->
              <article class="counter-classic">
                <div class="counter-classic-main"><span class="counter">10679</span>
                </div>
                <h5 class="counter-classic-title">Regular visitors</h5>
              </article>
            </div>
            <div class="col-6 col-sm-3">
              <!--Counter-->
              <article class="counter-classic">
                <div class="counter-classic-main"><span class="counter">678</span><span class="counter-postfix">+</span>
                </div>
                <h5 class="counter-classic-title">Registered devices</h5>
              </article>
            </div>
          </div>
        </div><img class="section-decoration-1-image" src="asset/images/world-map-728x385.png" alt="" width="728" height="385"/>
      </section>
@include('layout.footer')