/**
 * 2015 Snowboy WordPress Theme - Gallery
 */

var SNOWBOY = SNOWBOY || {};


SNOWBOY.Gallery = function(autoRotate) {
  this.config = {
    autoRotate: typeof autoRotate !== 'undefined' ? autoRotate : true
  };
  this.init();
};

SNOWBOY.Gallery.prototype = {
  init: function () {
    var sync1 = $("#sync1");
    var sync2 = $("#sync2");

    // on change, update the synced thumbnail
    sync1.on('changed.owl.carousel', function(event) {
      var current = event.item.index;

      if(current !== null) {
        $("#sync2")
          .find(".owl-item")
          .removeClass("synced")
          .eq(current)
          .addClass("synced");

        // center(current);
        console.log('current index', current);
      }
    });

    sync2.on('initialized.owl.carousel', function(event) {
      // select the first thumbnail by default
      $(this).find(".owl-item").eq(0).addClass("synced");
      // on click update the large carousel
      $(this).on("click", ".owl-item", function(e){
        e.preventDefault();
        var number = $(this).index('#sync2 .owl-item');
        sync1.trigger("to.owl.carousel", [number, 500]);
      });

    });

    sync1.owlCarousel({
      items: 1,
      singleItem: true,
      slideSpeed: 500,
      loop: true,
      navigation: true,
      lazyLoad: true,
      pagination:false,
      responsiveRefreshRate: 200
      // URLhashListener:true,
      // startPosition: 'URLHash'
    });

    sync2.owlCarousel({
      margin: 15,
      center: false,
      loop: false,
      pagination: true,
      responsiveRefreshRate: 100,
      slideBy: 3,
      nav: true,
      navText: ['<span class="offscreen">prev</span>', '<span class="offscreen">next</span>'],
      // startPosition: 'URLHash'
      responsiveClass:true,
      responsive: {
				0:{
					items: 3,
          margin: 10
				},
				480:{
					items: 5,
					margin: 10
				},
        600:{
          items: 6,
          margin: 10
        },
				800:{
					items: 7,
					margin: 15
				},
        1000:{
					items: 8,
					margin: 15
				},
        1200: {
          items: 9,
          margin: 15
        }
			}
    });
    // resize gallery based on new image height, it's responsive
		// $(window).on('change.owl.carousel', function () {
		// 	var imgHeight = $('#sync1 .owl-stage-outer .owl-item img').height();
		// 	$('#sync1 .owl-stage .owl-item').clearQueue();
		// 	$('#sync1 .owl-stage .owl-item ').animate({
		// 		height: imgHeight
		// 	}, 500);
		// });

    // function center(number){
    //   var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
    //   var num = number;
    //   var found = false;
    //   for(var i in sync2visible){
    //     if(num === sync2visible[i]){
    //       var found = true;
    //     }
    //   }
    //   if(found===false){
    //     if(num>sync2visible[sync2visible.length-1]){
    //       sync2.trigger("to.owl.carousel", num - sync2visible.length+2)
    //     }else{
    //       if(num - 1 === -1){
    //         num = 0;
    //       }
    //       sync2.trigger("to.owl.carousel", num);
    //     }
    //   } else if(num === sync2visible[sync2visible.length-1]){
    //     sync2.trigger("to.owl.carousel", sync2visible[1])
    //   } else if(num === sync2visible[0]){
    //     sync2.trigger("to.owl.carousel", num-1)
    //   }
    // }
  }
};
