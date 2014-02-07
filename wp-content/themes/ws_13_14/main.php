<div id="main-section" class="section fullscreen">
	<div class="fullwidth nav-placeholder">
		&nbsp;
	</div>
	<div id="options-outer">
		<div id="sorting-inner">
			<select name="sorting" id="sorting">
				<option value="random">Zufall</option>
				<option value="lastname">Name</option>
				<option value="course">Studiengang</option>
			</select>
		</div>
		<div id="filter-inner">
			<select name="filter" id="filter">
				<option value="">Alle Studiengänge</option>
				<option value=".IA">IA</option>
				<option value=".IMS">IMS</option>
				<option value=".KD">KD</option>
				<option value=".DKS">DKS</option>
			</select>
		</div>
	</div>
	<div id="padding">
		<div id="isotope">
			<div id="isotope-inner">



			<?php
				$absolventen = new WP_Query( array( 'post_type'=>'absolvent','posts_per_page' => 100 ) );
				while ( $absolventen->have_posts() ): $absolventen->the_post();
				$i += 1;
			?>
			
				<?php 
					if( types_render_field('work-picture', array('raw'=>true) ) ){
						$disabled = '';
					} else {
						$disabled = 'disabled';
					}
				?>


				<div class="absolvent relation-<?php echo str_replace(' ','-',strtolower(get_the_title()) ); ?> <?php	foreach(get_the_category() as $c){echo $c=$c->name;}; ?>" order="<?php echo $i; ?>" nachname="<?php echo types_render_field( 'lastname', array('raw'=>true) ) ?>">
					<span class="absolvent-title"><?php the_title(); ?></span>
					<img src="<?php echo types_render_field('graduate-preview', array('raw'=>true ) ); ?>" alt="<?php the_title(); ?>">
				</div>

				<div class="absolvent-full relation-<?php echo str_replace(' ','-',strtolower(get_the_title()) ); ?>" order="<?php echo $i; ?>">
					<div class="absolvent-close">&nbsp;</div>
					<div class="graduate-image visible" style="background-image: url('<?php echo types_render_field('graduate-image', array('raw'=>true) ) ?>');">&nbsp;</div>
					<img class="graduate-image-mobile visible" src="<?php echo types_render_field('graduate-image-mobile', array('raw'=>true) ) ?>" alt="<?php echo get_the_title(); ?>">
					
					<div class="absolvent-navi row">
						<div id="absolvent-back" class="absolvent-button large-1 columns large-offset-1 small-offset-0"><div id="back-arrow">&nbsp;</div>VORHERIGER</div>
						<div id="absolvent-change-image" class="absolvent-button large-1 columns hide-for-medium-down <?php echo $disabled ?>"><div id="switch-picture-wrapper">ARBEITSBILD<div id="switch-picture">&nbsp;</div></div></div>
						<div id="absolvent-next" class="absolvent-button large-1 columns pull-5">NÄCHSTER<div id="next-arrow">&nbsp;</div></div>
					</div>
					<div class="absolvent-info-outer row">
						<div class="absolvent-info-inner large-4 large-offset-1 columns">
							<div class="absolvent-name large-12 columns"><?php echo get_the_title(); ?></div>
							<div class="absolvent-work-subtitle large-12 columns"><span class="absolvent-work-title"><?php echo types_render_field('work-title', array('raw'=>true) ) ?></span> <?php echo types_render_field('work-subtitle', array('raw'=>true) ); ?></div>
							<div class="absolvent-work-description large-12 columns"><?php echo types_render_field('work-description', array('raw'=>true) ) ?></div>
							<?php if ( $mail = types_render_field('email') ): ?>
							<div class="absolvent-mail large-12 columns">
								<div class="mail-icon"></div>
								<div class="mail-content"><?php echo $mail; ?></div>
							</div>
							<?php endif; ?>
							<?php if ( $web = types_render_field('website') ): ?>
							<div class="absolvent-web large-12 columns">
								<div class="web-icon"></div>
								<div class="web-content"><a href="<?php echo $web ?>" target="_blank"></a></div>
							</div>
							<?php endif; ?>
							<?php global $post; $tax = wp_get_post_terms($post->ID, 'betreuer', array("fields" => "names"));?>

							<div class="absolvent-betreuer large-12 columns">Betreuer: <?php foreach($tax as $t){ echo '<br />'.$t; } ?></div>
							
						</div>
					</div>

					<div class="work-picture" style="background-image: url('<?php echo types_render_field('work-picture', array('raw'=>true) ) ?>');">&nbsp;</div>
					<img src="<?php echo types_render_field('work-picture-mobile', array( 'raw'=>true )); ?>" alt="<?php the_title() ?>" class="work-picture-mobile visible">
				</div>
			



			<?php
				endwhile;
				wp_reset_query();
			?>		
			


			</div>
		</div>
	</div>
</div>