<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Build Your Innovation</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <?php include "./templates/favicon.php"; ?>
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
    />
    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
         <![endif][if lt IE 9]><script src="js/respond.js"></script><![endif] -->
  </head>
  <body>
    <div class="page-wrapper dark-layout">
      <!-- Cursor Animation -->
      <?php include "./templates/cursor-animation.php"; ?>
      <!-- Preloader -->
      <div class="preloader"></div>
      <!-- Main Header-->
      <?php $currentPage = "index"; include "./templates/header.php"; ?>
      <!--End Main Header -->
      <!-- Hidden bar back drop -->
      <div class="hidden-bar-back-drop"></div>
      <!-- Hidden Bar -->
      <?php include "./templates/hiddenBar.php"; ?>
      <!--End Hidden Bar -->
      <!-- Banner Section -->
      <section class="banner-section">
        <div class="bg bg-pattern-1"></div>
        <div class="auto-container">
          <div class="content-box">
            <span class="sub-title wow fadeInUp" data-wow-delay="1500ms"
              >providing
              <span style="color: var(--theme-color1)">
                innovative <br />Website
              </span>
              solution for you</span
            >
            <h1 class="title title-anim">
              <span class="line-1"
                >Creative <i class="icon icon-star2"></i>
              </span>
              <span class="line-2"
                >Innovation <i class="icon icon-square"></i
              ></span>
            </h1>
            <a
              href="#know-more"
              class="circle-text wow zoomIn"
              data-wow-delay="2000ms"
            >
              <img src="images/resource/round-text-discover-more.png" alt="" />
              <span class="icon icon-arrow-down"></span>
            </a>
          </div>
          <div class="image-box">
            <figure class="image wow fadeIn" data-wow-delay="600ms">
              <img src="images/main-slider/1.jpg" alt="" />
            </figure>
          </div>
        </div>
        <ul class="social-icon-one" data-wow-delay="2400ms">
          <li>
            <a href="https://www.facebook.com/buildyourinnovation">Facebook</a>
          </li>
          <li>
            <a href="https://www.linkedin.com/company/buildyourinnovation"
              >Linkedin</a
            >
          </li>
          <li>
            <a href="https://www.instagram.com/buildyourinnovation/"
              >Instagram</a
            >
          </li>
          <li><a href="https://wa.me/+919755385253">WhatsApp</a></li>
        </ul>
      </section>
      <!-- End Banner Section -->
      <!-- Marquee Section -->
      <div class="marquee-section">
        <div class="marquee">
          <div class="marquee-group">
            <div class="text">*Transofrm ideas into reality</div>
            <div class="text color1">*INSPIRED WITH CREATIVITY</div>
            <div class="text">*Design & development craft</div>
            <div class="text color1">*unlock the potential</div>
            <div class="text">*crafting emotional designs</div>
          </div>
          <div aria-hidden="true" class="marquee-group">
            <div class="text">*Transofrm ideas into reality</div>
            <div class="text color1">*INSPIRED WITH CREATIVITY</div>
            <div class="text">*Design & development craft</div>
            <div class="text color1">*unlock the potential</div>
            <div class="text">*crafting emotional designs</div>
          </div>
        </div>
      </div>
      <!-- End Marquee Section -->
      <!-- Services Section-->
      <section class="services-section-four" id="know-more">
        <div class="auto-container">
          <div class="sec-title">
            <div class="row">
              <div class="col-xl-7">
                <h1 class="letters-slide-up text-split">
                  Our <span class="color1"> Services </span><br />
                </h1>
                <span class="icon icon-arrow-down-2"></span>
              </div>
              <div class="col-xl-5">
                <div class="text">
                  We offer a wide range of digital services to help businesses
                  grow and succeed. Our team of experienced professionals are
                  passionate about helping businesses succeed online. We
                  understand the importance of a strong online presence and we
                  work with our clients to create custom solutions that meet
                  their unique needs. We are committed to providing our clients
                  with high-quality services that are delivered on time and
                  within budget.
                </div>
              </div>
            </div>
          </div>
          <div class="outer-box">
            <div class="row">
              <!-- Service Block -->
              <div
                class="service-block-four col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp"
              >
                <div class="inner-box">
                  <figure class="image">
                    <img src="images/resource/website-development.jpg" alt="" />
                  </figure>
                  <span class="letter">W</span>
                  <div class="content">
                    <span class="letter">W</span>
                    <h4 class="title">
                      <a href="#">Website <br />development</a>
                    </h4>
                    <div class="text">
                      Transforming ideas into digital realities with sleek
                      website development.
                    </div>
                    <a href="#" class="read-more"
                      ><i class="icon-arrow-down"></i
                    ></a>
                  </div>
                </div>
              </div>
              <!-- Service Block -->
              <div
                class="service-block-four col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp"
              >
                <div class="inner-box">
                  <figure class="image">
                    <img
                      src="images/resource/ecommerce-development.jpg"
                      alt=""
                    />
                  </figure>
                  <span class="letter">E</span>
                  <div class="content">
                    <span class="letter">E</span>
                    <h4 class="title">
                      <a href="#">Ecommerce <br />development</a>
                    </h4>
                    <div class="text">
                      Elevating online retail with tailored Ecommerce solutions
                      on Shopify and Woocommerce.
                    </div>
                    <a href="#" class="read-more"
                      ><i class="icon-arrow-down"></i
                    ></a>
                  </div>
                </div>
              </div>
              <!-- Service Block -->
              <div
                class="service-block-four col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp"
                data-wow-delay="300ms"
              >
                <div class="inner-box">
                  <figure class="image">
                    <img src="images/resource/frontend-designing.png" alt="" />
                  </figure>
                  <span class="letter">F</span>
                  <div class="content">
                    <span class="letter">F</span>
                    <h4 class="title">
                      <a href="#">Frontend <br />designing</a>
                    </h4>
                    <div class="text">
                      Shaping interactive user experiences with precision Figma
                      designs.
                    </div>
                    <a href="#" class="read-more"
                      ><i class="icon-arrow-down"></i
                    ></a>
                  </div>
                </div>
              </div>
              <!-- Service Block -->
              <div
                class="service-block-four col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp"
                data-wow-delay="600ms"
              >
                <div class="inner-box">
                  <figure class="image">
                    <img src="images/resource/designing-branding.jpg" alt="" />
                  </figure>
                  <span class="letter">D</span>
                  <div class="content">
                    <span class="letter">D</span>
                    <h4 class="title">
                      <a href="#">Designing <br />& Branding</a>
                    </h4>
                    <div class="text">
                      Crafting unique brand identities with standout graphic
                      designs.
                    </div>
                    <a href="#" class="read-more"
                      ><i class="icon-arrow-down"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Services Section-->
      <!-- Fun Fact Section -->
      <section class="fun-fact-section pt-0">
        <div class="auto-container">
          <div class="fact-counter">
            <div class="row">
              <!-- Counter block-->
              <div class="counter-block col-lg-3 col-md-6 col-sm-12 wow zoomIn">
                <div class="inner">
                  <div class="count-box">
                    <span class="count-text" data-speed="3000" data-stop="64"
                      >0</span
                    >
                  </div>
                  <h3 class="counter-title">Projects <br />Completed</h3>
                </div>
              </div>
              <!--Counter block-->
              <div
                class="counter-block col-lg-3 col-md-6 col-sm-12 wow zoomIn"
                data-wow-delay="300ms"
              >
                <div class="inner">
                  <div class="count-box">
                    <span class="count-text" data-speed="3000" data-stop="17"
                      >0</span
                    >
                  </div>
                  <h3 class="counter-title">Skilled <br />professional</h3>
                </div>
              </div>
              <!--Counter block-->
              <div
                class="counter-block col-lg-3 col-md-6 col-sm-12 wow zoomIn"
                data-wow-delay="600ms"
              >
                <div class="inner">
                  <div class="count-box">
                    <span class="count-text" data-speed="3000" data-stop="10"
                      >0</span
                    >
                  </div>
                  <h3 class="counter-title">Visited <br />conference</h3>
                </div>
              </div>
              <!--Counter block-->
              <div
                class="counter-block col-lg-3 col-md-6 col-sm-12 wow zoomIn"
                data-wow-delay="900ms"
              >
                <div class="inner">
                  <div class="count-box">
                    <span class="count-text" data-speed="3000" data-stop="94"
                      >0</span
                    >%
                  </div>
                  <h3 class="counter-title">Happy <br />Clients</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Emd Fun Fact Section -->
      <!-- Work Section -->
      <?php include "./templates/working.php"; ?>
      <!--End work Section -->

      <!-- Project Section -->
      <section class="project-section">
        <div class="auto-container">
          <div class="sec-title">
            <div class="row">
              <div class="col-xl-7">
                <h1 class="words-slide-from-right text-split">
                  Our Recent <span class="color1"> Projects </span>
                </h1>
                <span class="icon icon-arrow-down-2"></span>
              </div>
              <div class="col-xl-5">
                <div class="text">
                  We've worked with a variety of businesses, from small startups
                  to large corporations. Our projects range from simple website
                  redesigns to complex mobile app development.
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Recent Projects Start-->
        <div class="outer-box">
          <!-- Swiper -->
          <div class="row">
            <!-- Project Block Start-->
            <div class="column col-xl-3 col-lg-6 col-md-12 filter showcase">
              <div class="project-block">
                <div class="inner-box">
                  <div class="image-box">
                    <figure class="image">
                      <a
                        href="images/resource/1only1.png"
                        class="lightbox-image"
                        ><img src="images/resource/1only1.png" alt=""
                      /></a>
                    </figure>
                    <div class="overlay-content">
                      <span class="cat">Showcase</span>
                      <h3 class="title">
                        <a href="https://1only1construction.com/"
                          >1Only1 Construction</a
                        >
                      </h3>
                      <a
                        href="https://1only1construction.com/"
                        class="visit-site-button"
                        >Visit Site</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Project Block End-->

            <!-- Project Block Start-->
            <div
              class="column col-xl-3 col-lg-6 col-md-12 filter branding-strategy"
            >
              <div class="project-block">
                <div class="inner-box">
                  <div class="image-box">
                    <figure class="image">
                      <a
                        href="images/resource/anjali.png"
                        class="lightbox-image"
                        ><img src="images/resource/anjali.png" alt=""
                      /></a>
                    </figure>
                    <div class="overlay-content">
                      <span class="cat">Branding Strategy</span>
                      <h3 class="title">
                        <a href="https://lifecoachanjali.com/"
                          >Life Coach Anjali</a
                        >
                      </h3>
                      <a
                        href="https://lifecoachanjali.com/"
                        class="visit-site-button"
                        >Visit Site</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Project Block End-->

            <!-- Project Block Start-->
            <div
              class="column col-xl-3 col-lg-6 col-md-12 filter branding-strategy"
            >
              <div class="project-block">
                <div class="inner-box">
                  <div class="image-box">
                    <figure class="image">
                      <a
                        href="images/resource/esstec-ss.png"
                        class="lightbox-image"
                        ><img src="images/resource/esstec-ss.png" alt=""
                      /></a>
                    </figure>
                    <div class="overlay-content">
                      <span class="cat">Branding Strategy</span>
                      <h3 class="title">
                        <a href="https://esstec.ae">esstec</a>
                      </h3>
                      <a href="https://esstec.ae" class="visit-site-button"
                        >Visit Site</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Project Block End-->

            <!-- Project Block Start-->
            <div class="column col-xl-3 col-lg-6 col-md-12 filter showcase">
              <div class="project-block">
                <div class="inner-box">
                  <div class="image-box">
                    <figure class="image">
                      <a
                        href="images/resource/agromorph.jpg"
                        class="lightbox-image"
                        ><img src="images/resource/agromorph.jpg" alt=""
                      /></a>
                    </figure>
                    <div class="overlay-content">
                      <span class="cat">Show Case</span>
                      <h3 class="title">
                        <a href="https://agromorph.com">AgroMorph</a>
                      </h3>
                      <a href="https://agromorph.com" class="visit-site-button"
                        >Visit Site</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Project Block End-->

            <!-- Project Block Start-->
            <div
              class="column col-xl-3 col-lg-6 col-md-12 filter digital-experience"
            >
              <div class="project-block">
                <div class="inner-box">
                  <div class="image-box">
                    <figure class="image">
                      <a
                        href="images/resource/genesisarts.png"
                        class="lightbox-image"
                        ><img src="images/resource/genesisarts.png" alt=""
                      /></a>
                    </figure>
                    <div class="overlay-content">
                      <span class="cat">Digital Experience</span>
                      <h3 class="title">
                        <a href="https://genesisarts.in">Genesis Arts</a>
                      </h3>
                      <a href="https://genesisarts.in" class="visit-site-button"
                        >Visit Site</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Project Block End-->

            <!-- Project Block Start-->
            <div class="column col-xl-3 col-lg-6 col-md-12 filter ecommerce">
              <div class="project-block">
                <div class="inner-box">
                  <div class="image-box">
                    <figure class="image">
                      <a
                        href="images/resource/phonebox.jpg"
                        class="lightbox-image"
                        ><img src="images/resource/phonebox.jpg" alt=""
                      /></a>
                    </figure>
                    <div class="overlay-content">
                      <span class="cat">ecommerce</span>
                      <h3 class="title">
                        <a href="https://phoneboxstore.com">Phone Box Store</a>
                      </h3>
                      <a
                        href="https://phoneboxstore.com"
                        class="visit-site-button"
                        >Visit Site</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Project Block End-->

            <!-- Project Block Start-->
            <div
              class="column col-xl-3 col-lg-6 col-md-12 filter digital-experice"
            >
              <div class="project-block">
                <div class="inner-box">
                  <div class="image-box">
                    <figure class="image">
                      <a
                        href="images/resource/hatimee.jpg"
                        class="lightbox-image"
                        ><img src="images/resource/hatimee.jpg" alt=""
                      /></a>
                    </figure>
                    <div class="overlay-content">
                      <span class="cat">Digital Experience</span>
                      <h3 class="title">
                        <a href="https://hatimeeglass.com">Hatimee Glass</a>
                      </h3>
                      <a
                        href="https://hatimeeglass.com"
                        class="visit-site-button"
                        >Visit Site</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Project Block End-->

            <!-- Project Block Start-->
            <div class="column col-xl-3 col-lg-6 col-md-12 filter ecommerce">
              <div class="project-block">
                <div class="inner-box">
                  <div class="image-box">
                    <figure class="image">
                      <a
                        href="images/resource/ekpehel.png"
                        class="lightbox-image"
                        ><img src="images/resource/ekpehel.png" alt=""
                      /></a>
                    </figure>
                    <div class="overlay-content">
                      <span class="cat">ecommerce</span>
                      <h3 class="title">
                        <a href="https://ekpehel.in">Ek pehel</a>
                      </h3>
                      <a href="https://ekpehel.in" class="visit-site-button"
                        >Visit Site</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Project Block End-->
          </div>
        </div>
      </section>
      <!--End Project Section -->
      <!-- Awards Section -->
      <section class="awards-section pt-0">
        <div class="bg bg-pattern-3"></div>
        <div class="auto-container">
          <div class="sec-title">
            <span class="sub-title">achievements</span>
            <h2 class="words-slide-from-right text-split">
              Company awards <span class="color1">&</span><br />
              achievements
            </h2>
            <span class="abs-icon icon-star2"></span>
          </div>
          <div class="row">
            <!-- Umage column -->
            <div class="image-column col-lg-5 col-md-12 col-sm-12">
              <div class="inner-column">
                <div class="text">
                  Duis aute lorem ipsum is simply free text available in the
                  market reprehen.
                </div>
                <figure class="image">
                  <img src="images/resource/award.png" alt="" />
                </figure>
              </div>
            </div>
            <!-- Content column -->
            <div class="content-column col-lg-7 col-md-12 col-sm-12">
              <div class="inner-column">
                <ul class="awards-list">
                  <li class="award-block">
                    <span class="count">x2</span>
                    <h6 class="title">Awwwards Interior <br />Excellence</h6>
                    <span class="date">2018</span>
                    <a href="#" class="plus-icon"
                      ><i class="fal fa-plus"></i
                    ></a>
                  </li>
                  <li class="award-block">
                    <span class="count">x2</span>
                    <h6 class="title">FWA, <br />Site of the Day</h6>
                    <span class="date">2019</span>
                    <a href="#" class="plus-icon"
                      ><i class="fal fa-plus"></i
                    ></a>
                  </li>
                  <li class="award-block">
                    <span class="count">x2</span>
                    <h6 class="title">Creative Agencies<br />Worldwide</h6>
                    <span class="date">2020</span>
                    <a href="#" class="plus-icon"
                      ><i class="fal fa-plus"></i
                    ></a>
                  </li>
                  <li class="award-block">
                    <span class="count">x2</span>
                    <h6 class="title">Awesome <br />business models</h6>
                    <span class="date">2022</span>
                    <a href="#" class="plus-icon"
                      ><i class="fal fa-plus"></i
                    ></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--End Awards Section -->
      <!-- Testimonial Section start -->
      <?php include "./templates/testimonial.php"; ?>
      <!-- Testimonial Section End -->
      <!-- About Section -->
      <section class="about-section">
        <div class="auto-container">
          <div class="row">
            <div
              class="content-column col-lg-6 col-md-12 col-sm-12 order-2 wow fadeInRight"
              data-wow-delay="600ms"
            >
              <div class="inner-column">
                <div class="sec-title">
                  <h2 class="words-slide-from-right text-split">
                    Boost Your Business with <span class="color1">Build Your Innvation</span>
                  </h2>
                  <div class="text">
                    At Build Your Innovation, we are committed to empowering
                    businesses by harnessing the power of innovative
                    technologies. With our expert team and customized solutions,
                    we help you unlock new opportunities, enhance operational
                    efficiency, and drive sustainable growth. Partner with us to
                    leverage cutting-edge IT services and take your business to
                    the next level of success.
                  </div>
                  <span class="icon icon-arrow-down-2"></span>
                  <span class="icon-star2"></span>
                </div>
              </div>
            </div>
            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
              <div class="inner-column wow fadeInLeft">
                <figure class="image overlay-anim wow fadeInUp">
                  <img src="images/resource/about-1.jpg" alt="" />
                </figure>
                <figure class="image-2 wow zoom-in">
                  <img src="images/resource/about-2.jpg" alt="" />
                </figure>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Emd About Section -->
      <!-- Features Section -->
      <section class="features-section pt-0">
        <div class="bg bg-pattern-5"></div>
        <div class="auto-container">
          <div class="row">
            <div
              class="content-column col-lg-6 col-md-12 col-sm-12 wow fadeInRight"
              data-wow-delay="600ms"
            >
              <div class="inner-column">
                <div class="sec-title">
                  <h2 class="words-slide-from-right text-split">
                    More Build Your Innovation's <span class="color1">helpful features</span> 
                  </h2>
                  <span class="icon icon-star2"></span>
                </div>
                <ul class="features-list">
                  <li>Branding</li>
                  <li>Development</li>
                  <li>Thinking</li>
                  <li>Execution</li>
                </ul>
              </div>
            </div>
            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
              <div class="inner-column wow fadeInLeft">
                <figure class="image overlay-anim wow fadeInUp">
                  <img src="images/resource/feature-1.jpg" alt="" />
                </figure>
                <div class="rounded-text">
                  <img src="images/resource/round-text-feature.png" alt="" />
                  <span class="letter">C</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Emd Features Section -->
      <!-- Pricing Sectioin -->
      <section class="pricing-section">
        <hr class="devider" />
        <div class="bg bg-pattern-6"></div>
        <div class="auto-container">
          <div class="sec-title text-center">
            <h1 class="words-slide-from-right text-split">
              Our Pricing <br />Plans
            </h1>
          </div>
          <div class="row">
            <!-- Pricing block -->
            <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
              <div class="inner-box">
                <h4 class="title">Small Business</h4>
                <div class="price-box">
                  <div class="price"><sup>$</sup>69</div>
                  <span class="duration">Monthly</span>
                </div>
                <div class="features-box">
                  <ul class="features">
                    <li>3D Visualization</li>
                    <li>10 Construction Drawings</li>
                    <li>Planning Solution</li>
                    <li>Selection of Materials</li>
                  </ul>
                </div>
                <div class="btn-box">
                  <a href="page-pricing.html" class="theme-btn btn-style-two"
                    ><span class="btn-title">Select Now</span></a
                  >
                </div>
              </div>
            </div>
            <!-- Pricing block -->
            <div
              class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp"
              data-wow-delay="300ms"
            >
              <div class="inner-box">
                <h4 class="title">Large Business</h4>
                <div class="price-box">
                  <div class="price"><sup>$</sup>89</div>
                  <span class="duration">Monthly</span>
                </div>
                <div class="features-box">
                  <ul class="features">
                    <li>3D Visualization</li>
                    <li>10 Construction Drawings</li>
                    <li>Planning Solution</li>
                    <li>Selection of Materials</li>
                  </ul>
                </div>
                <div class="btn-box">
                  <a href="page-pricing.html" class="theme-btn btn-style-two"
                    ><span class="btn-title">Select Now</span></a
                  >
                </div>
              </div>
            </div>
            <!-- Pricing block -->
            <div
              class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp"
              data-wow-delay="600ms"
            >
              <div class="inner-box">
                <h4 class="title">Medium Business</h4>
                <div class="price-box">
                  <div class="price"><sup>$</sup>79</div>
                  <span class="duration">Monthly</span>
                </div>
                <div class="features-box">
                  <ul class="features">
                    <li>3D Visualization</li>
                    <li>10 Construction Drawings</li>
                    <li>Planning Solution</li>
                    <li>Selection of Materials</li>
                  </ul>
                </div>
                <div class="btn-box">
                  <a href="page-pricing.html" class="theme-btn btn-style-two"
                    ><span class="btn-title">Select Now</span></a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Pricing Section -->
      <!-- Video Section -->
      <section class="video-section">
        <div
          class="bg bg-image"
          style="background-image: url(images/background/1.jpg)"
        ></div>
        <div class="auto-container">
          <a
            href="https://www.youtube.com/watch?v=Fvae8nxzVz4"
            class="play-btn wow zoomIn"
            data-fancybox="gallery"
            data-caption=""
          >
            <i class="icon fa fa-play" aria-hidden="true"></i>
            <span class="circle-text"
              ><img src="images/icons/circle-text.png" alt=""
            /></span>
          </a>
        </div>
      </section>
      <!--Emd Video Section -->
      <!-- News Section -->
      <section class="news-section">
        <div class="auto-container">
          <div class="sec-title">
            <span class="sub-title">Our News Updates</span>
            <h2 class="words-slide-from-right text-split">
              Check Our <br />
              <span class="color1">Recent</span> Articles
            </h2>
            <span class="icon-star2"></span>
          </div>
          <div class="row">
            <!-- News Block -->
            <div class="news-block col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
              <div class="inner-box">
                <div class="image-box">
                  <figure class="image">
                    <a href="news-details.html"
                      ><img src="images/resource/news-1.jpg" alt=""
                    /></a>
                  </figure>
                  <span class="date">30 Mar, 2023</span>
                </div>
                <div class="content-box">
                  <ul class="post-info">
                    <li><i class="fa fa-user"></i> Sarah Rose</li>
                    <li><i class="fa fa-comments"></i> 2 Comments</li>
                  </ul>
                  <h5 class="title">
                    <a href="news-details.html"
                      >Discover 10 Ways to Solve Website Problems</a
                    >
                  </h5>
                  <a href="news-details.html" class="read-more">Read More</a>
                </div>
              </div>
            </div>
            <!-- News Block -->
            <div
              class="news-block col-lg-6 col-md-6 col-sm-12 wow fadeInUp"
              data-wow-delay="300ms"
            >
              <div class="inner-box">
                <div class="image-box">
                  <figure class="image">
                    <a href="news-details.html"
                      ><img src="images/resource/news-2.jpg" alt=""
                    /></a>
                  </figure>
                  <span class="date">30 Mar, 2023</span>
                </div>
                <div class="content-box">
                  <ul class="post-info">
                    <li><i class="fa fa-user"></i> Sarah Rose</li>
                    <li><i class="fa fa-comments"></i> 2 Comments</li>
                  </ul>
                  <h5 class="title">
                    <a href="news-details.html"
                      >Discover 10 Ways to Solve Website Problems</a
                    >
                  </h5>
                  <a href="news-details.html" class="read-more">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--End News Section -->
      <!-- FAQ Section -->
      <section class="">
        <div class="container">
          <div class="row">
            <div class="col">
              <ul class="accordion-box wow fadeInRight">
                <h1>FAQ's</h1>
                <!--Block-->
                <li class="accordion block active-block">
                  <div class="acc-btn active">
                    How to soft launch your business?
                    <div class="icon fa fa-plus"></div>
                  </div>
                  <div class="acc-content current">
                    <div class="content">
                      <div class="text">
                        Soft launching a business involves introducing your
                        product or service to a limited audience or market
                        before the full-scale launch. This approach allows you
                        to gather feedback, test your business model, and make
                        necessary adjustments before a wider release. Here are
                        some steps to soft launch your business: a. Define your
                        target audience: Identify the specific group of people
                        who would benefit most from your product or service.<br />
                        b. Develop a minimum viable product (MVP): Create a
                        scaled-down version of your product or service that
                        showcases its core features and functionalities.<br />
                        c. Select a limited launch market: Choose a specific
                        geographic location or a niche market segment to test
                        your product.<br />
                        d. Create a marketing strategy: Develop a plan to
                        generate awareness and attract customers in your chosen
                        market.<br />
                        e. Gather feedback: Engage with your early customers,
                        gather their feedback, and make improvements based on
                        their suggestions.<br />
                        f. Iterate and refine: Continuously iterate and refine
                        your product or service based on the feedback received
                        during the soft launch.<br />
                        g. Prepare for the full launch: Analyze the results from
                        the soft launch phase, make necessary adjustments, and
                        prepare for a wider release.
                      </div>
                    </div>
                  </div>
                </li>
                <!--Block-->
                <li class="accordion block">
                  <div class="acc-btn">
                    Is my technology allowed on tech?
                    <div class="icon fa fa-plus"></div>
                  </div>
                  <div class="acc-content">
                    <div class="content">
                      <div class="text">
                        To determine whether your technology is allowed on a
                        specific platform or within the tech industry, you need
                        to consider several factors:<br />
                        a. Platform policies: Each platform or tech company may
                        have its own set of policies and guidelines regarding
                        the types of technologies allowed. Review the platform's
                        terms of service, developer guidelines, and any specific
                        rules related to your technology.<br />
                        b. Legal and regulatory compliance: Ensure that your
                        technology complies with relevant laws, regulations, and
                        industry standards. Some technologies may have
                        restrictions or require certifications due to privacy,
                        security, or ethical concerns.<br />
                        c. Intellectual property rights: If your technology
                        incorporates patented or copyrighted elements, ensure
                        that you have the necessary permissions or licenses to
                        use those elements.<br />
                        d. Ethical considerations: Evaluate the ethical
                        implications of your technology. Some platforms may have
                        restrictions on technologies that can potentially cause
                        harm, invade privacy, or facilitate illegal
                        activities.<br />
                        e. Industry standards and best practices: Familiarize
                        yourself with industry standards and best practices to
                        ensure your technology aligns with accepted norms.<br />
                        It's crucial to research and consult with legal experts
                        or industry professionals to ensure your technology is
                        allowed within the specific tech landscape or platform
                        you are targeting.
                      </div>
                    </div>
                  </div>
                </li>
                <!--Block-->
                <li class="accordion block">
                  <div class="acc-btn">
                    How to turn visitors into contributors
                    <div class="icon fa fa-plus"></div>
                  </div>
                  <div class="acc-content">
                    <div class="content">
                      <div class="text">
                        Converting website visitors into contributors or active
                        participants can significantly enhance your online
                        community or collaborative project. Here are some
                        strategies to help you achieve this: a. Clear value
                        proposition: Clearly communicate the benefits and value
                        visitors can gain by becoming contributors. Highlight
                        how their contributions can make a difference or help
                        them achieve their goals.<br />
                        b. Engaging content: Create compelling and informative
                        content that encourages visitors to actively
                        participate. This can include blog posts, articles,
                        tutorials, or interactive elements.<br />
                        c. Calls to action: Incorporate prominent and persuasive
                        calls to action throughout your website. Encourage
                        visitors to sign up, leave comments, submit content, or
                        join discussions.<br />
                        d. Gamification elements: Implement gamification
                        techniques such as badges, points, or rewards to
                        incentivize contribution and create a sense of
                        achievement.<br />
                        e. Community building: Foster a sense of community by
                        encouraging interaction and collaboration among
                        visitors. Provide discussion forums, chat platforms, or
                        social media groups where contributors can connect with
                        each other.<br />
                        f. Recognition and appreciation: Recognize and
                        appreciate the contributions of active participants.
                        Highlight their achievements, feature their work, or
                        offer exclusive benefits to establish a sense of
                        belonging and encourage further engagement.<br />
                        g. Continuous improvement: Actively listen to feedback
                        and make improvements based on user suggestions.
                        Regularly update your website and offerings to enhance
                        the contributor experience.<br />
                        Remember that building an active contributor base takes
                        time and effort. Consistently provide value, maintain an
                        engaging environment, and nurture relationships with
                        your contributors to foster long-term engagement.
                      </div>
                    </div>
                  </div>
                </li>
                <!--Block-->
                <li class="accordion block">
                  <div class="acc-btn">
                    How can i find my solutions?
                    <div class="icon fa fa-plus"></div>
                  </div>
                  <div class="acc-content">
                    <div class="content">
                      <div class="text">
                        When you're seeking solutions to a problem or looking
                        for answers to specific questions, there are several
                        approaches you can take:<br />
                        a. Research online: Utilize search engines, online
                        forums, and knowledge bases to find information related
                        to your problem. Websites like Stack Exchange, Quora,
                        and specialized forums can be valuable sources of
                        solutions shared by experts and experienced individuals.
                        <br />
                        b. Consult industry-specific resources: Explore
                        industry-specific publications, books, or research
                        papers that may provide insights and solutions related
                        to your problem.<br />
                        c. Seek expert advice: Reach out to professionals,
                        consultants, or subject matter experts who specialize in
                        the area relevant to your problem. They can provide
                        personalized guidance and solutions based on their
                        expertise.<br />
                        d. Join communities and networks: Participate in online
                        communities, social media groups, or professional
                        networks that focus on your industry or area of
                        interest. Engage with others, share your challenges, and
                        learn from their experiences and solutions.<br />
                        e. Experiment and iterate: Sometimes, finding a solution
                        requires trial and error. Experiment with different
                        approaches or ideas and learn from the results. Iterate
                        and refine your strategies based on the outcomes of your
                        experiments.<br />
                        f. Collaborate and brainstorm: Engage with colleagues,
                        peers, or like-minded individuals to brainstorm
                        potential solutions. Collaborative problem-solving can
                        often lead to innovative ideas and fresh
                        perspectives.<br />
                        g. Attend events and conferences: Participate in
                        industry events, conferences, or workshops where you can
                        connect with experts and professionals in your field.
                        These events often offer valuable insights, discussions,
                        and networking opportunities.<br />
                        Remember to approach problem-solving with an open mind
                        and be willing to adapt or explore unconventional
                        solutions. Persistence, a willingness to learn, and
                        seeking diverse perspectives can help you find effective
                        solutions to your challenges.
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!--End FAQ Section -->
      <!-- Call To Action -->
      <section class="call-to-action pt-0">
        <div class="bg bg-pattern-5"></div>
        <div class="auto-container">
          <div class="outer-box">
            <div class="sec-title text-center">
              <h2 class="words-slide-from-right text-split">
                Let’s make something <br />
                <span class="color1">great</span> together!
              </h2>
              <span class="icon-star2"></span>
            </div>
            <a href="contact.php" class="contact-us wow fadeInUp">
              <span class="title"
                >Connect<br />
                with us</span
              >
              <span class="icon icon-arrow-up-right"></span>
            </a>
          </div>
        </div>
      </section>
      <!--End Call To Action -->
      <!-- Clients Section -->
      <!-- <section class="clients-section">
         <div class="auto-container"> -->
      <!-- Sponsors Outer -->
      <!-- <div class="sponsors-outer">
         <div class="text">1K+ Brands Trust Us</div> -->
      <!--clients carousel-->
      <!-- <ul class="clients-carousel owl-carousel owl-theme">
         <li class="client-block"> <a href="#"><img src="images/clients/1.png" alt=""></a></li>
         <li class="client-block"> <a href="#"><img src="images/clients/2.png" alt=""></a></li>
         <li class="client-block"> <a href="#"><img src="images/clients/3.png" alt=""></a></li>
         <li class="client-block"> <a href="#"><img src="images/clients/4.png" alt=""></a></li>
         <li class="client-block"> <a href="#"><img src="images/clients/5.png" alt=""></a></li>
         </ul>
         </div>
         </div>
         </section> -->
      <!--End Clients Section -->
      <!-- Main Footer -->
      <?php include "./templates/footer.php"; ?>
      <!--End Main Footer -->
    </div>
    <!-- End Page Wrapper -->
    <!-- Scroll To Top -->
    <div class="scroll-to-top scroll-to-target" data-target="html">
      <span class="fa fa-angle-up"></span>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/gsap.min.js"></script>
    <script src="js/SplitText.min.js"></script>
    <script src="js/ScrollTrigger.min.js"></script>
    <script src="js/splitType.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
