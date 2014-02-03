<div id="werkschau-section" class="section fullscreen collapsed">
	
		<?php 
		$werkschauslides = new WP_Query( array('post_type'=>'werkschau-slide') );
		if( $werkschauslides->have_posts() ):
			echo '<ul id="werkschau-slides"><li class="nav-placeholder">&nbsp;</li>';
			while( $werkschauslides->have_posts() ): $werkschauslides->the_post();
		?>
		
		<li id="<?php echo strtolower(str_replace(' ', '-', get_the_title() ) );?>" class="werkschau-slide fullscreen">
			<img class="werkschau-slide-image" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="">
			<div class="werkschau-slide-info-outer">
				asd
			</div>
		</li>
			
		<?php
			endwhile;
			echo '</ul>';
		endif;
		wp_reset_query();
		?>
	
</div>