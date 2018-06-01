<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Taniku</title>

	<!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/responsive.css" />
    <link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.png" type="image/x-icon"/>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>
</head>

<body class="home">
	<div id="wrapper">
		<header id="header" class="site-header">
			<div class="container">
				<div class="site-brand">
					<a href="index.php"><img src="<?php echo base_url(); ?>assets/images/assets/logo2.png" alt=""></a>
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
									<li><a href="explore_layout_one.php">Explore Based on Places</a></li>	
								</ul>
							</li>
							<li>
								<a href="#">Start a Campaigns<i class="fa fa-caret-down" aria-hidden="true"></i></a>
								<ul class="sub-menu">
									<li><a href="create_a_campaign.php">Create a campaign</a></li>
									<li><a href="update_a_campaign.php">Update a campaign</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Pages<i class="fa fa-caret-down" aria-hidden="true"></i></a>
								<ul class="sub-menu">
									<li><a href="coming_soon.php">Coming Soon</a></li>
									
									<li><a href="404.php">404</a></li>
									<li><a href="login.php">Login</a></li>
									
									<li><a href="faq.php">Faq</a></li>
									<li><a href="campaign_detail.php">Campaign details</a></li>
								</ul>
							</li>
							<li><a href="about_us.php">About Us</a></li>
							<li><a href="contact_us.php">Contact</a></li>
							<li>
								<a href="#">Account<i class="fa fa-caret-down" aria-hidden="true"></i></a>
								<ul class="sub-menu">
									<li><a href="dashboard.php">Dashboard</a></li>
									<li><a href="profile.php">Profile</a></li>
									<li><a href="account_my_campaigns.php">My Campaigns</a></li>
									<li><a href="account_pledges_received.php">Pledges Received</a></li>
									<li><a href="account_backed_campaigns.php">Backed Campaigns</a></li>
									<li><a href="account_rewards.php">Rewards</a></li>
									<li><a href="account_payments.php">Payments</a></li>
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
						<a href="login.php" class="btn-primary">Login</a>
						<a class="btn-primary" href="register.php">Register</a>
					</div><!-- .login -->
				</div><!--. right-header -->
			</div><!-- .container -->
		</header><!-- .site-header -->
