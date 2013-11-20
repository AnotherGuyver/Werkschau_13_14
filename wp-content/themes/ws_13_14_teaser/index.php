<?php get_header(); ?>
<div id="squares">
	<?php
	global $post;
	$my_query = getByType('achievement');
	if( $my_query->have_posts() ) {
		while ($my_query->have_posts()) : $my_query->the_post(); ?>
	  	<!-- TEMPLATE FOR TRIANGLE GOES HERE -->
			<div class="square <?php echo custom_taxonomies_terms_links();?> <?php echo types_render_field("groesse",array('raw'=>true)); ?>">
				<?php the_post_thumbnail('square-thumb'); ?>

				<div class="category">
					<div class="circle-wrapper">
						<div class="circle <?php echo custom_taxonomies_terms_links(); ?>">
							<?php echo custom_taxonomies_terms_links(); ?>	
						</div>
					</div>
				</div>
				<div class="message <?php echo custom_taxonomies_terms_links(); ?>">
					<?php echo strip_tags(get_the_content()); ?>
				</div>
			</div>
	  	<!-- TEMPLATE FOR TRIANGLE ENDS HERE -->
	  					
	<?php
		endwhile; 	
	}
	?>
</div>

<?php get_footer(); ?>