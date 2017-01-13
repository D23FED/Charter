// Equal height columns
var matchHeight = function(el) {
	var maxH = 0;
	$(el).each(function(i) {
		var h = $(this).height();
		if (h > maxH) {
			maxH = h;
		}
	})
	.each(function() {
		$(this).css('min-height', maxH);
	})
}
$(function() {
	matchHeight('.equal-height');
})
