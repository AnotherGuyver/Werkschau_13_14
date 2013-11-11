jQuery.noConflict();


(function( $ ) {
	$(document).ready(function(){
		$(".triangle").each(function(i,e){
			var triangle = e;
			
			if( i%2 == 0 ){
				$(this).addClass('up');
			} else {
				$(this).addClass('down');
			}

			var ww = $(window).width();
			var wh = $(window).height();
			var top = Math.round(150+( (wh-300)/10 )*Math.floor((Math.random()*10)+1) );
			var left = Math.round(150+( (ww-300)/15 )*Math.floor((Math.random()*15)+1) );

			$(this).css({
				'top'	:	top,
				'left'	: 	left,
			});

			//$(this).css({ 'top' : Math.floor((Math.random()*10)+1)*100, 'left' : Math.floor((Math.random()*15)+1)*100 })



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


			$(this).bind('mouseenter mouseleave', function(){
				if( parseInt($(this).css('left')) == left ){
					console.log( $(this).css('left') );
					$(this).css({
						'left': (left-offX),
						'top' : (top-offY),
					});
				} else {
					console.log( $(this).css('left') );
					$(this).css({
						'left'	: 	left,
						'top'	: 	top,
					});
				}
			});

			if( isBig ){
				$(this).bind("mouseenter mouseleave", function(){
					$(this).toggleClass('big').toggleClass('extended');
				})
			} else {
				$(this).bind("mouseenter mouseleave", function(){
					$(this).toggleClass('small').toggleClass('extended');
				})
			}


		});

		$('#cn-ol-newsletter').css({'display':'none'});
		$('#cn-newsletter-btn').css({
			'bottom':20,
			'height':30,
			'top':'auto',
		});


		$('#show-newsletter-btn').bind('click', function(){
			$('#cn-ol-newsletter').fadeIn();
			$('#show-newsletter-btn').fadeOut();
		})
		$('#close-newsletter-btn').bind('click', function(){
			$('#cn-ol-newsletter').fadeOut();
			$('#show-newsletter-btn').fadeIn();
		});

	});
})( jQuery );