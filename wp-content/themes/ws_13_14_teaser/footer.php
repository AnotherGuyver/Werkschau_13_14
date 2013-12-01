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