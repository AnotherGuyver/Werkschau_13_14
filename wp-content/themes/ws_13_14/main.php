<div id="main-section" class="section fullscreen">
	<div class="fullwidth nav-placeholder">
		&nbsp;
	</div>
	<div id="isotope">
	<?php
		$absolventen = new WP_Query( array( 'post_type'=>'absolvent' ) );
		while ( $absolventen->have_posts() ): $absolventen->the_post();
	?>
		<div class="absolvent">
			<span class="absolvent-title"><?php the_title(); ?></span>
			<img src="<?php echo types_render_field('graduate-preview', array('raw'=>true ) ); ?>" alt="<?php the_title(); ?>">

			<div class="absolvent-full"></div>
		</div>
	<?php
		endwhile;
		wp_reset_query();
	?>		
	</div>
</div>