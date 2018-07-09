$(document).ready(() => {
	let $navBar = $('.navigation-bar'); // nav bar
	let sticky = $navBar.offset().top; // nav bar's offset top
	let posX = 0;

	// Responsive
	$(window).resize(() => {
		let w = $(window).width(); // window width
		
		// Sticky offset
		sticky =  $('.navigation-bar').height();
	});

	// Anchor offset
	window.onhashchange = function() {
		console.log('hashchange')
		window.scrollBy(0, - $('.navigation-bar').height());
	};

	// Anchor offset
	$('.contents .highlights .grid .col#col3 .how-it-work .item.browse .link')
		.click(function () {
			let y = $('.contents .tickets').offset().top;

			$(window).scrollTop(y - $('.navigation-bar').height());
		});

	// Sticky navbar
	$(window).scroll(function() {
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

		$('.sticky').css('left', `-${curPosX}px`);
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

	// Click on ticket arrow
	function showDownTicket($panel, content, arrow) {
		$panel.addClass('full')
		$(content).collapse('show')
		
		let icon = $(arrow).children()[0]
		
		$(icon).addClass('fa-angle-up')
		$(icon).removeClass('fa-angle-down')
		$(arrow).addClass('up')
		$(arrow).removeClass('down')
		$panel.css('z-index', 2)
	}

	function hideUpTicket($panel, content, arrow) {
		$(content).collapse('hide')
		
		let icon = $(arrow).children()[0]
		
		$(icon).addClass('fa-angle-down')
		$(icon).removeClass('fa-angle-up')
		$(arrow).addClass('down')
		$(arrow).removeClass('up')
		$panel.css('z-index', 1)
	}

	$('.contents .highlights .grid .col .panel .arrow').click(function() {
		let $panel = $(this).parent();
		let content = $panel.children()[2];

		if ($(this).hasClass('down')) {
			// Narrow other panels
			let arrowsUp = $('.contents .highlights .grid .col .panel .arrow.up');
			for (let i = 0; i < arrowsUp.length; i++) {
				let $panel = $(arrowsUp[i]).parent();
				let content = $panel.children()[2];

				hideUpTicket($panel, content, arrowsUp[i])
			}

			// Show down
			showDownTicket($panel, content, this)
		} else {
			hideUpTicket($panel, content, this)
		}
	});

	$('.contents .highlights .grid .col .panel .content').on('hidden.bs.collapse', function() {
		// Height limit
		$(this).parent().removeClass('full');

		// Remove margin bottom
		$('.contents .highlights').css('margin-bottom', `0px`)
	});

	$('.contents .highlights .grid .col .panel.row3 .content').on('shown.bs.collapse', function() {
		if ($(window).width() > 768) {
			let h = $(this).height(); // additional height

			// Add margin bottom
			$('.contents .highlights').css('margin-bottom', `${h}px`)
		}
	});
});
