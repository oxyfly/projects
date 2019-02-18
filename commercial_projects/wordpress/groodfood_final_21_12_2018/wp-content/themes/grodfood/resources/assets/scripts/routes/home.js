import '../../../../node_modules/slick-carousel/slick/slick.min';
import '../../../../../../../js/velocity.min';

export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS

    // Awards Slick Slider
    jQuery('.awards-images').slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 300,
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
          slidesToShow: 2,
        },
      }, {
        breakpoint: 530,
        settings: {
          slidesToShow: 1,
        },
      }],
    });

    jQuery('.nav').addClass('animated zoomIn');
  },
};