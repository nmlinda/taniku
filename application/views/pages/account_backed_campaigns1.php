<body>
	<div id="wrapper">
<main id="main" class="site-main">
	<div class="page-title background-page">
		<div class="container">
			<h1>Backed Campaigns</h1>
			<div class="breadcrumbs">
				<ul>
					<li><a href="<?php echo base_url(); ?>index">Home</a><span>/</span></li>
					<li>Backed Campaigns</li>
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
							<li><a href="dashboard">Dashboard</a></li>
							<li><a href="profile">Profile</a></li>
							<li><a href="account_my_campaigns">My Campaigns</a></li>
							<li class="active"><a href="account_backed_campaigns">Backed Campaigns</a></li>
							<li><a href="account_pledges_received">Pledges Received</a></li>
							<li><a href="account_rewards">Rewards</a></li>
							<li><a href="account_payments">Payments</a></li>
						</ul>
					</nav>
				</div>
				<div class="col-lg-9">
					<div class="account-content backed-campaigns account-table">
						<h3 class="account-title">Backed Campaigns</h3>
						<div class="account-main">
                            <div class="tablebar">
                                <form action="#" method="POST" id="searchForm" >
					  		<input type="text" value="" name="search" placeholder="Search...">
					    	<a href=""type="submit" value=""><i class="fa fa-search"></i></a>
					  	</form>
                            </div>
							<table>
								<thead>
									<tr>
										<th>Title</th>
										<th>Total</th>
										<th>Date</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><a href="campaign_detail1">Budidaya Sorgum</a></td>
										<td>$250 for 1 item</td>
										<td>21 Jul 2017 17:30</td>
										<td>PENDING</td>
									</tr>
									<tr>
                                        <td><a href="campaign_detail1">Budidaya Sorgum</a></td>
										<td>$250 for 2 item</td>
										<td>22 Jul 2017 15:20</td>
										<td>COMPLETED</td>
									</tr>
									<tr>
                                        <td><a href="campaign_detail1">Budidaya Sorgum</a></td>
										<td>$250 for 2 item</td>
										<td>25 Jul 2017 12:03</td>
										<td>CANCEL</td>
									</tr>
									<tr>
                                        <td><a href="campaign_detail1">Budidaya Sorgum</a></td>
										<td>$250 for 2 item</td>
										<td>26 Jul 2017 19:43</td>
										<td>COMPLETED</td>
									</tr>
                                </tbody>
                            </table>
                            
                            <div class="tableinfo">
                                <span>Showing 1 to 4 of 4 entries</span>
                                <div class="button">
                                    <a href="" class="btn-secondary"><</a>
                                    <a href="" class="btn-secondary">1</a>
                                    <a href="" class="btn-secondary">></a>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div><!-- .container -->
	</div><!-- .account-content -->
</main><!-- .site-main -->