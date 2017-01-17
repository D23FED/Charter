var $userNavItems = $('.nav-user ul.list-inline li');
var $myServicesItem = $userNavItems.eq(2);
var $supportsItem = $userNavItems.eq(3);
var $menuMyServices = $('my-services-menu');
var $menuSupport = $('support-menu');
var activeClassSupport = 'menu-support-active';
var activeClassMyServices = 'menu-services-active';
var $viewport = window.innerWidth;
var hideBelow = 768;
var megaMenu = {
	closeSupport: function() {
		console.info('close support');
		$menuSupport.hide(100);
		$('body').removeClass(activeClassSupport);
	},
	closeServices: function() {
		console.info('close services');
		$menuMyServices.hide(100);
		$('body').removeClass(activeClassMyServices);
	}
}
$(function() {
	console.info('dom');
	$myServicesItem.on('click touchend', function(e) {
		console.info('click services');
		e.preventDefault();
		megaMenu.closeSupport();
		$('.my-services-menu').toggle(100);
	});
	$supportsItem.on('click touchend', function(e) {
		e.preventDefault();
		megaMenu.closeServices();
		$('.my-services-menu').toggle(100);
	});
	$('body').on('click touchend', function(e) {
		megaMenu.closeSupport();
		megaMenu.closeServices();
	});
	$(window).on('resize',function(){
		if( window.innerWidth < 768 ) {
			megaMenu.closeSupport();
			megaMenu.closeServices();
		}
	})
})
