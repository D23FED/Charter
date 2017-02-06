// Smooth scroll to page anchors
// Links follow pattern:
// <div id="link-[NAME]"><a id="[NAME]"></a></div>
// or
// <div class="product-scroll-*"><a id="[NAME]"></a></div>
$(function scrollToLinkHandler() {
	// List of all link wrapper DIV IDs
	var links = [];
	var linkWrapSelector;
	var linkWrapIdPrefix = 'link-';
	var linkWrapIdSelector = '[id^="' + linkWrapIdPrefix + '"]';
	var linkWrapClassSelector = '[class^="product-scroll"]';
	var siteHeaderSelector = '.site-header';
	var siteHeaderStickyClass = 'js-sticky';
	// Find link wrappers by class or ID (naming is inconsistent)
	if ($(linkWrapClassSelector).length) {
		linkWrapSelector = linkWrapClassSelector;
	} else if ($(linkWrapIdSelector).length) {
		linkWrapSelector = linkWrapIdSelector;
	} else {
		console.error('Spectrum: No "Scroll to..." links found');
		return;
	}
	// Collect array of links
	$(linkWrapSelector).each(function() {
		var id = $(this).find('a').attr('href');
		links.push(id);
	})
	// For each link, add click handler
	$.each(links, function(key, value) {
		var target = value;
		$(['a[href="', target, '"]'].join('')).on('click', function(e) {
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
			console.info(target, $(target).offset().top, headerOffsetY);
		});
	});
});
