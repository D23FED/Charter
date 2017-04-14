/* global moment, Cookies */
// MUI Reminder Alert Modal/Pushdown
var MUIAlert = {};
// Get current date
MUIAlert.now = moment();
// Set inital state
MUIAlert.active = false;
// Check for cookie
MUIAlert.lastVisit = Cookies.get('date_last_visit');
// Max hours since last visit until we show modal to same user again
MUIAlert.MAX_HOURS = 24;
// Visited recently?
MUIAlert.isRecentVisitor = false;
// Counter for the number of times we wait and look for the xref
MUIAlert.xrefCheckCounter = 0;
// Activate modal
MUIAlert.activate = function() {
	if (!MUIAlert.active) {
		// Count existing elements for debug
		// var zipButtons = $('.menu-row-top a[data-linkname="zip_location"]').length;
		// var xrefs = $('.menu-row-top .menu-row-message .simpleXref .userLocation').length;
		// Activate messagebox by clicking button
		$('.menu-row-top a[data-linkname="zip_location"]').trigger('tap');
		// Activate modal by clicking link
		$('a[target=modal]').click();
		// Set new "last visit" date only if we show the alert
		Cookies.set('date_last_visit', MUIAlert.now);
		// Set state
		MUIAlert.active = true;
		// Debug
		// $('.modal').html('<span style="color:green">Activated</span>');
		// console.info('%cSpectrum: MUI Alert Activated, ' + zipButtons + ' buttons found, ' + xrefs + ' xrefs found', 'color: green; font-weight: bold');
		$('body').addClass('js-modal-alert-active');
	}
};
// Xref loads after docready, wait for it to load before triggering MUI alert
MUIAlert.whenAvailable = function(name, callback) {
	var interval = 500; // ms
	window.setTimeout(function() {
		if ($(name).length > 0) {
			// Element found
			callback();
		} else if (MUIAlert.xrefCheckCounter < 20) {
			// Element not found, tries remaining
			MUIAlert.xrefCheckCounter++;
			window.setTimeout(arguments.callee, interval);
		} else {
			// Element not found after max # of tries
			console.error('Spectrum: Failure to initiate MUI alert. [' + name + '] was never found.');
		}
	}, interval);
};
// Testing-only, simulate old visitor timestamp
MUIAlert.setOutdatedCookie = function() {
	var oldDate = MUIAlert.now.subtract(27, 'hours');
	Cookies.set('date_last_visit', oldDate);
	// Debug
	// $('.result').text('Cookie set to ' + oldDate.format('MMM DD, HH:mm'));
	console.info('Spectrum: Cookie set to ' + oldDate.format('MMM DD, HH:mm'));
};
// Testing-only, Clear cookies for testing
MUIAlert.removeCookies = function() {
	Cookies.remove('date_last_visit');
	// Debug
	// $('.result').text('Cookies cleared');
	console.info('Spectrum: Cookies cleared');
};
// Docready
$(function() {
	// console.log('Spectrum: Initialize MUI Alert script');
	// Determine if data on last visit exists
	if (MUIAlert.lastVisit === undefined) {
		// New visitor, No previous visit stored
		// Store current date of visit as cookie
		Cookies.set('date_last_visit', MUIAlert.now);
		MUIAlert.isRecentVisitor = false;
		// Debug
		// $('.message').text('New visitor/no cookie found.');
		// $('.result').text('Current date: ' + MUIAlert.now.format('YYYY-MM-DD, HH:mm'));
		// console.log('Spectrum: New visitor/no cookie found.');
		// console.info('Spectrum: Current date: ' + MUIAlert.now.format('YYYY-MM-DD, HH:mm'));
	} else {
		// 	Return visitor, date cookie found
		// 	Compare last visit vs current date
		var diffSinceLastVisit = MUIAlert.now.diff(MUIAlert.lastVisit, 'hours');
		// If it's been longer than the max, not recent visitor
		if (diffSinceLastVisit > MUIAlert.MAX_HOURS) {
			MUIAlert.isRecentVisitor = false;
		} else {
			// Last visit was below maximum time elapsed
			MUIAlert.isRecentVisitor = true;
		}
		// Debug
		// var diffSinceLastVisitMins = MUIAlert.now.diff(MUIAlert.lastVisit, 'seconds');
		// $('.message').text('Return visitor/cookie found. Visited ' + diffSinceLastVisit + ' hours (' + diffSinceLastVisitMins + ' seconds) ago.');
		// $('.result').text('Recent visitor: ' + MUIAlert.isRecentVisitor);
		// console.log('Spectrum: Return visitor/cookie found. Visited ' + diffSinceLastVisit + ' hours (' + diffSinceLastVisitMins + ' seconds) ago.');
		// console.info('Spectrum: Recent visitor: ' + MUIAlert.isRecentVisitor);
	}
	// If not recent visitor, show modal
	if (MUIAlert.isRecentVisitor) {
		// Debug
		// $('.modal').html('<span style="color:red">Hidden</span>');
		// console.info('%cSpectrum: MUI Alert Not Activated', 'color: red; font-weight: bold');
		$('body').addClass('js-modal-alert-inactive');
	} else {
		// MUIAlert.activate();
		MUIAlert.whenAvailable('.simpleXref .userLocation', MUIAlert.activate);
	}
	// Testing-only buttons
	$('button.clear').on('click', function() {
		MUIAlert.removeCookies();
	});
	$('button.old').on('click', function() {
		MUIAlert.setOutdatedCookie();
	});
})
