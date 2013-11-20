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

			if(!isBig){
				// small
				offX = 75;
				offY = 67;
				$(this).parent().css({
					'width':100,
					'height':90
				});
			} else {
				offX = 50;
				offY = 45;
				$(this).parent().css({
					'width':50,
					'height':45
				});
			}


			$(this).on('mouseenter mouseleave', function(){
				$('#squares').isotope('reLayout');

				$(this).toggleClass("expand");

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