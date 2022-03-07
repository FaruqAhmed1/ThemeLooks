/*--------------------------------------------
Template name:  Trendy Event
Version:        1.1
Author:         ThemeLooks
Author url:     http://themelooks.com

NOTE:
------
Please DO NOT EDIT THIS JS, you may need to use "custom.js" file for writing your custom js.
We may release future updates so it will overwrite this file. it's better and safer to use "custom.js".


[Table of Content]

01: Main menu
02: Menu Responsive in Small Device
03: Sticky Nav
04: Video Popup
05: Platinum Carousel
06: Gold Carousel
07: Speaker Skills Carousel
08: scroll To Top
09: Changing svg color 
10: Google map 
11: CountDown
12: Payment Method
13: Retina JS
14: Blog-Details Carousel
15: Background Image
16: Ajax Contact Form 
17: Content Animation
18: Preloader
----------------------------------------------*/


(function ($) {
  "use strict";

  jQuery(document).ready(function () {
    /*===================
		01: Main Menu
		=====================*/

    $('.main-menu a[href="#"]').on("click", function (event) {
      event.preventDefault();
    });

    $(".main-menu-area").menumaker({
      title: '<i class="fa fa-bars"></i>',
      format: "multitoggle"
    });

    /*==================================
    02: Menu Responsive in Small Device
    ====================================*/
    function subMenu() {

      let $subMain = $('.main-menu > .has-sub-item > ul');
      let $subSub = $('.main-menu > .has-sub-item > ul ul');

      $subMain.each(function () {
          if ($(window).width() > 991) {
              if ($(this).offset().left + $(this).width() > $(window).width()) {
                  $(this).css({ 'left': 'auto', 'right': '0' });
              }
          }
      })

      $subSub.each(function () {
          if ($(window).width() > 991) {
              if ($(this).offset().left + $(this).width() > $(window).width()) {
                  $(this).css({ 'left': 'auto', 'right': '100%' });
              }
          }
      })
  }

  subMenu();

  $(window).resize(subMenu);


    /*========================
		03: Sticky Nav
    ==========================*/
    function scrollMenu() {
      var scroll = $(window).scrollTop();
      if (scroll < 70) {
        $(".header").removeClass("is-sticky fadeInDown animated shadow");
      } else {
        $(".header").addClass("fixed-top is-sticky fadeInDown animated shadow");
      }
    }

    scrollMenu();


    $(window).on("scroll", function () {
      scrollMenu();
    });


    /*========================
		04: PopUp Video Play
		==========================*/
    $(".video-play-button").magnificPopup({
      type: "video"
    });
    $(".gallery-image-wrapper, .gallery-row").magnificPopup({
      delegate: "a",
      type: "image",
      gallery:{
        enabled:true,
      }
    });

    /*========================
		05: Platinum Carousel
		==========================*/
    $(".platinum-carousel").owlCarousel({
      autoplay: false,
      autoplaySpeed: 5000,
      slideTransition: 'linear',
      loop: true,
      items: 5,
      nav: false,
      dots: false,
      responsive: {
        0: {
          items: 1
        },
        280: {
          items: 1
        },
        320: {
          items: 2
        },
        640: {
          items: 3
        },
        960: {
          items: 4
        },
        1200: {
          items: 5
        }
      }
    });


    /*========================
      06: Gold Carousel
      ==========================*/
    $(".gold-carousel").owlCarousel({
      autoplay: false,
      autoplaySpeed: 5000,
      slideTransition: 'linear',
      loop: true,
      items: 5,
      nav: false,
      dots: false,
      rtl: true,
      responsive: {
        0: {
          items: 1
        },
        280: {
          items: 1
        },
        320: {
          items: 2
        },
        640: {
          items: 3
        },
        960: {
          items: 4
        },
        1200: {
          items: 5
        }
      }
    });


    /*========================
		07: Speaker Skills Carousel
    ==========================*/
    var topSlider = $('.speaker-skills-carousel');
    topSlider.owlCarousel({
      items: 1,
      loop: true,
      nav: true,
      navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
      dots: false,
      autoplay: true,
      lazyLoad: true,
      mouseDrag: false,
      slideSpeed: 300,
      paginationSpeed: 400,
      animateIn: 'fadeIn',
      animateOut: 'fadeOut',
    });

    topSlider.on("translate.owl.carousel", function (event) {
      $(".speaker-skills-carousel .speaker-meta h5, .speaker-skills-carousel .speaker-meta h5 span").css("opacity", 0);
      $(".speaker-skills-carousel .speaker-meta h5, .speaker-skills-carousel .speaker-meta h5 span").removeClass("animated fadeInUp");
    });
    topSlider.on("translated.owl.carousel", function (event) {
      $(".speaker-skills-carousel .speaker-meta h5, .speaker-skills-carousel .speaker-meta h5 span").fadeIn();
      $(".speaker-skills-carousel .speaker-meta h5, .speaker-skills-carousel .speaker-meta h5 span").addClass("animated fadeInUp");
    });

    $('.speaker-skills-carousel button.owl-prev').append('<img src="assets/img/nav-text-left.png" alt="">');
    $('.speaker-skills-carousel button.owl-next').append('<img src="assets/img/nav-text.png" alt="">');


    /*========================
		08: scroll To Top
		==========================*/
    $(window).on("scroll", function () {
      if ($(this).scrollTop() > 400) {
        $(".scrollToTop").addClass("show");
      } else {
        $(".scrollToTop").removeClass("show");
      }
    });

    $(".scrollToTop").on("click", function () {
      $("html, body").animate({ scrollTop: 0 }, 1000);
    });


    /*==================================
    09: Changing svg color 
    ====================================*/
    jQuery("img.svg").each(function () {
      var $img = jQuery(this);
      var imgID = $img.attr("id");
      var imgClass = $img.attr("class");
      var imgURL = $img.attr("src");

      jQuery.get(
        imgURL,
        function (data) {
          // Get the SVG tag, ignore the rest
          var $svg = jQuery(data).find("svg");

          // Add replaced image's ID to the new SVG
          if (typeof imgID !== "undefined") {
            $svg = $svg.attr("id", imgID);
          }
          // Add replaced image's classes to the new SVG
          if (typeof imgClass !== "undefined") {
            $svg = $svg.attr("class", imgClass + " replaced-svg");
          }

          // Remove any invalid XML tags as per http://validator.w3.org
          $svg = $svg.removeAttr("xmlns:a");

          // Check if the viewport is set, else we gonna set it if we can.
          if (
            !$svg.attr("viewBox") &&
            $svg.attr("height") &&
            $svg.attr("width")
          ) {
            $svg.attr(
              "viewBox",
              "0 0 " + $svg.attr("height") + " " + $svg.attr("width")
            );
          }

          // Replace image with new SVG
          $img.replaceWith($svg);
        },
        "xml"
      );
    });


    /*==================================
    10: Google map 
    ====================================*/

    var $map = $('[data-trigger="map"]'),
      $mapOps;

    if ($map.length) {
      // Map Options
      $mapOps = $map.data("map-options");

      // Map Initialization
      window.initMap = function () {
        $map.css("min-height", "640px");
        $map.each(function () {
          var $t = $(this),
            map,
            lat,
            lng,
            zoom;
          var contentString =
            '<div id="mapcontent">' +
            "<h4>Trendy Event Headquarter</h4>" +
            "</div>";
          var infowindow = new google.maps.InfoWindow({
            content: contentString
          });

          $mapOps = $t.data("map-options");
          lat = parseFloat($mapOps.latitude, 10);
          lng = parseFloat($mapOps.longitude, 10);
          zoom = parseFloat($mapOps.zoom, 10);

          map = new google.maps.Map($t[0], {
            center: { lat: lat, lng: lng },
            zoom: zoom,
            scrollwheel: false,
            disableDefaultUI: true,
            zoomControl: false,
            styles: [
              {
                featureType: "landscape.man_made",
                elementType: "geometry",
                stylers: [
                  {
                    color: "#f2f2f2"
                  }
                ]
              },
              {
                featureType: "landscape.natural",
                elementType: "geometry",
                stylers: [
                  {
                    color: "#f2f2f2"
                  }
                ]
              },
              {
                featureType: "landscape.natural.terrain",
                elementType: "geometry",
                stylers: [
                  {
                    visibility: "off"
                  }
                ]
              },
              {
                featureType: "poi",
                elementType: "labels",
                stylers: [
                  {
                    visibility: "off"
                  }
                ]
              },
              {
                featureType: "poi.business",
                elementType: "all",
                stylers: [
                  {
                    visibility: "off"
                  }
                ]
              },
              {
                featureType: "poi.medical",
                elementType: "geometry",
                stylers: [
                  {
                    color: "#f2f2f2"
                  }
                ]
              },
              {
                featureType: "poi.park",
                elementType: "geometry",
                stylers: [
                  {
                    color: "#f2f2f2"
                  }
                ]
              },
              {
                featureType: "road",
                elementType: "geometry.stroke",
                stylers: [
                  {
                    visibility: "off"
                  }
                ]
              },
              {
                featureType: "road",
                elementType: "labels",
                stylers: [
                  {
                    visibility: "off"
                  }
                ]
              },
              {
                featureType: "road.highway",
                elementType: "geometry.fill",
                stylers: [
                  {
                    color: "#f6f6f6"
                  }
                ]
              },
              {
                featureType: "road.highway",
                elementType: "geometry.stroke",
                stylers: [
                  {
                    color: "#fff"
                  }
                ]
              },
              {
                featureType: "road.arterial",
                elementType: "geometry.fill",
                stylers: [
                  {
                    color: "#fff"
                  }
                ]
              },
              {
                featureType: "road.local",
                elementType: "geometry.fill",
                stylers: [
                  {
                    color: "black"
                  }
                ]
              },
              {
                featureType: "transit.station.airport",
                elementType: "geometry.fill",
                stylers: [
                  {
                    color: "#f2f2f2"
                  }
                ]
              },
              {
                featureType: "water",
                elementType: "geometry",
                stylers: [
                  {
                    color: "#e7e7e7"
                  }
                ]
              }
            ]
          });

          map = new google.maps.Marker({
              position: {lat: lat, lng: lng},
              map: map,
              animation: google.maps.Animation.DROP,
              draggable: false,
              icon: 'assets/img/marker.png'
          });

          google.maps.event.addListener(
            map,
            "click",
            (function (map) {
              return function () {
                infowindow.setContent(contentString);
                infowindow.open(map, map);
              };
            })(map)
          );
        });
      };

      // Map Script
      var googleAPI = document.createElement("script");

      googleAPI.type = "text/javascript";
      googleAPI.src =
        "https://maps.googleapis.com/maps/api/js?key=" +
        $mapOps.api_key +
        "&callback=initMap";

      $("body").append(googleAPI);
    }


    /*========================
		11: CountDown Timer
		==========================*/
    $('#countdown').countdown({
      date: '08/16/2020 23:59:59'
    });


    /*========================
		12: Payment Method
		==========================*/
    $('.credit-card-info').hide();
    $('#paypal').on('click', function () {
      $('.credit-card-info').hide();
      $('.paypal-card-info').fadeIn(500);
    });
    $('#credit-card').on('click', function () {
      $('.credit-card-info').fadeIn(500);
      $('.paypal-card-info').hide();
    });


    /*==================================
    13: Retina JS
    ====================================*/
    retinajs();

    /*========================
    14: Blog-Details Carousel
    ==========================*/
    $('.wmcp-cover').owlCarousel({
      autoplay: false,
      loop: true,
      items: 1,
      nav: false,
      dots: true,

    });

    /*==================================
    16: Ajax Contact Form 
    ====================================*/

    $('.contact-form-area').on('submit', 'form', function(e) {
      e.preventDefault();

      var $el = $(this);

      $.post($el.attr('action'), $el.serialize(), function(res){
          res = $.parseJSON( res );
          $el.parent('.contact-form-area').find('.form-response').html('<span>' + res[1] + '</span>');
      });
    });



    /*========================
    15: Background Image
    ==========================*/
    var $bgImg = $('[data-bg-img]');
    $bgImg.css('background-image', function () {
      return 'url("' + $(this).data('bg-img') + '")';
    }).removeAttr('data-bg-img').attr('data-rjs', 2);



  });


  /*==================================
  16: Content Animation
  ====================================*/
  $(window).on('load', function () {

    var $animateEl = $('[data-animate]');

    $animateEl.each(function () {
      var $el = $(this),
        $name = $el.data('animate'),
        $duration = $el.data('duration'),
        $delay = $el.data('delay');

      $duration = typeof $duration === 'undefined' ? '1' : $duration;
      $delay = typeof $delay === 'undefined' ? '0' : $delay;

      $el.waypoint(function () {
        $el.addClass('animated ' + $name)
          .css({
            'animation-duration': $duration + 's',
            'animation-delay': $delay + 's'
          });
      }, { offset: '1000' });
    });
  });

  /*==================================
  17: Preloader
  ====================================*/
  jQuery(window).on("load", function () {
    $(".preloader").fadeOut(1000);
  });



})(jQuery);
