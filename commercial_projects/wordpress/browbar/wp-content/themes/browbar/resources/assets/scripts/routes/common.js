import '../../../../node_modules/slick-carousel/slick/slick.min';
import '../../../../node_modules/lightbox2/dist/js/lightbox.min';
import AOS from 'aos';

export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

    /*  TO THE TOP BUTTON */
    $(document).ready(function () {
      $(window).scroll(function () {
        if ($(this).scrollTop() > 30) {
          $('.arrow-top').fadeIn();
        } else {
          $('.arrow-top').fadeOut();
        }
      });

      $('.arrow-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 600);
        return false;
      });
    });

    // SUB-MENU SHOW
    jQuery('.menu-item-has-children').mouseover(function () {
      jQuery(this).children('.sub-menu').show();
    });

    jQuery('.menu-item-has-children').mouseleave(function () {
      jQuery(this).children('.sub-menu').hide();
    });

    // NAVBAR FIXED TO SCROLL
    jQuery(window).scroll(function () {
      if ($(this).scrollTop() > 200) {
        $('.header-top').fadeIn(500).css('position', 'fixed');
        $('.header-top').css('top', 0);
        $('.header-top').css('left', 0);
        $('.header-top').css('right', 0);
        $('.header-top').css('background-color', 'white');
        $('.header-top').css('height', 70);
        $('.header-top').css('z-index', 50);
        $('.logo-wrap').css('height', 70);
        $('.location-logo-wrap').css('margin-top', -7);
        $('.phone-logo-wrap').css('margin-top', -7);
        $('.header-top').css('box-shadow', '0 3px 10px grey');
        $('.social').css('top', 110);
      }

      if ($(this).scrollTop() < 200 /*&& window.location.pathname === '/'*/) {
        $('.header-top').fadeIn(500).css('position', 'relative');
        $('.header-top').css('height', 80);
        $('.logo-wrap').css('height', 80);
        $('.location-logo-wrap').css('margin-top', 0);
        $('.phone-logo-wrap').css('margin-top', 0);
        $('.header-top').css('box-shadow', 'none');
      }
    });

    /* SMOOTH SCROLL ANCHOR */
    $('a[href*=#]:not([href=#])').click(function () {
      if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '')
          || location.hostname === this.hostname) {

        let target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top - 300,
          }, 600);
          return false;
        }
      }
    });

    // Slick Slider
    jQuery('.photo-slider-images').slick({
      slidesToShow: 7,
      slidesToScroll: 1,
      infinite: true,
      speed: 1000,
      autoplay: true,
      arrows: false,
      responsive: [{
        breakpoint: 1200,
        settings: {
          slidesToShow: 4,
        },
      }, {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
        },
      }, {
        breakpoint: 800,
        settings: {
          slidesToShow: 3,
        },
      }, {
        breakpoint: 530,
        settings: {
          slidesToShow: 3,
        },
      }],
    });

    AOS.init();
  },
};
