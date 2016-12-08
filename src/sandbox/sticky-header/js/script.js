/* global $ */
// Sticky Header
// Smallest breakpoint: Header is sticky, promo banner is not
// Larger breakpoints: Header and promo banner are sticky
'use strict';


(function() {
	console.log('sticky scroll handler init');

	$(function () {
		var $pageHeader = $('.site-header'); // page <header>
		var $stickyEl   = $('.nav-sticky'); // element to make sticky
		var $navbar     = $('.navbar-primary'); // primary <nav> (same as $stickyEl)
		var $promo      = $('.bts-productheader'); // promo banner underneath header
		var $body       = $('body');
		var stickyClass = 'js-sticky';
		var breakpoints = {
			sm: 768
		};
		console.log('domready');

		$(window).scroll(function () {

			var newHeight;
			var promoHeight = $promo.height();
			var headerHeight = $stickyEl.height();
			console.log('scroll',newHeight,$navbar.attr('class'));

			// User has scrolled
			if( $(this).scrollTop() > 0 ) {
				// Smallest breakpoint
				if ( window.innerWidth < breakpoints.sm ) {
					console.log('small, scrolled',$navbar.attr('class') )
					newHeight = headerHeight;
					$navbar.addClass(stickyClass);
				} else {
					console.log('large, scrolled',$pageHeader.attr('class'))
					// Account for promo height on large breakpoints
					newHeight = promoHeight + headerHeight;
					$pageHeader.addClass(stickyClass);
				}
				$body.css('padding-top', newHeight + 'px');
			}

			// User has not scrolled/top of page
			else {
				if ( window.innerWidth < breakpoints.sm) {
					console.log('small, not scrolled',$navbar.attr('class'))
					$navbar.removeClass(stickyClass);
				} else {
					console.log('large, not scrolled',$pageHeader.attr('class'))
					$pageHeader.removeClass(stickyClass);
				}
				$body.css('padding-top','');
			}

		});
	});

})();
