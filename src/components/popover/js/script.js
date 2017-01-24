// Popover
// Access page
var popover = {
	activeClass: 'popover-active',
	containerSelector: '.popover-contact',
	buttonSelector: '.cta-contact a.btn',
	closeButtonSelector: '.close-message',
	isOpen: false,
	hideBelow: 768,
	closeButton: $('<div/>', { 'class': 'close-message spectrum-icon-only icon-remove-sign' })
};
// Open Popover
popover.open = function() {
	$(popover.containerSelector).show().attr('aria-hidden', false);
	$('body').addClass(popover.activeClass);
	popover.isOpen = true;
};
// Close Popover
popover.close = function() {
	$(popover.containerSelector).hide().attr('aria-hidden', true);
	$('body').removeClass(popover.activeClass);
	popover.isOpen = false;
};
// Wait for xref to load before calling Popover
popover.whenAvailable = function(name, callback) {
	var interval = 500; // ms
	window.setTimeout(function() {
		if ($(name).length > 0) {
			// console.info(name + ' was found');
			callback();
		} else if (popover.xrefCheckCounter < 20) {
			// console.warn(name + ' not found, tries:',popover.xrefCheckCounter);
			popover.xrefCheckCounter++;
			window.setTimeout(arguments.callee, interval);
		} else {
			console.error('"Contact Us" popover failed to initialize: ' + name + ' was not found.');
		}
	}, interval);
};
// Initialize Popover
popover.init = function() {
	// Popover containing menu of contact info
	popover.$menuContact = $(popover.containerSelector);
	// Contact Us nav menu item
	popover.$menuItemContact = $(popover.buttonSelector);
	// Append close button
	popover.$menuContact.addClass('popover-content-access-page').append(popover.closeButton);
	// Append popover
	popover.$menuItemContact.append(popover.$menuContact).css('position', 'relative');
	// Menu item click
	popover.$menuItemContact.on('click touchend', function(e) {
		e.preventDefault();
		e.stopPropagation();
		console.dir((e.target));
		// Check if open var is set
		var openState = popover.isOpen;
		popover.close();
		// if menu was not open
		if (openState !== true) {
			popover.menuItemH = popover.$menuItemContact.outerHeight() + popover.$menuItemContact.offset().top;
			// Height of "arrow" in px on outside of box to make it look like a word bubble
			popover.menuArrowH = 9;
			// Y position of popover menu
			popover.popoverY = popover.menuItemH + popover.menuArrowH;
			// Set menu top to nav menu item height + height of "arrow" on top center of box around the nav menu
			popover.$menuContact.css('top', popover.popoverY);
			popover.open();
		}
	});
	// "unbind" child links
	$([popover.buttonSelector,popover.containerSelector,'a'].join(' ')).on('click touchend', function(e) {
		e.stopPropagation();
	});
	// Close button click
	$(popover.closeButtonSelector).on('click touchend', function(e) {
		e.preventDefault();
		popover.close();
	});
	// Close menu at smallest breakpoint
	$(window).on('resize', function() {
		if (window.innerWidth < popover.hideBelow) {
			popover.close();
		}
	});
};
// Wait for popover Xref to load, then initialize script
$(function() {
	popover.whenAvailable(popover.containerSelector, popover.init);
});
