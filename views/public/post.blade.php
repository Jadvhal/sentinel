@extends('layout.header')
@section('title', '')
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
                <h2 class="breadcrumbs-custom-title">Single Post</h2>
                <p class="big">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit.</p>
              </div>
            </div>
          </div>
        </section>
      </header>
      <section class="section section-md bg-default">
        <div class="container">
          <article class="blog-layout">
            <div class="blog-layout-main">
              <div class="blog-layout-main-item">
                <article class="post-corporate"><img class="post-corporate-image" src="asset/images/blog-post-1-768x396.jpg" alt="" width="768" height="396"/>
                  <ul class="post-corporate-meta">
                    <li><span class="icon mdi mdi-calendar-today"></span>
                      <time datetime="2021">May 12, 2021</time>
                    </li>
                    <li><span class="icon mdi mdi-account"></span><span>John Doe</span></li>
                    <li><span class="icon mdi mdi-tag-outline"></span><span>Dating Tips</span></li>
                  </ul>
                  <div class="post-corporate-divider"></div>
                  <h3 class="post-corporate-title">How to Be Happy in Relationships</h3>
                  <p>Pellentesque quis dui varius, dapibus velit id, iaculis ipsum. Morbi ac eros feugiat, lacinia elit ut elementum turpis. Curabitur justo sapien, tempus sit amet rutrum eu, commodo eu lacus. Morbi in ligula nibh. Maecenas ut mi at odio hendrerit eleifend tempor vitae augue. Fusce eget arcu et nibh dapibus maximus consectetur in est.</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                  <!-- Quote Primary-->
                  <blockquote class="quote-primary">
                    <div class="quote-primary-text">
                      <p>Odio aenean sed adipiscing diam donec. Amet consectetur adipiscing elit duis tristique. Ultricies tristique nulla aliquet enim tortor. A iaculis at erat pellentesque.</p>
                    </div>
                    <div class="quote-primary-footer">
                      <svg class="quote-primary-line" width="70" height="8" viewBox="0 0 70 8" fill="none">
                        <path d="M0 1C5 1 5 7 9.92 7C14.84 7 14.92 1 19.85 1C24.78 1 24.85 7 29.77 7C34.69 7 34.77 1 39.71 1C44.65 1 44.71 7 49.63 7C54.55 7 54.63 1 59.57 1C64.51 1 64.57 7 69.5 7" stroke-width="1.98" stroke-miterlimit="10"></path>
                      </svg>
                      <p class="heading-5 quote-primary-cite">Jane Smith</p>
                    </div>
                  </blockquote>
                  <h3 class="post-corporate-title">10 Tips for Men and Women</h3>
                  <p>Augue neque gravida in fermentum et. Tortor at auctor urna nunc id cursus metus. Leo a diam sollicitudin tempor id eu nisl nunc. Nunc sed blandit libero volutpat sed cras ornare arcu.</p>
                  <div class="post-corporate-gallery" data-lightgallery="group"><a class="post-corporate-thumbnail post-corporate-thumbnail-1" href="asset/images/blog-post-2-original.jpg" data-lightgallery="item"><img class="post-corporate-thumbnail-image" src="asset/images/blog-post-2-768x396.jpg" alt="" width="768" height="396"/></a><a class="post-corporate-thumbnail post-corporate-thumbnail-2" href="asset/images/blog-post-3-original.jpg" data-lightgallery="item"><img class="post-corporate-thumbnail-image" src="asset/images/blog-post-3-278x331.jpg" alt="" width="278" height="331"/></a><a class="post-corporate-thumbnail post-corporate-thumbnail-3" href="asset/images/blog-post-4-original.jpg" data-lightgallery="item"><img class="post-corporate-thumbnail-image" src="asset/images/blog-post-4-480x331.jpg" alt="" width="480" height="331"/></a></div>
                  <p>Semper viverra nam libero justo. Velit dignissim sodales ut eu sem integer vitae justo. Pretium aenean pharetra magna ac placerat vestibulum lectus mauris. Aenean vel elit scelerisque mauris. Suspendisse interdum consectetur libero id faucibus nisl. Semper eget duis at tellus at.</p>
                  <ul class="post-corporate-tags">
                    <li><a href="#">News</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Tips</a></li>
                  </ul>
                  <div class="post-corporate-divider"></div>
                  <div class="post-corporate-footer">
                    <h5 class="font-weight-sbold">Share this post</h5>
                    <div>
                      <div class="group group-sm"><a class="link-1 icon mdi mdi-facebook" href="#"></a><a class="link-1 icon mdi mdi-instagram" href="#"></a><a class="link-1 icon mdi mdi-behance" href="#"></a><a class="link-1 icon mdi mdi-twitter" href="#"></a></div>
                    </div>
                  </div>
                </article>
              </div>
              <div class="blog-layout-main-item">
                <h3>Related Posts</h3>
                <div class="row row-40">
                  <div class="col-sm-6">
                    <!-- Post Classic-->
                    <article class="post-classic ml-sm-0"><a class="post-classic-figure" href="blog-post.html"><img class="post-classic-image" src="asset/images/grid-blog-7-339x251.jpg" alt="" width="339" height="251"/></a>
                      <time class="post-classic-time" datetime="2021">April 24, 2021</time>
                      <div class="post-classic-divider"></div>
                      <p class="heading-5 post-classic-title"><a href="blog-post.html">5 Reasons You’re Still Lonely Even Though You Use Dating Apps</a></p>
                    </article>
                  </div>
                  <div class="col-sm-6">
                    <!-- Post Classic-->
                    <article class="post-classic mr-sm-0"><a class="post-classic-figure" href="blog-post.html"><img class="post-classic-image" src="asset/images/grid-blog-3-339x251.jpg" alt="" width="339" height="251"/></a>
                      <time class="post-classic-time" datetime="2021">May 12, 2021</time>
                      <div class="post-classic-divider"></div>
                      <p class="heading-5 post-classic-title"><a href="blog-post.html">Can You Text Your Way into a Successful Relationship?</a></p>
                    </article>
                  </div>
                </div>
              </div>
              <div class="blog-layout-main-item">
                <h3>Leave a Reply</h3>
                <!-- RD Mailform-->
                <form class="rd-form rd-mailform form-lg" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                  <div class="row row-30">
                    <div class="col-md-6">
                      <div class="form-wrap form-wrap-icon">
                        <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                        <label class="form-label" for="contact-name">Name</label>
                        <div class="icon form-icon mdi mdi-account-outline text-primary"></div>
                      </div>
                    </div>
                    <div class="col-md-6">
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
            </div>
            <div class="blog-layout-aside">
              <div class="blog-layout-aside-item">
                <!-- RD Search-->
                <form class="rd-search rd-search-inline block-2 block-centered" action="search-results.html" method="GET">
                  <div class="form-wrap">
                    <label class="form-label" for="rd-search-form-input">Search...</label>
                    <input class="form-input" id="rd-search-form-input" type="text" name="s" autocomplete="off">
                  </div>
                  <div class="form-button">
                    <button class="rd-search-submit" type="submit"></button>
                  </div>
                </form>
              </div>
              <div class="blog-layout-aside-item">
                <h4>Categories</h4>
                <ul class="list-categories">
                  <li><a href="#"><span class="lc-text">News</span><span class="lc-counter">6</span></a></li>
                  <li><a href="#"><span class="lc-text">Dating Tips</span><span class="lc-counter">6</span></a></li>
                  <li><a href="#"><span class="lc-text">Men</span><span class="lc-counter">12</span></a></li>
                  <li><a href="#"><span class="lc-text">Women</span><span class="lc-counter">9</span></a></li>
                  <li><a href="#"><span class="lc-text">Non-binary</span><span class="lc-counter">9</span></a></li>
                </ul>
              </div>
              <div class="blog-layout-aside-item">
                <h4>New Posts</h4>
                <div class="group-post-minimal">
                  <article class="post-minimal"><a class="post-minimal-media" href="blog-post.html"><img class="post-minimal-image" src="asset/images/blog-post-5-79x78.jpg" alt="" width="79" height="78"/></a>
                    <div class="post-minimal-main">
                      <h6 class="post-minimal-title"><a href="blog-post.html">Can You Text Your Way into a Relationship?</a></h6>
                      <time class="post-minimal-time" datetime="2021">May 12, 2021</time>
                    </div>
                  </article>
                  <article class="post-minimal"><a class="post-minimal-media" href="blog-post.html"><img class="post-minimal-image" src="asset/images/blog-post-6-79x78.jpg" alt="" width="79" height="78"/></a>
                    <div class="post-minimal-main">
                      <h6 class="post-minimal-title"><a href="blog-post.html">Things Men Can Do to Know Women Better</a></h6>
                      <time class="post-minimal-time" datetime="2021">June 19, 2021</time>
                    </div>
                  </article>
                  <article class="post-minimal"><a class="post-minimal-media" href="blog-post.html"><img class="post-minimal-image" src="asset/images/blog-post-7-79x78.jpg" alt="" width="79" height="78"/></a>
                    <div class="post-minimal-main">
                      <h6 class="post-minimal-title"><a href="blog-post.html">Topics to Avoid Talking About on the First Date</a></h6>
                      <time class="post-minimal-time" datetime="2021">July 25, 2021</time>
                    </div>
                  </article>
                </div>
              </div>
              <div class="blog-layout-aside-item">
                <!-- Tour Light-->
                <article class="tour-light bg-image context-dark" style="background-image: url(asset/images/blog-post-8.jpg);">
                  <div class="tour-light-inner blog-post-cta">
                    <div class="tour-light-main tour-light-inset">
                      <div class="tour-light-title"><a href="#"><span>Find Your</span><span>Love with</span><span>Loven</span></a></div>
                    </div>
                  </div>
                </article>
              </div>
              <div class="blog-layout-aside-item">
                <h4>Newsletter</h4>
                <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                  <div class="form-wrap form-wrap-icon">
                    <input class="form-input" id="subscribe-form-email" type="email" name="email" data-constraints="@Email @Required">
                    <label class="form-label" for="subscribe-form-email">E-mail</label>
                    <div class="icon form-icon mdi mdi-email-outline"></div>
                  </div>
                  <div class="form-wrap mt-30">
                    <button class="button button-block button-lg button-primary" type="submit">Send</button>
                  </div>
                </form>
              </div>
            </div>
          </article>
        </div>
      </section>
@include('layout.footer')