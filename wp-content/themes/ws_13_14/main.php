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
				<option value=".KDS">KDS</option>
			</select>
		</div>
	</div>
	<div id="padding">
		<div id="isotope">
			<div id="isotope-inner">



			<?php
				$absolventen = new WP_Query( array( 'post_type'=>'absolvent' ) );
				while ( $absolventen->have_posts() ): $absolventen->the_post();
				$i += 1;
			?>
			



				<div class="absolvent relation-<?php echo str_replace(' ','-',strtolower(get_the_title()) ); ?> <?php	foreach(get_the_category() as $c){echo $c=$c->name;}; ?>" order="<?php echo $i; ?>" nachname="<?php echo types_render_field( 'lastname', array('raw'=>true) ) ?>">
					<span class="absolvent-title"><?php the_title(); ?></span>
					<img src="<?php echo types_render_field('graduate-preview', array('raw'=>true ) ); ?>" alt="<?php the_title(); ?>">
				</div>

				<div class="absolvent-full relation-<?php echo str_replace(' ','-',strtolower(get_the_title()) ); ?>">
					<div class="absolvent-close">&nbsp;</div>
					<img src="<?php echo types_render_field('graduate-image', array('raw'=>true) ) ?>"  class="hide-for-medium-down" alt="<?php the_title(); ?>">
					<img src="<?php echo types_render_field('graduate-image-mobile', array( 'raw'=>true )); ?>" alt="<?php the_title() ?>" class="hide-for-large-up">
					
					<div class="absolvent-navi row">
						<div id="absolvent-back" class="absolvent-button large-1 columns large-offset-1"><div id="back-arrow">&nbsp;</div>VORHERIGER</div>
						<div class="absolvent-button large-1 columns"><?php echo mb_strtoupper(get_the_title(), 'UTF-8'); ?></div>
						<div id="absolvent-next" class="absolvent-button large-1 columns pull-5">NÄCHSTER</div>
					</div>
					<div class="absolvent-info-outer row">
						<div class="absolvent-info-inner large-3 large-offset-1 columns">
							<div class="absolvent-name large-12 columns"><?php echo strtoupper(get_the_title()); ?></div>
							<div class="absolvent-work-title large-12 columns"><?php echo types_render_field('work-title', array('raw'=>true) ) ?></div>
							<div class="absolvent-work-subtitle large-12 columns"><?php echo mb_strtoupper(types_render_field('work-subtitle', array('raw'=>true) ), "UTF-8" ); ?></div>
							<div class="absolvent-work-description large-12 columns"><?php echo types_render_field('work-description', array('raw'=>true) ) ?></div>
						</div>
					</div>
				</div>
			



			<?php
				endwhile;
				wp_reset_query();
			?>		
			


			</div>
		</div>
	</div>
</div>