$(document).ready(() => {
	let $navBar = $('.navigation-bar'); // nav bar
	let sticky = $navBar.offset().top; // nav bar's offset top

	// Sticky navbar
	$(window).scroll(function() {
		if (window.pageYOffset >= sticky) {
			$navBar.addClass('sticky');
		} else {
			$navBar.removeClass('sticky');
		}
	});

	// Mouse in navigation bar
	$('.navigation-bar ul li').mouseover(function() {
		if (!$(this).hasClass('hover')) {
			$(this).addClass('hover');
		}
		if (!$(this).hasClass('active')) {
			$('.navigation-bar ul li.active').addClass('inactive');
		}
	});

	// Mouse out from navigation bar
	$('.navigation-bar ul li').mouseout(function() {
		if ($(this).hasClass('hover')) {
			$(this).removeClass('hover');
		}

		let $inactive = $('.navigation-bar ul li.inactive');
		if ($inactive) {
			$inactive.removeClass('inactive');
		}
	});

	// Mouse over tour item
	$('.contents .tours .list ul.list-row li.list-item').mouseover(function() {
		// Width
		$(this).width($(this).width() + 10);

		// Padding
		let padding = parseInt($(this).css('padding')) + 5;
		$(this).css('padding', `${padding}px`);
		// Margin
		let margin = parseInt($(this).css('margin-top')) - 3;
		$(this).css('margin-top', `${margin}px`);
	});

	// Mouse out from tour item
	$('.contents .tours .list ul.list-row li.list-item').mouseout(function() {
		// Width
		$(this).width($(this).width() - 10);

		// Padding
		let padding = parseInt($(this).css('padding')) - 5;
		$(this).css('padding', `${padding}px`);
		// Margin
		let margin = parseInt($(this).css('margin-top')) + 3;
		$(this).css('margin-top', `${margin}px`);
	});

	// Close tour detail
	$('.tour-detail .close-detail').click(function() {
		$('.tour-detail').hide();
		$('.tour-detail-background').hide();
	});

	// // Show tour detail
	// $('.tours .list .list-item').click(function() {
	// 	$('.tour-detail-background').show();
	// 	$('.tour-detail').show();
	// 	$('html,body').scrollTop(70);
	// });

	// Min date time
	let date = new Date().toISOString().substr(0, 10);
	$('.tour-detail .book .booking form .input.date input').attr('min', date);
});
