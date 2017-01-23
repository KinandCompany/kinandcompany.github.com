$(document).ready(function($){	


	

// launch bxslider

	$('.bxslider').bxSlider({
	  pagerType: 'short',
	  pagerShortSeparator: ' of ',
	  pagerSelector: '.slider-pager',
	  auto: 'true',
	  autoControls: 'true',
	  autoControlsCombine: 'true',
	  autoControlsSelector: '.auto-controls',
	  preloadImages: 'visible',
	  mode: 'fade',
	  speed: 200,
	  nextSelector: '#slider-next',
	  prevSelector: '#slider-prev',
	  nextText: '',
	  prevText: '',
	  tickerHover: 'true',


	   onSliderLoad: function(){
		        $(".slider-container").css("visibility", "visible");

		      }
	});


	// $(".bx-next").hover(
	// 	function() {
 //  		$(".home-next").css( "visibility", "visible" );
	// 	},
	// 	function() {
 //  		$(".home-next").css( "visibility", "hidden" );
	// 	}
	// );

	// $(".bx-prev").hover(
	// 	function() {
 //  		$(".home-prev").css( "visibility", "visible" );
	// 	},
	// 	function() {
 //  		$(".home-prev").css( "visibility", "hidden" );
	// 	}
	// );

// work menu

	$("#work-menu a").each(function() {   
	    if (this.href == window.location.href) {
	        $(this).addClass("active-work-menu");
	    }
	});

	$(".main-nav a").each(function() {   
	    if (this.href == window.location.href) {
	        $(this).addClass("selected");
	    }
	});

// index
//	$( ".project-teaser" ).mouseover(function() {
//	  $(".project-title").css("visibility", "visible");
//	});


var $title = $('.project-title');

$('.project-thumb').hover(function () {
  var $teaser = $(this).parents('.project-teaser');
    $teaser.find($title).css( "visibility", "visible" );
  }, 
  function () {
    var $teaser = $(this).parents('.project-teaser');
    $teaser.find($title).css( "visibility", "hidden" );
  }
  );


$('<div class="custom-thumb">Custom Project</div>').addClass('.custom-thumb').appendTo('.custom');


var $custom = $('.custom-thumb');

$('.project-thumb').hover(function () {
  var $teaser = $(this).parents('.project-teaser');
    $teaser.find($custom).css( "visibility", "visible" );
  }, 
  function () {
    var $teaser = $(this).parents('.project-teaser');
    $teaser.find($custom).css( "visibility", "hidden" );
  }
  );





});



$(window).on("load", function() {	

// project index load

	$(".project-index").css("visibility", "visible");

// project page image content
	$('.project-content img').each(function(){
    $(this).addClass(this.width < this.height ? 'portrait' : 'landscape');
	});

	$(".project-wrapper").css("visibility", "visible");

});

