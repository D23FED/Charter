// Popover
var popoverContactIsOpen = false;
var popover = {
	// Class added to <body> when active
	activeClass: 'popover-active',
	// Open popover
	open: function() {
		console.info('open Contact');
		$('.popover-contact').show().attr('aria-hidden',false);
		$('body').addClass(popover.activeClass);
		popoverContactIsOpen = true;
		console.info('Popover width after open:' + $('.popover-contact').width());
	},
	// Close popover
	close: function() {
		console.info('close Contact');
		$('.popover-contact').hide().attr('aria-hidden',true);
		$('body').removeClass(popover.activeClass);
		popoverContactIsOpen = false;
	},
	// Wait for xref to load before calling popover
	whenAvailable: function(name, callback) {
		var interval = 500; // ms
		window.setTimeout(function() {
			if ($(name).length > 0) {
				console.info(name + ' has loaded');
				callback();
			} else {
				console.warn(name + ' not yet loaded');
				window.setTimeout(arguments.callee, interval);
			}
		}, interval);
	}
};
popover.init = function() {
	console.info('popover domready');
	// Popover containing menu of contact info
	$menuContact = $('.popover-contact');
	// User navigation menu
	$userNavItems = $('.nav-user ul.list-inline li');
	// Contact Us nav menu item
	$menuItemContact = $userNavItems.eq(1);
	// Append popover
	$menuItemContact.append($menuContact);
	// Popover width
	popoverContactIsOpen = false;
	// Menu item click
	$menuItemContact.on('click touchend', function(e) {
		e.preventDefault();
		console.group();
		console.info('click Contact Us');
		// Check if open var is set
		var open = popoverContactIsOpen;
		popover.close();
		// if menu not open
		if (open !== true) {
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
		console.groupEnd();
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
