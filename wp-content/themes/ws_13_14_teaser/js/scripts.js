jQuery.noConflict();


(function( $ ) {
	$(document).ready(function(){
		$(".square").each(function(i,e){
			var square = e;
/*
			var ww = $(window).width();
			var wh = $(window).height();
			var top = Math.round(150+( (wh-300)/10 )*Math.floor((Math.random()*10)+1) );
			var left = Math.round(150+( (ww-300)/15 )*Math.floor((Math.random()*15)+1) );

			$(this).css({
				'top'	:	top,
				'left'	: 	left,
			});

			//$(this).css({ 'top' : Math.floor((Math.random()*10)+1)*100, 'left' : Math.floor((Math.random()*15)+1)*100 })
*/


			var isBig = $(this).hasClass("big");
			var offX, offY;

			$(this).on('mouseenter mouseleave', function(){
				$(this).toggleClass("expand");
			})

			$(this).on('transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd', function(){
				$("#squares").isotope('reLayout');
				console.log("re");
			})




		});

		$('#cn-ol-newsletter').css({'display':'none'});
		$('#cn-newsletter-btn').css({
			'bottom':20,
			'height':30,
			'top':'auto',
		});


		

	});
})( jQuery );