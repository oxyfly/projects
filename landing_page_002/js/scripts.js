'use strict';

/* AUTO MOVE OFF*/
$('.carousel').carousel({
  interval: 0
});

/*  TO THE TOP BUTTON */
$(document).ready(function(){

  $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
      $('.arrow').fadeIn();
    } else {
      $('.arrow').fadeOut();
    }
  });

  $('.arrow').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
  });
});

/*  SUBMIT BUTTON */
function button() {
  alert('PUSHED');
}