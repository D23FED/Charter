// Charter AHA PRODB-228
// Equal height columns
var matchHeight = function(el, box) {
	var maxH = 0;
	// Modify box-sizing?
	if (box === undefined) {
		box = false;
	}
	// Get max height
	$(el).each(function() {
		var h = $(this).height();
		if (h > maxH) {
			maxH = h;
		}
	})
		// Apply to each group member
		.each(function () {
			$(this).css('min-height', maxH);
			if (box === true) {
				$(this).css('box-sizing', 'content-box');
			}
		});
};
// Height of Offer Details columns
$(function() {
	matchHeight('.package-columns .accordionTableRow .row-details');
});
