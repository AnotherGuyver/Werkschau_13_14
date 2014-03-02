<?php get_header(); ?>
<?php include('anfahrt.php'); ?>
<?php include ('main.php'); ?>
<?php include('werkschau.php'); ?>
<?php include('impressum.php') ?>

<script>
$(document).ready(function(){
	$('#wrapper').ready(function(){
	$('#isotope-inner').isotope({
			itemSelector 	: ".absolvent",
			layoutMode	: 'perfectMasonry',
			perfectMasonry: {
			    layout: "vertical",      // Set layout as vertical/horizontal (default: vertical)
			    columnWidth: 150,        // Set/prefer specific column width (liquid layout tries to prefer said width)
			    rowHeight: 150,          // Set/prefer specific row height (liquid layout tries to prefer said height)
			    cornerStampSelector: '.corner',
			},
			resizesContainer: true,
			sortBy : 'random',
			getSortData: {
				lastname: function($elem){
					return $elem.attr('nachname');
				},
				course: function($elem){
					return $elem.attr('studiengang');
				}
			}
		}).css({'overflow-y':'auto', 'overflow-x':'hidden', 'position':'relative'});
		
	});
	
});
</script>

<?php get_footer(); ?>