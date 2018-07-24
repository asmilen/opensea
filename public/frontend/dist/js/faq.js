$(document).ready(() => {
	// Toggle topics
	$('.contents .freq-questions .header_2').click(function() {
		let $icon = $($($(this).children()[2]).children()[0]);

		if ($icon.hasClass('fa-caret-up')) {
			$icon.removeClass('fa-caret-up');
			$icon.addClass('fa-caret-down');
		} else {
			$icon.removeClass('fa-caret-down');
			$icon.addClass('fa-caret-up');
		}
	});
});