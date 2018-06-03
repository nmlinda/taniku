<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Investani</title>

	<!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/responsive.css" />
    <link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.png" type="image/x-icon"/>
</head>

<body class="coming-soon">
	<div id="wrapper">
		<header id="header" class="site-header">
			<div class="container">
				<div class="site-brand">
					<a href="<?php echo base_url(); ?>index"><img src="" alt=""></a>
				</div><!-- .site-brand -->
			</div><!-- .container -->
		</header><!-- .site-header -->

		<main id="main" class="site-main">
			<div class="container">
				<h2>We're launching our</h2>
				<h1>New Website</h1>
				<div class="desc">Working hard for something we don't care about is called stress. Working hard for smething we love is called passion.</div>
				<div class="time">
					<ul>
						<li class="time-item"><span>4</span> Days</li>
						<li class="time-item"><span>4</span> Hours</li>
						<li class="time-item"><span>4</span> Mins</li>
						<li class="time-item"><span>4</span> Seconds</li>
					</ul>
				</div>
				<div class="button button-popup">
					<a href="index.html" class="btn-primary">Notify US</a>
				</div><!-- .button -->
				<div class="popup">
					<div class="newsletter-popup">
						<div class="popup-wrapper">
							<div class="form-header clearfix">
								<img src="images/assets/letter.png" alt="">
								<div class="form-text">
									<h2>Sign Up</h2>
									<div class="form-desc"><p>Be first to know about the latest updates and get exclusive offer on our grand opening</p></div>
								</div>
							</div>
							<div class="form-content">
								<form action="s" method="POST" id="newsletterpopupForm">
					  				<input type="text" value="" name="s" placeholder="Email..." />
								  	<button type="submit" value="Subscribe" class="btn-primary">Subscribe</button>
							  	</form>
							</div>
						</div>
						<span class="ion-close-round close"></span>
					</div><!-- .newsletter-popup -->
				</div><!-- .popup -->
			</div>
		</main><!-- .site-main -->

		<footer id="footer" class="site-footer">
			<div class="footer-copyright clearfix">
				<p class="copyright">2017 by Investani. All Rights Reserved.</p>
				<div class="follow">
			  		<ul>
			  			<li class="facebook"><a target="_Blank" href="http://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			  			<li class="twitter"><a target="_Blank" href="http://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			  			<li class="instagram"><a target="_Blank" href="http://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			  			<li class="google"><a target="_Blank" href="http://www.google.com"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
			  			<li class="youtube"><a target="_Blank" href="http://www.youtube.com"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
			  		</ul>
			  	</div>
			</div>
		</footer><!-- site-footer -->
	</div><!-- #wrapper -->
	<!-- jQuery -->    
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/libs/popper/popper.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/libs/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/libs/owl-carousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/libs/jquery.countdown/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/libs/wow/wow.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/libs/isotope/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/libs/bxslider/jquery.bxslider.min.js"></script>
    <!-- orther script -->
    <script  type="text/javascript" src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body>
</html>