@extends('layout.header')
@section('title', 'Home')
  <body>
    @include('layout.loader')
    <div class="page">
      <!-- FScreen-->
      <section class="section jumbotron-2">
        <div class="jumbotron-2-content context-dark bg-image" style="background-image: url(asset/images/bg-image-1.jpg);">
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
          <div class="container">
            <div class="jumbotron-2-content-inner">
              <div class="row justify-content-start">
                <div class="col-xl-5">
                  <h1 class="text-white">New People, Unforgettable Experience.</h1>
                  <p class="text-white-8 text-md intro-subtitle ls-ng-1">Are you looking to connect with a Penpal? Loven is the place for you! Join us now to meet single men and women worldwide.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="jumbotron-2-block">
          <div class="jumbotron-2-inner">
            <div class="container">
              <form class="search-form row row-narrow-20 align-items-center justify-content-center row-20">
                <div class="col-xl-7 block-m">
                  <div class="group-20">
                    <div class="form-wrap">
                      <label class="form-label form-label-outside" for="gender">I am</label>
                      <select class="form-input" id="gender" name="gender" data-constraints="@Required" data-placeholder="Man">
                        <option label="placeholder"></option>
                        <option>Man</option>
                        <option>Woman</option>
                        <option>Non-Binary</option>
                      </select>
                    </div>
                    <div class="form-wrap">
                      <label class="form-label form-label-outside" for="looking">Looking for</label>
                      <select class="form-input" id="looking" name="gender" data-constraints="@Required" data-placeholder="Woman">
                        <option label="placeholder"></option>
                        <option>Woman</option>
                        <option>Man</option>
                        <option>Non-Binary</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-xl-5 block-s">
                  <div class="form-wrap">
                    <label class="form-label form-label-outside" for="start-age">Age</label>
                  </div>
                  <div class="small-group">
                    <div class="form-wrap">
                      <select class="form-input" id="start-age" name="gender" data-constraints="@Required" data-placeholder="18">
                        <option label="placeholder"></option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                      </select>
                    </div><span class="divider-1"></span>
                    <div class="form-wrap">
                      <select class="form-input" id="end-age" name="gender" data-constraints="@Required" data-placeholder="30">
                        <option label="placeholder"></option>
                        <option>31</option>
                        <option>32</option>
                        <option>33</option>
                        <option>34</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-xl-7 block-l">
                  <div class="form-wrap">
                    <label class="form-label form-label-outside" for="country">Country</label>
                  </div>
                  <div class="group-20 align-items-end big-group">
                    <div class="form-wrap">
                      <select class="form-input" id="country" name="country" data-constraints="@Required" data-placeholder="Choose your country">
                        <option label="placeholder"></option>
                        <option>USA</option>
                        <option>Canada</option>
                        <option>UK</option>
                        <option>Ireland</option>
                        <option>France</option>
                      </select>
                    </div>
                    <div class="form-wrap form-button">
                      <button class="button button-icon button-icon-left button-primary" type="submit"><span class="icon mdi mdi-magnify"></span>Find your partner</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="divider-3"></div>
          <div class="container mt-30 mt-md-45 mt-xxl-75 text-center">
            <h2 class="wow fadeIn">Only True People</h2>
            <p class="text-gray-700 wow fadeIn" data-wow-delay=".025s"><span style="max-width: 850px;">Every user registered on Loven is verified via photo and mobile phone so you don’t have to worry how real or fake anyone is.</span></p>
            <div class="row row-30 row-xl-50 mt-md-45 mt-xxl-60">
              <div class="col-sm-6 col-lg-2">
                <!-- Tour 3-->
                <article class="tour-3 bg-image context-dark wow fadeIn" style="background-image: url(asset/images/visitor-1-370x417.jpg);">
                  <div class="tour-3-inner">
                    <div class="tour-3-main">
                      <h3 class="tour-3-title"><a href="person-page.html">Jenny Wilson</a></h3>
                      <ul class="tour-3-meta">
                        <!--li><span>active 10 days ago</span></li -->
                        <li>Florida</li>
                      </ul>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-sm-6 col-lg-2">
                <!-- Tour 3-->
                <article class="tour-3 bg-image context-dark wow fadeIn" style="background-image: url(asset/images/visitor-2-370x417.jpg);" data-wow-delay=".1s">
                  <div class="tour-3-inner">
                    <div class="tour-3-main">
                      <h3 class="tour-3-title"><a href="person-page.html">Kathryn Murphy</a></h3>
                      <ul class="tour-3-meta">
                        <li>California</li>
                      </ul>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-sm-6 col-lg-2">
                <!-- Tour 3-->
                <article class="tour-3 bg-image context-dark wow fadeIn" style="background-image: url(asset/images/visitor-3-370x417.jpg);" data-wow-delay=".2s">
                  <div class="tour-3-inner">
                    <div class="tour-3-main">
                      <h3 class="tour-3-title"><a href="person-page.html">Marvin McKinney</a></h3>
                      <ul class="tour-3-meta">
                        <li>Michigan</li>
                      </ul>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-sm-6 col-lg-2">
                <!-- Tour 3-->
                <article class="tour-3 bg-image context-dark wow fadeIn" style="background-image: url(asset/images/visitor-4-370x417.jpg);" data-wow-delay=".3s">
                  <div class="tour-3-inner">
                    <div class="tour-3-main">
                      <h3 class="tour-3-title"><a href="person-page.html">Ralph Edwards</a></h3>
                      <ul class="tour-3-meta">
                        <li>Idaho</li>
                      </ul>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-sm-6 col-lg-2">
                <!-- Tour 3-->
                <article class="tour-3 bg-image context-dark wow fadeIn" style="background-image: url(asset/images/visitor-5-370x417.jpg);" data-wow-delay=".4s">
                  <div class="tour-3-inner">
                    <div class="tour-3-main">
                      <h3 class="tour-3-title"><a href="person-page.html">Albert Flores</a></h3>
                      <ul class="tour-3-meta">
                        <li>California</li>
                      </ul>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-sm-6 col-lg-2">
                <!-- Tour 3-->
                <article class="tour-3 bg-image context-dark wow fadeIn" style="background-image: url(asset/images/visitor-6-370x417.jpg);" data-wow-delay=".5s">
                  <div class="tour-3-inner">
                    <div class="tour-3-main">
                      <h3 class="tour-3-title"><a href="person-page.html">Eleanor Pena</a></h3>
                      <ul class="tour-3-meta">
                        <li>Texas</li>
                      </ul>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-12 wow fadeIn text-center" data-wow-delay=".6s"><a class="button button-sm button-primary wow fadeIn" href="#" data-wow-delay=".07s">View more</a></div>
            </div>
          </div>
        </div>
      </section>
      <!-- Why Travel with Sunway?-->
      <section class="section">
        <div class="range">
          <div class="cell-lg-7 cell-xl-8 cell-xxl-9">
            <div class="cell-inner section-lg text-center text-sm-left">
              <h2 class="text-center text-xl-left wow fadeIn">Why Choose Loven</h2>
              <p class="text-center text-xl-left wow fadeIn" data-wow-delay=".05s">Here’s why lots of people choose our website.</p>
              <!-- Owl Carousel-->
              <div class="owl-carousel owl-1 list-group-1 mt-lg-50" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="2" data-xl-items="3" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="false" data-margin="30" data-mouse-drag="false">
                <article class="lg-1-item wow fadeIn">
                  <div class="icon lg-1-item-icon mdi mdi-account-search"></div>
                  <div class="lg-1-item-main">
                    <h3 class="lg-1-item-title font-weight-normal"><span class="lg-1-item-counter"></span>Simple to Use</h3>
                    <p>Loven is very easy to use - just choose your and your partner’s gender, age, and location, and you’re all set!</p>
                  </div>
                </article>
                <article class="lg-1-item wow fadeIn" data-wow-delay=".025s">
                  <div class="icon lg-1-item-icon mdi material-design-compass106"></div>
                  <div class="lg-1-item-main">
                    <h3 class="lg-1-item-title font-weight-normal"><span class="lg-1-item-counter"></span>Smart Matching</h3>
                    <p>Our matching system is based on geolocation and interests. It helps you find the best people to meet or spend time with.</p>
                  </div>
                </article>
                <article class="lg-1-item wow fadeIn" data-wow-delay=".05s">
                  <div class="icon lg-1-item-icon mdi mdi-comment-processing"></div>
                  <div class="lg-1-item-main">
                    <h3 class="lg-1-item-title font-weight-normal"><span class="lg-1-item-counter"></span>Cool Community</h3>
                    <p>Besides being #1 dating service, we have a supportive and understanding community that’s always ready to help.</p>
                  </div>
                </article>
              </div>
            </div>
          </div>
          <div class="cell-lg-5 cell-xl-4 cell-xxl-3 height-fill">
            <div class="box-3 bg-image" style="background-image: url(asset/images/about-2.jpg);"><a class="box-3-play" data-lightgallery="item" href="https://www.youtube.com/watch?v=V7mJgSzbckc&amp;t=1s&amp;ab_channel=productpage_video"><span class="icon mdi mdi-play"></span></a></div>
          </div>
        </div>
      </section>
      <!-- Popular Destinations-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-50 flex-lg-row-reverse align-items-center justify-content-xl-between">
            <div class="col-lg-4 col-xl-5 col-xxl-4">
              <div class="block-7">
                <h2 class="wow fadeIn">Meet Singles <br> in Your Area</h2>
                <p class="ls-ng-1 text-md text-black-5 mt-md-20 mt-xxl-50 wow fadeIn" data-wow-delay=".025s">If you want to meet local singles for dating, companionship, friendship or even more, you have come to the right place.</p><a class="button button-lg button-icon button-icon-left button-primary offset-xl-t-45 wow fadeIn" href="#" data-wow-delay=".05s"><span class="icon mdi mdi-magnify"></span>Find your partner</a>
              </div>
            </div>
            <div class="col-lg-8 col-xl-7">
              <div class="row row-30">
                <div class="col-sm-6 wow fadeIn"><a class="destination-1 context-dark" href="#">
                    <figure class="destination-1-figure">
                      <div class="destination-1-image bg-image" style="background-image: url(asset/images/destinations-1-363x260.jpg);"></div>
                    </figure>
                    <div class="destination-1-caption">
                      <p class="destination-1-decoration-title">Amsterdam</p>
                      <p class="heading-3 destination-1-title">Amsterdam</p>
                      <div class="destination-1-comment"><span>from $560</span></div>
                    </div></a>
                </div>
                <div class="col-sm-6 wow fadeIn" data-wow-delay=".025s"><a class="destination-1 context-dark" href="#">
                    <figure class="destination-1-figure">
                      <div class="destination-1-image bg-image" style="background-image: url(asset/images/destinations-2-363x260.jpg);"></div>
                    </figure>
                    <div class="destination-1-caption">
                      <p class="destination-1-decoration-title">London</p>
                      <p class="heading-3 destination-1-title">London</p>
                      <div class="destination-1-comment"><span>from $500</span></div>
                    </div></a>
                </div>
                <div class="col-sm-6 wow fadeIn" data-wow-delay=".025s"><a class="destination-1 context-dark" href="#">
                    <figure class="destination-1-figure">
                      <div class="destination-1-image bg-image" style="background-image: url(asset/images/destinations-3-363x260.jpg);"></div>
                    </figure>
                    <div class="destination-1-caption">
                      <p class="destination-1-decoration-title">Barcelona</p>
                      <p class="heading-3 destination-1-title">Barcelona</p>
                      <div class="destination-1-comment"><span>from $800</span></div>
                    </div></a>
                </div>
                <div class="col-sm-6 wow fadeIn" data-wow-delay=".05s"><a class="destination-1 context-dark" href="#">
                    <figure class="destination-1-figure">
                      <div class="destination-1-image bg-image" style="background-image: url(asset/images/destinations-4-363x260.jpg);"></div>
                    </figure>
                    <div class="destination-1-caption">
                      <p class="destination-1-decoration-title">New York</p>
                      <p class="heading-3 destination-1-title">New York</p>
                      <div class="destination-1-comment"><span>from $670</span></div>
                    </div></a>
                </div>
                <div class="col-sm-6 d-none d-lg-block"></div>
                <div class="col-sm-6 wow fadeIn" data-wow-delay=".075s"><a class="destination-1 context-dark" href="#">
                    <figure class="destination-1-figure">
                      <div class="destination-1-image bg-image" style="background-image: url(asset/images/destinations-5-363x260.jpg);"></div>
                    </figure>
                    <div class="destination-1-caption">
                      <p class="destination-1-decoration-title">Paris</p>
                      <p class="heading-3 destination-1-title">Paris</p>
                      <div class="destination-1-comment"><span>from $400</span></div>
                    </div></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Special Offers-->
      <section class="section cta-section position-relative section-sm context-dark bg-img-2">
        <div class="container">
          <div class="row justify-content-lg-end justify-content-center">
            <div class="col-md-8 col-lg-5 d-flex flex-column justify-content-center wow fadeInRight">
              <h2>Premium Membership</h2>
              <p class="text-white-7">Enjoy the benefits of our dating services membership! Use the psychological matching to find the best people and experience other great bonuses.</p>
              <div class="unit cta-unit unit-spacing-md flex-column flex-sm-row align-items-center offset-xl-t-40">
                <div class="unit-left"><a class="button button-md button-light" href="#">view all options</a></div>
                <div class="unit-body"><span class="text-white-7">14 days for free</span></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Latest News-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2 class="text-center wow fadeIn">Dating Tips & Advice</h2>
              <p class="offset-top-5 block-md text-center text-gray-800 wow fadeIn" data-wow-delay=".025s">Here are some of our latest dating articles written by our staff. We hope these tips will help you get more confident and find what you are looking for.</p>
            </div>
          </div>
          <div class="row row-40">
            <div class="col-sm-6 col-lg-3 wow fadeIn">
              <!-- Post Creative-->
              <article class="post-creative"><a class="post-creative-image" href="blog-post.html" style="background-image: url(asset/images/home-2-8.jpg);"></a>
                <div class="post-creative-main">
                  <p class="post-creative-title"><a href="blog-post.html">5 Reasons You’re Still Lonely Even Though You Use Dating Apps</a></p>
                  <time class="post-creative-time" datetime="2021">April 24, 2021</time>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay=".025s">
              <!-- Post Creative-->
              <article class="post-creative"><a class="post-creative-image" href="blog-post.html" style="background-image: url(asset/images/home-2-9.jpg);"></a>
                <div class="post-creative-main">
                  <p class="post-creative-title"><a href="blog-post.html">Can You Text Your Way into a Successful Relationship?</a></p>
                  <time class="post-creative-time" datetime="2021">May 12, 2021</time>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay=".05s">
              <!-- Post Creative-->
              <article class="post-creative"><a class="post-creative-image" href="blog-post.html" style="background-image: url(asset/images/home-2-10.jpg);"></a>
                <div class="post-creative-main">
                  <p class="post-creative-title"><a href="blog-post.html">9 Awesome Things Men Can Do to Score Points With Women</a></p>
                  <time class="post-creative-time" datetime="2021">May 14, 2021</time>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay=".075s">
              <!-- Post Creative-->
              <article class="post-creative"><a class="post-creative-image" href="blog-post.html" style="background-image: url(asset/images/home-2-11.jpg);"></a>
                <div class="post-creative-main">
                  <p class="post-creative-title"><a href="blog-post.html">Topics You Should Avoid Talking About When Trying To Date</a></p>
                  <time class="post-creative-time" datetime="2021">June 19, 2021</time>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
@include('layout.footer')