$(document).ready(() => {
	let $navBar = $('.navigation-bar'); // nav bar
	let sticky = $navBar.offset().top; // nav bar's offset top
	let posX = 0;

	// Responsive
	$(window).resize(() => {
		let w = $(window).width(); // window width

		if (w <= 751) {
			// Update sticky
			sticky = 36;
		} else if (w <= 1343) {
			sticky = 48;
		} else {
			sticky = 60;
		}
		
	});

	// Sticky navbar
	$(window).scroll(function() {
		let $cart = $('.navigation-bar a.shopping-cart'); // shoping cart
		let $icon = $('.navigation-bar .icon'); // menu icon

		// Offset y navbar
		if (window.pageYOffset >= sticky) {
			$navBar.removeClass('relative');
			$navBar.addClass('sticky');
		} else {
			$navBar.removeClass('sticky');
			$navBar.addClass('relative');
		}

		// Offset x navbar
		let curPosX = $(document).scrollLeft();

		$('.sticky').css('left', `-${curPosX}px`)
		// $('.sticky').css('position', `fixed`)
	});

	// Toggle navbar
	$('.navigation-bar .icon').click(function () {
		// Nav item
		let $item = $('.navigation-bar a.item');

		// Toggle
		if ($item.css('display') === 'none') {
			$item.css('display', 'block')
		} else {
			$item.css('display', 'none')
		}	
	});

	// Mouse in navigation bar
	$('.navigation-bar a').mouseover(function() {
		if (!$(this).hasClass('hover')) {
			$(this).addClass('hover');
		}
		if (!$(this).hasClass('active')) {
			$('.navigation-bar a.active').addClass('inactive');
		}
	});

	// Mouse out from navigation bar
	$('.navigation-bar a').mouseout(function() {
		if ($(this).hasClass('hover')) {
			$(this).removeClass('hover');
		}

		let $inactive = $('.navigation-bar a.inactive');
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

	// Min date time
	let date = new Date().toISOString().substr(0, 10);
	$('.tour-detail .book .booking form .input.date input').attr('min', date);
});
