jQuery.noConflict();

var deadline = new Date(2014, 1, 7, 0, 0, 0, 0);


(function( $ ) {
	$(document).ready(function(){

		var video_container = $('#video-container');
		var video_content = $('#video-container .video-content')

		$(".square").not('.not-clickable').not('.video').each(function(i,e){
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
			

			/*var toggle = function(){
				$(this).toggleClass("expand");
			};

			$(this).hoverIntent({
				over	:	toggle,
				out		:	toggle,
				timeout	:	700
			});*/

			$(this).bind('click',function(){
				$(this).toggleClass('expand');
				$('.expand').not($(this)).removeClass('expand');
			});

			$(this).on('transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd', function(){
				$("#squares").isotope('reLayout');
				// console.log("re");
			})
		});

		$('.video').bind('click', function(){
			video_content.html('<iframe src="//player.vimeo.com/video/' + $('.play-button', this).attr('video-link') + '?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>')
			video_container.fadeIn();
		})		

		$('#close-video').bind('click',function(){
			$('#video-container').slideUp();
		})

		init();

		$('#cn-ol-newsletter').css({'display':'none'});
		$('#cn-newsletter-btn').css({
			'bottom':20,
			'height':30,
			'top':'auto',
		});

		var calculateDateFunction = function(){ calculateDate( deadline ) };
		
		//calculateDateFunction(date);
		var dateFunctionInterval = setInterval(calculateDateFunction, 1000);

		$(window).resize(function(){
			calculatePadding();
		})
	});

	function calculateDate(deadline){
		var today = new Date();
		var rest = deadline - today;

		var seconds 	= Math.floor( rest / ( 1000 ) );
		var minutes 	= Math.floor( rest / ( 1000*60 ) );
		var hours		= Math.floor( rest / ( 1000*60*60 ) );
		var days		= Math.floor( rest / ( 1000*60*60*24 ) );
		var weeks 		= Math.floor( rest / ( 1000*60*60*24*7 ) );

		// console.log("Sekunden:"+seconds+" Minuten:"+minutes+" Stunden:"+hours+" Tage:"+days+" Wochen:"+weeks);

		updateDate(".seconds", seconds);
		updateDate(".minutes", minutes);
		updateDate(".hours", hours);
		updateDate(".days", days);
		updateDate(".weeks", weeks);
	}

	function updateDate(selector, newDate){
		if( $(".countdown-number", selector).text() != newDate ){
			$(".countdown-number", selector).text(newDate);
			// console.log("updated");
		}
	}

	function calculatePadding(){
		console.log( ( $(window).width() % 100) )/ 2;
		var padding	= ( $(window).width() % 100 )/2;


		$('#padding').css({
			'padding' : Math.floor(padding)
		});

		$("#squares").isotope('reLayout');
	}

	function init(){
		calculatePadding();
		calculateDate(deadline);
		$('#squares').css({'overflow-x':'hidden', 'overflow-y':'auto'});
		$('#0-0a387e60d3-email').attr('placeholder','Deine Email');
	}
})( jQuery );