/* Megamenu (My Services and Support menu items) v2 */
var megaMenu = {
	activeClassSupport: 'menu-support-active',
	activeClassServices: 'menu-services-active',
	activeClass: 'megamenu-active',
	hideBelow: 768,
	mmSupportIsOpen: false,
	mmServicesIsOpen: false,
	mmIsOpen: false,
	xrefCheckCounter: 0
};
// Open My Services Menu
megaMenu.openServices = function() {
	// console.info('open Services', $('.my-services-menu').length);
	if ($('.my-services-menu').length < 1) {
		// console.error('Services menu not found');
		return;
	}
	$('.my-services-menu').show().attr('aria-hidden', false);
	$('body').addClass([megaMenu.activeClass, megaMenu.activeClassServices].join(' '));
	megaMenu.mmServicesIsOpen = true;
};
// Open Support Menu
megaMenu.openSupport = function() {
	// console.info('open Support', $('.support-menu').length);
	if ($('.support-menu').length < 1) {
		// console.error('Support menu not found');
		return;
	}
	$('.support-menu').show().attr('aria-hidden', false);
	$('body').addClass([megaMenu.activeClass, megaMenu.activeClassSupport].join(' '));
	megaMenu.mmSupportIsOpen = true;
};
// Close My Services Menu
megaMenu.closeServices = function() {
	// console.info('close Services');
	$('.my-services-menu').hide().attr('aria-hidden', true);
	$('body').removeClass(megaMenu.activeClassServices);
	megaMenu.mmServicesIsOpen = false;
};
// Close Support Menu
megaMenu.closeSupport = function() {
	// console.info('close Support');
	$('.support-menu').hide().attr('aria-hidden', true);
	$('body').removeClass(megaMenu.activeClassSupport);
	megaMenu.mmSupportIsOpen = false;
};
// Close all menus
megaMenu.closeAll = function() {
	// console.info('close All');
	$('.my-services-menu').hide().attr('aria-hidden', true);
	$('.support-menu').hide().attr('aria-hidden', true);
	$('body').removeClass([megaMenu.activeClassServices, megaMenu.activeClassSupport, megaMenu.activeClass].join(' '));
	megaMenu.mmIsOpen = false;
	megaMenu.mmServicesIsOpen = false;
	megaMenu.mmSupportIsOpen = false;
};
// Check that menu xrefs have loaded
megaMenu.checkForMenus = function() {
	// console.group();
	if ($('.my-services-menu').length < 1) {
		// console.error('No submenu found for My Services');
	}
	if ($('.support-menu').length < 1) {
		// console.error('No submenu found for Support');
	}
	// console.groupEnd();
};
// Count # of User Nav menu items
megaMenu.countItems = function() {
	// console.info(megaMenu.$userNavItems.length + ' menu items found');
};
// Set the y coordinate of the megamenu's position
megaMenu.setTop = function() {
	megaMenu.$menuServices.css('top', megaMenu.menuH);
	megaMenu.$menuSupport.css('top', megaMenu.menuH);
};
// Wait for megamenu xrefs to load before initializing
megaMenu.whenAvailable = function(name, callback) {
	var interval = 500; // ms
	window.setTimeout(function() {
		if ($(name).length > 0) {
			// console.info(name + ' was found');
			callback();
		} else if (megaMenu.xrefCheckCounter < 20) {
			// console.warn(name + ' not found, tries:',megaMenu.xrefCheckCounter);
			megaMenu.xrefCheckCounter++;
			window.setTimeout(arguments.callee, interval);
		} else {
			console.error(name + ' was never found, giving up');
		}
	}, interval);
};
// Initialize megamenu
megaMenu.init = function() {
	console.info('megamenu domready v1.4');
	megaMenu.$menuServices = $('.my-services-menu');
	megaMenu.$menuSupport = $('.support-menu');
	megaMenu.$userNavItems = $('.nav-user ul.list-inline li');
	megaMenu.$servicesItem = megaMenu.$userNavItems.eq(2);
	megaMenu.$supportItem = megaMenu.$userNavItems.eq(3);
	megaMenu.menuH = $('.nav-user ul').height();
	// megaMenu.checkForMenus();
	// megaMenu.countItems();
	megaMenu.setTop();
	// My Services menu item click handler
	megaMenu.$servicesItem.on('click touchend', function(e) {
		e.preventDefault();
		// console.info('click Services');
		var open = megaMenu.mmServicesIsOpen;
		// Menu not open
		megaMenu.closeAll();
		if (open !== true) {
			megaMenu.openServices();
		}
	});
	// Support menu item click handler
	megaMenu.$supportItem.on('click touchend', function(e) {
		var open = megaMenu.mmSupportIsOpen;
		// console.info('click Support');
		e.preventDefault();
		megaMenu.closeAll();
		// Menu not open
		if (open !== true) {
			megaMenu.openSupport();
		}
	});
	// $('body').on('click touchend', function(e) {
	// 	megaMenu.closeSupport();
	// 	megaMenu.closeServices();
	// });
	// Hide megamenus at small breakpoint
	$(window).on('resize', function() {
		if (window.innerWidth < megaMenu.hideBelow) {
			megaMenu.closeAll();
		}
	});
};
// Initialize menu after xrefs have loaded
$(function() {
	megaMenu.whenAvailable('.my-services-menu', megaMenu.init);
});
