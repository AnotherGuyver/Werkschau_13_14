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

		jQuery.Isotope.prototype._getCenteredMasonryColumns = function() {

		    this.width = this.element.width();

		    var parentWidth = this.element.parent().width();

		    var colW = this.options.masonry && this.options.masonry.columnWidth || // i.e. options.masonry && options.masonry.columnWidth

		    this.$filteredAtoms.outerWidth(true) || // or use the size of the first item

		    parentWidth; // if there's no items, use size of container

		    var cols = Math.floor(parentWidth / colW);

		    cols = Math.max(cols, 1);

		    this.masonry.cols = cols; // i.e. this.masonry.cols = ....
		    this.masonry.columnWidth = colW; // i.e. this.masonry.columnWidth = ...
		};

		jQuery.Isotope.prototype._masonryReset = function() {

		    this.masonry = {}; // layout-specific props
		    this._getCenteredMasonryColumns(); // FIXME shouldn't have to call this again

		    var i = this.masonry.cols;

		    this.masonry.colYs = [];
		        while (i--) {
		        this.masonry.colYs.push(0);
		    }
		};

		jQuery.Isotope.prototype._masonryResizeChanged = function() {

		    var prevColCount = this.masonry.cols;

		    this._getCenteredMasonryColumns(); // get updated colCount
		    return (this.masonry.cols !== prevColCount);
		};

		jQuery.Isotope.prototype._masonryGetContainerSize = function() {

		    var unusedCols = 0,

		    i = this.masonry.cols;
		        while (--i) { // count unused columns
		        if (this.masonry.colYs[i] !== 0) {
		            break;
		        }
		        unusedCols++;
		    }

		    return {
		        height: Math.max.apply(Math, this.masonry.colYs),
		        width: (this.masonry.cols - unusedCols) * this.masonry.columnWidth // fit container to columns that have been used;
		    };
		};

jQuery('#squares').isotope({
	'itemSelector' 	: '.square',
	'layoutMode'	: 'masonry',
	'resizesContainer': false,
});
</script>
</body>
</html>