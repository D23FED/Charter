// Popover
var popover = {
	activeClass: 'popover-active',
	containerSelector: '.popover-contact',
	closeButtonSelector: '.close-message',
	hideBelow: 768,
	isOpen: false,
	xrefCheckCounter: 40
	closeButton: $('div',{'class':'close-message spectrum-icon-only icon-remove-sign'})
};
// Open Popover
popover.open = function() {
	// console.info('open Contact');
	$(popover.containerSelector).show().attr('aria-hidden', false);
	$('body').addClass(popover.activeClass);
	popover.isOpen = true;
};
// Close Popover
popover.close = function() {
	// console.info('close Contact');
	$(popover.containerSelector).hide().attr('aria-hidden', true);
	$('body').removeClass(popover.activeClass);
	popover.isOpen = false;
};
// Wait for xref to load before calling Popover
popover.whenAvailable = function(name, callback) {
	var interval = 500; // ms
	window.setTimeout(function() {
		if ($(name).length > 0) {
			// Element found
			callback();
		} else if (popover.xrefCheckCounter < 20) {
			// Element not found
			console.warn(name + ' not found, tries:',popover.xrefCheckCounter);
			popover.xrefCheckCounter++;
			window.setTimeout(arguments.callee, interval);
		} else {
			// Element not found after max # of tries
			console.error('Failure to initiate "Contact Us" popover: '+ name + ' was never found.');
		}
	}, interval);
};
// Initialize Popover
popover.init = function() {
	// console.info('popover domready');
	// Popover containing menu of contact info
	popover.$menuContact = $(popover.containerSelector);
	popover.$btnClose = $('.popover-contact-xref .close-message');
	// User navigation menu
	popover.$userNavItems = $('.nav-user ul.list-inline li');
	// Contact Us nav menu item
	popover.$menuItemContact = popover.$userNavItems.eq(1);
	// Append popover
	popover.$menuItemContact.append(popover.$menuContact);
	// Append close button
	// popover.$menuContact.append(popover.closeButton);
	// Menu item click
	popover.$menuItemContact.find('a.btn').on('click touchend', function(e) {
		e.preventDefault();
		// console.group();
		console.info('click Contact Us');
		// Check if open var is set
		var openState = popover.isOpen;
		popover.close();
		// if menu was not open
		if (openState !== true) {
			// menuItemX = popover.$menuItemContact.offset().left;
			popover.menuItemH = popover.$menuItemContact.height();
			// menuItemPadding = parseInt(popover.$menuItemContact.css('padding-left'));
			// Height of "arrow" in px on outside of box to make it look like a word bubble
			popover.menuArrowH = 9;
			// siteHeaderOffset = $('.site-header-top').offset().left;
			// x and y position of popover menu
			// popoverX = (menuItemX + menuItemPadding) - siteHeaderOffset;
			popover.popoverY = popover.menuItemH + popover.menuArrowH;
			// Set menu left to nav menu item position, ignoring padding
			// $(popover.containerSelector).css('left', popoverX);
			// Set menu top to nav menu item height, plus height of "arrow" on top center of box around the nav menu
			popover.$menuContact.css('top', popover.popoverY);
			popover.open();
		}
		// console.groupEnd();
	});
	// "unbind" child links
	popover.$menuItemContact.find([popover.containerSelector,'a']).on('click touchend', function(e) {
		e.stopPropagation();
	});
	// Click close button
	popover.$menuContact.find('.close-message').on('click touchend', function(e) {
		console.info('click Close button');
		popover.close();
	});
	// Close menu at smallest breakpoint
	$(window).on('resize', function() {
		if (window.innerWidth < popover.hideBelow) {
			popover.close();
		}
	})
}
// Wait for popover Xref to load, then initialize script
$(function() {
	popover.whenAvailable(popover.containerSelector, popover.init);
})
