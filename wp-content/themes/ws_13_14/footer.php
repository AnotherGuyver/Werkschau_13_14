	</div>

	<div id="footer" class="fullwidth">
		<div id="footer-inner" class="row">
			<div id="sponsor-padding" class="large-9">
				<div id="sponsors">

					<?php 
						$sponsoren = new WP_Query( array('post_type'=>'sponsoren') );
						while ($sponsoren->have_posts()) : $sponsoren->the_post();?>
							<div class="sponsor"><?php the_post_thumbnail();  ?></div>
						<?php endwhile;
					?>
				</div>
			</div>
			<script>
				$('#sponsors').isotope({
					itemSelector :'.sponsor',
					layoutMode	: 'fitColumns',
					sortBy : 'random',
					resizesContainer: true,
				});
			</script>

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

	
</body>
</html>