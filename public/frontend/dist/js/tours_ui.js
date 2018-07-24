$(document).ready(() => {
	let $navBar = $('.navigation-bar'); // nav bar

	// Sticky navbar
	function stickyNavbar() {
		// Header height
		let sticky = $('.header').height();

		// Offset y
		let y = $(window).scrollTop();

		if (y >= sticky) {
			$navBar.removeClass('relative');
			$navBar.addClass('sticky');
		} else {
			$navBar.removeClass('sticky');
			$navBar.addClass('relative');
		}
	}

	$(window).bind('scroll', stickyNavbar);

	// Anchor offset
	window.onhashchange = function() {
		console.log('hashchange')
		window.scrollBy(0, - $('.navigation-bar').height());
	};


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

	// Close tour detail
	$('.tour-detail .close-detail').click(function() {
		$('.tour-detail').hide();
		$('.tour-detail-background').hide();

		// Enable scroll on background
		enableScrollOnBackground()
	});

	// Min date time
	let date = new Date().toISOString().substr(0, 10);
	$('.tour-detail .book .booking form .input.date input').attr('min', date);
});

// Enable scroll on background
function enableScrollOnBackground() {
	$('.main').removeClass('no-scroll');

	let y = parseInt($('.main').css('top'));

	$('.main').css('top', `0`);
	$(window).scrollTop(-y);
	$('.navigation-bar').addClass('sticky');
	$('.navigation-bar').removeClass('relative');
	$(window).bind('scroll', stickyNavbar);
}
