/**
 * 2015 Snowboy WordPress Theme - Featured Slider
 */

 var SNOWBOY = SNOWBOY || {};

SNOWBOY.FeaturedSlider = function(autoRotate) {
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
		var self, carousel, responsiveSize;
		self = this;
		if ($(".featured-slider .owl-carousel").length) {
			// set up owl carousel
			carousel = $(".featured-slider .owl-carousel").owlCarousel({
				items: 1,
				dots: self.config.dots,
				lazyLoad: true,
				autoplay: true,
				autoplayTimeout: 8000,
				autoplayHoverPause: true,
				loop: self.config.loop
			});
		}
	},
  // buildCarousel: function() {
  //   var self = this;
  //   // build new
  //   self.carousel.owlCarousel({
  //     autoplay: self.config.autoRotate,
  //     autoplayHoverPause: false,
  //     autoplayTimeout: 8000,
  //     LazyLoad: true,
  //     dots: true,
  //     items: 1,
  //     loop: true,
  //     nav: false, //switch to true to add prev and next arrows to slides
  //     navText: ['<span class="offscreen">prev</span>', '<span class="offscreen">next</span>']
  //   });
  // }
};
