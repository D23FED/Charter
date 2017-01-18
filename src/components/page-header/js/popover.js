// Popover
var popover = {
	activeClass: 'popover-active',
	isOpen: false
};
// Open Popover
popover.open = function() {
	// console.info('open Contact');
	$('.popover-contact').show().attr('aria-hidden', false);
	$('body').addClass(popover.activeClass);
	popover.isOpen = true;
};
// Close Popover
popover.close = function() {
	// console.info('close Contact');
	$('.popover-contact').hide().attr('aria-hidden', true);
	$('body').removeClass(popover.activeClass);
	popover.isOpen = false;
};
// Wait for xref to load before calling Popover
popover.whenAvailable = function(name, callback) {
	var interval = 500; // ms
	window.setTimeout(function() {
		if ($(name).length > 0) {
			callback();
			// console.info(name + ' has loaded');
		} else {
			window.setTimeout(arguments.callee, interval);
			// console.warn(name + ' not yet loaded');
		}
	}, interval);
};
// Initialize Popover
popover.init = function() {
	// console.info('popover domready');
	// Popover containing menu of contact info
	$menuContact = $('.popover-contact');
	// User navigation menu
	$userNavItems = $('.nav-user ul.list-inline li');
	// Contact Us nav menu item
	$menuItemContact = $userNavItems.eq(1);
	// Append popover
	$menuItemContact.append($menuContact);
	// Menu item click
	$menuItemContact.on('click touchend', function(e) {
		e.preventDefault();
		// console.group();
		// console.info('click Contact Us');
		// Check if open var is set
		var openState = popover.isOpen;
		popover.close();
		// if menu was not open
		if (openState !== true) {
			// menuItemX = $menuItemContact.offset().left;
			menuItemH = $menuItemContact.height();
			// menuItemPadding = parseInt($menuItemContact.css('padding-left'));
			// Height of "arrow" in px on outside of box to make it look like a word bubble
			menuArrowH = 9;
			// siteHeaderOffset = $('.site-header-top').offset().left;
			// x and y position of popover menu
			// popoverX = (menuItemX + menuItemPadding) - siteHeaderOffset;
			popoverY = menuItemH + menuArrowH;
			// Set menu left to nav menu item position, ignoring padding
			// $('.popover-contact').css('left', popoverX);
			// Set menu top to nav menu item height, plus height of "arrow" on top center of box around the nav menu
			$('.popover-contact').css('top', popoverY);
			popover.open();
		}
		// console.groupEnd();
	});
	// Close menu at smallest breakpoint
	$(window).on('resize', function() {
		if (window.innerWidth < 768) {
			popover.close();
		}
	})
}
// Wait for popover Xref to load, then initialize script
$(function() {
	popover.whenAvailable('.popover-contact', popover.init);
})
