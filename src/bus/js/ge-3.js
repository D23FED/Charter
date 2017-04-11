/* global $, jQuery, _, Spectrum */
Spectrum.MegaMenu            = {};
Spectrum.MegaMenu.debug      = false;
Spectrum.MegaMenu.setMenuTop = function() {
	if (Spectrum.MegaMenu.debug) { console.info('setMenuTop() called'); }
	// Get page header height
	var $header = $('.menu-row-main');
	var $nav    = $('.navbar-sm .navbar-collapse');
	var headerH = $header.outerHeight();
	if ($header.length > 0 && $nav.length > 0) {
		$nav.css('top', headerH);
		if (Spectrum.MegaMenu.debug) { console.info('Menu Top set to', headerH, $nav.css('top')); }
	} else { console.error('Spectrum: Page header or hamburger menu not found'); }
};
jQuery(function() {
	/* Toggle megamenu on menu item click */
	$('.mega-menu-item').on('click', function() {
		$(this).find('.sub-menu-item').toggle();
	});
	/* Set top of small primary nav menu to bottom of page header */
	// function setMenuTop() {
	// }
	/* Trim whitespace from megamenu links */
	$('.mega-menu .sub-menu-item :not(.spectrum-first) .linkLabel').each(function() {
		$(this).replaceWith('<span class=\'linkLabel\'>' + $(this).text().trim() + '<span class=\'ff-charter\' \'text-icon\'>\u00a0\ue601</span>' + '</span>');
	});
	// Call menu position function once at load
	// Spectrum.MegaMenu.setMenuTop();
	$(window).load(function() {
		Spectrum.MegaMenu.setMenuTop();
	});
	// Call menu position function on resize
	$(window).on('resize', _.debounce(Spectrum.MegaMenu.setMenuTop, 150));
});
