<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>The Future of Web Design | Build Your Innovation</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />

    <?php include './templates/favicon.php'; ?>

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
    />
    <!--[if lt IE 9
      ]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script
    ><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
  </head>
  <body>
    <div class="page-wrapper dark-layout">
      <?php include './templates/cursor-animation.php'; ?>

      <!-- Preloader -->
      <div class="preloader"></div>

      <!-- Main Header-->
      <?php $currentPage = 'news'; include "./templates/header.php"; ?>

      <!-- Hidden bar back drop -->
      <div class="hidden-bar-back-drop"></div>

      <?php include './templates/hiddenBar.php'; ?>

      <!-- Start main-content -->
      <section
        class="page-title"
        style="background-image: url(images/background/page-title.jpg)"
      >
        <div class="auto-container">
          <div class="title-outer">
            <h1 class="title">The Future of Web Design</h1>
            <ul class="page-breadcrumb">
              <li><a href="/">Home</a></li>
              <li><a href="blogs.php" class="sub-page">Blogs</a></li>
              <li>News Details</li>
            </ul>
          </div>
        </div>
      </section>
      <!-- end main-content -->

      <!--Blog Details Start-->
      <section class="blog-details">
        <div class="container">
          <div class="row">
            <div class="col-xl-8 col-lg-7">
              <div class="blog-details__left">
                <div class="blog-details__img">
                  <img src="images/resource/Screenshots of interactive web elements, flowchart of website interaction design..png" alt="" />
                  <div class="blog-details__date">
                    <span class="day">02</span>
                    <span class="month">Dec 2023</span>
                  </div>
                </div>
                <div class="blog-details__content">
                  <ul class="list-unstyled blog-details__meta">
                    <li>
                      <a href=""
                        ><i class="fas fa-user-circle"></i> Admin</a
                      >
                    </li>
                    <li>
                      <a href="#comments"
                        ><i class="fas fa-comments"></i> 02 Comments</a
                      >
                    </li>
                  </ul>
                  <h3 class="blog-details__title">
                  Interactive and Immersive Websites with HTML, CSS, and JS</h3>
                  <p class="blog-details__text-2">
                  As we venture deeper into 2024, the trends in web design are leaning towards more interactive and immersive experiences. Websites are no longer static brochures; they are dynamic and engaging platforms. Utilizing HTML, CSS, and JavaScript, web designers are crafting sites that not only look beautiful but also interact with users in novel ways.
                  </p>
                  <p class="blog-details__text-2">
                  From scroll-triggered animations to interactive storytelling, the possibilities are endless. The use of JavaScript frameworks like React JS and Node JS is enabling developers to build more complex and responsive interfaces. At "Build Your Innovation," we are at the forefront of these trends, combining our expertise in HTML, CSS, and JavaScript to create websites that are not just informative but are experiences in themselves.
                  </p>
                  <p class="blog-details__text-2">
                  Whether it's for a landing page, a dashboard, or a full-fledged web application, our team ensures that every project is infused with creativity and cutting-edge technology, making your website stand out in the digital landscape.
                  </p>
                </div>
                <div class="blog-details__bottom">
                  <p class="blog-details__tags">
                    <span>Tags</span> <a href="">Interactive Web Design</a>
                    <a href="">Immersive Experience</a><a href="">JavaScript Frameworks</a><a href="">HTML5</a>
                  </p>
                  <div class="blog-details__social-list">
                    <a href=""
                      ><i class="fab fa-twitter"></i
                    ></a>
                    <a href=""
                      ><i class="fab fa-facebook"></i
                    ></a>
                    <a href=""
                      ><i class="fab fa-pinterest-p"></i
                    ></a>
                    <a href=""
                      ><i class="fab fa-instagram"></i
                    ></a>
                  </div>
                </div>
                <div class="nav-links">
                  <div class="prev">
                    <a href="leveraging-react-js-for-scalable-and-efficient-web-applications.php" rel="next"
                      >Leveraging React JS for Scalable</a
                    >
                  </div>
                  <div class="next">
                    <a href="maximizing-wordpress-for-e-commerce.php" rel="prev"
                      >Maximizing WordPress for E-commerce</a
                    >
                  </div>
                </div>
                <div class="comment-one" id="comments">
                  <h3 class="comment-one__title">2 Comments</h3>
                  <div class="comment-one__single">
                    <div class="comment-one__image">
                      <img src="images/resource/testi-1.jpg" alt="" />
                    </div>
                    <div class="comment-one__content">
                      <h3>Kevin Martin</h3>
                      <p>
                        Mauris non dignissim purus, ac commodo diam. Donec sit
                        amet lacinia nulla. Aliquam quis purus in justo pulvinar
                        tempor. Aliquam tellus nulla, sollicitudin at euismod.
                      </p>
                      <a
                        href=""
                        class="theme-btn btn-style-two comment-one__btn"
                        ><span class="btn-title">Reply</span></a
                      >
                    </div>
                  </div>
                  <div class="comment-one__single">
                    <div class="comment-one__image">
                      <img src="images/resource/testi-2.jpg" alt="" />
                    </div>
                    <div class="comment-one__content">
                      <h3>Sarah Albert</h3>
                      <p>
                        Mauris non dignissim purus, ac commodo diam. Donec sit
                        amet lacinia nulla. Aliquam quis purus in justo pulvinar
                        tempor. Aliquam tellus nulla, sollicitudin at euismod.
                      </p>
                      <a
                        href=""
                        class="theme-btn btn-style-two comment-one__btn"
                        ><span class="btn-title">Reply</span></a
                      >
                    </div>
                  </div>
                  <div class="comment-form">
                    <h3 class="comment-form__title">Leave a Comment</h3>
                    <form
                      id="contact_form"
                      name="contact_form"
                      class=""
                      action=""
                      method="post"
                    >
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="mb-3">
                            <input
                              name="form_name"
                              class="form-control"
                              type="text"
                              placeholder="Enter Name"
                            />
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="mb-3">
                            <input
                              name="form_email"
                              class="form-control required email"
                              type="email"
                              placeholder="Enter Email"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="mb-3">
                        <textarea
                          name="form_message"
                          class="form-control required"
                          rows="5"
                          placeholder="Enter Message"
                        ></textarea>
                      </div>
                      <div class="mb-3">
                        <input
                          name="form_botcheck"
                          class="form-control"
                          type="hidden"
                          value=""
                        />
                        <button
                          type="submit"
                          class="theme-btn btn-style-two"
                          data-loading-text="Please wait..."
                        >
                          <span class="btn-title">Submit Comment</span>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-5">
              <div class="sidebar">
                <div class="sidebar__single sidebar__search">
                  <form action="#" class="sidebar__search-form">
                    <input type="search" placeholder="Search here" />
                    <button type="submit">
                      <i class="lnr-icon-search"></i>
                    </button>
                  </form>
                </div>
                <div class="sidebar__single sidebar__post">
                  <h3 class="sidebar__title">Latest Posts</h3>
                  <ul class="sidebar__post-list list-unstyled">
                    <li>
                      <div class="sidebar__post-image">
                        <img src="images/resource/news-5.jpg" alt="" />
                      </div>
                      <div class="sidebar__post-content">
                        <h3>
                          <span class="sidebar__post-content-meta"
                            ><i class="fas fa-user-circle"></i>Abbas Badshah</span
                          >
                          <a href="maximizing-wordpress-for-e-commerce.php"
                            >Maximizing WordPress for E-commerce</a
                          >
                        </h3>
                      </div>
                    </li>
                    <li>
                      <div class="sidebar__post-image">
                        <img src="images/resource/news-5.jpg" alt="" />
                      </div>
                      <div class="sidebar__post-content">
                        <h3>
                          <span class="sidebar__post-content-meta"
                            ><i class="fas fa-user-circle"></i>Khadija Rafique</span
                          >
                          <a href="leveraging-react-js-for-scalable-and-efficient-web-applications.php"
                            >Leveraging React JS for Scalable</a
                          >
                        </h3>
                      </div>
                    </li>
                    <!-- <li>
                      <div class="sidebar__post-image">
                        <img src="images/resource/news-5.jpg" alt="" />
                      </div>
                      <div class="sidebar__post-content">
                        <h3>
                          <span class="sidebar__post-content-meta"
                            ><i class="fas fa-user-circle"></i>Admin</span
                          >
                          <a href=""
                            >You should know about business plan</a
                          >
                        </h3>
                      </div>
                    </li> -->
                  </ul>
                </div>
                <div class="sidebar__single sidebar__category">
                  <h3 class="sidebar__title">Categories</h3>
                  <ul class="sidebar__category-list list-unstyled">
                    <li>
                      <a href=""
                        >Business<span class="icon-right-arrow"></span
                      ></a>
                    </li>
                    <li>
                      <a href=""
                        >Digital Agency<span class="icon-right-arrow"></span
                      ></a>
                    </li>
                    <li>
                      <a href=""
                        >Introductions<span class="icon-right-arrow"></span
                      ></a>
                    </li>
                    <li>
                      <a href=""
                        >New Technologies<span class="icon-right-arrow"></span
                      ></a>
                    </li>
                    <li>
                      <a href=""
                        >Parallax Effects<span class="icon-right-arrow"></span
                      ></a>
                    </li>
                    <li class="active">
                      <a href=""
                        >Web Development<span class="icon-right-arrow"></span
                      ></a>
                    </li>
                  </ul>
                </div>
                <div class="sidebar__single sidebar__tags">
                  <h3 class="sidebar__title">Tags</h3>
                  <div class="sidebar__tags-list">
                    <a href="#">Consulting</a> <a href="#">Agency</a>
                    <a href="#">Business</a> <a href="#">Digital</a>
                    <a href="#">Experience</a> <a href="#">Technology</a>
                  </div>
                </div>
                <!-- <div class="sidebar__single sidebar__comments">
                  <h3 class="sidebar__title">Recent Comments</h3>
                  <ul class="sidebar__comments-list list-unstyled">
                    <li>
                      <div class="sidebar__comments-icon">
                        <i class="fas fa-comments"></i>
                      </div>
                      <div class="sidebar__comments-text-box">
                        <p>
                          A wordpress commenter on <br />
                          launch new mobile app
                        </p>
                      </div>
                    </li>
                    <li>
                      <div class="sidebar__comments-icon">
                        <i class="fas fa-comments"></i>
                      </div>
                      <div class="sidebar__comments-text-box">
                        <p><span>John Doe</span> on template:</p>
                        <h5>comments</h5>
                      </div>
                    </li>
                    <li>
                      <div class="sidebar__comments-icon">
                        <i class="fas fa-comments"></i>
                      </div>
                      <div class="sidebar__comments-text-box">
                        <p>
                          A wordpress commenter on <br />
                          launch new mobile app
                        </p>
                      </div>
                    </li>
                    <li>
                      <div class="sidebar__comments-icon">
                        <i class="fas fa-comments"></i>
                      </div>
                      <div class="sidebar__comments-text-box">
                        <p><span>John Doe</span> on template:</p>
                        <h5>comments</h5>
                      </div>
                    </li>
                  </ul>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Blog Details End-->

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
    <script src="js/jquery.countdown.js"></script>
    <script src="js/mixitup.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/script.js"></script>
    <!-- form submit -->
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery.form.min.js"></script>
    <script>
      (function ($) {
        $("#contact_form").validate({
          submitHandler: function (form) {
            var form_btn = $(form).find('button[type="submit"]');
            var form_result_div = "#form-result";
            $(form_result_div).remove();
            form_btn.before(
              '<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>',
            );
            var form_btn_old_msg = form_btn.html();
            form_btn.html(form_btn.prop("disabled", true).data("loading-text"));
            $(form).ajaxSubmit({
              dataType: "json",
              success: function (data) {
                if (data.status == "true") {
                  $(form).find(".form-control").val("");
                }
                form_btn.prop("disabled", false).html(form_btn_old_msg);
                $(form_result_div).html(data.message).fadeIn("slow");
                setTimeout(function () {
                  $(form_result_div).fadeOut("slow");
                }, 6000);
              },
            });
          },
        });
      })(jQuery);
    </script>
  </body>

  <!-- Mirrored from kodesolution.com/html/2023/crotive-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Jun 2023 14:08:27 GMT -->
</html>
