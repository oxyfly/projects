import '../../../../node_modules/slick-carousel/slick/slick.min';

export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS

    //Food Popups
    jQuery('.stew').mouseenter(function () {
      $('.stew-comment').fadeIn(1000).css('display', 'block');
    });
    jQuery('.stew').mouseleave(function () {
      $('.stew-comment').css('display', 'none');
    });
    jQuery('.ham').mouseenter(function () {
      $('.ham-comment').fadeIn(1000).css('display', 'block');
      $(this).css('z-index', '1');
    });
    jQuery('.ham').mouseleave(function () {
      $('.ham-comment').css('display', 'none');
      $(this).css('z-index', '0');
    });
    jQuery('.pate').mouseenter(function () {
      $('.pate-comment').fadeIn(1000).css('display', 'block');
    });
    jQuery('.pate').mouseleave(function () {
      $('.pate-comment').css('display', 'none');
    });
    jQuery('.porridge').mouseenter(function () {
      $('.porridge-comment').fadeIn(1000).css('display', 'block');
    });
    jQuery('.porridge').mouseleave(function () {
      $('.porridge-comment').css('display', 'none');
    });

    // Awards Slick Slider
    jQuery('.awards-images').slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 3000,
      arrows: false,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: false,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 518,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
      ],
    });

    jQuery('.nav').addClass('animated zoomIn');

    // Show Text Slider - About Block
/*    jQuery(document).ready(function () {
      $("#carouselExampleIndicators").mouseenter(function () {
        $(".carousel-caption-about").css('visibility', 'visible').animate({
          left: 100,
        }, 1000);
      });
    }); */

    // Logo Rotation
    /*    jQuery(window).scroll(function () {
          $('.logo').animate({borderSpacing: 360}, {
            step: function (now) {
              $(this).css('-webkit-transform', 'rotate(' + now + 'deg)');
              $(this).css('-moz-transform', 'rotate(' + now + 'deg)');
              $(this).css('-o-transform', 'rotate(' + now + 'deg)');
              $(this).css('-ms-transform', 'rotate(' + now + 'deg)');
              $(this).css('transform', 'rotate(' + now + 'deg)');
            },
            duration: 2000,
          }, 'linear');
        }); */
  },
};