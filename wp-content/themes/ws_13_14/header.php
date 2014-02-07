<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Werkschau SS13/14</title>
	<?php wp_head(); ?>
</head>
<body>
	<div id="navi-outer" class="fullwidth">
		<div id="navi-inner"><div id="link-show-mobile-menu" class="navi-link whitelink  hide-for-medium-up"><div class="link-content">&nbsp;</div></div>
			<ul id="navi-main" class="row">
				<li class="top-margin navi-element main-nav-link large-1 small-9 columns"><a id="link-absolventen" href="javascript:" class="navi-link whitelink">
						<div class="link-content">ABSOLVENTEN</div>
					</a>
				</li>
				<li class="navi-element main-nav-link large-1 small-9 columns"><a id="link-anfahrt" href="javascript:" class="navi-link whitelink">
						<div class="link-content">ANFAHRT</div>
					</a>
				</li>
				<li class="navi-element main-nav-link large-1 small-9 columns"><a  id="link-werkschau" href="javascript:" class="navi-link whitelink">
						<div class="link-content">WERKSCHAU</div>
					</a>
				</li>
				<li class="navi-element large-6 columns hide-for-medium-down">
					&nbsp;
				</li>

				
				
			</ul>
			<ul id="navi-side" class="row hidden"><div id="mobile-back" class="hide-for-medium-up"><img src="<?php echo get_template_directory_uri() ?>/img/backb.png" alt=""></div>
				<li class="navi-element hide-for-small side-nav-link large-1 columns">
					<a href="#" id="link-back" class="navi-link whitelink">
						<div class="link-content">ZUR&Uuml;CK</div>
					</a>
				</li>

				<?php $werkschauslides = new WP_Query( array('post_type'=>'werkschau-slide') ); ?>
				<?php while( $werkschauslides->have_posts() ): $werkschauslides->the_post(); ?>
				<?php
				$i += 1;
				?>
				<li class="navi-element side-nav-link large-1 columns <?php if($i==1){echo 'top-margin';} ?>">
					<a href="#<?php echo strtolower(str_replace(' ', '-', get_the_title() ) ); ?>" id="link-<?php echo the_title() ?>" class="navi-link whitelink">
						<div class="link-content"><?php echo strtoupper(get_the_title()); ?></div>
					</a>
				</li>
				<?php endwhile	; ?>
				<?php wp_reset_query(); ?>
				<li class="side-nav-placeholder hide-for-small large-<?php echo (8-$i) ?> columns">
					&nbsp;
				</li>
		</div>
	</div>
	<div id="wrapper">