<body>
	<div id="wrapper">
<main id="main" class="site-main">
	<div class="page-title background-page">
		<div class="container">
			<h1>Dashboard</h1>
			<div class="breadcrumbs">
				<ul>
					<li><a href="<?php echo base_url(); ?>index">Home</a><span>/</span></li>
					<li>Dashboard</li>
				</ul>
			</div><!-- .breadcrumbs -->
		</div>
	</div><!-- .page-title -->
	<div class="account-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<nav class="account-bar">
						<ul>
							<li class="active"><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
							<li><a href="<?php echo base_url(); ?>profile">Profile</a></li>
							<li><a href="<?php echo base_url(); ?>account_my_campaigns">My Campaigns</a></li>
							<li><a href="<?php echo base_url(); ?>account_backed_campaigns">Backed Campaigns</a></li>
							<li><a href="<?php echo base_url(); ?>account_pledges_received">Pledges Received</a></li>
							<li><a href="<?php echo base_url(); ?>account_rewards">Rewards</a></li>
							<li><a href="<?php echo base_url(); ?>account_payments">Payments</a></li>
						</ul>
					</nav>
				</div>
				<div class="col-lg-9">
					<div class="account-content dashboard">
						<h3 class="account-title">Dashboard</h3>
						<div class="account-main">
							<div class="author clearfix">
								<a class="author-avatar" href="#"><img src="<?php echo base_url(); ?>assets/images/placeholder/avatar.png" alt=""></a>
								<div class="author-content">
									<div class="author-title"><h3><a href="#">Henry Cavill</a></h3><a class="edit-profile" href="#">Edit Profile</a></div>
									<div class="author-info">
										<p>Henry@jaskapital.com</p>
										<p>Investani Member since July 2017</p>
									</div>
								</div>
							</div>
							<div class="dashboard-latest">
								<h3>My Latest Campaigns</h3>
								<ul>
									<li>
										<a href="<?php echo base_url(); ?>campaign_detail"><img src="<?php echo base_url(); ?>assets/images/placeholder/corn.png" alt=""></a>
										<div class="dashboard-latest-box">
											<div class="category"><a href="<?php echo base_url(); ?>index">Pertanian</a></div>
											<h4><a href="<?php echo base_url(); ?>campaign_detail">Budidaya Jagung Manis</a></h4>
										</div>
									</li>
									<li>
										<a href="<?php echo base_url(); ?>campaign_detail"><img src="<?php echo base_url(); ?>assets/images/placeholder/sutera.png" alt=""></a>
										<div class="dashboard-latest-box">
											<div class="category"><a href="<?php echo base_url(); ?>index">Tenun</a></div>
											<h4><a href="<?php echo base_url(); ?>campaign_detail">Tenun Sutera</a></h4>
										</div>
									</li>
								</ul>
							</div>
							<div class="payment-info">
								<p>Payment Info:</p>
								<p>Paypal Receiver Email: <a href="#">payment@jaskapital.com</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- .container -->
	</div><!-- .account-content -->
</main><!-- .site-main -->