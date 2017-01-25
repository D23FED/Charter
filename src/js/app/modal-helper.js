// Modal Helper v1
// Append modals to <body>, preventing CSS conflicts
if (modalHelper) {
	console.error('Modal Helper already initiated on page.');
	return;
};
var modalHelper = {
	modalSelector: '.modal',
	xrefCheckCounter: 0,
	debug: false
}
// Wait for Xref to load Modal
modalHelper.whenAvailable = function(name, callback) {
	var interval = 500; // ms
	window.setTimeout(function() {
		if ($(name).length > 0) {
			// Element found
			callback();
		} else if (modalHelper.xrefCheckCounter < 20) {
			// Element not found, tries remaining
			modalHelper.xrefCheckCounter++;
			window.setTimeout(arguments.callee, interval);
		} else {
			// Element not found after max # of tries
			console.error('Spectrum: Failure to initiate modal helper. ' + name + ' was never found.');
		}
	}, interval);
};
// Initialize Modal helper
modalHelper.init = function() {
	// Append all modals to <body>
	$(modalHelper.modalSelector).each(function() {
		$('body').append($(this));
	})
}
// Wait for Modal Xref to load, then initialize script
$(function() {
	modalHelper.whenAvailable(modalHelper.modalSelector, modalHelper.init);
})
