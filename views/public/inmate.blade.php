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
                <div class="person-profile"><img src="asset/images/person-1-167x167.png" alt="" width="167" height="167"/>
                </div>
                <h2 class="breadcrumbs-custom-title">Catherine Barnes</h2>
              </div>
            </div>
          </div>
        </section>
      </header>
      <section class="section section-xs section-bordered-1">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <!-- Bootstrap tabs-->
              <div class="tabs-custom tabs-complex" id="tabs-1">
                <button class="tabs-complex-nav-toggle" data-multitoggle="#tabs-complex-nav" data-isolate="#tabs-complex-nav"><span>Navigation</span><span class="icon mdi mdi-chevron-down"></span></button>
                <!-- Nav tabs-->
                <ul class="nav nav-tabs" id="tabs-complex-nav">
                  <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1" data-toggle="tab"><span class="icon mdi mdi-information-outline"></span><span>Information</span></a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-4" data-toggle="tab"><span class="icon mdi mdi-image-filter"></span><span>Gallery</span></a></li>
                </ul>
                <!--user nickName--><a class="nick" href="#">@cbarnes</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-sm bg-gray-100 section-bordered-1">
        <!-- Tab panes-->
        <div class="container">
          <div class="row row-30">
            <div class="col-lg-8">
              <div class="tab-content">
                <div class="tab-pane fade show active" id="tabs-1-1">
                  <article class="post-info inset-1">
                    <h3 class="post-info-title">Basic Information</h3>
                    <div class="post-info-meta">
                      <ul class="post-info-meta-list">
                        <li><span class="icon mdi mdi-clock"></span><span class="text-gray-600">Active 10 days ago</span></li>
                        <li><span class="icon mdi mdi-account"></span><span class="text-gray-600">24 years old</span></li>
                      </ul>
                    </div>
                    <p>Pellentesque quis dui varius, dapibus velit id, iaculis ipsum. Morbi ac eros feugiat, lacinia elit ut elementum turpis. Curabitur justo sapien, tempus sit amet rutrum eu, commodo eu lacus. Morbi in ligula nibh. Maecenas ut mi at odio hendrerit eleifend tempor vitae augue. Fusce eget arcu et nibh dapibus maximus consectetur in est.</p>
                    <table class="post-info-table">
                      <tr>
                        <td>I’m a</td>
                        <td>Female</td>
                      </tr>
                      <tr>
                        <td>Looking for a</td>
                        <td>Male (26-30 y.o.)</td>
                      </tr>
                      <tr>
                        <td>Country</td>
                        <td>USA</td>
                      </tr>
                      <tr>
                        <td>City</td>
                        <td>Los Angeles</td>
                      </tr>
                      <tr>
                        <td>Interests</td>
                        <td>
                          <div class="row row-10 block-3">
                            <div class="col-md-6">
                              <ul class="list-marked">
                                <li>Music</li>
                                <li>Theater</li>
                              </ul>
                            </div>
                            <div class="col-md-6">
                              <ul class="list-marked">
                                <li>Movies</li>
                                <li>Traveling</li>
                              </ul>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Children</td>
                        <td>
                          <ul class="list-marked">
                            <li class="li-alternate">No Children</li>
                          </ul>
                        </td>
                      </tr>
                    </table>
                    <h3 class="mt-md-30 mt-lg-50 mt-xl-80">Photos</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere metus et tortor pulvinar venenatis. Aliquam erat volutpat. Nam ultrices semper felis, at laoreet metus</p>
                    <div class="row row-6 row-x-6" data-lightgallery="group">
                      <div class="col-4"><a class="thumbnail-light" href="asset/images/single-tour-1-original.jpg" data-lightgallery="item"><img class="thumbnail-light-image" src="asset/images/single-tour-1-355x359.jpg" alt="" width="355" height="359"/></a></div>
                      <div class="col-4"><a class="thumbnail-light" href="asset/images/single-tour-2-original.jpg" data-lightgallery="item"><img class="thumbnail-light-image" src="asset/images/single-tour-2-355x359.jpg" alt="" width="355" height="359"/></a></div>
                      <div class="col-4"><a class="thumbnail-light" href="asset/images/single-tour-3-original.jpg" data-lightgallery="item"><img class="thumbnail-light-image" src="asset/images/single-tour-3-355x359.jpg" alt="" width="355" height="359"/></a></div>
                    </div>
                  </article>
                </div>
                <div class="tab-pane fade" id="tabs-1-4">
                  <div class="inset-1">
                    <h3>Catherine's Gallery</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere metus et tortor pulvinar venenatis. Aliquam erat volutpat. Nam ultrices semper felis, at laoreet metus</p>
                    <div class="row row-6 row-x-6" data-lightgallery="group">
                      <div class="col-4"><a class="thumbnail-light" href="asset/images/single-tour-4-original.jpg" data-lightgallery="item"><img class="thumbnail-light-image" src="asset/images/single-tour-4-355x359.jpg" alt="" width="355" height="359"/></a></div>
                      <div class="col-4"><a class="thumbnail-light" href="asset/images/single-tour-1-original.jpg" data-lightgallery="item"><img class="thumbnail-light-image" src="asset/images/single-tour-1-355x359.jpg" alt="" width="355" height="359"/></a></div>
                      <div class="col-4"><a class="thumbnail-light" href="asset/images/single-tour-3-original.jpg" data-lightgallery="item"><img class="thumbnail-light-image" src="asset/images/single-tour-3-355x359.jpg" alt="" width="355" height="359"/></a></div>
                      <div class="col-4"><a class="thumbnail-light" href="asset/images/single-tour-2-original.jpg" data-lightgallery="item"><img class="thumbnail-light-image" src="asset/images/single-tour-2-355x359.jpg" alt="" width="355" height="359"/></a></div>
                      <div class="col-4"><a class="thumbnail-light" href="asset/images/single-tour-5-original.jpg" data-lightgallery="item"><img class="thumbnail-light-image" src="asset/images/single-tour-5-355x359.jpg" alt="" width="355" height="359"/></a></div>
                      <div class="col-4"><a class="thumbnail-light" href="asset/images/single-tour-6-original.jpg" data-lightgallery="item"><img class="thumbnail-light-image" src="asset/images/single-tour-6-355x359.jpg" alt="" width="355" height="359"/></a></div>
                      <div class="col-4"><a class="thumbnail-light" href="asset/images/single-tour-7-original.jpg" data-lightgallery="item"><img class="thumbnail-light-image" src="asset/images/single-tour-7-355x359.jpg" alt="" width="355" height="359"/></a></div>
                      <div class="col-4"><a class="thumbnail-light" href="asset/images/single-tour-8-original.jpg" data-lightgallery="item"><img class="thumbnail-light-image" src="asset/images/single-tour-8-355x359.jpg" alt="" width="355" height="359"/></a></div>
                      <div class="col-4"><a class="thumbnail-light" href="asset/images/single-tour-9-original.jpg" data-lightgallery="item"><img class="thumbnail-light-image" src="asset/images/single-tour-9-355x359.jpg" alt="" width="355" height="359"/></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="box-4-outer">
                <article class="box-search">
                  <div class="box-4-inner">
                    <h3>Search</h3>
                    <!-- RD Mailform-->
                    <form class="rd-form form-lg sidebar-form">
                      <div class="form-wrap">
                        <label class="form-label form-label mdi-account" for="gender-2"></label>
                        <select class="form-input" id="gender-2" name="gender-2" data-constraints="@Required" data-placeholder="Your Gender">
                          <option label="placeholder"></option>
                          <option>Male</option>
                          <option>Female</option>
                          <option>Non-Binary</option>
                        </select>
                      </div>
                      <div class="form-wrap">
                        <label class="form-label form-label mdi-target" for="partner-gender"></label>
                        <select class="form-input" id="partner-gender" name="partner-gender" data-constraints="@Required" data-placeholder="Partner's Gender">
                          <option label="placeholder"></option>
                          <option>Male</option>
                          <option>Female</option>
                          <option>Non-Binary</option>
                        </select>
                      </div>
                      <div class="form-wrap">
                        <label class="form-label form-label mdi-calendar-text" for="age"></label>
                        <select class="form-input" id="age" name="age" data-constraints="@Required" data-placeholder="Age">
                          <option label="placeholder"></option>
                          <option>18-22</option>
                          <option>22-26</option>
                          <option>26-30</option>
                          <option>30-34</option>
                          <option>34-38</option>
                        </select>
                      </div>
                      <div class="form-wrap">
                        <label class="form-label form-label mdi-map-marker" for="country-2"></label>
                        <select class="form-input" id="country-2" name="country" data-constraints="@Required" data-placeholder="Choose your country">
                          <option label="placeholder"></option>
                          <option>USA</option>
                          <option>Canada</option>
                          <option>UK</option>
                          <option>Ireland</option>
                          <option>France</option>
                        </select>
                      </div>
                      <div class="form-wrap">
                        <label class="form-label form-label country" for="interest">Your Interests</label><span class="mdi-magnify icon"></span>
                        <input class="form-input" id="interest" type="text" name="interest" data-constraints="@Required">
                      </div>
                      <div class="form-button form-wrap">
                        <button class="button button-lg button-primary button-block" type="submit">Find your partner</button>
                      </div>
                    </form>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      </section>
@include('layout.footer')