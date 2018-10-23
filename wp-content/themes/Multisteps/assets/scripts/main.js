/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages

        // PRELOADER
        $(window).on('load', function() {
            $('.loader').fadeOut();
            $('.loader-mask').delay(350).fadeOut('slow');
        });

        // NAVBAR MENU COLLAPSE
        (function () {
            $('#jsPrimaryMenu').on('show.bs.collapse', function() {
                $('#jsPrimaryMenuToggler').addClass('is-active');
                $('#jsSearchBox').collapse('hide');
            });
            $('#jsPrimaryMenu').on('hide.bs.collapse', function() {
                $('#jsPrimaryMenuToggler').removeClass('is-active');
            });
        })();

        // SEARCH BOX COLLAPSE
        (function () {
            $('#jsSearchBox').on('show.bs.collapse', function() {
                $('#jsPrimaryMenu').collapse('hide');
            });
        })();

        // FAQ TOGGLE
        (function () {
            $('#jsFaqList').on('click', '.faq-list-item__question>a', function(e){
                e.preventDefault();
                var that = $(this),
                    parent = that.parents('.faq-list-item');
                    parent_siblings = parent.siblings('.faq-list-item');

                if(parent.hasClass('active')) {
                  parent.removeClass('active');
                } else {
                  parent.addClass('active');
                  parent_siblings.removeClass('active');
                }
            });
            $('#jsFaqList').on('click', '.faq-list-item__close', function(e) {
                e.preventDefault();
                $(this).parent('.faq-list-item').removeClass('active');
            });
        })();

        // HERO SLIDER
        (function () {
          $('#jsHeroSlider,#jsTestimonials').slick({
            dots: false,
            arrows: false,
            infinite: true,
            autoplay: true,
            speed: 500,
            autoplaySpeed: 4000,
            pauseOnHover: false,
            fade: true,
            cssEase: 'linear'
          });
        })();

        // HERO SLIDER
        (function () {
          $('#jsCarousel').slick({
            dots: true,
            arrows: true,
            infinite: true,
            autoplay: true,
            speed: 500,
            autoplaySpeed: 4000,
            pauseOnHover: false,
            fade: true,
            cssEase: 'linear'
          });
        })();

        // POST SLIDER
        (function () {
          $('#jsPostSlider').slick({
              slidesToShow: 3,
              slidesToScroll: 1,
              autoplay: true,
              autoplaySpeed: 2000,
              arrows: false,
              infinite: false,
              dots: false,
              responsive: [
                {
                  breakpoint: 992,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: true,
                  }
                },
                {
                  breakpoint: 768,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                  }
                }
              ]
          });
        })();

        // POSTS CAROUSEL
        (function () {
          $('#jsPostCarousel').slick({
              slidesToShow: 3,
              slidesToScroll: 1,
              autoplay: true,
              autoplaySpeed: 2000,
              arrows: true,
              infinite: false,
              dots: false,
              responsive: [
                {
                  breakpoint: 992,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                  }
                }
              ]
          });
        })();

        // POSITIONS CAROUSEL
        (function () {
          $('#jsPositionsCarousel').slick({
              slidesToShow: 1,
              slidesToScroll: 1,
              autoplay: true,
              autoplaySpeed: 2000,
              arrows: true,
              infinite: false,
              dots: false,
              responsive: [
                {
                  breakpoint: 992,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                  }
                }
              ]
          });
        })();

        //
        //  FLEX FONT
        //
        (function () {
            flexFont = function () {
              var divs = document.getElementsByClassName("flexFont");
              for(var i = 0; i < divs.length; i++) {
                  var relFontsize = divs[i].offsetWidth*0.05;
                  var maxFontSize = divs[i].getAttribute('data-maxfontsize');

                  if(maxFontSize && (relFontsize > maxFontSize)) {
                    divs[i].style.fontSize = maxFontSize+'px';
                  } else {
                    divs[i].style.fontSize = relFontsize+'px';
                  }
              }
            };

            window.onload = function(event) {
                flexFont();
            };
            window.onresize = function(event) {
                flexFont();
            };
        })();


        // SMOOTH HASH SCROLL
        (function () {
            // Select all links with hashes
            $('a[href*="#"]')
              // Remove links that don't actually link to anything
              .not('[href="#"]')
              .not('[href="#0"]')
              .click(function(event) {
                // On-page links
                if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
                  // Figure out element to scroll to
                  var target = $(this.hash);
                  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                  // Does a scroll target exist?
                  if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                      scrollTop: target.offset().top
                    }, 500, function() {
                      // Callback after animation
                      // Must change focus!
                      var $target = $(target);
                      $target.focus();
                      if ($target.is(":focus")) { // Checking if the target was focused
                        return false;
                      } else {
                        $target.attr('tabindex','-1').css('outline', '0'); // Adding tabindex for elements not focusable
                        $target.focus(); // Set focus again
                      }
                    });
                  }
                }
              });
        })();

        // INITIALIZE HEADROOM
        (function() {
            var header = document.querySelector(".site-header");
            if(window.location.hash) {
              header.classList.add("headroom--unpinned");
            }
            var headroom = new Headroom(header, {
                tolerance: {
                  down : 0,
                  up : 0
                },
                offset : 100,
                classes: {
                  initial: "animated",
                  pinned: "fadeInDown",
                  unpinned: "fadeOutUp",
                  onUnpin : function() {
                    console.log("unpinned");
                  }
                }
            });
            headroom.init();
        }());

      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
