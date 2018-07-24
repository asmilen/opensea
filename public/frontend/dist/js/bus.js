$(document).ready(() => {
    // ajax setup laravel
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$.get('/api/frontend/attraction',function (attractions) {
	window.attractions = attractions;

    // Render tickets
    renderTickets();

    // Render attractions
    renderAttractions();

    // Render testinomial
    renderTestinomial();

    handleSubmitGetInTouchFormOnHomePage();

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
    window.onhashchange = function () {
        window.scrollBy(0, -$('.navigation-bar').height());
    };

// Anchor offset
    $('.contents .highlights .grid .col#col3 .how-it-work .item.browse .link')
        .click(function () {
            let y = $('.contents .tickets').offset().top;

            $(window).scrollTop(y - $('.navigation-bar').height());
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
    $('.navigation-bar a').mouseover(function () {
        if (!$(this).hasClass('hover')) {
            $(this).addClass('hover');
        }
        if (!$(this).hasClass('active')) {
            $('.navigation-bar a.active').addClass('inactive');
        }
    });

// Mouse out from navigation bar
    $('.navigation-bar a').mouseout(function () {
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

    $('.contents .highlights .grid .col .panel .arrow').click(function () {
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

    $('.contents .highlights .grid .col .panel .content').on('hidden.bs.collapse', function () {
        // Height limit
        $(this).parent().removeClass('full');

        // Remove margin bottom
        $('.contents .highlights').css('margin-bottom', `0px`)
    });

    $('.contents .highlights .grid .col .panel.row3 .content').on('shown.bs.collapse', function () {
        if (window.innerWidth > 768) {
            let h = $(this).height(); // additional height

            // Add margin bottom
            $('.contents .highlights').css('margin-bottom', `${h}px`)
        }
    });

// Show popup background
    function showPopupBackground() {
        $('.popup-background').show();
    }

// Hide popup background
    function hidePopupBackground() {
        $('.popup-background').hide();
    }

// Show attraction popup
    $('.contents .attractions .list .list-item .see-more button').click(function () {
        let y = $('.contents .attractions').offset().top;

        // Show popup background
        showPopupBackground();

        // Show popup
        showAttractionPopup();

        // Disable scroll on background
        disableScrollOnBackground(y);
    });

// Close attraction popup
    $('.attraction-popup .close').click(function () {
        // Hide background
        hidePopupBackground();

        // Hide popup
        hideAttractionPopup();

        // Enable scroll on background
        enableScrollOnBackground()
    });

// Show attraction popup
    function showAttractionPopup(y) {
        $('.attraction-popup').show();
    }

// Hide attraction popup
    function hideAttractionPopup() {
        $('.attraction-popup').hide();
    }

// Disable scroll on background
    function disableScrollOnBackground(y) {
        $('.main').addClass('no-scroll');
        $('.main').css('top', `${-y}px`);
        $('.navigation-bar').removeClass('sticky');
        $('.navigation-bar').addClass('relative');
        $(window).unbind('scroll', stickyNavbar);
    }

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

// Click see more on ticket
    $('.contents .tickets .list .list-item .more-info').click(function () {
        let y = $('.contents .tickets').offset().top;

        // Show popup background
        showPopupBackground();

        // Show popup
        showTicketPopup();

        // Disable scroll on background
        disableScrollOnBackground(y);
    });

// Close ticket popup
    $('.ticket-popup .close').click(function () {
        // Hide background
        hidePopupBackground();

        // Hide popup
        hideTicketPopup();

        // Enable scroll on background
        enableScrollOnBackground()
    });

// Show ticket popup
    function showTicketPopup() {
        $('.ticket-popup').show();
    }

// Hide ticket popup
    function hideTicketPopup() {
        $('.ticket-popup').hide();
    }
});
});

// Handle submit get in touch form on home page
function handleSubmitGetInTouchFormOnHomePage() {
    $('.get-in-touch form').on('submit', function (e) {
        e.preventDefault();
        $.post('/customer-message', $(this).serialize())
            .then(function (response) {
                swal(
                    response.status, response.message,
                    response.status
                )
            })
            .catch(function (error) {
                console.log(error);
            });
    });
}

// Responsive carousel tickets
function responsiveCarouselTickets() {
	if (window.innerWidth <= 768) {
		// Hide clone
		$('#tickets .inner .item .item-inner.clone').hide();

		// Add carousel
		$('#tickets').addClass('carousel slide');
		$('#tickets .inner').addClass('carousel-inner')
		$('#tickets .carousel-control').show();
		$('#tickets .carousel-indicators').show();
		$('#tickets .inner .list-item').addClass('item');

		// Remove multi carousel
		$('#tickets .inner').removeClass('multi')
		$('#tickets .inner .item .item-inner').removeClass('col-md-4 col-xs-4');
		// $('#tickets .inner .item .item-inner.clone').hide();
		console.log('Responsive <=768')
	} else {
		// Hide clones
		$('#tickets .inner .item .clone').hide();
		
		if (window.tickets.length <= 3) {
			// Remove carousel
			$('#tickets').removeClass('carousel slide');
			$('#tickets .inner').removeClass('carousel-inner')
			$('#tickets .carousel-control').hide();
			$('#tickets .carousel-indicators').hide();
			$('#tickets .inner .list-item').removeClass('item');

			// Remove multi carousel
			$('#tickets .inner').removeClass('multi')
			// $('#tickets .inner .item .clone').hide();
			$('#tickets .inner .item .item-inner').removeClass('col-md-4 col-xs-4');
			console.log('Responsive >768, <=3 items')
		} else {
			// Add multi carousel
			$('#tickets').addClass('carousel slide');
			$('#tickets .inner .list-item').addClass('item');
			$('#tickets .inner').addClass('carousel-inner multi')
			$('#tickets .carousel-control').show();
			$('#tickets .carousel-indicators').show();
			$('#tickets .item .item-inner.clone').show();
			$('#tickets .inner .item .item-inner').addClass('col-md-4 col-xs-4');
			console.log('Responsive >768, >3 items')
		}
	}
}

// Responsive carousel attractions
function responsiveCarouselAttractions() {
	if (window.innerWidth <= 768) {
		// Hide clone
		$('#attractions .inner .item .item-inner.clone').hide();

		// Add carousel
		$('#attractions').addClass('carousel slide');
		$('#attractions .inner').addClass('carousel-inner')
		$('#attractions .carousel-control').show();
		$('#attractions .carousel-indicators').show();
		$('#attractions .inner .list-item').addClass('item');

		// Remove multi carousel
		$('#attractions .inner').removeClass('multi')
		$('#attractions .inner .item .item-inner').removeClass('col-md-4 col-xs-4');
		console.log('Responsive <=768')
	} else {
		// Hide clone
		$('#attractions .inner .item .item-inner.clone').hide();
		
		if (window.attractions.length <= 3) {
			// Remove carousel
			$('#attractions').removeClass('carousel slide');
			$('#attractions .inner').removeClass('carousel-inner')
			$('#attractions .carousel-control').hide();
			$('#attractions .carousel-indicators').hide();
			$('#attractions .inner .list-item').removeClass('item');

			// Remove multi carousel
			$('#attractions .inner').removeClass('multi')
			$('#attractions .inner .item .item-inner').removeClass('col-md-4 col-xs-4');
			// $('#attractions .inner .item .item-inner.clone').hide();
			console.log('Responsive >768, <=3 items')
		} else {
			// Add multi carousel
			$('#attractions').addClass('carousel slide');
			$('#attractions .inner .list-item').addClass('item');
			$('#attractions .inner').addClass('carousel-inner multi')
			$('#attractions .carousel-control').show();
			$('#attractions .carousel-indicators').show();
			$('#attractions .item .item-inner.clone').show();
			$('#attractions .inner .item .item-inner').addClass('col-md-4 col-xs-4');
			console.log('Responsive >768, >3 items')
		}
	}
}

// Responsive testinomial
function responsiveTestinomial() {
	if (window.innerWidth <= 768) {
		// Add carousel
		$('#happy-customers').addClass('carousel slide')
		$('#happy-customers .inner').addClass('carousel-inner')
		$('#happy-customers .carousel-control').show();
		$('#happy-customers .carousel-indicators').show();
	} else {
		// Remove carousel
		$('#happy-customers').removeClass('carousel slide')
		$('#happy-customers .inner').removeClass('carousel-inner')
		$('#happy-customers .carousel-control').hide();
		$('#happy-customers .carousel-indicators').hide();
	}
}

// Responsive
$(window).resize(function () {
	// Tickets
	responsiveCarouselTickets();

	// Attractions
	responsiveCarouselAttractions();

	// Testinomial
	responsiveTestinomial();
});

// Render tickets
function renderTickets() {
	$('#tickets .inner').empty() // empty carousel inner
	$('#tickets .carousel-indicators').empty();

	for (let i in window.tickets) {
		let ticket = window.tickets[i]; // ticket info
		let active = '';

		if (i == window.ticketId) {
			active = 'active';
		}

		let html = `
			<div class="list-item item ${active}" id="${i}"><div class="item-inner">
				<div class="image">
					<img src="${ticket.image}">
				</div>
				<div class="info">
					<div class="title">${ticket.title}</div>
					<div class="underline"></div>
					<ul class="descriptions">
		`;

		// Descriptions
		for (let desc of ticket.descriptions) {
			html += `<li class="desc">${desc}</li>`;
		}

		// Prices
		html += `
					</ul>
					<div class="prices">
						<div class="adult price">
							<div class="type">Adult</div>
							<div class="number">${ticket.prices.adult}</div>
						</div>
						<div class="child price">
							<div class="type">Child</div>
							<div class="number">${ticket.prices.child}</div>
						</div>
						<div class="family price">
							<div class="type">Family</div>
							<div class="number">${ticket.prices.family}</div>
						</div>
					</div>
				</div>
				<div class="more-info">
					<button>MORE INFO</button>
				</div>
			</div></div>
		`;

		// Append to list
		$('#tickets .inner').append(html);

		// Append to indicators
		html = `
			<li data-target="#tickets" data-slide-to="${i}" class="${active}"></li>
		`;

		$('#tickets .carousel-indicators').append(html)
	}

	// Clone
	$('#tickets .item').each(function(){
		let next = $(this).next();
		if (!next.length) {
			next = $(this).siblings(':first');
		}
		next.children(':first-child').clone().addClass('clone').appendTo($(this));

		if (next.next().length>0) {
			next.next().children(':first-child').clone().addClass('clone').appendTo($(this));
		}
		else {
			$(this).siblings(':first').children(':first-child').clone().addClass('clone').appendTo($(this));
		}
	});

	// Responsive carousel
	responsiveCarouselTickets();
}

// Render attractions
function renderAttractions() {
    //$.get('/api/frontend/attraction',function (attractions) {

        window.attractions = attractions;
        $('#attractions .inner').empty() // empty carousel inner
        $('#attractions .carousel-indicators').empty() // empty indicators
		$('.attraction-popup carousel-inner').empty() //empty popup

        for (let i in window.attractions) {
            let attraction = window.attractions[i]; // attraction
            let active = '';

            if (i == window.attractionId) {
                active = 'active'
            }

            // Item
            let html = `
				<div class="list-item item ${active}" id="${i}"><div class="item-inner">
					<div class="image">
						<img src="${attraction.image}">
					</div>
					<div class="info">
						<div class="title">${attraction.title}</div>
						<div class="description">${attraction.content}</div>
					</div>
					<div class="see-more"><button>SEE MORE</button></div>
				</div></div>
			`;

            let html_popup = `
            	<div class="item ${active}" id="${i}">
                <div class="image"><img src="${attraction.image}"></div>

                <div class="title">
                    <div class="header_1">${attraction.title}</div>
                    <div class="underline"></div>
                </div>

                <div class="description">${attraction.content}</div>
            `;

            // Append to list
            $('#attractions .inner').append(html);
            $('.attraction-popup carousel-inner').append(html_popup);

            // Indicators
            html = `<li data-target="#attractions" data-slide-to="${i}" class="${active}"></li>`

            $('#attractions .carousel-indicators').append(html)
        }


        // Clone
        $('#attractions .item').each(function () {
            let next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().addClass('clone').appendTo($(this));

            if (next.next().length > 0) {
                next.next().children(':first-child').clone().addClass('clone').appendTo($(this));
            }
            else {
                $(this).siblings(':first').children(':first-child').clone().addClass('clone').appendTo($(this));
            }
        });

        // Responsive carousel
        responsiveCarouselAttractions();
    //});
}

// Render testinomial
function renderTestinomial() {
	if (window.innerWidth <= 768) {
		console.log('testinomial')
		$('#happy-customers').addClass('carousel'); // remove carousel
		$('#happy-customers').addClass('slide'); // remove carousel
		$('#happy-customers .inner').addClass('carousel-inner') // carousel inner
		$('#happy-customers .carousel-control').show();
		$('#happy-customers .carousel-indicators').show();
	} else {
		$('#happy-customers .carousel-control').hide();
		$('#happy-customers .carousel-indicators').hide();
	}
}