/**
 * 2015 Snowboy WordPress Theme - Gallery
 */

var SNOWBOY = SNOWBOY || {};


SNOWBOY.Gallery = function() {
  this.config = {};
  this.init();
};

SNOWBOY.Gallery.prototype = {
  init: function () {
    var self = this;
    // check for gallery
    if ($('.gallery')) {
      // determine total items in gallery
      self.config.totalItems = $('.gallery .gallery-item').length;
      // set up gallery slider for thumbnails
      if ($('.gallery')) {
        // set up gallery slider
        self.config.gallerySlider = $('.gallery').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          lazyLoad: 'ondemand',
          centerMode: false,
          mobileFirst: true,
          adaptiveHeight: true,
          asNavFor: '.gallery-nav',
          responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: true,
              prevArrow: '<button type="button" class="slick-prev"></button>',
              nextArrow: '<button type="button" class="slick-next"></button>'
            }
          },
          {
            breakpoint: 480,
            settings: {
              arrows: false
            }
          }]
        });
        self.config.gallerySLiderNav = $('.gallery-nav').slick({
          lazyLoad: 'ondemand',
          slidesToScroll: 1,
          slidesToShow: 5,
          variableWidth: true,
          asNavFor: '.gallery',
          arrows: false,
          centerMode: true,
          centerPadding: '50px',
          mobileFirst: true,
          focusOnSelect: true,
          infinite: true,
          responsive: [
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 3
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 3
            }
          }]
        });
      }
      // assign keyboard events to gallery
      $(document).on('keyup.gallery', function (e) {
        var code, currentIndex, newIndex, slideIndex;
        // get the code
        code = (e.keyCode ? e.keyCode : e.which);
        // check which arrow key
        if (code == 39) {
          // right arrow
          self.showNext();
        } else if (code == 37) {
          // left arrow
          self.showPrevious();
        }
      });
    }
  }
};
