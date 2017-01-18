// Popover
var popoverContactIsOpen = false;
var popover = {
	activeClass: 'popover-active',
	// Open popover
	open: function() {
		console.info('open Contact');
		$('.popover-contact').show();
		$('body').addClass(popover.activeClass);
		popoverContactIsOpen = true;
		console.info($('.popover-contact').width());
	},
	// Close popover
	close: function() {
		console.info('close Contact');
		$('.popover-contact').hide();
		$('body').removeClass(popover.activeClass);
		popoverContactIsOpen = false;
	},
	// Wait for xref to load
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
	$menuContact = $('.popover-contact');
	$userNavItems = $('.nav-user ul.list-inline li');
	$menuItemContact = $userNavItems.eq(1);
	menuItemW = $menuItemContact.width();
	menuItemH = $menuItemContact.height();
	menuItemX = $menuItemContact.offset().left + parseInt($menuItemContact.css('padding-left'));
	popoverW = $('.popover-contact').width();
	wDiff = popoverW - menuItemW;
	popoverContactIsOpen = false;
	$('.popover-contact').css('left', menuItemX);
	// Menu item click
	$menuItemContact.on('click touchend', function(e) {
		e.preventDefault();
		console.group();
		console.info('click Contact Us');
		var open = popoverContactIsOpen;
		// Menu not open
		popover.close();
		if (open !== true) {
			menuItemX = $menuItemContact.offset().left + parseInt($menuItemContact.css('padding-left'));
			$('.popover-contact').css('left', menuItemX);
			$('.popover-contact').css('top', $menuItemContact.height() + 9);
			console.info('log: ', 'menuItemX ' + menuItemX);
			console.info($('.popover-contact').width());
			popover.open();
			console.info($('.popover-contact').width());
		}
		console.groupEnd();
	});
	$(window).on('resize', function() {
		if (window.innerWidth < 768) {
			popover.close();
		}
	})
}
$(function() {
	popover.whenAvailable('.popover-contact', popover.init);
})
