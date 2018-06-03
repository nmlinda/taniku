<body class="contact-us">
	<div id="wrapper">
<main id="main" class="site-main">
	<div class="page-title background-page">
		<div class="container">
			<h1>Say Hello!</h1>
			<div class="breadcrumbs">
				<ul>
					<li><a href="index.html">Home</a><span>/</span></li>
					<li>Contact Us</li>
				</ul>
			</div><!-- .breadcrumbs -->
		</div>
	</div><!-- .page-title -->
	<div class="page-content contact-content">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 main-content">
					<div class="entry-content">
						<div class="row">
							<div class="col-lg-8">
								<div class="form-contact">
									<h2>Drop US a line</h2>
									<form action="s" method="POST" id="contactForm" class="clearfix">
										<div class="clearfix">
							  				<div class="field align-left">
							  					<input type="text" value="" name="s" placeholder="Your Name" />
							  				</div>
							  				<div class="field align-right">
							  					<input type="text" value="" name="s" placeholder="Your Email" />
							  				</div>
						  				</div>
						  				<div class="field">
						  					<input type="text" value="" name="s" placeholder="Subject" />
						  				</div>
						  				<div class="field-textarea">
						  					<textarea rows="8" placeholder="Message"></textarea>
						  				</div>
									  	<button type="submit" value="Send Messager" class="btn-primary">Submit Message</button>
								  	</form>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="contact-info">
									<h3>Contact Infomation</h3>
									<ul>
										<li><i class="fa fa-map-marker" aria-hidden="true"></i>Fulham Rd, Fulham, London SW6 1HS, UK</li>
										<li><i class="fa fa-phone" aria-hidden="true"></i>(+1) 123.456.789</li>
										<li><i class="fa fa-mobile" aria-hidden="true"></i>(+1) 987.654.321</li>
										<li><i class="fa fa-envelope-o" aria-hidden="true"></i>sayhello@ideaboxwp.com</li>
									</ul>
									<div class="contact-desc"><p>Lorem Ipsum is simply dummy text of the printing & typesetting industry. Lorem Ipsum has been scrambled it to make type specimen book.</p></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- .container -->
	</div><!-- .page-content -->
	<div class="maps">
		<div id="map"></div>
	</div><!-- .maps -->
</main><!-- .site-main -->

  <script>
 	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-93841829-1', 'auto');
	  ga('send', 'pageview');
	</script>
	<!-- End Google Analytics -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
	<script type="text/javascript">
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 15,
                scrollwheel: false,
                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(51.477286, -0.201811), // New York

                // How you would like to style the map. 
                // This is where you would paste any style found on Snazzy Maps.
                styles: [
					    {
					        "featureType": "all",
					        "elementType": "geometry.fill",
					        "stylers": [
					            {
					                "weight": "2.00"
					            }
					        ]
					    },
					    {
					        "featureType": "all",
					        "elementType": "geometry.stroke",
					        "stylers": [
					            {
					                "color": "#9c9c9c"
					            }
					        ]
					    },
					    {
					        "featureType": "all",
					        "elementType": "labels.text",
					        "stylers": [
					            {
					                "visibility": "on"
					            }
					        ]
					    },
					    {
					        "featureType": "landscape",
					        "elementType": "all",
					        "stylers": [
					            {
					                "color": "#f2f2f2"
					            }
					        ]
					    },
					    {
					        "featureType": "landscape",
					        "elementType": "geometry.fill",
					        "stylers": [
					            {
					                "color": "#ffffff"
					            }
					        ]
					    },
					    {
					        "featureType": "landscape.man_made",
					        "elementType": "geometry.fill",
					        "stylers": [
					            {
					                "color": "#ffffff"
					            }
					        ]
					    },
					    {
					        "featureType": "poi",
					        "elementType": "all",
					        "stylers": [
					            {
					                "visibility": "off"
					            }
					        ]
					    },
					    {
					        "featureType": "road",
					        "elementType": "all",
					        "stylers": [
					            {
					                "saturation": -100
					            },
					            {
					                "lightness": 45
					            }
					        ]
					    },
					    {
					        "featureType": "road",
					        "elementType": "geometry.fill",
					        "stylers": [
					            {
					                "color": "#eeeeee"
					            }
					        ]
					    },
					    {
					        "featureType": "road",
					        "elementType": "labels.text.fill",
					        "stylers": [
					            {
					                "color": "#7b7b7b"
					            }
					        ]
					    },
					    {
					        "featureType": "road",
					        "elementType": "labels.text.stroke",
					        "stylers": [
					            {
					                "color": "#ffffff"
					            }
					        ]
					    },
					    {
					        "featureType": "road.highway",
					        "elementType": "all",
					        "stylers": [
					            {
					                "visibility": "simplified"
					            }
					        ]
					    },
					    {
					        "featureType": "road.arterial",
					        "elementType": "labels.icon",
					        "stylers": [
					            {
					                "visibility": "off"
					            }
					        ]
					    },
					    {
					        "featureType": "transit",
					        "elementType": "all",
					        "stylers": [
					            {
					                "visibility": "off"
					            }
					        ]
					    },
					    {
					        "featureType": "water",
					        "elementType": "all",
					        "stylers": [
					            {
					                "color": "#46bcec"
					            },
					            {
					                "visibility": "on"
					            }
					        ]
					    },
					    {
					        "featureType": "water",
					        "elementType": "geometry.fill",
					        "stylers": [
					            {
					                "color": "#c8d7d4"
					            }
					        ]
					    },
					    {
					        "featureType": "water",
					        "elementType": "labels.text.fill",
					        "stylers": [
					            {
					                "color": "#070707"
					            }
					        ]
					    },
					    {
					        "featureType": "water",
					        "elementType": "labels.text.stroke",
					        "stylers": [
					            {
					                "color": "#ffffff"
					            }
					        ]
					    }
					]
            };
            // Get the HTML DOM element that will contain your map 
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('map');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(18.689100, 105.691398),
                map: map,
                title: 'Snazzy!'
            });
        }
    </script>
