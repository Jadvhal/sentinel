@extends('layout.header')
@section('title', 'News Feed')
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
                <h2 class="breadcrumbs-custom-title">Grid Blog</h2>
                <p class="big">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit.  </p>
              </div>
            </div>
          </div>
        </section>
      </header>
      <!-- Grid Blog-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-40 row-md-50 row-xxl-80">
            <div class="col-sm-6 col-lg-4">
              <!-- Post Classic-->
              <article class="post-classic"><a class="post-classic-figure" href="blog-post.html"><img class="post-classic-image" src="asset/images/grid-blog-1-339x251.jpg" alt="" width="339" height="251"/></a>
                <time class="post-classic-time" datetime="2021">April 24, 2021</time>
                <div class="post-classic-divider"></div>
                <p class="heading-5 post-classic-title"><a href="blog-post.html">5 Reasons You’re Still Lonely Even Though You Use Dating Apps</a></p>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4">
              <!-- Post Classic-->
              <article class="post-classic"><a class="post-classic-figure" href="blog-post.html"><img class="post-classic-image" src="asset/images/grid-blog-2-339x251.jpg" alt="" width="339" height="251"/></a>
                <time class="post-classic-time" datetime="2021">May 12, 2021</time>
                <div class="post-classic-divider"></div>
                <p class="heading-5 post-classic-title"><a href="blog-post.html">Can You Text Your Way into a Successful Relationship?</a></p>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4">
              <!-- Post Classic-->
              <article class="post-classic"><a class="post-classic-figure" href="blog-post.html"><img class="post-classic-image" src="asset/images/grid-blog-3-339x251.jpg" alt="" width="339" height="251"/></a>
                <time class="post-classic-time" datetime="2021">June 19, 2021</time>
                <div class="post-classic-divider"></div>
                <p class="heading-5 post-classic-title"><a href="blog-post.html">9 Awesome Things Men Can Do to Score Points With Women</a></p>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4">
              <!-- Post Classic-->
              <article class="post-classic"><a class="post-classic-figure" href="blog-post.html"><img class="post-classic-image" src="asset/images/grid-blog-4-339x251.jpg" alt="" width="339" height="251"/></a>
                <time class="post-classic-time" datetime="2021">July 25, 2021</time>
                <div class="post-classic-divider"></div>
                <p class="heading-5 post-classic-title"><a href="blog-post.html">Topics You Should Avoid Talking About When Trying To Date</a></p>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4">
              <!-- Post Classic-->
              <article class="post-classic"><a class="post-classic-figure" href="blog-post.html"><img class="post-classic-image" src="asset/images/grid-blog-5-339x251.jpg" alt="" width="339" height="251"/></a>
                <time class="post-classic-time" datetime="2021">August 14, 2021</time>
                <div class="post-classic-divider"></div>
                <p class="heading-5 post-classic-title"><a href="blog-post.html">How Online Dating Can Help You Find a Partner</a></p>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4">
              <!-- Post Classic-->
              <article class="post-classic"><a class="post-classic-figure" href="blog-post.html"><img class="post-classic-image" src="asset/images/grid-blog-6-339x251.jpg" alt="" width="339" height="251"/></a>
                <time class="post-classic-time" datetime="2021">September 1, 2021</time>
                <div class="post-classic-divider"></div>
                <p class="heading-5 post-classic-title"><a href="blog-post.html">5 Secrets of True Happiness in Modern Relationships</a></p>
              </article>
            </div>
            <div class="col-12">
              <nav class="pagination-outer text-center">
                <ul class="pagination">
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </section>
@include('layout.footer')