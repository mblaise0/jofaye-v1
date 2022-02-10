	$.fn.jQuerySimpleCounter = function( options ) {
	    var settings = $.extend({
	        start:  0,
	        end:    100,
	        easing: 'swing',
	        duration: 400,
	        complete: ''
	    }, options );

	    var thisElement = $(this);

	    $({count: settings.start}).animate({count: settings.end}, {
			duration: settings.duration,
			easing: settings.easing,
			step: function() {
				var mathCount = Math.ceil(this.count);
				thisElement.text(mathCount);
			},
			complete: settings.complete
		});
	};


$('#number1').jQuerySimpleCounter({end: 250,duration: 9000});
$('#number2').jQuerySimpleCounter({end: 168,duration: 10000});
$('#number3').jQuerySimpleCounter({end: 559,duration: 8000});
$('#number4').jQuerySimpleCounter({end: 746,duration: 20000});