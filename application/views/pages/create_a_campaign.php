<body class="campaign-detail">
	<div id="wrapper">
<main id="main" class="site-main">
	<div class="page-title background-campaign">
		<div class="container">
			<h1>Start a campaign</h1>
			<div class="breadcrumbs">
				<ul>
					<li><a href="index.html">Home</a><span>/</span></li>
					<li>Start a campaign</li>
				</ul>
			</div><!-- .breadcrumbs -->
		</div>
	</div><!-- .page-title -->
	<div class="campaign-form">
		<div class="container">
			<form action="#">
				<legend>Start a campaign</legend>
				<div class="field">
					<label for="money">How much money would you like to raise?</label>
					<div class="field-money">
  						<input type="text" value="" name="money" placeholder="$1500" />
  						<div class="select">
	  						<select name="" id="">
	  							<option value="">USD</option>
	  							<option value="">EUR</option>
	  							<option value="">GBP</option>
	  							<option value="">KRW</option>
	  						</select>
  						</div>
  					</div>
  					<span>Minimum $200.</span>
  				</div>
  				<div class="field">
					<label for="title">What is the title of your campaign?</label>
  					<input type="text" value="" name="title" placeholder="My campaign title" />
  					<span>50 characters maximum.</span>
  				</div>
  				<input type="button" onclick="window.location.href='update_a_campaign.html'" value="Create a campaign" class="btn-primary" />
			</form>
		</div>
	</div><!-- .campaign-form -->
</main><!-- .site-main -->