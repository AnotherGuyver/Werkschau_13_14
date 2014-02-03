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
		isotopeContainer: $('#isotope'),
		eventHandlers: function(){
			var that = this;
			$(window).resize(function(){
				that.calculatePadding();
			});
		},
		calculatePadding: function(){
			var padding = ($(window).width()%200)/2;
			this.isotopeContainer.css({'padding': Math.floor(padding)});
			console.log(padding);
		},
		init: function(){
			this.eventHandlers();
			this.calculatePadding();
		}
	}

	home.init();
});