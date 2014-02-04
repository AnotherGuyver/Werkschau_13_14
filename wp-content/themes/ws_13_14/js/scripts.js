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
				that.calculatePadding(); live()
			});

			$('.absolvent').bind('click', function(){
				$('+ .absolvent-full', this).addClass('visible').fadeIn();
			});

			$('.absolvent-full').each(function(i,e){
				var that = e;
				$('.absolvent-close', e).bind('click', function(){
					console.log(that);
					if($(that).hasClass('visible')){

						$(that).fadeOut('400',function(){ $(that).removeClass('visible'); });
					}
				});
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