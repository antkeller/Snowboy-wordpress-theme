/**
 * 2015 Snowboy WordPress Theme - Featured Slider
 */

 var SNOWBOY = SNOWBOY || {};

SNOWBOY.FeaturedSlider = function() {
  this.config = {
		dots: false,
		loop: false
	};
	// check to see if slider should be activated
	if ($('.featured-slider .slide-list .slide-item').length > 1) {
		this.config.dots = true;
		this.config.loop = true;
	}
	this.init();
};

SNOWBOY.FeaturedSlider.prototype = {
  init: function () {
		var self, carousel;
		self = this;
    if ($('.featured-slider')) {
  		// set up slick
  		carousel = $(".featured-slider .slick").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        lazyLoad: 'ondemand',
        dots: self.config.dots,
        adaptiveHeight: false,
        mobileFirst: true,
        arrows: false,
        responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: true,
            prevArrow: '<button type="button" class="slick-prev"></button>',
            nextArrow: '<button type="button" class="slick-next"></button>',
            dots: self.config.dots
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false
          }
        }]
  		});
  	}
  }
};
