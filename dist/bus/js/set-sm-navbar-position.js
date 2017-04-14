/* global $, _ */
// Set top of hamburger menu to bottom of page header
(function($) {
	$(function() {
		// Grab height of page header
		$header = $('.menu-row-main');
		$nav = $('.navbar-sm .navbar-collapse');
		headerH = $header.outerHeight();

		function setMenuTop() {
			if ($header.length > 0 && $nav.length > 0) {
				$nav.css('top', headerH);
			} else {
				console.error("Spectrum: Page header or hamburger menu not found");
			}
		}
		// Call once at load
		setMenuTop();
		// Call on resize
		$(window).on('resize', function() {
			_.debounce(setMenuTop, 150);
		});
	});
})(jQuery);
