<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kodesolution.com/html/2023/crotive-html/page-contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Jun 2023 14:08:27 GMT -->
<head>
<meta charset="utf-8">
<title>Contact Page | Build Your Innovation</title>
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
	$currentPage = 'contact';
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
				<h1 class="title">Contact Us</h1>
				<ul class="page-breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li>Contact</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->



	<!-- Contact Section Two -->
	<section class="contact-section-two">
		<div class="bg bg-pattern-17"></div>
		<div class="auto-container">
			<div class="row">
				<!-- Title Column -->
				<div class="title-column col-xl-4 col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="sec-title light">
							<h2 class="words-slide-up text-split">Start <span class="color1">Project</span> with Us</h2>
						</div>

						<ul class="contact-info-list">
							<li>
								<i class="icon far fa-phone-volume"></i>
								<span class="title">Call anytime</span>
								<div class="text"><a href="tel:+919755385253">+91-97553 85253</a></div>
							</li>
							<li>
								<i class="icon far fa-envelope-open-text"></i>
								<span class="title">Send email</span>
								<div class="text"><a href="mailto:mohammed@buildyourinnovation.com">mohammed@buildyourinnovation.com</a></div>
							</li>

							<!-- <li>
								<i class="icon far fa-map-location"></i>
								<span class="title">Visit Office</span>
								<div class="text">130B, Hasanji Nagar
										Indore, Madhya Pradesh 453331
								</div>
							</li> -->
						</ul>
					</div>
				</div>

				<!-- Form Column -->
				<div class="form-column col-xl-8 col-lg-7 col-md-12 col-sm-12">
					<!-- Contact Form -->
					<div class="contact-form-two wow fadeInLeft">
						<!--Contact Form-->
						<form method="post" action="#" id="contact-form">
							<div class="row">
								<div class="form-group col-lg-6 col-md-6 col-sm-12">
									<input type="text" name="full_name" placeholder="Your Name" required>
								</div>
					
								<div class="form-group col-lg-6 col-md-6 col-sm-12">
									<input type="text" name="Email" placeholder="Email Address" required>
								</div>
					
								<div class="form-group col-lg-12">
									<input type="text" name="Phone" placeholder="Your Phone" required>
								</div>

								<div class="form-group col-lg-12">
									<textarea name="message" placeholder="Write a Message" required></textarea>
								</div>
				
								<div class="form-group col-lg-12">
									<button class="theme-btn" type="submit" name="submit-form"><span class="btn-title">Send a message</span></button>
								</div>
							</div>
						</form>
					</div>
					<!--End Contact Form -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Contact Section  -->

	<!-- Map Section-->
	<!-- <section class="map-section">
	<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3682.165242292378!2d75.81063658661986!3d22.64762687721415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fd8e2272f3df%3A0xc372867e296015fe!2sBuild%20Your%20Innovation!5e0!3m2!1sen!2sin!4v1687868112010!5m2!1sen!2sin" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</section> -->
	<!--End Map Section-->
	


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

<!-- form submit -->
<script src="js/jquery.validate.min.js"></script>
<script src="js/jquery.form.min.js"></script>
<script>
	(function($) {
		$("#contact_form").validate({
			submitHandler: function(form) {
				var form_btn = $(form).find('button[type="submit"]');
				var form_result_div = '#form-result';
				$(form_result_div).remove();
				form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
				var form_btn_old_msg = form_btn.html();
				form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
				$(form).ajaxSubmit({
					dataType:  'json',
					success: function(data) {
						if( data.status == 'true' ) {
							$(form).find('.form-control').val('');
						}
						form_btn.prop('disabled', false).html(form_btn_old_msg);
						$(form_result_div).html(data.message).fadeIn('slow');
						setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
					}
				});
			}
		});
	})(jQuery);
</script>

</body>

<!-- Mirrored from kodesolution.com/html/2023/crotive-html/page-contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Jun 2023 14:08:27 GMT -->
</html>