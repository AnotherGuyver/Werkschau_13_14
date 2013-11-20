	<div id="cn-newsletter-btn" class="layer" data-depth="0">
		<a href="javascript:" id="show-newsletter-btn">BLEIB AUF DEM LAUFENDEN!</a>
	</div>
	<div id="cn-ol-newsletter" class="layer" data-depth="0.03">
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
	</div>
	<div class="layer logo" data-depth="0.01">
		<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="WERKSCHAU" id="logo">
	</div>

</div>
<script>
$('#squares').isotope({
	'itemSelector' 	: '.square',
	'layoutMode'	: 'fitRows',
	'resizesContainer': false
});
</script>
</body>
</html>