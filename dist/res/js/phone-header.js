/* Append phone number to site header */
(function() {
	$(function() {
		var phoneHeader = {
			$content: $('.phone-main'),
			$target:  $('.site-header-aside')
		};
		phoneHeader.$target.append(phoneHeader.$content);
	});
})();
