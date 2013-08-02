$(function() {

	//	Basic carousel, no options
	$('#foo0').carouFredSel(
		{
	scroll: {
	/*	fx: "scroll", /*forma en que aparecen la simagenes 'fade' desvanecerse, 'crossfade' desvanecerse con la imagen anterior de fondo  'scroll' aparecer, 'cover' cubrir la imagen anterior, 'uncover' descubrir la imagen anterior, */
		/*pauseOnHover: true,
		easing: "linear",
		duration: 500,*//*lo que esta dentro de scroll no lo acepta IE7*/
	},
	auto: {
		pauseDuration: 1500,/*duracíon de la pausa*/
		duration: 500/*duración de la transición*/
	}
});

//	Basic carousel + timer
	$('#foo1').carouFredSel({
		auto: {
			pauseOnHover: 'resume',
			onPauseStart: function( percentage, duration ) {
				$(this).trigger( 'configuration', ['width', function( value ) { 
					$('#timer1').stop().animate({
						width: value
					}, {
						duration: duration,
						easing: 'linear'
					});
				}]);
			},
			onPauseEnd: function( percentage, duration ) {
				$('#timer1').stop().width( 0 );
			},
			onPausePause: function( percentage, duration ) {
				$('#timer1').stop();
			}
		},
		prev: '#prev2',
		next: '#next2'
	});

	//	Scrolled by user interaction
	$('#foo2').carouFredSel({
		prev: '#prev2',
		next: '#next2',
		pagination: "#pager2",
		auto: true,
	auto: {
		pauseOnHover: true, /*pausa con hover*/
		fx: "scroll",/*tipo de transición*/
		pauseDuration: 3500,/*duracíon de la pausa*/
		duration: 5000/*duración de la transición*/
	}
	});

	//	Variable number of visible items with variable sizes
	$('#foo3').carouFredSel({
		width: 760,
		height: 'auto',
		prev: '#prev3',
		next: '#next3',
		auto: false
	});

	//	Fluid layout example 1, resizing the items
	$('#foo4').carouFredSel({
		responsive: true,
		width: '100%',
		scroll: 2,
		items: {
			width: '100%',
			height: 260,	//	optionally resize item-height
			visible: {
				min: 1,
				max: 2
			}
		}
	});

	//	Fuild layout example 2, centering the items
	$('#foo5').carouFredSel({
		width: '100%',
		scroll: 2
	});

});