jQuery(document).ready(function(){
	navigation = {
		navi: $('#navi-outer'),
		resize: function(){
			if( parseInt( $(window).width() ) < 1025 ){
				var height = (parseInt($(window).height())-44)/3;
				$('.main-nav-link').css({'height':height,'line-height':height+"px"});
			} else {
				$('.main-nav-link').css({'height':'auto','line-height':"80px"});
			};

			$('#sponsor').isotope('reLayout');
		},
		eventHandlers: function(){
			$('#link-anfahrt', '#link-contact').bind('click', function(){
				if($('#navi-main').hasClass('visible')){
					$('#navi-main').removeClass('visible');
				}
				
				if( $('#anfahrt-section').hasClass('collapsed') ){
					$('#anfahrt-section').removeClass('collapsed');
				} else {
					$('#anfahrt-section').addClass('collapsed');
				}
			});

			var iframe = $('#teaser-player')[0];
			var player = $f(iframe);

			$('#link-absolventen').bind('click',function(){
				player.api('pause');
				if( $('#teaser').hasClass('visible') ){
					$('#teaser').fadeOut('200',function(){
						$('#teaser').removeClass('visible');
					})
					
				}
			})

			$('#close-map').bind('click',function(){
				if( !$('#anfahrt-section').hasClass('collapsed') ){
					$('#anfahrt-section').addClass('collapsed');
				}
			});

			$('#link-werkschau').bind('click',function(){
		
				if($('#navi-main').hasClass('visible')){
					$('#navi-main').removeClass('visible');
				}
		
				if( $('#werkschau-section').hasClass('collapsed') ){
					$('#werkschau-section').removeClass('collapsed');
					$('#navi-main').addClass('hidden');
					$('#navi-side').removeClass('hidden');
				}
			});

			$('#link-back, #mobile-back').bind('click',function(){
				if( !$('#werkschau-section').hasClass('collapsed') ){
					$('#werkschau-section').addClass('collapsed');
					$('#navi-main').removeClass('hidden');
					$('#navi-side').addClass('hidden');
					$('#navi-side').removeClass('visible');
				}
			});

			$('#link-show-mobile-menu').bind('click',function(){
				if( parseInt( $(window).width() ) < 1025 ){
					if( $('#werkschau-section').hasClass('collapsed') ){
						if( $('#navi-main').hasClass('visible') ){
							$('#navi-main').removeClass('visible');
						} else {
							$('#navi-main').addClass('visible');
						}
					} else {
						if( $('#navi-side').hasClass('visible') ){
							$('#navi-side').removeClass('visible');
						} else {
							$('#navi-side').addClass('visible');
						}
					}
				}
				
			});

			$('.side-nav-link').bind('click',function(){
				if( $('#navi-side').hasClass('visible') ){
					$('#navi-side').removeClass('visible');
				}
			});

			$('#wrapper').ready(function(){
				$('#wrapper').removeClass('hidden').isotope('reLayout');
			})

			$(window).resize( this.resize );

			this.resize();
			
		}
	}

	navigation.eventHandlers();

	home = {
		isotopeContainer: $('#isotope-inner'),
		eventHandlers: function(){
			var that = this;
			$(window).resize(function(){
				that.calculatePadding();
			});

			$('.absolvent').bind('click', function(){
				$('+ .absolvent-full', this).addClass('visible').fadeIn('200');
			});

			var fadeOther = function(fade){
				$(fade).fadeOut('200').promise().done(function(){
					$(fade).removeClass('visible');
				});
			}

			$('.absolvent-full').each(function(i,e){
				var that = e;
				$('.absolvent-close', e).bind('click', function(){
					if($(that).hasClass('visible')){
						$(that).fadeOut('200',function(){ $(that).removeClass('visible'); });
					}
				});



				$('#absolvent-next', that).bind('click',function(){
					next = parseInt($(that).attr('order'))+1;
					selector = '.absolvent-full[order='+next+']';
					
					if( $(selector).length ){
						$(selector).addClass('visible').fadeIn('200').promise().done( fadeOther(that) );
					} else {
						$('.absolvent-full[order="1"]').addClass('visible').fadeIn('200').promise().done( fadeOther(that) );
					}			
				});

				$('#absolvent-back', that).bind('click',function(){
					next = parseInt($(that).attr('order'))-1;
					selector = '.absolvent-full[order='+next+']';
					
					if( $(selector).length ){
						$(selector).addClass('visible').fadeIn('200', fadeOther(that));
					} else {
						$('.absolvent-full').last().addClass('visible').fadeIn('200', fadeOther(that));
					}		
				});

				$('#absolvent-change-image', that).not('disabled').bind('click',function(){
					if( $('.work-picture', that).css('display') != 'none' ){
						$('.work-picture', that).fadeOut('200');
					} else {	
						$('.work-picture', that).fadeIn('200');
					}
				})
			});
		},
		calculatePadding: function(){
			var padding = ($(window).width()%150)/2;
			$('#padding').css({'padding': Math.floor(padding)});
			$('#options-outer').css({'margin-left':padding});
			console.log(padding);
		},
		createSelectBox: function(){
			$('#sorting').selectbox({
				onChange:function(val, inst){
					$('#isotope-inner').isotope({ sortBy : val });
				}
			});
			$('#filter').selectbox({
				onChange:function(val, inst){
					$('#isotope-inner').isotope({ filter : val });
				}
			});
		},
		init: function(){
			this.eventHandlers();
			this.calculatePadding();
			this.createSelectBox();
		}
	}

	home.init();
});