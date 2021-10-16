
<?php $__env->startSection('title', 'Inmates'); ?>
  <body>
	<?php echo $__env->make('layout.loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
				<?php echo $__env->make('layout.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              </div>
            </div>
          </nav>
        </div>
        <section class="breadcrumbs-custom">
          <div class="breadcrumbs-custom-inner">
            <div class="container">
              <div class="breadcrumbs-custom-main">
                <h2 class="breadcrumbs-custom-title">Community 1</h2>
                <p class="big">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit. </p>
              </div>
            </div>
          </div>
        </section>
      </header>
      <section class="section section-md bg-gray-100 section-bordered-1">
        <div class="container">
          <div class="row row-30 row-xl-50 flex-lg-row-reverse">
            <div class="col-lg-4">
              <div class="block-custom-centered">
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
            <div class="col-lg-8">
              <div class="row row-30">
                <div class="col-md-6">
                  <!-- Tour 3-->
                  <article class="tour-3 bg-image context-dark community wow fadeIn" style="background-image: url(asset/images/visitor-1-370x417.jpg);">
                    <div class="tour-3-inner">
                      <div class="tour-3-main">
                        <h3 class="tour-3-title"><a href="person-page.html">Jenny Wilson</a></h3>
                        <ul class="tour-3-meta">
                          <li><span class="icon mdi material-design-clock100"></span><span>active 10 days ago</span></li>
                        </ul>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="col-md-6">
                  <!-- Tour 3-->
                  <article class="tour-3 bg-image context-dark community wow fadeIn" style="background-image: url(asset/images/visitor-2-370x417.jpg);">
                    <div class="tour-3-inner">
                      <div class="tour-3-main">
                        <h3 class="tour-3-title"><a href="person-page.html">Kathryn Murphy</a></h3>
                        <ul class="tour-3-meta">
                          <li><span class="icon mdi material-design-clock100"></span><span>active 10 days ago</span></li>
                        </ul>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="col-md-6">
                  <!-- Tour 3-->
                  <article class="tour-3 bg-image context-dark community wow fadeIn" style="background-image: url(asset/images/visitor-3-370x417.jpg);" data-wow-delay=".1s">
                    <div class="tour-3-inner">
                      <div class="tour-3-main">
                        <h3 class="tour-3-title"><a href="person-page.html">Marvin McKinney</a></h3>
                        <ul class="tour-3-meta">
                          <li><span class="icon mdi material-design-clock100"></span><span>active 10 days ago</span></li>
                        </ul>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="col-md-6">
                  <!-- Tour 3-->
                  <article class="tour-3 bg-image context-dark community wow fadeIn" style="background-image: url(asset/images/visitor-4-370x417.jpg);" data-wow-delay=".4s">
                    <div class="tour-3-inner">
                      <div class="tour-3-main">
                        <h3 class="tour-3-title"><a href="person-page.html">Ralph Edwards</a></h3>
                        <ul class="tour-3-meta">
                          <li><span class="icon mdi material-design-clock100"></span><span>active 3 days ago</span></li>
                        </ul>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="col-md-6">
                  <!-- Tour 3-->
                  <article class="tour-3 bg-image context-dark community wow fadeIn" style="background-image: url(asset/images/visitor-5-370x417.jpg);" data-wow-delay=".5s">
                    <div class="tour-3-inner">
                      <div class="tour-3-main">
                        <h3 class="tour-3-title"><a href="person-page.html">Albert Flores</a></h3>
                        <ul class="tour-3-meta">
                          <li><span class="icon mdi material-design-clock100"></span><span>active 2 days ago</span></li>
                        </ul>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="col-md-6">
                  <!-- Tour 3-->
                  <article class="tour-3 bg-image context-dark community wow fadeIn" style="background-image: url(asset/images/visitor-6-370x417.jpg);" data-wow-delay=".2s">
                    <div class="tour-3-inner">
                      <div class="tour-3-main">
                        <h3 class="tour-3-title"><a href="person-page.html">Eleanor Pena</a></h3>
                        <ul class="tour-3-meta">
                          <li><span class="icon mdi material-design-clock100"></span><span>active 8 days ago</span></li>
                        </ul>
                      </div>
                    </div>
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
          </div>
        </div>
      </section>
<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\mani\views\public/inmates.blade.php ENDPATH**/ ?>