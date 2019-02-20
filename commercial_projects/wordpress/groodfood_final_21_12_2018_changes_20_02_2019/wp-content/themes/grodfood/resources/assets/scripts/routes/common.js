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
        if ($(this).scrollTop() > 500) {
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

    AOS.init(
        {
          delay: 250,
        }
    );
  },
};

// NAVBAR
jQuery(document).ready(function () {
  jQuery(window).scroll(function () {
    if ($(this).scrollTop() > 100 && window.location.pathname === '/') {
      // $('.contacts-header').css('display', 'none');
      // $('.navbar-fade').fadeIn(500).css('display', 'block');
      // $('.logo').css('display', 'none');
      // $('.flip-container').css('display', 'none');
      // $('.nav').css('margin-top', 51);
      $('.menu-item a').addClass('link-color');
      // $('.link-color').css('color', 'black');
      // $('.logo-fade').css('display', 'block').css('top', 12);
      $('.sub-menu').css('background-color', 'white');
    }
    if ($(this).scrollTop() < 100 && window.location.pathname === '/') {
      // $('.contacts-header').fadeIn(500).css('display', 'block');
      $('.navbar-fade').css('display', 'none');
      $('.logo').css('display', 'block');
      $('.flip-container').css('display', 'block');
      $('.logo-fade').css('display', 'none');
      // $('.nav').css('margin-top', 128);
      $('.link-color').css('color', 'white');
      $('.sub-menu').css('background-color', 'transparent');
    }
  });
  if (window.location.pathname !== '/') {
    // $('.contacts-header').css('display', 'none');
    $('.navbar-fade').fadeIn(500).css('display', 'block');
    $('.logo').css('display', 'none');
    $('.flip-container').css('display', 'none');
    $('.nav').css('margin-top', 33);
    $('.menu-item a').addClass('link-color');
    $('.product-item-click').css('display', 'block');
    $('.link-color').css('color', 'black');
    $('.logo-fade').css('display', 'block').css('top', 12);
    $('.sub-menu').css('background-color', 'white');
  }
});

// NAVBAR - LOGO FADE
jQuery(document).ready(function () {
  jQuery(window).scroll(function () {
    if ($(this).scrollTop() > 10 && window.location.pathname !== '/') {
      $('.logo-fade').css('display', 'none');
    }
    if ($(this).scrollTop() < 10 && window.location.pathname !== '/') {
      $('.logo-fade').css('display', 'block');
    }
  })
});

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

// SUB-MENU SHOW
jQuery('.menu-item-has-children').mouseover(function () {
  jQuery(this).children('.sub-menu').show();
});

jQuery('.menu-item-has-children').mouseleave(function () {
  jQuery(this).children('.sub-menu').hide();
});

