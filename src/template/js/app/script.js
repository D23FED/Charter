/* global $, jquery */
(function() {
	'use strict';
	console.log('Global Template JS loaded');
	$('html').removeClass('no-js');
	// var G;
	// G.$lobSwitchButton = $('.lob-switch');
	// G.$lobSwitchLabel = $('.lob-switch');
	// G.$lobStyle = $('.lob-name');
	// // Refactor so that a list of all LOBs is displayed
	// $('.lob-switch').click(function() {
	// 	if($('#lobStyle').attr("href") == "css/style1.css") {
	// 		$('#lobStyle').attr('href', 'css/style2.css');
	// 		$('#cssChange').text('Residential');
	// 	} else if($('#lobStyle').attr("href") == "css/style2.css") {
	// 		$('#lobStyle').attr('href', 'css/style1.css');
	// 		$('#cssChange').text('Business');
	// 	};
	// 	return false;
	// });
})();
var mq = {
	'message': 'mq-message',
	'container': 'mq-notify-wrapper'
}
mq.init = function() {
	if ( $(['.',mq.container].join('')).length < 1) {
		console.info('mq init');
		var $container = $('<div/>', { 'class': mq.container });
		var $message = $('<p/>', { 'class': mq.message });
		// Container
		$container.css('position', 'fixed');
		$container.css('bottom', '0');
		$container.css('right', '0');
		$container.css('width', '100px');
		$container.css('height', '25px');
		$container.css('background-color', 'black');
		// Message
		$message.css('padding', '10px 10px 0');
		$message.css('margin-bottom', '0');
		$message.css('position', 'absolute');
		$message.css('bottom', '3px');
		$message.css('line-height', '1');
		$message.css('right', '0');
		$message.css('text-align', 'right');
		$message.css('color', 'white');
		$message.text('Wat');
		$container.append($message[0]);
		$('body').append($container[0]);
		mq.update();
	}
}
mq.update = function() {
	console.info('mq update',window.innerWidth);
	var viewport = window.innerWidth;
	var $target = $(['.',mq.message].join(''));
	if (viewport < 768) {
		$target.text('Extra Small');
	} else if (viewport < 992) {
		$target.text('Small');
	} else if (viewport < 1200) {
		$target.text('Medium');
	} else {
		$target.text('Large');
	}
}

$(function() {
	// mq.init();
	$(window).on('resize', function() {
		console.info('resize', window.innerWidth);
		// mq.update();
	})
});
