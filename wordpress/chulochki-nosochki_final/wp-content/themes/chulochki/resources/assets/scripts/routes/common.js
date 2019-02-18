import '../../../../node_modules/slick-carousel/slick/slick.min';


export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

    /* SCROLL TO TOP */
    $(document).ready(function () {

      $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
          $('.arrow-top').fadeIn();
        } else {
          $('.arrow-top').fadeOut();
        }
      });

      $('.arrow-top').click(function () {
        $("html, body").animate({scrollTop: 0}, 600);
        return false;
      });
    });

    // HEADER ICONS
    jQuery(".nav-product-block-wrap").addClass("basket-circle");

    // PRODUCT DESCRIPTION
    jQuery('.additional_information_tab').addClass('active');
    jQuery('.additional_information_tab a').css('cursor', 'default');
  },
};
