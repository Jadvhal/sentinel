@extends('layout.header')
@section('title', 'Contact US')
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
                <h2 class="breadcrumbs-custom-title">Contact Us</h2>
                <p class="big">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit.  </p>
              </div>
            </div>
          </div>
        </section>
      </header>
      <!-- Addresses-->
      <section class="section section-md bg-gray-100"> 
        <div class="container">
          <div class="row row-30">
            <div class="col-sm-6 col-lg-4">
              <!-- Box 1-->
              <address class="box-1">
                <p class="heading-4 box-1-title">United States</p>
                <p class="box-1-address heading-5">9 Valley St. Brooklyn, NY 11203</p>
                <p class="box-1-tel heading-3"><a href="tel:#">1-800-346-6277</a></p>
              </address>
            </div>
            <div class="col-sm-6 col-lg-4">
              <!-- Box 1-->
              <address class="box-1">
                <p class="heading-4 box-1-title">Canada</p>
                <p class="box-1-address heading-5">500 Kingston Rd Toronto ON M4L 1V3</p>
                <p class="box-1-tel heading-3"><a href="tel:#">1-780-964-1989</a></p>
              </address>
            </div>
            <div class="col-sm-6 col-lg-4">
              <!-- Box 1-->
              <address class="box-1">
                <p class="heading-4 box-1-title">Australia</p>
                <p class="box-1-address heading-5">60 Marcus Clarke St, Canberra, ACT 2601</p>
                <p class="box-1-tel heading-3"><a href="tel:#">61-02-6156-0706</a></p>
              </address>
            </div>
          </div>
        </div>
      </section>
      <!-- Get in Touch-->
      <section class="section section-lg bg-default">
        <div class="container">
          <h3>Get in Touch</h3>
          <!-- RD Mailform-->
          <form class="rd-form rd-mailform form-lg" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
            <div class="row row-30">
              <div class="col-lg-4">
                <div class="form-wrap form-wrap-icon">
                  <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                  <label class="form-label" for="contact-name">Name</label>
                  <div class="icon form-icon mdi mdi-account-outline text-primary"></div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-wrap form-wrap-icon">
                  <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@PhoneNumber">
                  <label class="form-label" for="contact-phone">Phone</label>
                  <div class="icon form-icon mdi mdi-phone text-primary"></div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-wrap form-wrap-icon">
                  <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                  <label class="form-label" for="contact-email">E-mail</label>
                  <div class="icon form-icon mdi mdi-email-outline text-primary"></div>
                </div>
              </div>
              <div class="col-12">
                <div class="form-wrap form-wrap-icon">
                  <label class="form-label" for="contact-message">Message</label>
                  <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                  <div class="icon form-icon mdi mdi-message-outline text-primary"></div>
                </div>
              </div>
            </div>
            <div class="form-wrap form-wrap-button">
              <button class="button button-lg button-primary" type="submit">Send</button>
            </div>
          </form>
        </div>
      </section>
@include('layout.footer')