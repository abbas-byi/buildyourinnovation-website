<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kodesolution.com/html/2023/crotive-html/page-about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Jun 2023 14:08:14 GMT -->
<head>
<meta charset="utf-8">
<title>About Us | Build Your Innovation</title>
<!-- Stylesheets -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<?php include './templates/favicon.php'; ?>

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>
<body>

<div class="page-wrapper dark-layout">

	<!-- Cursor Animation -->
	<?php include './templates/cursor-animation.php'; ?>

	<!-- Preloader -->
	<div class="preloader"></div>

	<!-- Main Header-->
	<?php
		$currentPage = 'about';
		include './templates/header.php';
	?>
	<!--End Main Header -->

	<!-- Hidden bar back drop -->
	<div class="hidden-bar-back-drop"></div>

	<!-- Hidden Bar -->
	<?php include './templates/hiddenBar.php'; ?>
	<!--End Hidden Bar -->


	<!-- Start main-content -->
	<section class="page-title" style="background-image: url(images/background/page-title.jpg);">
		<div class="auto-container">
			<div class="title-outer">
				<h1 class="title">About</h1>
				<ul class="page-breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li>About</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->
	
	<!-- About Section Three -->
	<section class="about-section-three">
		<div class="bg bg-pattern-20"></div>

		<div class="auto-container">
			<div class="row">
				<div class="content-column col-lg-6 col-md-12 col-sm-12 order-2 wow fadeInRight" data-wow-delay="600ms">
					<div class="inner-column">
						<div class="sec-title">
							<h1 class="words-slide-from-right text-split">Who <span class="color1">We</span> Are</h1>
							<h6 class="other-title">About Build Your Innovation</h6>
							<div class="text">Build Your Innovation was founded with a mission to empower businesses of all sizes with innovative IT solutions that drive growth, enhance efficiency, and deliver exceptional user experiences. We bring together a talented team of experienced professionals who are committed to delivering excellence in every project we undertake.</div>
						</div>
						<div class="sec-title">
							<h6 class="other-title">Our Expertise</h6>
							<div class="text">With years of experience in the industry, we have honed our skills in a wide range of IT domains, including software development, web design and development, mobile app development, cloud computing, artificial intelligence, and more. Our expertise allows us to cater to diverse business needs across various industries, ensuring that our clients receive tailor-made solutions that align with their unique requirements.</div>
						</div>
						<!-- <a href="page-about.html" class="theme-btn btn-style-two"><span class="btn-title">Read More</span></a> -->
					</div>
				</div>
	
	
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInLeft">
						<figure class="image overlay-anim wow fadeInUp"><img src="images/resource/about-6.jpg" alt="">
						</figure>
						<div class="exp-box">
							<span class="count">7</span>
							<span class="text">Years of experience</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End About Section -->

	<!-- Awards Section -->
	<section class="awards-section style-two">
		<div class="bg bg-pattern-13"></div>
		<!-- Marquee -->
		<div class="marquee">
			<div class="marquee-group">
				<div class="text">awards <span class="color1">&amp;</span> achievements </div> &nbsp;
			</div>
			<div aria-hidden="true" class="marquee-group">
				<div class="text">awards <span class="color1">&amp;</span> achievements </div> &nbsp;
			</div>
		</div>

		<div class="auto-container">
			<div class="row">
				<!-- Umage column -->
				<div class="image-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="text">Duis aute lorem ipsum is simply free text available in the market reprehen.</div>
						<figure class="image"><img src="images/resource/award.png" alt=""></figure>
						<span class="circles"></span>
					</div>
				</div>
				
				<!-- Content column -->
				<div class="content-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						<ul class="awards-list">
							<li class="award-block">
								<span class="count">x2</span>
								<h6 class="title">Awwwards Interior <br>Excellence</h6>
								<span class="date">2018</span>
								<a href="#" class="plus-icon"><i class="fal fa-plus"></i></a>
							</li>

							<li class="award-block">
								<span class="count">x2</span>
								<h6 class="title">FWA, <br>Site of the Day</h6>
								<span class="date">2019</span>
								<a href="#" class="plus-icon"><i class="fal fa-plus"></i></a>
							</li>

							<li class="award-block">
								<span class="count">x2</span>
								<h6 class="title">Creative Agencies<br>Worldwide</h6>
								<span class="date">2020</span>
								<a href="#" class="plus-icon"><i class="fal fa-plus"></i></a>
							</li>

							<li class="award-block">
								<span class="count">x2</span>
								<h6 class="title">Awesome <br>business models</h6>
								<span class="date">2022</span>
								<a href="#" class="plus-icon"><i class="fal fa-plus"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Awards Section -->

	<!-- Main Footer -->
	<?php
		include './templates/footer.php';
	?>
	<!--End Main Footer -->

</div><!-- End Page Wrapper -->


<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>


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

</body>

<!-- Mirrored from kodesolution.com/html/2023/crotive-html/page-about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Jun 2023 14:08:15 GMT -->
</html>