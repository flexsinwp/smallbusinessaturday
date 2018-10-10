(function($) {
	'use strict';
	
	var counter = {};
	eltd.modules.counter = counter;
	
	counter.eltdInitCounter = eltdInitCounter;
	
	
	counter.eltdOnDocumentReady = eltdOnDocumentReady;
	
	$(document).ready(eltdOnDocumentReady);
	
	/*
	 All functions to be called on $(document).ready() should be in this function
	 */
	function eltdOnDocumentReady() {
		eltdInitCounter();
	}
	
	/**
	 * Counter Shortcode
	 */
	function eltdInitCounter() {
		var counterHolder = $('.eltd-counter-holder');
		
		if (counterHolder.length) {
			counterHolder.each(function() {
				var thisCounterHolder = $(this),
					thisCounter = thisCounterHolder.find('.eltd-counter');
				
				thisCounterHolder.appear(function() {
					thisCounterHolder.css('opacity', '1');
					
					//Counter zero type
					if (thisCounter.hasClass('eltd-zero-counter')) {
						var max = parseFloat(thisCounter.text());
						thisCounter.countTo({
							from: 0,
							to: max,
							speed: 1500,
							refreshInterval: 100
						});
					} else {
						thisCounter.absoluteCounter({
							speed: 2000,
							fadeInDelay: 1000
						});
					}
				},{accX: 0, accY: eltdGlobalVars.vars.eltdElementAppearAmount});
			});
		}
	}
	
})(jQuery);