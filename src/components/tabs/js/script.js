// Script from current Charter site
;
(function($) {
	"use strict";

	$.fn.tabbedComponent = function(opts) {
		return this.each(function() {
			var $tabbedComponent = $(this),
				$tabbedArrows = $tabbedComponent.find('.tab-row > ul > li'),
				$tabbedLabels = $tabbedComponent.find('.tab-row .tabbedLabel'),
				$tabbedContainer = $tabbedComponent.find('.tab-content-container'),
				hash = $.trim(window.location.hash);

			function init() {
				$tabbedLabels.find('li').each(function() {
					var $tabbedLabel = $(this),
						$tabbedContent = $tabbedLabel.closest('.tabbedRow').find('.tabbedContent'),
						id = $tabbedLabel.find('a').attr('data-ref'),
						idSpace = id.replace('#', '');

					// Add the reference id from tab label as id attribute on tab content.
					$tabbedContent.attr('id', idSpace);

					// Detach tab content from tabbedRow and append it to the tab content container.
					$tabbedContent.appendTo($tabbedContainer).show();
				});

				// Display tab contents, display contents for active tab if mobile.
				$tabbedContainer.find('.tabbedContent').hide();

				// For linking to a specific tab via anchors, ex. example.com#TabIdValue
				if (hash != '' && $tabbedLabels.find('li' + hash).length > 0) {
					$tabbedLabels.find('li' + hash).trigger('tap');
				} else {
					$tabbedLabels.filter(':first').find('li:first').trigger('tap');
				}
			}

			function clickTab() {
				var $tabLabel = $(this),
					tabReference = $tabLabel.closest('.tab-row ul li').find('a').attr('data-ref');
				$tabLabel.closest('.tab-component').find('.tab-content-container .tabbedContent').hide();
				$tabLabel.closest('.tab-component').find('.tab-content-container ' + tabReference).show();
				$tabLabel.closest('.tab-row ul').find('li').removeClass('js-active');
				$tabLabel.closest('.tab-row ul li').addClass('js-active');
			}

			// Left carousel arrow
			function arrowLeft() {
				var $activeTab = $tabbedLabels.find('li.js-active').parent(),
					activeIndex = $tabbedLabels.index($activeTab);
				if (activeIndex == 0) {
					// First tab is already selected. Cycle around to last tab.
					$tabbedLabels.last().find('li').trigger('tap');
				} else {
					var $prevTab = $tabbedLabels.eq(activeIndex - 1);
					$prevTab.find('li').trigger('tap');
				}
			}

			// Right carousel arrow
			function arrowRight() {
				var $activeTab = $tabbedLabels.find('li.js-active').parent(),
					activeIndex = $tabbedLabels.index($activeTab);
				if (activeIndex == ($tabbedLabels.length - 1)) {
					// Last tab is already selected. Cycle around to first tab.
					$tabbedLabels.first().find('li').trigger('tap');
				} else {
					var $nextTab = $tabbedLabels.eq(activeIndex + 1);
					$nextTab.find('li').trigger('tap');
				}
			}

			// Setup tap listeners
			$tabbedLabels.on('tap', 'li', clickTab);
			$tabbedArrows.first().on('tap', arrowLeft);
			$tabbedArrows.last().on('tap', arrowRight);

			// Initialize tabs (if wcmmode is not edit or design)
			// if (!Spectrum.Util.isEditOrDesignMode()) {
			init();
			// }
		});
	}
})(jQuery);
