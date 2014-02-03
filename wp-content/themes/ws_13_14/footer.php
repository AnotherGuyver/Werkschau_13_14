	</div>

	<div id="footer" class="fullwidth">
		<div id="footer-inner" class="row">
			<div id="sponsors" class="large-9">
				<?php 
					$sponsoren = new WP_Query( array('post_type'=>'sponsoren') );
					while ($sponsoren->have_posts()) : $sponsoren->the_post();
						the_post_thumbnail();
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
	</div>

<script>
$('#isotope-inner').isotope({
	itemSelector 	: ".absolvent",
	layoutMode	: 'perfectMasonry',
	perfectMasonry: {
	    layout: "vertical",      // Set layout as vertical/horizontal (default: vertical)
	    columnWidth: 200,        // Set/prefer specific column width (liquid layout tries to prefer said width)
	    rowHeight: 200,          // Set/prefer specific row height (liquid layout tries to prefer said height)
	    cornerStampSelector: '.corner',
	},
	resizesContainer: true,
	sortBy : 'random'
}).css({'overflow-y':'auto', 'overflow-x':'hidden', 'position':'relative'});
</script>	
</body>
</html>