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

	// Scroll fade-in
	let pic1Y = $('#pic1').offset().top - $('.navigation-bar').height();
	let pic2Y = $('#pic2').offset().top - $('.navigation-bar').height();
	let pic3Y = $('#pic3').offset().top - $('.navigation-bar').height();
	let aboutY = $('.about').offset().top - $('.navigation-bar').height();

	$(document).scroll(function() {
		let y = $(document).scrollTop();

		if (y >= pic1Y && y < pic2Y) {
			$('#pic1 .text').addClass('show');
		}

		if (y >= pic2Y && y < pic3Y) {
			$('#pic2 .text-1').addClass('show');
			$('#pic2 .link').addClass('show');
		}

		if (y >= pic3Y && y < aboutY) {
			$('#pic3 .text-1').addClass('show');
			$('#pic3 .link').addClass('show');
		}

		if (y >= aboutY) {
			$('.about .header_1').addClass('show');
			$('.about .underline').addClass('show');
			$('.about .content').addClass('show');
		}
	});

});
