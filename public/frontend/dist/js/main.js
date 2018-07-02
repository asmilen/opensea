$(document).ready(() => {

    // ajax setup laravel
    $.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	// Active testinomial
	window.testinomial = 0;
	window.testinomials = [0, 1, 2];

	$.get('/api/frontend/tour',function (tours) {
        window.tours = tours;

		// Render tours list on home page
		renderToursListOnHomePage();

		// Handle click on tour item on home page
		handleClickOnTourOnHomePage();

		// Handle submit get in touch form on home page
		handleSubmitGetInTouchFormOnHomePage();

		// Handle submit booking form on tour detail popup
		handleSubmitBookingFormOnTourDetailPopup();

		// Handle next tour on tour detail popup
		handleNextTourOnTourDetailPopup();

		// Handle previous tour on tour detail popup
		handlePrevTourOnTourDetailPopup();

		// Handle next tour on tours list on home page
		handleNextTourOnToursList();

		// Handle previous tour on tours list on home page
		handlePrevTourOnToursList();

		// Handle click on dot on image slider on tour detail
		// popup
		handleClickOnDotOnTourDetailPopup();

		// Testinomial
		// Handle next on testinomial list
		handleNextOnTestinomialList();

		// Handle prev on testinomial list
		handlePrevOnTestinomialList();

		// Handle click on testinomial list indicator
		handleClickOnTestinomialListIndicator();
    });
});

// Render tours list on home page
function renderToursListOnHomePage() {
	// Tours list
	let $toursList = $('.contents .tours .list .list-row');

	// Current tour
	if (!window.tour) {
		window.tour = window.tours[0];
		window.tour.id = 0;
	}
	
	$toursList.empty(); // empty list
	for (let i in window.tours) {
		let tour = window.tours[i]; // current tour

		// Position
		let pos;

		if (i % 3 === 0) {
			pos = "left";
		} else if (i % 3 === 1) {
			pos = "center";
		} else {
			pos = "right";
		}
		
		// Is coming soon
		let isComingSoon = '';

		if (tour.type) {
			isComingSoon = 'coming-soon';
		}

		// Active
		let active = '';

		if (i == window.tour.id) {
			active = 'active';
		}

		// Append to list
		let html = `
			<div class="list-item myfade ${pos} ${isComingSoon} ${active}" id="${i}">
				<div class="image"><img src="${tour.images[0]}"></div>
				<div class="tour-info">
					<div class="name">${tour.title}</div>
					<div class="underline"></div>
					<ul class="descriptions">`;
		
		if (tour.type === 0) {
			for (let line of tour.includes) {
				html += `<li class="description">${line}</li>`;
			}
		}
		html += `</ul>`;
		if (tour.type === 0) { // if tour exists
			html += `
				<div class="book row">
					<div class="cost col-xs-7 col-md-7">FROM $<span>${tour.prices[0].value}</span></div>
					<button class="book-now col-xs-5 col-md-5" id="${i}">BOOK NOW</button>
				</div>
			`;
		}
		html += `</div></div>`;

		$toursList.append(html);
	}

	// Indicators
	renderToursListIndicatorOnHomePage();
	
	// Handle click on indicator
	handleClickOnToursListIndicatorOnHomePage();
};

// Render tour list indicator on home page
function renderToursListIndicatorOnHomePage() {
	let $indicators = $('.contents .tours .list .indicator');

	for (let i in window.tours) {
		// Active dot
		let active = '';

		if (i == window.tour.id) {
			active = 'active'
		}
		
		// Append dot
		let html = `
			<div class="dot ${active}" id="${i}"></div>
		`;

		$indicators.append(html)
	}
}

// Handle click on indicator
function handleClickOnToursListIndicatorOnHomePage() {
	$('.contents .tours .list .indicator .dot').click(function() {
		// Target tour id
		let id = parseInt($(this).attr('id'));

		if (id == window.tour.id) {
			return;
		}

		// Change current tour
		window.tour = window.tours[id];
		window.tour.id = id;

		// Update active tour
		updateActiveTourOnHomePage();

		// Update active dot
		updateActiveDotOnToursListOnHomePage();
	});
}

// Update active dot on tours list on home page
function updateActiveDotOnToursListOnHomePage() {
	// Dots
	let dots = $('.contents .tours .list .indicator .dot');

	// Update active
	for (let dot of dots) {
		if ($(dot).attr('id') == window.tour.id) {
			$(dot).addClass('active');
		} else {
			$(dot).removeClass('active');
		}
	}
}

// Handle click on tour item on home page
function handleClickOnTourOnHomePage() {
	$('.contents .tours .list .list-row .list-item .book-now').click(function () {
		// Check exists
		if ($(this).hasClass('coming-soon')) {
			console.log('Coming soon');
			return;
		}

		let id = parseInt($(this).attr('id')); // item id

		// Find tour
		let tour = window.tours[id];

		if (!tour) {
			return;
		}

		window.tour = tour;
		window.tour.id = id;
		window.tour.activeImage = 0;

		console.log(tour);
		// Show tour detail background
		$('.tour-detail-background').show();

		// Show tour detail
		showTourDetail();

		// Handle click on dot
		handleClickOnDotOnTourDetailPopup();
	});	
}

// Show tour detail popup
function showTourDetail() {
	// Dots
	let $dots = $('.tour-detail .full-info .images-slider .dots');

	$dots.empty();
	for (let i in window.tour.images) {
		if (i == window.tour.activeImage) {
			$dots.append(`<div class="dot active" id="${i}"></div>`);
		} else {
			$dots.append(`<div class="dot" id="${i}"></div>`);
		}
	}

	// Images
	let $images = $('.tour-detail .full-info .images-slider .images');
	
	$images.empty();
	for (let i in window.tour.images) {
		if (i == window.tour.activeImage) {
			$images.append(`
				<img src="${tour.images[i]}" id="img${i}" class="fade">
			`);
		} else {
			$images.append(`
				<img src="${tour.images[i]}" class="hidden fade" id="img${i}">
			`);
		}
	}

	// Title
	$('.tour-detail .full-info .info .name').text(window.tour.title);

	// Descriptions
	let desc = window.tour.descriptions.join('<br>');

	$('.tour-detail .full-info .info .description').html(desc);

	// Prices
    $('.tour-detail .book .price ul li.single .cost .number').text(window.tour.prices[0].value);
    $('.tour-detail .book .price ul li.single .type ').text(window.tour.prices[0].title);
    $('.tour-detail .book .price ul li.group2 .cost .number').text(window.tour.prices[1].value);
    $('.tour-detail .book .price ul li.group2 .type ').text(window.tour.prices[1].title);
    $('.tour-detail .book .price ul li.group5 .cost .number').text(window.tour.prices[2].value);
    $('.tour-detail .book .price ul li.group5 .type ').text(window.tour.prices[2].title);

	// Includes
	let $includes = $('.tour-detail .book .include ul');
	
	$includes.empty();
	for (let line of window.tour.includes) {
		$includes.append(`<li>${line}</li>`);
	}

	// Addon
	let $addon = $('.tour-detail .book .addon ul');
	
	$addon.empty();
	for (let line of window.tour.addon) {
		$addon.append(`<li>${line}</li>`);
	}

    // Set Id
    $('#backend_id').val(window.tour.backend_id);

	// Show
	$('html,body').scrollTop(70);
	$('.tour-detail').show();
}

// Handle submit booking form on tour detail page
function handleSubmitBookingFormOnTourDetailPopup() {
	$('.tour-detail .book .booking form').on('submit', function (e) {
		e.preventDefault();
        $('#error').empty();

        $.post('/tour-request', $(this).serialize())
            .then(function (response) {
                if(response.status == 'success'){
                    swal(
                        'Success!',
                        response.message,
                        'success'
                    )
                } else {
                    $.each( response.errors, function( key, value ) {
                        $('#error').append(" <p><span>* " + value + "</span></p>");
                    });
                }
            })
            .catch(function (error) {
                console.log(error);
            });

    });
}

// Handle submit get in touch form on home page
function handleSubmitGetInTouchFormOnHomePage() {
	$('.get-in-touch form').on('submit', function (e) {
		e.preventDefault();
	});
}

// Handle next tour on tour detail popup
function handleNextTourOnTourDetailPopup() {
	$('.tour-detail .next').click(function () {

		do {
			let id = window.tour.id;
			
			if (id < window.tours.length - 1) {
				id++;
			} else {
				id = 0;
			}

			tour = window.tours[id];
			
			// Update
			window.tour = tour;
			window.tour.id = id;
			window.tour.activeImage = 0;
		} while (window.tour.type !== 0);

		// Show tour detail
		showTourDetail();
		
		// Handle click on dot
		handleClickOnDotOnTourDetailPopup();
	});
}

// Handle previous tour on tour detail popup
function handlePrevTourOnTourDetailPopup() {
	$('.tour-detail .prev').click(function () {
		do {
			let id = window.tour.id;
			
			if (id > 0) {
				id--;
			} else {
				id = window.tours.length - 1;
			}

			tour = window.tours[id];
			
			// Update
			window.tour = tour;
			window.tour.id = id;
			window.tour.activeImage = 0;
		} while (window.tour.type !== 0);

		// Show tour detail
		showTourDetail();

		// Handle click on dot
		handleClickOnDotOnTourDetailPopup();
	});
}

// Handle click on dot on tour detail popup
function handleClickOnDotOnTourDetailPopup() {
	$('.tour-detail .full-info .images-slider .dots .dot').click(function() {
		let id = parseInt($(this).attr('id')); // dot id
		console.log(id)
		if (window.tour.activeImage === id) {
			return;
		}

		// Change active dot
		$(`.tour-detail .full-info .images-slider .dots .dot.active`)
			.removeClass('active');
		$(this).addClass('active');

		// Change active image
		$(`.tour-detail .full-info .images-slider .images img#img${window.tour.activeImage}`)
			.addClass('hidden');
		window.tour.activeImage = id;
		$(`.tour-detail .full-info .images-slider .images img#img${id}`)
			.removeClass('hidden');
	});	
}	

// Handle next tour on tours list on home page
function handleNextTourOnToursList() {
	$('.contents .tours .list .next').click(function () {
		let id = window.tour.id;

		if (id < window.tours.length - 1) {
			id++;
		} else {
			id = 0;
		}

		tour = window.tours[id];
		
		// Update
		window.tour = tour;
		window.tour.id = id;

		// Update list
		updateActiveTourOnHomePage();

		// Update indicator
		updateActiveDotOnToursListOnHomePage();
	});
}

// Handle prev tour on tours list on home page
function handlePrevTourOnToursList() {
	$('.contents .tours .list .prev').click(function () {
		let id = window.tour.id;

		if (id > 0) {
			id--;
		} else {
			id = window.tours.length - 1;
		}

		tour = window.tours[id];
		
		// Update
		window.tour = tour;
		window.tour.id = id;

		// Update list
		updateActiveTourOnHomePage();

		// Update indicator
		updateActiveDotOnToursListOnHomePage();
	});
}

// Update active tour on home page
function updateActiveTourOnHomePage() {
	// List items
	let $items = $('.contents .tours .list .list-item');
	
	for (let item of $items) {
		if ($(item).attr('id') == window.tour.id) {
			$(item).addClass('active');
		} else {
			$(item).removeClass('active');
		}
	}
}

// Handle next on testinomial list
function handleNextOnTestinomialList() {
	$('.contents .testinomial .list .next').click(function() {
		let t = window.testinomial;

		if (t < window.testinomials.length - 1) {
			t++;
		} else {
			t = 0;
		}

		window.testinomial = t;

		// Update active testinomial
		updateActiveTestinomial();

		// Update active dot
		updateActiveDotOnTestinomialList();
	});
}

// Update active testinomial
function updateActiveTestinomial() {
	let $ts = $('.contents .testinomial .list .item'); // testinomials
	
	for (let t of $ts) {
		if ($(t).attr('id') == window.testinomial) {
			$(t).addClass('active');
		} else {
			$(t).removeClass('active');
		}
	}	
}

// Handle prev on testinomial list
function handlePrevOnTestinomialList() {
	$('.contents .testinomial .list .prev').click(function() {
		let t = window.testinomial;

		if (t > 0) {
			t--;
		} else {
			t = window.testinomials.length - 1;
		}

		window.testinomial = t;

		// Update active testinomial
		updateActiveTestinomial();

		// Update active dot
		updateActiveDotOnTestinomialList();
	});
}

// Update active dot on testinomial indicator
function updateActiveDotOnTestinomialList() {
	let $dots = $('.contents .testinomial .list .indicator .dot'); // dots
	
	for (let dot of $dots) {
		if ($(dot).attr('id') == window.testinomial) {
			$(dot).addClass('active');
		} else {
			$(dot).removeClass('active');
		}
	}	
}

// Handle click on testinomial list indicator
function handleClickOnTestinomialListIndicator() {
	$('.contents .testinomial .list .indicator .dot').click(function() {
		// Target testinomial
		let id = parseInt($(this).attr('id'));

		if (id == window.testinomial) {
			return;
		}

		// Change current testinomial
		window.testinomial = window.testinomials[id];

		// Update active testinomial
		updateActiveTestinomial();

		// Update active dot
		updateActiveDotOnTestinomialList();
	});
}
