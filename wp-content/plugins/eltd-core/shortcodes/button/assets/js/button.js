(function($) {
	'use strict';
	
	var button = {};
	eltd.modules.button = button;
	
	button.eltdButton = eltdButton;
	
	
	button.eltdOnDocumentReady = eltdOnDocumentReady;
	
	$(document).ready(eltdOnDocumentReady);
	
	/*
	 All functions to be called on $(document).ready() should be in this function
	 */
	function eltdOnDocumentReady() {
		eltdButton().init();
	}
	
	/**
	 * Button object that initializes whole button functionality
	 * @type {Function}
	 */
	var eltdButton = function() {
		//all buttons on the page
		var buttons = $('.eltd-btn');
		
		/**
		 * Initializes button hover color
		 * @param button current button
		 */
		var buttonHoverColor = function(button) {
			if(typeof button.data('hover-color') !== 'undefined') {
				var changeButtonColor = function(event) {
					event.data.button.css('color', event.data.color);
				};
				
				var originalColor = button.css('color');
				var hoverColor = button.data('hover-color');
				
				button.on('mouseenter', { button: button, color: hoverColor }, changeButtonColor);
				button.on('mouseleave', { button: button, color: originalColor }, changeButtonColor);
			}
		};
		
		/**
		 * Initializes button hover background color
		 * @param button current button
		 */
		var buttonHoverBgColor = function(button) {
			if(typeof button.data('hover-bg-color') !== 'undefined') {
				var changeButtonBg = function(event) {
					event.data.button.css('background-color', event.data.color);
				};

                var originalBgColor = button.css('background-color');
				var hoverBgColor = button.data('hover-bg-color');

				button.on('mouseenter', { button: button, color: hoverBgColor }, changeButtonBg);
				button.on('mouseleave', { button: button, color: originalBgColor }, changeButtonBg);
			}
		};

        /**
         * Initializes button hover background color
         * @param button current button
         */
        var buttonIconHoverBgColor = function(button) {
            if(typeof button.data('icon-bck-hover-color') !== 'undefined') {
                var changeButtonIconBg = function(event) {
                    event.data.button.find('.eltd-btn-icon-html').css('background-color', event.data.color);
                };

                var originalBgColor = button.find('.eltd-btn-icon-html').css('background-color');
                var hoverBgColor = button.data('icon-bck-hover-color');

                button.on('mouseenter', { button: button, color: hoverBgColor }, changeButtonIconBg);
                button.on('mouseleave', { button: button, color: originalBgColor }, changeButtonIconBg);
            }
        };

        /**
         * Initializes button icon hover  color
         * @param button current button
         */
        var buttonIconHoverColor = function(button) {
            if(typeof button.data('icon-hover-color') !== 'undefined') {
                var changeButtonIcon = function(event) {
                    event.data.button.find('.eltd-btn-icon-html').css('color', event.data.color);
                };

                var originalBgColor = button.find('.eltd-btn-icon-html').css('color');
                var hoverBgColor = button.data('icon-hover-color');

                button.on('mouseenter', { button: button, color: hoverBgColor }, changeButtonIcon);
                button.on('mouseleave', { button: button, color: originalBgColor }, changeButtonIcon);
            }
        };

		/**
		 * Initializes button border color
		 * @param button
		 */
		var buttonHoverBorderColor = function(button) {
			if(typeof button.data('hover-border-color') !== 'undefined') {
				var changeBorderColor = function(event) {
					event.data.button.css('border-color', event.data.color);
				};
				
				var originalBorderColor = button.css('borderTopColor'); //take one of the four sides
				var hoverBorderColor = button.data('hover-border-color');
				
				button.on('mouseenter', { button: button, color: hoverBorderColor }, changeBorderColor);
				button.on('mouseleave', { button: button, color: originalBorderColor }, changeBorderColor);
			}
		};
		
		return {
			init: function() {
				if(buttons.length) {
					buttons.each(function() {
						buttonHoverColor($(this));
						buttonHoverBgColor($(this));
						buttonHoverBorderColor($(this));
                        buttonIconHoverBgColor($(this));
                        buttonIconHoverColor($(this));
					});
				}
			}
		};
	};
	
})(jQuery);