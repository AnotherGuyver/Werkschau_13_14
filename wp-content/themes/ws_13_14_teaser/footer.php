</ul>
</div>

<style>
.triangle.up.small {
	clip-path: url(#clip-triangle-small-up);
}

.triangle.up.big {
	clip-path: url(#clip-triangle-big-up);
}

.triangle.up.extended {
	clip-path: url(#clip-triangle-extended-up);
}

.triangle.down.small {
	clip-path: url(#clip-triangle-small-down);
}

.triangle.down.big {
	clip-path: url(#clip-triangle-big-down);
}

.triangle.down.extended {
	clip-path: url(#clip-triangle-extended-down);
}
</style>
<svg id="svg-defs">
	<defs>	
		<clipPath id="clip-triangle-small-up">
			<polygon points="0,45 25,0 50,45 "/>
		</clipPath>
		<clipPath id="clip-triangle-big-up">
			<polygon points="0,90 50,0 100,90 "/>		
		</clipPath>
		<clipPath id="clip-triangle-extended-up">
			<polygon points="0,180 100,0 200,180 "/>
		</clipPath>
		<clipPath id="clip-triangle-small-down">
			<polygon points="50,0 25,45 0,0 "/>
		</clipPath>
		<clipPath id="clip-triangle-big-down">
			<polygon points="100,0 50,90 0,0 "/>
		</clipPath>
		<clipPath id="clip-triangle-extended-down">
			<polygon points="200,0 100,180 0,0 "/>
		</clipPath>

	</defs>
</svg>
<script src="<?php echo get_template_directory_uri() . '/js/lib/jquery.parallax.min.js' ?>"></script>
<script>
	$('#scene').parallax({
		'calibrateX': true,
		'calibrateY': true,
		'limitX' 	: false,
		'limitY'	: false,
		'scalarX'	: 10,
		'scalarY'	: 10,
	});
</script>

</body>
</html>