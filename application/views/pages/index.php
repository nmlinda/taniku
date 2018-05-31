<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Taniku</title>

	<!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <link rel="icon" href="images/favicon.png" type="image/x-icon"/>
    <script type="text/javascript" src="js/custom.js"></script>
</head>

<body class="home">
	<div id="wrapper">
		<header id="header" class="site-header">
			<div class="container">
				<div class="site-brand">
					<a href="index.html"><img src="images/assets/logo2.png" alt=""></a>
				</div><!-- .site-brand -->
				<div class="right-header">					
					<nav class="main-menu">
						<button class="c-hamburger c-hamburger--htx"><span></span></button>
						<ul>
							<li>
								<a href="index.php">Home<i class="fa fa-caret-down" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#">Explore<i class="fa fa-caret-down" aria-hidden="true"></i></a>
								<ul class="sub-menu">
									<li><a href="explore_layout_one.html">Explore Based on Places</a></li>	
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
									
									<li><a href="404.html">404</a></li>
									<li><a href="login.html">Login</a></li>
									
									<li><a href="faq.html">Faq</a></li>
									<li><a href="campaign_detail.html">Campaign details</a></li>
								</ul>
							</li>
							<li><a href="about_us.html">About Us</a></li>
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
						<a class="btn-primary" href="register.html">Register</a>
					</div><!-- .login -->
				</div><!--. right-header -->
			</div><!-- .container -->
		</header><!-- .site-header -->

		<main id="main" class="site-main">
			<div class="sideshow">
				<div class="container">
					<div class="sideshow-content">
						<h1 class="wow fadeInUp" data-wow-delay=".2s">Penghasilan tambahan PASTI melalui investasi pada penggemukan sapi (FC001)</h1>
						<div class="sideshow-description wow fadeInUp" data-wow-delay=".1s">Dimonitor oleh tenaga ahli dari Institut Pertanian Bogor.</div>
						<div class="process wow fadeInUp" data-scroll-nav="1">
							<div class="raised"><span></span></div>
							<div class="process-info">
								<div class="process-funded"><span>46%</span>funded</div>
								<div class="process-pledged"><span>$46.000</span>pledged</div>
								<div class="process-backers"><span>32</span>backers</div>
								<div class="process-time"><span>21</span>days ago</div>
							</div>
						</div>
						<div class="button wow fadeInUp" data-wow-delay="0.3s">
							<a href="#" class="btn-secondary">See Campaign</a>
							<a href="#" class="btn-primary">Buy Now</a>
						</div>
					</div><!-- .sideshow-content -->
				</div>
			</div><!-- .sideshow -->
			<div class="popular campaign">
				<div class="container">
					<h2 class="title wow fadeInUp" data-wow-delay=".1s">What's Popular</h2>
					<div class="description wow fadeInUp" data-wow-delay=".1s">Temukan dan bantu project yang sesuai dengan minat anda disini.</div>
					<div class="campaign-content" id="loading-content" style="display: none;">
						<center>Loading....</center>
					</div>					
					<div class="campaign-content" id="campaign-content" style="display: block;">						
						<div class="row">
							<?php
								$data = file_get_contents('http://api.taniku.onpremi.com/campaigns');
								$json = json_decode($data);
								$i = 0;
								foreach($json->data->campaign as $res){
									if($i > 2){ continue; }
								?>
							<div class="col-lg-4 col-sm-6">
								<div class="campaign-item wow fadeInUp" data-wow-delay=".1s">
									<a class="overlay url-onimage" href="campaign_detail.html?id=<?=$res->id?>">
										<img src="<?=$res->image?>" alt="" class="campaign-images">
										<span class="ion-ios-search-strong"></span>
									</a>
									<div class="campaign-box">
										<a href="#" class="category popular-category"><?=$res->category?></a>
										<h3><a href="campaign_detail.html?id=<?=$res->id?>" class="url-ontitle"><?=$res->title?></a></h3>
										<div class="campaign-description"><?=$res->excerpt?></div>
										<div class="campaign-author"><a class="author-icon" href="#"><img src="images/placeholder/35x35.png" alt=""></a>by <a class="author-name" href="#">Deden Rochmanudin</a></div>
										<div class="process">
											<div class="raised"><span style="width: <?=$res->funding_progress?>"></span></div>
											<div class="process-info">
												<div class="process-pledged"><span class="amount_needed">Rp.<?=number_format($res->amount_needed)?></span>pledged</div>
												<div class="process-funded"><span class="amount_funded"><?=$res->funding_progress?>%</span>funded</div>
												<div class="process-time"><span class="days_left"><?=$res->days_left?></span>days left</div>
											</div>
										</div>
									</div>
								</div>
							</div>
								<?php
									$i++;
								}
							?>					
						</div>
					</div><!-- .section-content -->
				</div>
			</div><!-- .popular -->
			<div class="explore">
				<div class="container">
					<h2 class="title wow fadeInUp" data-wow-delay=".1s">Explore Ideas</h2>
					<div class="description wow fadeInUp" data-wow-delay=".1s">Yuk pilih kategori Taniku yang sesuai dengan minat anda.</div>
					<div class="explore-content">
						<div class="row">
							<div class="col-lg-3 col-md-4 col-sm-6 col-6">
								<div class="explore-item wow fadeInUp" data-wow-delay=".1s">
									<a class="explore-overlay" href="#">
										<img src="images/placeholder/pengembangbiakan.png" alt="">
										<span>Pengembangbiakan Sapi</span>
									</a>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6 col-6">
								<div class="explore-item wow fadeInUp" data-wow-delay=".1s">
									<a class="explore-overlay" href="#">
										<img src="images/placeholder/Penggemukan.png" alt="">
										<span>Penggemukan Sapi</span>
									</a>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6 col-6">
								<div class="explore-item wow fadeInUp" data-wow-delay=".1s">
									<a class="explore-overlay" href="#">
										<img src="images/placeholder/Bakalan.png" alt="">
										<span>Bakalan Sapi</span>
									</a>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6 col-6">
								<div class="explore-item wow fadeInUp" data-wow-delay=".1s">
									<a class="explore-overlay" href="#">
										<img src="images/placeholder/sapi.png" alt="">
										<span>Sapi Kurban</span>
									</a>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6 col-6">
								<div class="explore-item wow fadeInUp" data-wow-delay=".1s">
									<a class="explore-overlay" href="#">
										<img src="images/placeholder/pakan.png" alt="">
										<span>Pakan Ternak</span>
									</a>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6 col-6">
								<div class="explore-item wow fadeInUp" data-wow-delay=".1s">
									<a class="explore-overlay" href="#">
										<img src="images/placeholder/sorgum6.png" alt="">
										<span>Sweet Sorghum</span>
									</a>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6 col-6">
								<div class="explore-item wow fadeInUp" data-wow-delay=".1s">
									<a class="explore-overlay" href="#">
										<img src="images/placeholder/Sorgum7.png" alt="">
										<span>Grain Sorghum</span>
									</a>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6 col-6">
								<div class="explore-item wow fadeInUp" data-wow-delay=".1s">
									<a class="explore-overlay" href="#">
										<img src="images/placeholder/sorgumfoods.png" alt="">
										<span>Sorghumfoods</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .explore -->
			<div class="staff-picks">
				<div class="container">
					<div class="border-title">
						<h2 class="title left-title wow fadeInUp" data-wow-delay=".1s">Sorghumfoods Picks</h2>
						<div class="description left-description wow fadeInUp" data-wow-delay=".1s">Pilihan kami untuk produk hasil olahan taniku yang layak anda perhatikan.</div>
					</div>
					<div class="staff-picks-content">
						<div class="staff-picks-slider slider-controls-top owl-carousel">
							<div class="staff-picks-item clearfix">
								<a class="staff-picks-image" href="campaign_detail.html"><img src="images/placeholder/gula.png" alt=""></a>
								<div class="staff-picks-item-content staff-picks-box wow fadeInUp" data-wow-delay=".1s">
									<a href="#" class="category">Sorghumfoods</a>
									<h3><a href="campaign_detail.html">Gula kristal Sorghum</a></h3>
									<div class="staff-picks-description">Gula Kristal Sorghum dari Sorghum Food merupakan pilihan pemanis alami pengganti gula pasir untuk Anda yang ingin sehat namun tetap ingin merasakan rasa manis.</div>
									<div class="staff-picks-author">
										<div class="author-profile">
											<a class="author-avatar" href="#"><img src="images/placeholder/40x40.png" alt=""></a>by <a class="author-name" href="#">bonyhudi</a>
										</div>
										<div class="author-address"><span class=""></span>Buy Now</div>
									</div>
									<div class="process">
										<div class="raised"></div>
										<div class="process-info">
											<div class="process-Harga"><span>Rp30,000</span>Harga</div>
											<div class="process-Stock"><span>Available</span>Stock</div>
											
										</div>
									</div>
								</div>
							</div>
							<div class="staff-picks-item clearfix">
								<a class="staff-picks-image" href="campaign_detail.html"><img src="images/placeholder/sirup.png" alt=""></a>
								<div class="staff-picks-item-content staff-picks-box wow fadeInUp" data-wow-delay=".1s">
									<a href="#" class="category">Sorghumfoods</a>
									<h3><a href="campaign_detail.html">Sirup Sorghum</a></h3>
									<div class="staff-picks-description">Sorghum yang diolah menjadi sirup dengan kadar gluten minim, memiliki rasa yang tidak kalah lezat dengan sirup merah biasa.</div>
									<div class="staff-picks-author">
										<div class="author-profile">
											<a class="author-avatar" href="#"><img src="images/placeholder/40x40.png" alt=""></a>by <a class="author-name" href="#">Steffi Rahardjo</a>
										</div>
										<div class="author-address"><span class=""></span>Buy Now</div>
									</div>
									<div class="process">
										<div class="raised"></span></div>
										<div class="process-info">
											<div class="process-Harga"><span>Rp10,000</span>Harga</div>
											<div class="process-Stock"><span>Available</span>Stock</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .staff-picks -->
			<div class="latest campaign">
				<div class="container">
					<h2 class="title wow fadeInUp" data-wow-delay=".1s">Latest Projects</h2>
					<div class="description wow fadeInUp" data-wow-delay=".1s">Telusuri project Taniku baru yang seru dan menarik.</div>
					<div class="campaign-content">
						<div class="row">
							<div class="col-lg-4 col-sm-6">
								<div class="campaign-item wow fadeInUp" data-wow-delay=".1s">
									<a class="overlay" href="campaign_detail.html">
										<img src="images/placeholder/sapip1.png" alt="">
										<span class="ion-ios-search-strong"></span>
									</a>
									<div class="campaign-box">
										<a href="#" class="category">Penggemukan Sapi</a>
										<h3><a href="campaign_detail.html">Penggemukan Sapi (FC0002)</a></h3>
										<div class="campaign-description">Investasi pada penggemukan sapi dengan hasil terjamin dengan tingkat pengembalian hingga 13 persen setahun.</div>
										<div class="campaign-author"><a class="author-icon" href="#"><img src="images/placeholder/35x35.png" alt=""></a>by <a class="author-name" href="#">Sabato Alterio</a></div>
										<div class="process">
											<div class="raised"><span></span></div>
											<div class="process-info">
												<div class="process-pledged"><span>$630</span>pledged</div>
												<div class="process-funded"><span>26%</span>funded</div>
												<div class="process-time"><span>2</span>days ago</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6">
								<div class="campaign-item wow fadeInUp" data-wow-delay=".1s">
									<a class="overlay" href="campaign_detail.html">
										<img src="images/placeholder/sapip2.png" alt="">
										<span class="ion-ios-search-strong"></span>
									</a>
									<div class="campaign-box">
										<a href="#" class="category">Penggemukan Sapi</a>
										<h3><a href="campaign_detail.html">Penggemukan Sapi (FC0001)</a></h3>
										<div class="campaign-description">Investasi pada penggemukan sapi dengan hasil terjamin dengan tingkat pengembalian hingga 13 persen setahun.</div>
										<div class="campaign-author"><a class="author-icon" href="#"><img src="images/placeholder/35x35.png" alt=""></a>by <a class="author-name" href="#">Samino</a></div>
										<div class="process">
											<div class="raised"><span></span></div>
											<div class="process-info">
												<div class="process-pledged"><span>$370</span>pledged</div>
												<div class="process-funded"><span>9%</span>funded</div>
												<div class="process-time"><span>9</span>days ago</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6">
								<div class="campaign-item wow fadeInUp" data-wow-delay=".1s">
									<a class="overlay" href="campaign_detail.html">
										<img src="images/placeholder/pakan2.png" alt="">
										<span class="ion-ios-search-strong"></span>
									</a>
									<div class="campaign-box">
										<a href="#" class="category">Pakan Ternak</a>
										<h3><a href="campaign_detail.html">Pakan ternak (FS0001)</a></h3>
										<div class="campaign-description">Dengan rekayasa genetik yang baru, kini rasa Pakan Ternak lebih sehat, dengan tingkat resiko lebih rendah</div>
										<div class="campaign-author"><a class="author-icon" href="#"><img src="images/placeholder/35x35.png" alt=""></a>by <a class="author-name" href="#">Andrew Noah</a></div>
										<div class="process">
											<div class="raised"><span></span></div>
											<div class="process-info">
												<div class="process-pledged"><span>$610</span>pledged</div>
												<div class="process-funded"><span>73%</span>funded</div>
												<div class="process-time"><span>14</span>days ago</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6">
								<div class="campaign-item wow fadeInUp" data-wow-delay=".1s">
									<a class="overlay" href="campaign_detail.html">
										<img src="images/placeholder/sorgump1.png" alt="">
										<span class="ion-ios-search-strong"></span>
									</a>
									<div class="campaign-box">
										<a href="#" class="category">Sweet Sorghum</a>
										<h3><a href="campaign_detail.html">Sweet Sorghum (SS0002)</a></h3>
										<div class="campaign-description">Pengganti Gula yang tanamnya dilakukan di Jombang, dengan masa panen antara 8-12 bulan.</div>
										<div class="campaign-author"><a class="author-icon" href="#"><img src="images/placeholder/35x35.png" alt=""></a>by <a class="author-name" href="#">Andrew Noah</a></div>
										<div class="process">
											<div class="raised"><span></span></div>
											<div class="process-info">
												<div class="process-pledged"><span>$3670</span>pledged</div>
												<div class="process-funded"><span>58%</span>funded</div>
												<div class="process-time"><span>21</span>days ago</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6">
								<div class="campaign-item wow fadeInUp" data-wow-delay=".1s">
									<a class="overlay" href="campaign_detail.html">
										<img src="images/placeholder/sorgump2.png" alt="">
										<span class="ion-ios-search-strong"></span>
									</a>
									<div class="campaign-box">
										<a href="#" class="category">Grain Sorghum</a>
										<h3><a href="campaign_detail.html">Grain Sorghum (GS0003)</a></h3>
										<div class="campaign-description">Pengganti Gula yang tanamnya dilakukan di Jombang, dengan masa panen antara 8-12 bulan.</div>
										<div class="campaign-author"><a class="author-icon" href="#"><img src="images/placeholder/35x35.png" alt=""></a>by <a class="author-name" href="#">Sabato Alterio</a></div>
										<div class="process">
											<div class="raised"><span></span></div>
											<div class="process-info">
												<div class="process-pledged"><span>$1950</span>pledged</div>
												<div class="process-funded"><span>70%</span>funded</div>
												<div class="process-time"><span>23</span>days ago</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6">
								<div class="campaign-item wow fadeInUp" data-wow-delay=".1s">
									<a class="overlay" href="campaign_detail.html">
										<img src="images/placeholder/bakalan2.png" alt="">
										<span class="ion-ios-search-strong"></span>
									</a>
									<div class="campaign-box">
										<a href="#" class="category">Bakalan Sapi</a>
										<h3><a href="campaign_detail.html">Bakalan Sapi (RC0001)</a></h3>
										<div class="campaign-description">Didukung permintaan yang tinggi dengan tingkat pengembalian yang stabil.</div>
										<div class="campaign-author"><a class="author-icon" href="#"><img src="images/placeholder/35x35.png" alt=""></a>by <a class="author-name" href="#">Samino</a></div>
										<div class="process">
											<div class="raised"><span></span></div>
											<div class="process-info">
												<div class="process-pledged"><span>$3900</span>pledged</div>
												<div class="process-funded"><span>69%</span>funded</div>
												<div class="process-time"><span>33</span>days ago</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="latest-button wow fadeInUp" data-wow-delay=".1s"><a href="#" class="btn-primary">View all Campaigns</a></div>
				</div>
			</div><!-- .latest -->
			<div class="partners">
				<div class="container">
					<div class="partners-slider owl-carousel">
						<div><a href="#"><img src="images/partner-01.png" alt=""></a></div>
						<div><a href="#"><img src="images/partner-02.png" alt=""></a></div>
						<div><a href="#"><img src="images/partner-03.png" alt=""></a></div>
						<div><a href="#"><img src="images/partner-04.png" alt=""></a></div>
						<div><a href="#"><img src="images/partner-05.png" alt=""></a></div>
						<div><a href="#"><img src="images/partner-06.png" alt=""></a></div>
					</div>
				</div>
			</div><!-- .partners -->
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
									<li><a href="#">Perkebunan</a></li>
									<li><a href="#">Peternakan</a></li>
									<li><a href="#">Perikanan</a></li>
									<li><a href="#">Tenun</a></li>
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
					<p class="copyright">2017 by Investani. All Rights Reserved.</p>
					<a href="#" class="back-top">Back to top<span class="ion-android-arrow-up"></span></a>
				</div>
			</div>
		</footer><!-- site-footer -->
	</div><!-- #wrapper -->
	<!-- jQuery -->    
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="libs/popper/popper.js"></script>
    <script type="text/javascript" src="libs/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="libs/owl-carousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="libs/jquery.countdown/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="libs/wow/wow.min.js"></script>
    <script type="text/javascript" src="libs/isotope/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="libs/bxslider/jquery.bxslider.min.js"></script>

    <!-- orther script -->
    <script  type="text/javascript" src="js/main.js"></script>

    <script type="text/javascript">
    	/*
    	$(document).ready(function(){
    		var form = new FormData();			
			ApiBase(null, "/campaigns", null, "GET", (response) => {
				var jdata = response.data.campaign;
				console.log(elementC('author-icon'));
				for(var i = 0; i < 3; i++){
					elementC('url-onimage')[i].href = "campaign_detail.html?id="+jdata[i].id;					
					elementC('url-ontitle')[i].href = "campaign_detail.html?id="+jdata[i].id;

					elementC('popular-category')[i].innerHTML = jdata[i].category;
					elementC('url-ontitle')[i].innerHTML = jdata[i].title;
					elementC('campaign-description')[i].innerHTML = jdata[i].excerpt;
					elementC('raised')[i+1].innerHTML = "<span style='width: "+jdata[i].funding_progress+"%'></span>";
					elementC('amount_needed')[i].innerHTML = "Rp." + withCommas(jdata[i].amount_needed);
					elementC('amount_funded')[i].innerHTML = "Rp." + withCommas(jdata[i].amount_funded);
					elementC('days_left')[i].innerHTML = jdata[i].days_left;
					elementC('campaign-images')[i].src = jdata[i].image;
				}				
				element('campaign-content').style.display = 'block';
				element('loading-content').style.display = 'none';
			}, (error) => {
				element('loading-content').innerHTML = "<center>Error loading page.</center>";
			})
    	})
    	*/
    </script>
</body>
</html>
