	<li id="cn-newsletter-btn" class="layer" data-depth="0">
		<a href="javascript:" id="show-newsletter-btn">BLEIB AUF DEM LAUFENDEN!</a>
	</li>
	<li id="cn-ol-newsletter" class="layer" data-depth="0.03">
		<div id="in-ol-newsletter">
			<div id="in-cn-newsletter">
				<a href="javascript:" id="close-nesletter-btn"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/close.svg" alt="" id="close-newsletter-btn"></a>
				<div id="newsletter-title">NEWSLETTER ANMELDUNG</div>
				<div id="newsletter-text">
					Hier erfährst du alle Neuigkeiten zur Werkschau! Von unseren neuesten Fortschritten bis zu den aktuellen Terminen. Deine Daten werden nicht an dritte weitergegeben - versprochen ;)
				</div>
				<?php echo yksemeProcessSnippet('0a387e60d3'); ?>	
			</div>
		</div>
	</li>
	<li class="layer logo" data-depth="0.01">
		<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="WERKSCHAU" id="logo">
	</li>

	</ul>
</div>
<style>
.triangle.up.small {
	clip-path: url(#clip-triangle-small-up);
}

.triangle.up.big {
	clip-path: url(#clip-triangle-big-up);
}

.triangle.up.extended {
	clip-path: url(#clip-triangle-extended-up);
}

.triangle.down.small {
	clip-path: url(#clip-triangle-small-down);
}

.triangle.down.big {
	clip-path: url(#clip-triangle-big-down);
}

.triangle.down.extended {
	clip-path: url(#clip-triangle-extended-down);
}
</style>
<svg id="svg-defs">
	<defs>	
		<clipPath id="clip-triangle-small-up">
			<polygon points="0,45 25,0 50,45 "/>
		</clipPath>
		<clipPath id="clip-triangle-big-up">
			<polygon points="0,90 50,0 100,90 "/>		
		</clipPath>
		<clipPath id="clip-triangle-extended-up">
			<polygon points="0,180 100,0 200,180 "/>
		</clipPath>
		<clipPath id="clip-triangle-small-down">
			<polygon points="50,0 25,45 0,0 "/>
		</clipPath>
		<clipPath id="clip-triangle-big-down">
			<polygon points="100,0 50,90 0,0 "/>
		</clipPath>
		<clipPath id="clip-triangle-extended-down">
			<polygon points="200,0 100,180 0,0 "/>
		</clipPath>

	</defs>
</svg>
<script src="<?php echo get_template_directory_uri() . '/js/lib/jquery.parallax.min.js' ?>"></script>
<script>
( function( $ ){
	$('#scene').parallax({
		'calibrateX': true,
		'calibrateY': true,
		'limitX' 	: false,
		'limitY'	: false,
		'scalarX'	: 10,
		'scalarY'	: 10,
	});
})( jQuery );
</script>

</body>
</html>