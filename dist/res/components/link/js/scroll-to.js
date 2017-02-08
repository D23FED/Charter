// Smooth scroll to page anchors
$(function scrollToLinkHandler() {
	// Select links whose URL begins with "#" (but is not ONLY "#")
	var linkURLSelector       = 'a[href^="#"]:not([href="#"])';
	var siteHeaderSelector    = '.site-header';
	var siteHeaderStickyClass = 'js-sticky';
	// Check for "Scroll to..." links
	if ($(linkURLSelector).length) {
		var $links = $(linkURLSelector);
	} else {
		console.error('Spectrum: No "Scroll to..." links found');
		return;
	}
	// For each link, add click handler
	$links.each(function(index, el) {
		var $this  = $(this);
		var target = $this.attr('href');
		$this.on('click', function(e) {
			e.preventDefault();
			// Check for sticky header
			var headerOffsetY = 0;
			if ($(siteHeaderSelector).hasClass(siteHeaderStickyClass)) {
				headerOffsetY = $(siteHeaderSelector).height();
			}
			// Scroll to target
			$('html, body').animate({
				scrollTop: $(target).offset().top - headerOffsetY
			}, 1000);
		});
	});
});
