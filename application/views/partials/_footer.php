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
