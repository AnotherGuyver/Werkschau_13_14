<?php get_header(); ?>
<li id="anfahrt-section" class="section fullscreen">
	<div id="anfahrt-info-outer">
		<div id="anfahrt-info-inner">
			<div id="anfahrt-info-content">
				<p>
				Hochschule Augsburg<br />
				Fakultät für<br />
				Gestaltung<br />
				</p>
				<p>
				Friedberger Straße 2<br />
				(Über Schülestraße)<br />
				86161 Augsburg<br />
				</p>
				<p>
				Tel: +49 (0)821 5586-3401<br />
				EMAIL : werkschau@hs-augsburg.de<br />
				</p>
				<p>
				Haltestelle – Fachhochschule<br />
				Linie 6, 32, 33, 35, 66, 93<br />
				</p>
			</div>
		</div>
	</div>
	<script type="text/javascript" 
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhEUtEAOUSlf4mlbFtaNvCUT-qAV00v-w&sensor=true">
	</script>
	<script type="text/javascript">
   function initialize() {
   	var myLatlng = new google.maps.LatLng(48.3586518,10.906289);
   	var mapOptions = {
      	center: myLatlng,
      	zoom: 15,
      	disableDefaultUI: true,
    	};

    	var styles = [
		  {
		    "stylers": [
		      { "saturation": -100 }
		    ]
		  }
		];

    	var styledMap = new google.maps.StyledMapType(styles, {name: "Styled Map"});

     	var map = new google.maps.Map(document.getElementById("map"), mapOptions);

     	map.mapTypes.set('map_style', styledMap);
		map.setMapTypeId('map_style');

		var marker = new google.maps.Marker({
	      position: myLatlng,
	      map: map,
	      title: 'Hello World!',
	      icon: '<?php echo get_template_directory_uri() ?>/img/flash.png'
	  });
   }
   google.maps.event.addDomListener(window, 'load', initialize);
   </script>
	<div id="map" />
</li>
<li id="main-section" class="section fullscreen">ss</li>	
<li id="werkschau-section" class="section fullscreen">ss</li>
<?php get_footer(); ?>