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
<header id="header" class="site-header">
			<div class="container">
				<div class="site-brand">
					<a href="index.html"><img src="<?php echo base_url(); ?>assets/images/assets/logo2.png" alt=""></a>
				</div><!-- .site-brand -->
				<div class="right-header">					
					<nav class="main-menu">
						<button class="c-hamburger c-hamburger--htx"><span></span></button>
						<ul>
							<li>
								<a href="#">Home<i class="fa fa-caret-down" aria-hidden="true"></i></a>
								<ul class="sub-menu">
									<li><a href="index.html">Home</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Explore<i class="fa fa-caret-down" aria-hidden="true"></i></a>
								<ul class="sub-menu">
									<li><a href="explore_layout_one.html">Explore Layout One</a></li>
									<li><a href="explore_layout_two.html">Explore Layout Two</a></li>
									<li><a href="explore_layout_three.html">Explore Layout Three</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Start a Campaigns<i class="fa fa-caret-down" aria-hidden="true"></i></a>
								<ul class="sub-menu">
									<li><a href="create_a_campaign.html">Create a campaign</a></li>
									<li><a href="update_a_campaign.html">Update a campaign</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Pages<i class="fa fa-caret-down" aria-hidden="true"></i></a>
								<ul class="sub-menu">
									<li><a href="coming_soon.html">Coming Soon</a></li>
									<li><a href="about_us.html">About Us</a></li>
									<li><a href="404.html">404</a></li>
									<li><a href="login.html">Login</a></li>
									<li><a href="register.html">Register</a></li>
									<li><a href="faq.html">Faq</a></li>
									<li><a href="campaign_detail.html">Campaign details</a></li>
								</ul>
							</li>
							<li>
								
							</li>
							<li><a href="contact_us.html">Contact</a></li>
							<li>
								<a href="#">Account<i class="fa fa-caret-down" aria-hidden="true"></i></a>
								<ul class="sub-menu">
									<li><a href="dashboard.html">Dashboard</a></li>
									<li><a href="profile.html">Profile</a></li>
									<li><a href="account_my_campaigns.html">My Campaigns</a></li>
									<li><a href="account_pledges_received.html">Pledges Received</a></li>
									<li><a href="account_backed_campaigns.html">Backed Campaigns</a></li>
									<li><a href="account_rewards.html">Rewards</a></li>
									<li><a href="account_payments.html">Payments</a></li>
								</ul>
							</li>
						</ul>
					</nav><!-- .main-menu -->
					<div class="search-icon">
						<a href="#" class="ion-ios-search-strong"></a>
						<div class="form-search"></div>
						<form action="#" method="POST" id="searchForm">
					  		<input type="text" value="" name="search" placeholder="Search..." />
					    	<button type="submit" value=""><span class="ion-ios-search-strong"></span></button>
					  	</form>
					</div>	

					<div class="login login-button">
						<a href="login.html" class="btn-primary">Login</a>
					</div><!-- .login -->
				</div><!--. right-header -->
			</div><!-- .container -->
		</header><!-- .site-header -->

<body class="campaign-detail">
	<div id="wrapper">
		
		<main id="main" class="site-main">
			<div class="page-title background-campaign">
				<div class="container">
					<h1>Budidaya Sorghum</h1>
					<div class="breadcrumbs">
						<ul>
							<li><a href="index.html">Home</a><span>/</span></li>
							<li>Budidaya Sorghum</li>
						</ul>
					</div><!-- .breadcrumbs -->
				</div>
			</div><!-- .page-title -->
			<div class="campaign-content">
				<div class="container">
					<div class="campaign">
						<div class="campaign-item clearfix">
							<div class="campaign-image">
								<div id="owl-campaign" class="campaign-slider">
									<div class="item"><img src="<?php echo base_url(); ?>assets/images/placeholder/sorgum1.png" alt=""></div>
									<div class="item"><img src="<?php echo base_url(); ?>assets/images/placeholder/sorgum2.png" alt=""></div>
									<div class="item"><img src="<?php echo base_url(); ?>assets/images/placeholder/sorgum3.png" alt=""></div>
								</div>
							</div>
							<div class="campaign-box">
								<a href="#" class="category">Pertanian</a>
								<h3>Budidaya Sorghum</h3>
								<div class="campaign-description"><p>Sorghum spp. atau Sorghum adalah salah satu tanaman serealia yang serbaguna yang banyak digunakan sebagai pengganti makanan pokok; dijadikan tepung untuk membuat roti, kue , bubur dll; bahan baku industri; serta pakan ternak. Sorghum menjadi makanan pokok di daerah Asia Selatan dan Afrika sub-sahara.</p></div>
								<div class="campaign-author clearfix">
									<div class="author-profile">
										<a class="author-icon" href="#"><img src="<?php echo base_url(); ?>assets/images/placeholder/35x35.png" alt=""></a>by <a class="author-name" href="#">Fitri Wahyu</a>
									</div>
									<div class="author-address"><span class="ion-location"></span>Komplek Depsos, Bintaro, Jakarta Selatan</div>
								</div>
								<div class="process">
									<div class="raised"><span></span></div>
									<div class="process-info">
										<div class="process-funded"><span>$10000</span>funding goal</div>
										<div class="process-pledged"><span>$8100</span>pledged</div>
										<div class="process-time"><span>37</span>backers</div>
										<div class="process-time"><span>23</span>days ago</div>
									</div>
								</div>
								<div class="button">
									<form action="" id="priceForm" class="campaign-price quantity">
										<input type="number" value="1" min="0" value="" name="s" placeholder="" />
										<button class="btn-primary" type="submit">Back this Campaign</button>
									</form>
									<a href="#" class="btn-secondary"><i class="fa fa-heart" aria-hidden="true"></i>Remind me</a>
								</div>
								<div class="share">
									<p>Share this project</p>
									<ul>
										<li class="share-facebook"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li class="share-twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li class="share-google-plus"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
										<li class="share-linkedin"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
										<li class="share-code"><a href="#"><i class="fa fa-code" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .campaign-content -->
			<div class="campaign-history">
				<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<div class="campaign-tabs">
								<ul class="tabs-controls">
									<li class="active" data-tab="campaign"><a href="#">Campaign Story</a></li>
									<li data-tab="backer"><a href="#">Backer List</a></li>
									<li data-tab="faq"><a href="#">FAQ</a></li>
									<li data-tab="updates"><a href="#">Updates</a></li>
									<li data-tab="comment"><a href="#">Comments</a></li>
								</ul>
								<div class="campaign-content">
									<div id="campaign" class="tabs active">
										<p>Jika dilihat sekilas tanaman sorghum mirip dengan tanaman jagung. Di Indonesia sorghum masih jarang dimanfaatkan atau diolah manjadi makanan. Padahal, sorghum mengandung karbohidrat yang sama baiknya dengan beras. Di Indonesia produksi tanaman sorghum masih rendah dibandingkan produksi di beberapa negara di Asia tenggara. Tanaman sorghum ini dapat tumbuh walaupun dalam kondisi kekeringan dan dapat terus tumbuh walaupun telah dipangkas batangnya. Tanaman sorghum harus lebih dikembangkan di Indonesia, terutama melalui project budidaya ini.</p>

<p>Sorgum atau Cantel, adalah jenis tanaman yang dimanfaatkan buahnya untuk dijadikan tepung sorghum sebagai kebutuhan pangan pokok, juga bisa diolah untuk pakan ternak dan bahan baku industri. Di Indonesia tanaman ini di budidayakan didaerah bagain timur, tepung sorghum dapat diolah menjadi bermacam jenis makanan, seperti aneka kue, roti, jenang, tepung bubur dll.

<p>Menanam / membudidaya kan sorghum tidak sulit karena tanaman ini dapat tumbuh di daerah yang tinggi maupun yang rendah.tanah yang di butuhkan dari tanah lempung, lempung berpasir, tanah branjangan tanah lebu dan tanah yang mengandung bahan organik, curah hujan sedang  suhu udara 22- 32 derajat c, ph tanah 5, 5 s/d 7 dan tata air yang baik.</p>
										<img src="<?php echo base_url(); ?>assets/images/placeholder/sorgum4.png" alt="">
										<p>Sorghum dapat dipanen setelah berumur sekitar 90 hingga 100 hari setelah tanam atau 45 hari setelah bakal biji terbentuk. Ciri sorghum yang siap panen yaitu kulit buahnya sudah berubah warna dari hijau ke hitam atau merah, kulit buah sudah pecah dan isinya kelihatan.</p>
										<p>Karena bernilai ekonomis tinggi, saatnya untuk membudidayakan Sorghum di Indonesia.</p>
									</div>
									<div id="backer" class="tabs">
										<table>
											<tr>
												<th>Name</th>
												<th>Donate Amount</th>
												<th>Date</th>
											</tr>
											<tr>
												<td>Andrew</td>
												<td>$100</td>
												<td>June 25, 2017</td>
											</tr>
											<tr>
												<td>Susanto</td>
												<td>$60</td>
												<td>December 25, 2017</td>
											</tr>
											<tr>
												<td>Gemma</td>
												<td>$70</td>
												<td>November 25, 2017</td>
											</tr>
											<tr>
												<td>Nandan</td>
												<td>$90</td>
												<td>February 25, 2017</td>
											</tr>
											<tr>
												<td>Chyntia</td>
												<td>$30</td>
												<td>January 25, 2017</td>
											</tr>
											<tr>
												<td>Suseno</td>
												<td>$80</td>
												<td>June 15, 2017</td>
											</tr>
										</table>
									</div>
									<div id="faq" class="tabs">
										<h2>Frequently Asked Questions</h2>
										<p>Looks like there aren't any frequently asked questions yet. Ask the project creator directly.</p>
										<a href="#" class="btn-primary">Ask a question</a>
									</div>
									<div id="updates" class="tabs">
										<ul>
											<li>
												<p class="date">30-06-2017</p>
												<h3>New Project Launches in Jombang</h3>
												<div class="desc"><p>Penyelenggara Project terkumpul, 15 orang yang bertempat tinggal di Jombang siap untuk mengelola project yang memiliki cakupan area 15 Ha ini.</p></div>
											</li>
											<li>
												<p class="date">31-09-2017</p>
												<h3>Field Partner terpilih</h3>
												<div class="desc"><p>Field partner untuk project ini adalah Bapak Gempur yang memiliki pengalaman selama lebih dari 5 tahun dibidang riset tanaman berkarbohidrat tinggi ini.</p></div>
											</li>
											<li>
												<p class="date">30-10-2017</p>
												<h3>Touched the 5000 Dollar Milestone</h3>
												<div class="desc"><p>Terima kasih berkat dukungan anda kita 50% lagi menuju terwujudnya proyek yang memiliki potensi besar untuk berkembang ini.</p></div>
											</li>
											<li>
												<p class="date">31-11-2017</p>
												<h3>Distributor telah ditemukan</h3>
												<div class="desc"><p>Distributor untuk menampung penawaran dari Sorghum telah tersedia, saatnya untuk fokus untuk meningkatkan kapasitas produksi.</p></div>
											</li>
										</ul>
									</div>
									<div id="comment" class="tabs comment-area">
										<h3 class="comments-title">1 Comment</h3>
										<ol class="comments-list">
											<li class="comment clearfix"> 
												<div class="comment-body">
													<div class="comment-avatar"><img src="<?php echo base_url(); ?>assets/images/placeholder/70x70.png" alt=""></div>
													<div class="comment-info">
														<header class="comment-meta"></header>
														<cite class="comment-author">Jordan B. Goodale</cite>
														<div class="comment-inline">
															<span class="comment-date">2 days ago</span>
															<a href="#" class="comment-reply">Reply</a>
														</div>
														<div class="comment-content"><p>Apakah saya dapat menjadi investasi tunggal untuk project ini? Saya dapat menyediakan dana sebesar 100% yang anda butuhkan</p></div>
													</div>
												</div>
											</li>
										</ol>
										<div id="respond" class="comment-respond">
											<h3 id="reply-title" class="comment-reply-title">Leave A Comment?</h3>
											<form action="" id="commentForm">
												<div class="field-textarea">
								  					<textarea rows="8" placeholder="Your Comment"></textarea>
								  				</div>
												<div class="row">
									  				<div class="col-md-4 field">
									  					<input type="text" value="" name="s" placeholder="Your Name" />
									  				</div>
									  				<div class="col-md-4 field">
									  					<input type="text" value="" name="s" placeholder="Your Email" />
									  				</div>
									  				<div class="col-md-4 field">
									  					<input type="text" value="" name="s" placeholder="Website" />
									  				</div>
								  				</div>
											  	<button type="submit" value="Send Messager" class="btn-primary">Post Comment</button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div><!-- .main-content -->
						<div class="col-lg-4">
							<div class="support support-campaign">
								<h3 class="support-campaign-title">Back this Campaign</h3>
								<div class="plan">
									<a href="javascript:void(0)">
										<h4>Pledge $100 - $200</h4>
										<div class="plan-desc"><p>Tanaman sorgum sudah dapat dipanen pada umur 3-4 bulan tergantung varietas.
Penentuan saat panen sorgum dapat dilakukan dengan berpedoman pada umur setelah biji terbentuk atau dengan melihat ciri-ciri visual biji. Pemanenan juga dapat dilakukan setelah
melihat adanya ciri-ciri seperti daun-daun berwarna kuning dan mengering, biji-biji bernas dan keras serta berkadar tepung maksimal.</p></div>
										<div class="plan-date">Siap panen 25 December 2017</div>
										<div class="plan-author">Estimated Delivery</div>
										<div class="backer">37 backer</div>
									</a>
								</div>
								<div class="plan">
									<a href="javascript:void(0)">
										<h4>Field Partner : Gempur S Hadi </h4>
										<div class="plan-desc"><p>Pak Gempur merupakan alumni Institut Pertanian Bogor yang sekarang miliki usaha perkebunan Sorghum. 10 tahun menjabat sebagai Banker salah satu bank pemerintah, beliau siap membantu project budidaya sorghum senilai $10000 melalui praktek, riset, dan ilmu yang telah dimilikinya selama 5 tahun</p></div>
										<div class="plan-date">IPB : Rekayasa Genetik</div>
										<div class="plan-author">5 tahun melakukan riset Sorghum</div>
										<div class="backer"></div>
									</a>
								</div>
							</div>
						</div><!-- .sidebar -->
					</div>
				</div>
			</div><!-- .campaign-history -->
		</main><!-- .site-main -->

		<footer id="footer" class="site-footer">
			<div class="footer-menu">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-sm-4 col-4">
							<div class="footer-menu-item">
								<h3>Our company</h3>
								<ul>
									<li><a href="#">What is Startup Idea</a></li>
									<li><a href="about_us.html">About us</a></li>
									<li><a href="#">How It Works</a></li>
									<li><a href="#">What Is This</a></li>
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Press</a></li>
									<li><a href="#">Starts</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-sm-4 col-4">
							<div class="footer-menu-item">
								<h3>Campaign</h3>
								<ul>
									<li><a href="#">Start Your Campaign</a></li>
									<li><a href="#">Pricing Campaign</a></li>
									<li><a href="#">Campaign Support</a></li>
									<li><a href="#">Trust &amp; Safety</a></li>
									<li><a href="#">Support</a></li>
									<li><a href="#">Terms of Use</a></li>
									<li><a href="#">Privacy Policy</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-sm-4 col-4">
							<div class="footer-menu-item">
								<h3>Explore</h3>
								<ul>
									<li><a href="#">Pertanian</a></li>
									<li><a href="#">Peternakan</a></li>
									<li><a href="#">Perkebunan</a></li>
									<li><a href="#">Perikanan</a></li>
									<li><a href="#">Pelatihan</a></li>
									<li><a href="#">Makanan Kaleng</a></li>
									<li><a href="#">Riset</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-sm-12 col-12">
							<div class="footer-menu-item newsletter">
								<h3>Newsletter</h3>
								<div class="newsletter-description">Private, secure, spam-free</div>
								<form action="s" method="POST" id="newsletterForm">
							  		<input type="text" value="" name="s" placeholder="Enter your email..." />
							    	<button type="submit" value=""><span class="ion-android-drafts"></span></button>
							  	</form>
							  	<div class="follow">
							  		<h3>Follow us</h3>
							  		<ul>
							  			<li class="facebook"><a target="_Blank" href="http://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							  			<li class="twitter"><a target="_Blank" href="http://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							  			<li class="instagram"><a target="_Blank" href="http://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							  			<li class="google"><a target="_Blank" href="http://www.google.com"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							  			<li class="youtube"><a target="_Blank" href="http://www.youtube.com"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
							  		</ul>
							  	</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .footer-menu -->
			<div class="footer-copyright">
				<div class="container">
					<p class="copyright">2017 by bonyhudi. All Rights Reserved.</p>
					<a href="#" class="back-top">Back to top<span class="ion-android-arrow-up"></span></a>
				</div>
			</div>
		</footer><!-- site-footer -->
	</div><!-- #wrapper -->
	<!-- jQuery -->    
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/libs/popper/popper.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/libs/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/libs/owl-carousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/libs/owl-carousel/carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/libs/jquery.countdown/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/libs/wow/wow.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/libs/isotope/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/libs/bxslider/jquery.bxslider.min.js"></script>
    <!-- orther script -->
    <script  type="text/javascript" src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body>
</html>