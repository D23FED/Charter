/* global $, Spectrum */
// Sticky Header
// Smallest breakpoint: Header is sticky, promo banner is not
// Larger breakpoints: Header and promo banner are sticky
'use strict';

(function() {
	console.log('sticky scroll handler init');

	$(function() {
		var $body = $('body');
		var $pageHeader = $('.site-header'); // page <header>
		var $promo = $('.banner-promo'); // promo banner underneath header
		var stickyClass = 'js-sticky';
		var breakpoints = {
			sm: 768
		};

		// Disable while authoring
		if (Spectrum !== undefined && Spectrum.Util.isEditOrDesignMode()) {
			console.warn('Sticky header disabled while authoring');
			return;
		}

		console.log('Sticky header enabled');

		var updateHeader = function() {
			console.log('updateHeader');

			// User has scrolled
			if ($(window).scrollTop() > 0) {
				console.log('Middle of page');

				// On mobile, hide promo banner
				if (window.innerWidth < breakpoints.sm) {
					$promo.hide();
				}

				var headerHeight = $pageHeader.height();
				$pageHeader.addClass(stickyClass);
				console.log($pageHeader);
				console.log('Header class:',$pageHeader.attr('class'));
				$body.css('padding-top', headerHeight + 'px');
			}

			// User has not scrolled/top of page
			else {
				console.log('Top of page');
				$promo.show();
				$pageHeader.removeClass(stickyClass);
				$body.css('padding-top', '');
			}
		};

		$(window).on('scroll resize', function() {
			updateHeader();
		});
	});
})();
