/* global $, jquery */
'use strict';
(function($) {
	$('.offer-table .btn-default').each(function() {
		var $this = $(this);
		$this.removeClass('btn-default').addClass('btn-info');
	});
})(jQuery);
