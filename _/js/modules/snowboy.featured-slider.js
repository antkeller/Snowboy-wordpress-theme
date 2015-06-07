/**
 * 2015 Snowboy WordPress Theme - Featured Slider
 */

 var SNOWBOY = SNOWBOY || {};

SNOWBOY.FeaturedSlider = function(autoRotate) {
  this.config = {
    autoRotate: typeof autoRotate !== 'undefined' ? autoRotate : true
  };
  this.carousel = {};
  this.init();
};

SNOWBOY.FeaturedSlider.prototype = {
  init: function() {
    var self = this;
    self.carousel = $('.featured-slider .owl-carousel');
    self.buildCarousel();
    // lazy load of images
		$(".featured-slider img.lazy").unveil(0, function() {
			$(this).on('load', function () {
				$(this).addClass('loaded');
				$(this).off('load');
			});
		});
  },
  buildCarousel: function() {
    var self = this;
    // build new
    self.carousel.owlCarousel({
      autoplay: self.config.autoRotate,
      autoplayHoverPause: true,
      autoplayTimeout: 8000,
      dots: true,
      items: 1,
      loop: true,
      nav: true,
      navText: ['<span class="offscreen">prev</span>', '<span class="offscreen">next</span>']
    });
  },
};
