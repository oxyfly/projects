/* SMOOTH SCROLL */

/*$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 750);
        return false;
      }
    }
  });
});*/

/* SCROLL TO TOP */

$(document).ready(function(){ 

	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.logo-small').fadeIn();
		} else {
			$('.logo-small').fadeOut();
		}
	}); 

	$('.logo-small').click(function(){
		$("html, body").animate({ scrollTop: 0 }, 600);
		return false;
	});

});

/*
 * SimpleModal Basic Modal Dialog
 * http://simplemodal.com
 *
 * Copyright (c) 2013 Eric Martin - http://ericmmartin.com
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 */
$('#getwindows .launch').click(function (e) {
	$("#download-lang").modal({onOpen: function (dialog) {
		dialog.overlay.fadeIn('fast', function () {
			dialog.data.hide();
			dialog.container.fadeIn('fast', function () {
				dialog.data.fadeIn('fast');
			});
		});
	}});
	
	return false;
	
});

$('#downloaded').click(function(){	
	$('.simplemodal-close').trigger('click');
	//return false;
});




