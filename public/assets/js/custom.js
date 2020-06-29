/*

Template: Constro - Construction Business HTML5 Template
Author: potenzaglobalsolutions.com
Version: 1.0  
Design and Developed by: potenzaglobalsolutions.com

NOTE:  

*/



/*================================================
[  Table of contents  ]
================================================

:: Predefined Variables
:: Preloader
:: Mega menu
:: Scroll to Top


======================================
[ End table content ]
======================================*/
 
//POTENZA var
var POTENZA = {};
 
 (function($){
  "use strict";

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

/*************************
      Predefined Variables
*************************/ 
var $window = $(window),
	$document = $(document),
	$body = $('body'),
	$countdownTimer = $('.countdown'),
	$counter = $('.counter-main');

//Check if function exists
$.fn.exists = function () {
	return this.length > 0;
};


/*************************
      Predefined Variables
*************************/ 
   var $window = $(window),
        $document = $(document),
        $body = $('body'),
        $countdownTimer = $('.countdown'),
        $bar = $('.bar'),
		$progressBar = $('.progress-bar'),
        $counter = $('.counter');

    //Check if function exists
     $.fn.exists = function () {
        return this.length > 0;
    };
	

 /*************************
        Preloader
*************************/  
  POTENZA.preloader = function () {
       $("#load").fadeOut();
       $('#preloader').delay(0).fadeOut('slow');
   };
	

/*************************
       Mega menu
*************************/    
 POTENZA.megaMenu = function () {   
      $('#menu').megaMenu({
               // DESKTOP MODE SETTINGS
              logo_align          : 'left',         // align the logo left or right. options (left) or (right)
              links_align         : 'left',        // align the links left or right. options (left) or (right)
              socialBar_align     : 'left',    // align the socialBar left or right. options (left) or (right)
              searchBar_align     : 'right',   // align the search bar left or right. options (left) or (right)
              trigger             : 'hover',           // show drop down using click or hover. options (hover) or (click)
              effect              : 'fade',             // drop down effects. options (fade), (scale), (expand-top), (expand-bottom), (expand-left), (expand-right)
              effect_speed        : 400,          // drop down show speed in milliseconds
              sibling             : true,              // hide the others showing drop downs if this option true. this option works on if the trigger option is "click". options (true) or (false)
              outside_click_close : true,  // hide the showing drop downs when user click outside the menu. this option works if the trigger option is "click". options (true) or (false)
              top_fixed           : false,           // fixed the menu top of the screen. options (true) or (false)
              sticky_header       : true,       // menu fixed on top when scroll down down. options (true) or (false)
              sticky_header_height: 250,  // sticky header height top of the screen. activate sticky header when meet the height. option change the height in px value.
              menu_position       : 'horizontal',    // change the menu position. options (horizontal), (vertical-left) or (vertical-right)
              full_width          : false,           // make menu full width. options (true) or (false)
             // MOBILE MODE SETTINGS
              mobile_settings     : {
                collapse            : true,    // collapse the menu on click. options (true) or (false)
                sibling             : true,      // hide the others showing drop downs when click on current drop down. options (true) or (false)
                scrollBar           : true,    // enable the scroll bar. options (true) or (false)
                scrollBar_height    : 400,  // scroll bar height in px value. this option works if the scrollBar option true.
                top_fixed           : false,       // fixed menu top of the screen. options (true) or (false)
                sticky_header       : false,   // menu fixed on top when scroll down down. options (true) or (false)
                sticky_header_height: 200   // sticky header height top of the screen. activate sticky header when meet the height. option change the height in px value.
             }
      });
  }


/*************************
     Back to top
*************************/
 POTENZA.goToTop = function () {
  var $goToTop = $('#back-to-top');
      $goToTop.hide();
    	$window.scroll(function(){
  		  if ($window.scrollTop()>100) $goToTop.fadeIn();
  		  else $goToTop.fadeOut();
  	  });
  	$goToTop.on("click", function () {
  		$('body,html').animate({scrollTop:0},1000);
  		return false;
    });
  }

/****************************************************
     POTENZA Window load and functions
****************************************************/

  //Window load functions
    $window.load(function () {
          POTENZA.preloader()
    });

 //Document ready functions
    $document.ready(function () {
        POTENZA.megaMenu(),
		POTENZA.goToTop();
    });


})(jQuery);
