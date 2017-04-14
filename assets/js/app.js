/*-------------------------------*/
/*  #0 - COMMON - NPROGRESS - START          */
/*-------------------------------*/
NProgress.start();
var interval = setInterval(function() {
  NProgress.inc();
}, 2000);
$(window).on('load', function() {
  clearInterval(interval);
  NProgress.done();
});
$(window).on('unload', function() {
  NProgress.start();
});
/*-------------------------------*/
/*  #0 - COMMON - NPROGRESS - END            */
/*-------------------------------*/


/*-------------------------------*/
/*  #1 - COMMON - SLIDER - START          */
/*-------------------------------*/
(function( $ ) {

    //Function to animate slider captions
    function doAnimations( elems ) {
		//Cache the animationend event in a variable
		var animEndEv = 'webkitAnimationEnd animationend';

		elems.each(function () {
			var $this = $(this),
				$animationType = $this.data('animation');
			$this.addClass($animationType).one(animEndEv, function () {
				$this.removeClass($animationType);
			});
		});
	}

	//Variables on page load
	var $myCarousel = $('#carousel-generic'),
		$firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");

	//Initialize carousel
	$myCarousel.carousel();

	//Animate captions in first slide on page load
	doAnimations($firstAnimatingElems);

	//Pause carousel
	$myCarousel.carousel('pause');


	//Other slides to be animated on carousel slide event
	$myCarousel.on('slide.bs.carousel', function (e) {
		var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
		doAnimations($animatingElems);
	});
    $('#carousel-generic').carousel({
        interval:2000,
        pause: "false"
    });

})(jQuery);


$('.item').css('min-height', $(window).height() );

$(window).resize(function() {
$('.item').css('min-height', $(window).height() );
});



/*-------------------------------*/
/*  #1 - COMMON - SLIDER - END            */
/*-------------------------------*/


/*-------------------------------*/
/*  #0 - COMMON - ANIMATE - START          */
/*-------------------------------*/
var $fade = $('.home-fade-1,.home-fade-2,.home-fade-3,.home-fade-4,.home-fade-5,.home-fade-6,.home-fade-7,.home-fade-8');
$fade.css('opacity', 0);
$('.home-fade-1').appear();
$('.home-fade-2').appear();
$('.home-fade-3').appear();
$('.home-fade-4').appear();
$('.home-fade-5').appear();
$('.home-fade-6').appear();
$('.home-fade-7').appear();
$('.home-fade-8').appear();

$('.home-fade-1').on('appear', function(event, $all_appeared_elements) {
  $('.home-fade-1').addClass('animated fadeInLeft');
});
$('.home-fade-3').on('appear', function(event, $all_appeared_elements) {
  $('.home-fade-3').addClass('animated fadeInLeft');
});


$('.home-fade-2').on('appear', function(event, $all_appeared_elements) {
  $('.home-fade-2').addClass('animated fadeInRight');
});

$('.home-fade-4').on('appear', function(event, $all_appeared_elements) {
  $('.home-fade-4').addClass('animated fadeInRight');
});

$('.home-fade-5').on('appear', function(event, $all_appeared_elements) {
  setTimeout(function() {
    $('.home-fade-5').addClass('animated fadeIn');
  }, 400);
});
$('.home-fade-6').on('appear', function(event, $all_appeared_elements) {
  setTimeout(function() {
    $('.home-fade-6').addClass('animated fadeIn');
  }, 400);
});
$('.home-fade-7').on('appear', function(event, $all_appeared_elements) {
  setTimeout(function() {
    $('.home-fade-7').addClass('animated fadeIn');
  }, 400);
});
$('.home-fade-8').on('appear', function(event, $all_appeared_elements) {
  setTimeout(function() {
    $('.home-fade-8').addClass('animated fadeIn');
  }, 400);
});

/*-------------------------------*/
/*  #0 - COMMON - ANIMATE - END          */
/*-------------------------------*/
