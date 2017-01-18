// Popover
var popoverContactIsOpen = false;
var popover = {
	// Class added to <body> when active
	activeClass: 'popover-active',
	// Open popover
	open: function() {
		console.info('open Contact');
		$('.popover-contact').show();
		$('body').addClass(popover.activeClass);
		popoverContactIsOpen = true;
		console.info('Popover width after open:' + $('.popover-contact').width());
	},
	// Close popover
	close: function() {
		console.info('close Contact');
		$('.popover-contact').hide();
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
	menuItemW = $menuItemContact.width();
	menuItemH = $menuItemContact.height();
	menuItemX = $menuItemContact.offset().left + parseInt($menuItemContact.css('padding-left'));
	// Append popover
	$menuItemContact.append($menuContact);
	// Popover width
	popoverW = $('.popover-contact').width();
	wDiff = popoverW - menuItemW;
	popoverContactIsOpen = false;
	// Set popover's position based on nav menu item position
	$('.popover-contact').css('left', menuItemX);
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
			// Set menu left to nav menu item position, ignoring padding
			menuItemX = $menuItemContact.offset().left;
			menuItemH = $menuItemContact.height();
			// Height of "arrow" in px on outside of box to make it look like a word bubble
			menuArrowH = 9;
			menuItemPadding = parseInt($menuItemContact.css('padding-left'));
			siteHeaderOffset = $('.site-header-top').offset().left;
			popoverX = (menuItemX + menuItemPadding) - siteHeaderOffset;
			popoverY = menuItemH + menuArrowH;
			$('.popover-contact').css('left', popoverX);
			// Set menu top to nav menu item height, plus height of "arrow" on top center of box around the nav menu
			$('.popover-contact').css('top', popoverY);
			console.info('log: ', 'menuItemX ' + menuItemX);
			console.info('Popover width after click:' + $('.popover-contact').width());
			popover.open();
			console.info('Popover width after click & open:' + $('.popover-contact').width());
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
