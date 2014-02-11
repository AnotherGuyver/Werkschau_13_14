	</div>

	<div id="footer" class="fullwidth">
		<div id="footer-inner" class="row">
			<div id="sponsor-padding" class="large-9">
				<ul id="sponsors"class="large-block-grid-5 small-block-grid-2">

					<?php 
						$sponsoren = new WP_Query( array('post_type'=>'sponsoren') );
						while ($sponsoren->have_posts()) : $sponsoren->the_post();?>
							<li class="sponsor"><a href="javascript:"><?php the_post_thumbnail();  ?></a><div class="sponsor-description"><?php the_content(); ?><?php if( types_render_field('sponsoren-url',array('raw'=>true)) ){ ?><a href="<?php echo types_render_field('sponsoren-url',array('raw'=>true)); ?>" class="sponsoren-link whitelink"><?php echo types_render_field('sponsoren-url',array('raw'=>true)) ?></a><?php }; ?></div></li>
						<?php endwhile;
					?>
				</ul>
			</div>

			<div id="footer-links" class="large-offset-7 small-offset-0 small-12 large-2">
				<ul class="footer-links-container row">
					<li class="large-2 large-offset-0 small-2 small-offset-5 columns">
						<a href="#" id="link-contact" class="footer-link whitelink">
							<div class="footer-link-content">KONTAKT</div>
						</a>
					</li>
					<li class="small-2 large-7 columns">
						<a href="#" class="footer-link whitelink">
							<div class="footer-link-content">IMPRESSUM</div>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	
</body>
</html>