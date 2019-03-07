import AOS from 'aos';

export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

    /* SMOOTH SCROLL ANCHOR */
    $('a[href*=#]:not([href=#])').click(function () {
      if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '')
          || location.hostname === this.hostname) {

        let target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top,
          }, 600);
          return false;
        }
      }
    });

    /* NAVBAR */
    $('.nav-primary .nav .menu-item-25 a').attr('target', '_blank');

    /*  TO THE TOP BUTTON */
    $(document).ready(function () {
      $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
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
    AOS.init();
  },
};
