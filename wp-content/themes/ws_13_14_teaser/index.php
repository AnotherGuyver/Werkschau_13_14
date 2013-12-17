<?php get_header(); ?>
<div id="padding">
	<div id="squares">
		<div class="not-clickable werkschau-square square expand">
			<div class="info-inner">
				<div class="info-content">
					<div class="werkschau-title">WERKSCHAU<br />13/14</div><br />
					<div class="werkschau-date">7. - 9. FEBRUAR 14</div>
				</div>
			</div>
		</div>
		<div class="square not-clickable countdown seconds">
			<div class="info-inner">
				<div class="info-content">
					<div class="top-message">NOCH</div>
					<div class="countdown-number"></div>
					<div class="bottom-message">HERZSCHLÄGE</div>
				</div>
			</div>
		</div>
		<div class="square not-clickable countdown minutes">
			<div class="info-inner">
				<div class="info-content">
					<div class="top-message">NOCH</div>
					<div class="countdown-number"></div>
					<div class="bottom-message">MAL AUF'S<br />HANDY GUCKEN</div>
				</div>
			</div>
		</div>
		<div class="square not-clickable countdown hours">
			<div class="info-inner">
				<div class="info-content">
					<div class="top-message">NOCH</div>
					<div class="countdown-number"></div>
					<div class="bottom-message">TAGTRÄUME</div>
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
		<?php
		global $post;
		$my_query = getByType('achievement');
		if( $my_query->have_posts() ) {
			while ($my_query->have_posts()) : $my_query->the_post(); ?>
		  	<!-- TEMPLATE FOR TRIANGLE GOES HERE -->
		  	<?php 
		  		$video = types_render_field('video-vimeo',array( 'raw'=>'true' ));
		  		if($video){
		  			$video_class = 'video';
		  		} else {
		  			$video_class = '';
		  		}
		  	?>
				<div class="square  <?php echo custom_taxonomies_terms_links();?> <?php echo types_render_field("groesse",array('raw'=>true)) . ' ' . $video_class; ?>">
					<?php if ($video){ ?>
						<div class="play-button" video-link="<?php echo $video ?>"><img src="<?php echo $template_dir ?>/img/icons/play.svg"></div>
					
					<?php } else { ?>

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
					<?php } ?>
				</div>
		  	<!-- TEMPLATE FOR TRIANGLE ENDS HERE -->
		  					
		<?php
			endwhile; 	
		}
		?>
		

	</div>
</div>

<?php get_footer(); ?>