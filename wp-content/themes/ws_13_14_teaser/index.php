<?php get_header(); ?>
<div id="padding">
	<div id="squares">
		<?php
		global $post;
		$my_query = getByType('achievement');
		if( $my_query->have_posts() ) {
			while ($my_query->have_posts()) : $my_query->the_post(); ?>
		  	<!-- TEMPLATE FOR TRIANGLE GOES HERE -->
				<div class="square  <?php echo custom_taxonomies_terms_links();?> <?php echo types_render_field("groesse",array('raw'=>true)); ?>">
					<?php the_post_thumbnail('square-thumb'); ?>

					<div class="category">
						<div class="circle-wrapper">
							<div class="circle <?php echo custom_taxonomies_terms_links(); ?>">
								<?php echo custom_taxonomies_terms_links(); ?>	
							</div>
						</div>
					</div>
					<div class="message <?php echo custom_taxonomies_terms_links(); ?>">
						<?php echo strip_tags(get_the_title()); ?>
					</div>
				</div>
		  	<!-- TEMPLATE FOR TRIANGLE ENDS HERE -->
		  					
		<?php
			endwhile; 	
		}
		?>
		<div class="square not-clickable countdown seconds">
			<div class="countdown-inner">
				<div class="countdown-content">
					<div class="top-message">NOCH</div>
					<div class="countdown-number"></div>
					<div class="bottom-message">MAL<br />BLINZELN</div>
				</div>
			</div>
		</div>
		<div class="square not-clickable countdown minutes">
			<div class="countdown-inner">
				<div class="countdown-content">
					<div class="top-message">NOCH</div>
					<div class="countdown-number"></div>
					<div class="bottom-message">KAFFEES<br />TRINKEN</div>
				</div>
			</div>
		</div>
		<div class="square not-clickable countdown hours">
			<div class="countdown-inner">
				<div class="countdown-content">
					<div class="top-message">NOCH</div>
					<div class="countdown-number"></div>
					<div class="bottom-message">FILME<br />SCHAUEN</div>
				</div>
			</div>
		</div>
		<div class="square not-clickable countdown days">
			<div class="countdown-inner">
				<div class="countdown-content">
					<div class="top-message">NOCH</div>
					<div class="countdown-number"></div>
					<div class="bottom-message">KAFFEES<br />TRINKEN</div>
				</div>
			</div>
		</div>
		<div class="square not-clickable countdown weeks">
			<div class="countdown-inner">
				<div class="countdown-content">
					<div class="top-message">NOCH</div>
					<div class="countdown-number"></div>MAL AUF INS
					<div class="bottom-message">WOCHENENDE</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>