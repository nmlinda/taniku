<header id="header" class="site-header">
			<div class="container">
				<div class="site-brand">
					<a href="<?php base_url(); ?>index"><img src="<?php echo base_url(); ?>assets/images/assets/logo2.png" alt=""></a>
				</div><!-- .site-brand -->
				<div class="right-header">					
					<nav class="main-menu">
						<button class="c-hamburger c-hamburger--htx"><span></span></button>
						<ul>
							<li>
								<a href="<?php base_url(); ?>index">Home<i class="fa fa-caret-down" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#">Explore<i class="fa fa-caret-down" aria-hidden="true"></i></a>
								<ul class="sub-menu">
									<li><a href="<?php base_url(); ?>explore_layout_one">Explore Based on Places</a></li>	
								</ul>
							</li>
							<li>
								<a href="#">Start a Campaigns<i class="fa fa-caret-down" aria-hidden="true"></i></a>
								<ul class="sub-menu">
									<li><a href="<?php base_url(); ?>create_a_campaign">Create a campaign</a></li>
									<li><a href="<?php base_url(); ?>update_a_campaign">Update a campaign</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Pages<i class="fa fa-caret-down" aria-hidden="true"></i></a>
								<ul class="sub-menu">
                                    <li><a href="<?php base_url(); ?>coming_soon">Coming Soon</a></li>
									<li><a href="<?php base_url(); ?>about_us">About Us</a></li>
									<li><a href="<?php base_url(); ?>404">404</a></li>
									<li><a href="<?php base_url(); ?>login">Login</a></li>
									<li><a href="<?php base_url(); ?>register">Register</a></li>
									<li><a href="<?php base_url(); ?>faq">Faq</a></li>
									<li><a href="<?php base_url(); ?>campaign_detail">Campaign details</a></li>
                                </ul>
							</li>
							<li><a href="<?php base_url(); ?>about_us">About Us</a></li>
							<li><a href="<?php base_url(); ?>contact_us">Contact</a></li>
							<li>
								<a href="#">Account<i class="fa fa-caret-down" aria-hidden="true"></i></a>
								<ul class="sub-menu">
									<li><a href="<?php base_url(); ?>dashboard">Dashboard</a></li>
									<li><a href="<?php base_url(); ?>profile">Profile</a></li>
									<li><a href="<?php base_url(); ?>account_my_campaigns">My Campaigns</a></li>
									<li><a href="<?php base_url(); ?>account_pledges_received">Pledges Received</a></li>
									<li><a href="<?php base_url(); ?>account_backed_campaigns">Backed Campaigns</a></li>
									<li><a href="<?php base_url(); ?>account_rewards">Rewards</a></li>
									<li><a href="<?php base_url(); ?>account_payments">Payments</a></li>
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
						<a href="<?php base_url(); ?>login" class="btn-primary">Login</a>
						<a class="btn-primary" href="<?php base_url(); ?>register">Register</a>
					</div><!-- .login -->
				</div><!--. right-header -->
			</div><!-- .container -->
		</header><!-- .site-header -->
