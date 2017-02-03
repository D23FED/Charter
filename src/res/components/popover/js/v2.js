// Popover
// Used on Access Page "Contact Us" button
var popover = {
	activeClass: 'popover-active',
	containerSelector: '.popover-contact',
	buttonSelector: '.cta-contact a.btn',
	closeButtonSelector: '.close-message',
	hideBelow: 768,
	isOpen: false,
	xrefCheckCounter: 0,
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
			// Element found
			callback();
		} else if (popover.xrefCheckCounter < 20) {
			// Element not found
			// console.warn(name + ' not found, tries:', popover.xrefCheckCounter);
			popover.xrefCheckCounter++;
			window.setTimeout(arguments.callee, interval);
		} else {
			// Element not found after max # of tries
			console.error('Failure to initiate "Contact Us" popover: ' + name + ' was never found.');
		}
	}, interval);
};
// Initialize Popover
popover.init = function() {
	console.info('Popover Init');
	// Popover containing menu of contact info
	popover.$menuContact = $(popover.containerSelector);
	// Contact Us nav menu item
	popover.$menuItemContact = $(popover.buttonSelector);
	// Append popover
	popover.$menuItemContact.append(popover.$menuContact);
	// Append close button
	popover.$menuContact.append(popover.closeButton);
	// Close menu if user clicks outside of menu
	$('body').on('click touchend', function(e) {
		var $t = $(e.target);
		if (
			popover.isOpen &&
			!$t.is(popover.containerSelector) &&
			!$t.parents(popover.containerSelector).length) {
			popover.close();
		}
	});
	// Menu item click
	popover.$menuItemContact.on('click touchend', function(e) {
		e.preventDefault();
		e.stopPropagation();
		// Check if open var is set
		var openState = popover.isOpen;
		popover.close();
		// if menu was not open
		if (openState !== true) {
			popover.menuItemH = popover.$menuItemContact.outerHeight();
			// Height of "arrow" in px on outside of box to make it look like a word bubble
			popover.menuArrowH = 9;
			// Y position of popover menu
			popover.popoverY = popover.menuItemH + popover.menuArrowH;
			// Set menu top to nav menu item height + height of "arrow" on top center of box around the nav menu
			popover.$menuContact.css('top', popover.popoverY);
			console.log(popover.popoverY,popover.menuItemH);
			popover.open();
		}
	});
	// "unbind" child links
	popover.$menuItemContact.find([popover.containerSelector, 'a'].join(' ')).on('click touchend', function(e) {
		e.stopPropagation();
	});
	// Click close button
	popover.$menuContact.find(popover.closeButtonSelector).on('click touchend', function(e) {
		e.stopPropagation();
		popover.close();
	});
	// Close menu at smallest breakpoint
	$(window).on('resize', function() {
		if (window.innerWidth < popover.hideBelow) {
			popover.close();
		}
	});
}
// Wait for popover Xref to load, then initialize script
$(function() {
	popover.whenAvailable(popover.containerSelector, popover.init);
})
