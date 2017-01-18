/*
Click Services and If all are closed:


Click support and all are closed:
open support
add support class
add mmclass

Click outside menu when support menu is active or services active
close supports
close services
remove support, services, mm class

Click services
	when none active
		open services
		add services class
		add mm class
	when support active
		close support
		removes services class
		open services
		add services class
		add mm class

	when services active

*/
var $userNavItems, $servicesItem, $supportsItem, $menuServices, $menuSupport, mmSupportIsOpen, mmServicesIsOpen, mmIsOpen;
var activeClassSupport = 'menu-support-active';
var activeClassServices = 'menu-services-active';
var activeClassMegaMenu = 'megamenu-active';
var viewport = window.innerWidth;
var hideBelow = 768;
var megaMenu = {
	openServices: function() {
		console.info('open Services',$('.my-services-menu').length);
		if ($('.my-services-menu').length < 1) {
			console.error('Services menu not found');
			return;
		}
		$('.my-services-menu').show();
		$('body').addClass([activeClassMegaMenu, activeClassServices].join(' '));
		mmServicesIsOpen = true;
	},
	openSupport: function() {
		console.info('open Support',$('.support-menu').length);
		if ($('.support-menu').length < 1) {
			console.error('Support menu not found');
			return;
		}
		$('.support-menu').show();
		$('body').addClass([activeClassMegaMenu, activeClassSupport].join(' '));
		mmSupportIsOpen = true;
	},
	toggleSupport: function() {
		$('.support-menu').toggle();
		if (mmSupportIsOpen !== true) {
			$('body').addClass([activeClassMegaMenu, activeClassSupport].join(' '));
			mmIsOpen = true;
		} else {
			$('body').removeClass([activeClassSupport].join(' '));
			mmIsOpen = false;
		}
	},
	toggleServices: function() {
		$('.my-services-menu').toggle();
	},
	closeSupport: function() {
		console.info('close Support');
		$('.support-menu').hide();
		$('body').removeClass(activeClassSupport);
		mmSupportIsOpen = false;
	},
	closeServices: function() {
		console.info('close Services');
		$('.my-services-menu').hide();
		$('body').removeClass(activeClassServices);
		mmServicesIsOpen = false;
	},
	closeAll: function() {
		console.info('close All');
		$('.my-services-menu').hide();
		$('.support-menu').hide();
		$('body').removeClass([activeClassServices, activeClassSupport, activeClassMegaMenu].join(' '));
		mmIsOpen = false;
		mmServicesIsOpen = false;
		mmSupportIsOpen = false;
	},
	checkForMenus: function() {
		console.group();
		if ($('.my-services-menu').length < 1) {
			console.error('No submenu found for My Services');
		}
		if ($('.support-menu').length < 1) {
			console.error('No submenu found for Support');
		}
		console.groupEnd();
	},
	countItems: function() {
		console.info($userNavItems.length + ' menu items found');
	},
	setTop: function() {
		$menuServices.css('top', menuH)
		$menuSupport.css('top', menuH)
	},
	whenAvailable: function(name, callback) {
		var interval = 500; // ms
		window.setTimeout(function() {
			if ($(name).length > 0) {
				console.info(name + ' was found');
				callback();
			} else {
				console.warn(name + ' not found');
				window.setTimeout(arguments.callee, interval);
			}
		}, interval);
	}
};
megaMenu.init = function() {
	console.info('megamenu domready');
	$menuServices = $('.my-services-menu');
	$menuSupport = $('.support-menu');
	$userNavItems = $('.nav-user ul.list-inline li');
	$servicesItem = $userNavItems.eq(2);
	$supportsItem = $userNavItems.eq(3);
	menuH = $('.nav-user ul').height();
	megaMenu.checkForMenus();
	megaMenu.countItems();
	megaMenu.setTop();
	$servicesItem.on('click touchend', function(e) {
		e.preventDefault();
		console.info('click Services');
		var open = mmServicesIsOpen;
		// Menu not open
		megaMenu.closeAll();
		if (open !== true) {
			megaMenu.openServices();
		}
	});
	$supportsItem.on('click touchend', function(e) {
		var open = mmSupportIsOpen;
		console.info('click Support');
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
	$(window).on('resize', function() {
		if (window.innerWidth < 768) {
			megaMenu.closeAll();
		}
	})
}
$(function() {
	megaMenu.whenAvailable('.my-services-menu', megaMenu.init);
})
