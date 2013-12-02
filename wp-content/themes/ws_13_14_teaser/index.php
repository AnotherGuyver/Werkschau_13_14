<?php get_header(); ?>
<div id="padding">
	<div id="squares">
		<div class="not-clickable werkschau-square square expand">
			<div class="info-inner">
				<div class="info-content">
					<div class="werkschau-title">WERKSCHAU<br />13/14</div><br />
					<div class="werkschau-date">7.2 bis 9.2</div>
				</div>
			</div>
		</div>
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
			<div class="info-inner">
				<div class="info-content">
					<div class="top-message">NOCH</div>
					<div class="countdown-number"></div>
					<div class="bottom-message">MAL<br />BLINZELN</div>
				</div>
			</div>
		</div>
		<div class="square not-clickable countdown minutes">
			<div class="info-inner">
				<div class="info-content">
					<div class="top-message">NOCH</div>
					<div class="countdown-number"></div>
					<div class="bottom-message">KAFFEES<br />TRINKEN</div>
				</div>
			</div>
		</div>
		<div class="square not-clickable countdown hours">
			<div class="info-inner">
				<div class="info-content">
					<div class="top-message">NOCH</div>
					<div class="countdown-number"></div>
					<div class="bottom-message">FILME<br />SCHAUEN</div>
				</div>
			</div>
		</div>
		<div class="square not-clickable countdown days">
			<div class="info-inner">
				<div class="info-content">
					<div class="top-message">NOCH</div>
					<div class="countdown-number"></div>
					<div class="bottom-message">MAL <br />FRÜHSTÜCKEN</div>
				</div>
			</div>
		</div>
		<div class="square not-clickable countdown weeks">
			<div class="info-inner">
				<div class="info-content">
					<div class="top-message">NOCH</div>
					<div class="countdown-number"></div>MAL AUF INS
					<div class="bottom-message">WOCHENENDE</div>
				</div>
			</div>
		</div>
		<div id="newsletter" class="square not-clickable expand">
			<div class="info-inner">
				<div class="info-content">
					<div class="top-message">
						BLEIB AUF DEM<br />LAUFENDEN
					</div>
					<div class="mail-field">
						<?php echo yksemeProcessSnippet('0a387e60d3'); ?>	
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

<?php get_footer(); ?>