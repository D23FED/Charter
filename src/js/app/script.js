/* global $, jquery */
(function() {
	'use strict';
	console.log('testing global app js');

	var G;

	G.$lobSwitchButton = $('.lob-switch');
	G.$lobSwitchLabel = $('.lob-switch');
	G.$lobStyle = $('.lob-name');

	// Refactor so that a list of all LOBs is displayed
	$('.lob-switch').click(function() {
		if($('#lobStyle').attr("href") == "css/style1.css") {
			$('#lobStyle').attr('href', 'css/style2.css');
			$('#cssChange').text('Residential');
		} else if($('#lobStyle').attr("href") == "css/style2.css") {
			$('#lobStyle').attr('href', 'css/style1.css');
			$('#cssChange').text('Business');
		};
		return false;
	});

})();
