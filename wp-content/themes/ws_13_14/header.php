<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Werkschau SS13/14</title>
	<?php wp_head(); ?>
</head>
<body>
	<div id="navi-outer" class="fullwidth">
		<div id="navi-inner">
			<ul id="navi-main" class="row">
				<li class="navi-element main-nav-link large-1 columns"><a id="link-absolventen" href="javascript:" class="navi-link whitelink">
						<div class="link-content">ABSOLVENTEN</div>
					</a>
				</li>
				<li class="navi-element main-nav-link large-1 columns"><a id="link-anfahrt" href="javascript:" class="navi-link whitelink">
						<div class="link-content">ANFAHRT</div>
					</a>
				</li>
				<li class="navi-element main-nav-link large-1 columns"><a  id="link-werkschau" href="javascript:" class="navi-link whitelink">
						<div class="link-content">WERKSCHAU</div>
					</a>
				</li>
				<li class="navi-element large-6 columns">
					&nbsp;
				</li>
			</ul>
			<ul id="navi-side" class="row hidden">
				<li class="navi-element side-nav-link large-1 columns">
					<a href="#" id="link-back" class="navi-link whitelink">
						<div class="link-content">ZUR&Uuml;CK</div>
					</a>
				</li>

				<?php $werkschauslides = new WP_Query( array('post_type'=>'werkschau-slide') ); ?>
				<?php while( $werkschauslides->have_posts() ): $werkschauslides->the_post(); ?>
				<?php
				$i += 1;
				if( $i == 1 ){
					$firstclass = "large-offset-".(7-count($werkschauslides));
				} else {
					$firstclass = "";
				}
				?>
				<li class="navi-element side-nav-link large-1 columns <?php echo $firstclass; ?>">
					<a href="#<?php echo strtolower(str_replace(' ', '-', get_the_title() ) ); ?>" id="link-<?php echo the_title() ?>" class="navi-link whitelink">
						<div class="link-content"><?php echo strtoupper(get_the_title()); ?></div>
					</a>
				</li>
				<?php endwhile	; ?>
				<?php wp_reset_query(); ?>
		</div>
	</div>
	<div id="wrapper">