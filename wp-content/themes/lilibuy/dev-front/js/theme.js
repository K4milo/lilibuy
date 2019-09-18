(function($){

	const $GeneralScope = {

		// Constructor
		init: function() {
			this.menuScripts();
		},

		// scripts for Menu
		menuScripts: function() { 
			$(window).scroll(function() {

				let scroll    = $(window).scrollTop();
				let header_el = $('.navbar');

				if (scroll >= 100) {
					header_el.addClass("scroll_menu");
				} else {
					header_el.removeClass("scroll_menu");
				}
			});
		},
	}

	// -- Home -- //
	const $HomeScope = {

		// Constructor
		init: function() {
			// Instance functions
			this.homeSlider();
		},


		// scripts for banner
		homeSlider: function() {

			let SliderWrapper = $('.slider__wrapper');
			let SliderSettings = {
				dots: true,
				arrows: false,
				slidesToShow: 1,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 4000,
			}

			if(!SliderWrapper.hasClass('slick-initialized')) {
				const slick_slider = SliderWrapper.slick(SliderSettings);
			}

		},
	}

	// Trigger 
	$GeneralScope.init();

	// Home Scripts
	if($('body').hasClass('home')) {
		$HomeScope.init();
	}

})(jQuery);