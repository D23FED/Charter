// Append modals to <body>. Prevent z-index errors.
var modalHelper = {
	targetSelector: '#mui-modal',
	modalSelector: '.modal',
	xrefCheckCounter: 0;
}
// Wait for xref to load modal
modalHelper.whenAvailable = function(name, callback) {
	var interval = 500; // ms
	window.setTimeout(function() {
		if ($(name).length > 0) {
			// Element found
			callback();
		} else if (modalHelper.xrefCheckCounter < 20) {
			// Element not found
			modalHelper.xrefCheckCounter++;
			window.setTimeout(arguments.callee, interval);
		} else {
			// Element not found after max # of tries
			console.error('Failure to initiate modal: ' + name + ' was never found.');
		}
	}, interval);
};
// Initialize Modal helper
modalHelper.init = function() {
	$(modalHelper.modalSelector).each(function() {
		$('body').append($(this));
	})
}
// Wait for modal Xref to load, then initialize script
$(function() {
	modalHelper.whenAvailable(modalHelper.targetSelector, modalHelper.init);
})
