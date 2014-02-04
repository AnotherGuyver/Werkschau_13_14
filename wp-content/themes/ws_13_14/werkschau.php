<div id="werkschau-section" class="section fullscreen collapsed">
	
		<?php 
		$werkschauslides = new WP_Query( array('post_type'=>'werkschau-slide') );
		if( $werkschauslides->have_posts() ):
			echo '<ul id="werkschau-slides"><li class="nav-placeholder">&nbsp;</li>';
			while( $werkschauslides->have_posts() ): $werkschauslides->the_post();
		?>
		
		<li id="<?php echo strtolower(str_replace(' ', '-', get_the_title() ) );?>" class="werkschau-slide fullscreen" style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>);">
			<div class="werkschau-slide-info-outer fullwidth">
				<div class="werkschau-slide-info-inner row">
					<div class="werkschau-slide-info-content large-offset-1 large-4 columns">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</li>
			
		<?php
			endwhile;
			echo '</ul>';
		endif;
		wp_reset_query();
		?>
	
</div>