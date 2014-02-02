<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>sds</title>
	<?php wp_head(); ?>
</head>
<body>
	<div id="navi-outer" class="fullwidth">
		<div id="navi-inner">
			<ul id="navi-main" class="large-block-grid-9">
				<li class="navi-element"><a href="" class="navi-link whitelink">
						<div class="link-content">ABSOLVENTEN</div>
					</a></li>
				<li class="navi-element"><a href="" class="navi-link whitelink">
						<div class="link-content">ANFAHRT</div>
					</a></li>
				<li class="navi-element"><a href="" class="navi-link whitelink">
						<div class="link-content">WERKSCHAU</div>
					</a></li>
			</ul>
		</div>
	</div>
	<ul id="wrapper">
		<li id="anfahrt-section" class="section fullscreen">
			<div id="anfahrt-info-outer">
				<div id="anfahrt-info-inner">
					<div id="anfahrt-info-content">
						ss
					</div>
				</div>
			</div>
			<script type="text/javascript" 
				src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhEUtEAOUSlf4mlbFtaNvCUT-qAV00v-w&sensor=true">
	   	</script>
	   	<script type="text/javascript">
	      function initialize() {
	      	var mapOptions = {
	         	center: new google.maps.LatLng(-34.397, 150.644),
	         	zoom: 8
	       	};
	        	var map = new google.maps.Map(document.getElementById("map"), mapOptions);
		   }
		   google.maps.event.addDomListener(window, 'load', initialize);
		   </script>
	   	<div id="map" />
		</li>
		<li id="main-section" class="section fullscreen">ss</li>	
		<li id="werkschau-section" class="section fullscreen">ss</li>
	
		<li id="footer" class="fullwidth">
			<div id="footer-inner" class="row">
				<div id="sponsors" class="large-9">
					<?php 
						$sponsoren = new WP_Query( array('post_type'=>'sponsoren') );
						while ($sponsoren->have_posts()) : $sponsoren->the_post();
							echo '<a>sds</a>';
						endwhile;
					?>
				</div>
				<div id="footer-links" class="push-8 large-1">
					<ul class="footer-links-container large-block-grid-2">
						<li>
							<a href="" class="footer-link whitelink">
								<div class="footer-link-content">KONTAKT</div>
							</a>
						</li>
						<li>
							<a href="" class="footer-link whitelink">
								<div class="footer-link-content">IMPRESSUM</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</li>
	</ul>
</body>
</html>