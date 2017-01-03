/**
 * 2015 Snowboy Productions WordPress Theme Template
 */

var SNOWBOY = SNOWBOY || {};

SNOWBOY.Main = {
	config: {},
  init: function () {
		var self, $body;
		self = this;
		$body = $('body');
		// init featured slider
		if ($body.hasClass('home')) {
			self.homeInit();
    } else if ($body.hasClass('single-snowboy_galleries')) {
			self.galleryInit();
		}
		// mobile navigation menu toggle
		var toggle = $(".menu-toggle");
		toggle.on( "click", function(e) {
      e.preventDefault();
      $(this).toggleClass("is-active");
			$('.primary-navigation').toggleClass("active");
		});
	},
	homeInit: function() {
		// main menu nav scrolling
		$('#nav .menu .scroll a').on('click.mainMenu', function (e) {
			e.preventDefault();
			var url = $(this).attr('href');
			SNOWBOY.Main.utilities.pageScroll(url, 0.5);
		});
		//fade gallery images on hover
		jQuery('#gallery .gallery-link img, .shop-section li a img').each(function(){
				jQuery(this).hover(function(){
						jQuery(this).fadeTo(200, 0.75);
				}, function(){
						jQuery(this).stop().fadeTo(500, 1);
				});
		});
		new SNOWBOY.FeaturedSlider();
	},
	galleryInit: function() {
		new SNOWBOY.Gallery();
  },
	utilities: {
		cookie: {
			getCookie: function (name) {
				var nameEQ = name + "=";
				var ca = document.cookie.split(';');
				for (var i = 0; i < ca.length; i++) {
					var c = ca[i];
					while (c.charAt(0) == ' ') c = c.substring(1, c.length);
					if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
				}
				return null;
			},
			setCookie: function (name, value, days) {
				var date, expires;
				if (days) {
					date = new Date();
					date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
					expires = "; expires=" + date.toGMTString();
				} else {
					expires = "";
				}
				document.cookie = name + "=" + value + expires + "; path=/";
			}
		},
		pageScroll: function (hash, duration, updateLocation) {
			var yPosition;
			// make sure we have a leading #
		  hashIndex = hash.indexOf('#');
		  hash = hash.substr(hashIndex);
			// check duration
			if (typeof duration === 'undefined') {
				duration = 1;
			}
			if (typeof updateLocation === 'undefined') {
				updateLocation = true;
			}
			// Smooth Page Scrolling, update hash on complete of animation
			yPosition = $(hash).offset().top;
			TweenMax.to(window, duration, {scrollTo:{y: yPosition, x: 0}, onComplete: function () { if (updateLocation) window.location = hash; }});
		}
	}
};
