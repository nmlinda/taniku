<body class="campaign-detail">
	<div id="wrapper">
<main id="main" class="site-main">
			<div class="page-title background-campaign">
				<div class="container">
					<h1>Update a campaign</h1>
					<div class="breadcrumbs">
						<ul>
							<li><a href="<?php base_url(); ?>index">Home</a><span>/</span></li>
							<li>Start a campaign</li>
						</ul>
					</div><!-- .breadcrumbs -->
				</div>
			</div><!-- .page-title -->
			<div class="campaign-form form-update">
				<div class="container">
					<form action="#">
						<legend>Start a campaign</legend>
						<div class="field">
							<label for="title">Campaign Title *</label>
							<span class="label-desc">What is the title of your campaign?</span>
		  					<input type="text" value="" name="title" placeholder="The Oreous Pillow" />
		  				</div>
		  				<div class="field">
							<label for="">Campaign Description *</label>
							<span class="label-desc">Provide a short description that best describes your campaign to your audience.</span>
		  					<textarea rows="4" placeholder="Enter a few tagline"></textarea>
		  				</div>
		  				<div class="field">
							<label for="">Campaign Story *</label>
							<span class="label-desc">Introduce yourself,  your campaign and why it’s important to you.</span>
		  					<textarea rows="4" placeholder="Enter a few tagline"></textarea>
		  				</div>
		  				<div class="field">
							<label for="">Campaign Image *</label>
							<span class="label-desc">Upload a square image that represents your campaign. 570 x 350 recommended resolution.</span>
							<div class="list-upload">
								<div class="file-upload">
									<div class="upload-bg">
									 	<div id="myfileupload">
									   		<input type="file" id="uploadfile" name="ImageUpload" onchange="readURL(this);" />	  
									 	</div>
									 	<div id="thumbbox">
									 		<img height="100" width="100" alt="Thumb image" id="thumbimage" style="display: none" />
									  		<a class="removeimg" href="javascript:" ></a>
									  	</div>
									 	<div id="boxchoice">
									  		<a href="javascript:" class="choicefile"><i class="fa fa-cloud-upload" aria-hidden="true"></i> Upload Image</a>
									  		<p style="clear:both"></p>
									 	</div>
									  	<label class="filename"></label>
			  						</div>
			  					</div>
			  					<div class="file-upload">
			  						<div class="upload-bg">
				  						<div id="myfileupload1">
									   		<input type="file" id="uploadfile1" name="ImageUpload" onchange="readURL1(this);" />	  
									 	</div>
									 	<div id="thumbbox1">
									 		<img height="100" width="100" alt="Thumb image" id="thumbimage1" style="display: none" />
									  		<a class="removeimg1" href="javascript:" ></a>
									  	</div>
									 	<div id="boxchoice1">
									  		<a href="javascript:" class="choicefile1"><i class="fa fa-cloud-upload" aria-hidden="true"></i> Upload Image</a>
									  		<p style="clear:both"></p>
									 	</div>
									  	<label class="filename1"></label>
				  					</div>
			  					</div>
			  					<div class="file-upload">
			  						<div class="upload-bg">
				  						<div id="myfileupload2">
									   		<input type="file" id="uploadfile2" name="ImageUpload" onchange="readURL2(this);" />	  
									 	</div>
									 	<div id="thumbbox2">
									 		<img height="100" width="100" alt="Thumb image" id="thumbimage2" style="display: none" />
									  		<a class="removeimg2" href="javascript:" ></a>
									  	</div>
									 	<div id="boxchoice2">
									  		<a href="javascript:" class="choicefile2"><i class="fa fa-cloud-upload" aria-hidden="true"></i> Upload Image</a>
									  		<p style="clear:both"></p>
									 	</div>
									  	<label class="filename2"></label>
			  						</div>
			  					</div>
		  					</div>
		  				</div>
		  				<div class="field clearfix">
		  					<label for="">Campaign Location *</label>
							<span class="label-desc">Choose the location where you are running the campaign.</span>
			  				<div class="field align-left">
			  					<input type="text" value="" name="" placeholder="City" />
			  				</div>
			  				<div class="field align-right">
			  					<div class="field-select">
									<select name="" id="">
										<option value="">United States</option>
										<option value="">France</option>
										<option value="">Germany</option>
									</select>
								</div>
			  				</div>
						</div>
						<div class="field">
							<label for="">Campaign Category *</label>
							<span class="label-desc">To help backers find your campaign, select a category that best represents your project.</span>
							<div class="field-select">
								<select name="" id="">
									<option value="">Select a Category</option>
									<option value="">Crafts</option>
									<option value="">Book</option>
									<option value="">Perfomances</option>
								</select>
							</div>
		  				</div>
		  				<div class="field">
							<label for="title">Tags *</label>
							<span class="label-desc">Enter up to five keywords that best describe your campaign.</span>
		  					<input type="text" value="" name="title" placeholder="Enter a few tags for your campaign" />
		  				</div>
		  				<div class="field">
							<label for="title">Campaign Duration *</label>
							<span class="label-desc">You can run a campaign for any number of days, with a 60 day duration maximum.</span>
		  					<input type="text" value="" name="title" placeholder="60 days" />
		  				</div>
		  				<button type="submit" value="Save & Launch" class="btn-primary">Save &amp; Launch</button>
					</form>
				</div>
			</div><!-- .campaign-form -->
		</main><!-- .site-main -->
