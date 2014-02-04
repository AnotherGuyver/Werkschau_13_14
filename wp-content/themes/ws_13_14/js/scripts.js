jQuery(document).ready(function(){
	navigation = {
		navi: $('#navi-outer'),
		eventHandlers: function(){
			$('#link-anfahrt').bind('click', function(){
				
				if( $('#anfahrt-section').hasClass('collapsed') ){
					$('#anfahrt-section').removeClass('collapsed');
				} else {
					$('#anfahrt-section').addClass('collapsed');
				}
			});

			$('#close-map').bind('click',function(){
				if( !$('#anfahrt-section').hasClass('collapsed') ){
					$('#anfahrt-section').addClass('collapsed');
				}
			});

			$('#link-werkschau').bind('click',function(){
				if( $('#werkschau-section').hasClass('collapsed') ){
					$('#werkschau-section').removeClass('collapsed');
					$('#navi-main').addClass('hidden');
					$('#navi-side').removeClass('hidden');
				}
			});

			$('#link-back').bind('click',function(){
				if( !$('#werkschau-section').hasClass('collapsed') ){
					$('#werkschau-section').addClass('collapsed');
					$('#navi-main').removeClass('hidden');
					$('#navi-side').addClass('hidden');
				}
			});
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
				$('+ .absolvent-full', this).addClass('visible').fadeIn();
			});

			$('.absolvent-full').each(function(i,e){
				var that = e;
				$('.absolvent-close', e).bind('click', function(){
					if($(that).hasClass('visible')){
						$(that).fadeOut('200',function(){ $(that).removeClass('visible'); });
					}
				});
				$('#absolvent-next', that).bind('click',function(){
					$(that).fadeOut('200',function(){
						$(that).removeClass('visible');
						next = parseInt($(that).attr('order'))+1;
						selector = '.absolvent-full[order='+next+']';
						if( $(selector).length ){
							$(selector).addClass('visible').fadeIn('200');
						} else {
							$('.absolvent-full[order="1"]').addClass('visible').fadeIn('200');
						}
					})
				});
				$('#absolvent-back', that).bind('click',function(){
					$(that).fadeOut('200',function(){
						$(that).removeClass('visible');
						next = parseInt($(that).attr('order'))-1;
						selector = '.absolvent-full[order='+next+']';
						if( $(selector).length ){
							$(selector).addClass('visible').fadeIn('200');
						} else {
							$('.absolvent-full').last().addClass('visible').fadeIn('200');
						}
					})
				});
				$('#absolvent-change-image', that).bind('click',function(){
					if( $('.work-picture', that).css('display') != 'none' ){
						$('.work-picture', that).fadeOut('200');
						$('.absolvent-info-outer').fadeIn('200')
					} else {	
						$('.work-picture', that).fadeIn('200');
						$('.absolvent-info-outer').fadeOut('200');
					}
				})
			});
		},
		calculatePadding: function(){
			var padding = ($(window).width()%200)/2;
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