<?php get_header(); ?>
<?php
global $post;
$my_query = getByType('achievement');
if( $my_query->have_posts() ) {
	while ($my_query->have_posts()) : $my_query->the_post(); ?>
  	<!-- TEMPLATE FOR TRIANGLE GOES HERE -->
  	<li class="layer" data-depth="<?php echo rand(0,100)/100 ?>">
		<div class="triangle <?php echo custom_taxonomies_terms_links();?> <?php echo types_render_field("groesse",array('raw'=>true)); ?>">
			<?php the_post_thumbnail('triangle-thumb'); ?>

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
	</li>
  	<!-- TEMPLATE FOR TRIANGLE ENDS HERE -->
  					
<?php
	endwhile; 	
}
?>

<?php get_footer(); ?>