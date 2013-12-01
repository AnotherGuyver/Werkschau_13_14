
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

</div>

<script>

jQuery('#squares').isotope({
	itemSelector 	: ".square",
	layoutMode	: 'perfectMasonry',
	perfectMasonry: {
	    layout: "vertical",      // Set layout as vertical/horizontal (default: vertical)
	    columnWidth: 50,        // Set/prefer specific column width (liquid layout tries to prefer said width)
	    rowHeight: 50,          // Set/prefer specific row height (liquid layout tries to prefer said height)
	    cornerStampSelector: '.corner',
	},
	resizesContainer: false,
	sortBy : 'random'
});

/*
var container = document.querySelector('#squares');
var pckry = new Packery( container, {
  // options
  itemSelector: '.square',
  gutter: 0,
  columnWidth: '.square',
  rowHeight: 200
});
*/
</script>
</body>
</html>