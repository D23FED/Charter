	$(function() {
		/* Toggle megamenu on menu item click */
		$('.mega-menu-item').on('click', function(e) {
			$(this).find('.sub-menu-item').toggle();
		});
		/* Set top of hamburger menu to bottom of page header */
		// Grab height of page header
		$header = $('.menu-row-main');
		$nav = $('.navbar-sm .navbar-collapse');
		headerH = $header.outerHeight();

		function setMenuTop() {
			if ($header.length > 0 && $nav.length > 0) {
				$nav.css('top', headerH);
			} else {
				console.error('Spectrum: Page header or hamburger menu not found');
			}
		}
		// Trim whitespace from megamenu links
		$('.mega-menu .sub-menu-item :not(.spectrum-first) .linkLabel').each(function(i, el) {
			$(this).replaceWith('<span class=\'linkLabel\'>' + $(this).text().trim() + '<span class=\'ff-charter\'>\u00a0\ue601</span>' + '</span>');
		});
		// Call menu position function once at load
		setMenuTop();
		// Call Call menu position function on resize
		$(window).on('resize', function() {
			_.debounce(setMenuTop, 150);
		});
	});
