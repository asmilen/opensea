$(document).ready(() => {

    // ajax setup laravel
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

	// Render tours list
    $.get('/api/frontend/tour',function (tours) {
        window.tours = tours;

		renderToursList();

		// Handle click on tour item
		handleClickOnTour();

		// Handle submit get in touch form
		handleSubmitGetInTouchForm();

		// Handle submit booking form
		handleSubmitBookingForm();

		// Handle next tour
		handleNextTour();

		// Handle previous tour
		handlePrevTour();

		// Handle click on dot
		handleClickOnDot();
	});
});

// Render tours list
function renderToursList() {
	// Tours list
	let $toursList = $('.contents .tours .list ul.list-row');

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

		// Append to list
		let html = `
		<li class="list-item ${pos} ${isComingSoon}" index="${i}">
			<img src="${tour.images[0]}">
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
			<div class="book">
				<div class="cost">FROM $<span>${tour.prices[0].value}</span></div>
				<button class="book-now">BOOK NOW</button>
			</div>
		`;
		}
		html += `</div></li>`;

		$toursList.append(html);
	}
};

// Handle click on tour item
function handleClickOnTour() {
	$('.contents .tours .list ul.list-row li.list-item').click(function () {
		// Check exists
		if ($(this).hasClass('coming-soon')) {
			console.log('Coming soon');
			return;
		}

		let index = parseInt($(this).attr('index')); // item id

		// Find tour
		let tour = window.tours[index];

		if (!tour) {
			return;
		}

		window.tour = tour;
		window.tour.index = index;
		window.tour.activeImage = 0;

		// Show tour detail background
		$('.tour-detail-background').show();

		// Show tour detail
		showTourDetail();

		// Handle click on dot
		handleClickOnDot();
	});	
}

function showTourDetail() {
	// Set data
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
				<img src="${tour.images[i]}" id="img${i}">
			`);
		} else {
			$images.append(`
				<img src="${tour.images[i]}" class="hidden" id="img${i}">
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
	$('#tour_id').val(window.tour.id);

	// Show
	$('html,body').scrollTop(70);
	$('.tour-detail').show();
}

// Handle submit booking form
function handleSubmitBookingForm() {
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

// Handle submit get in touch form
function handleSubmitGetInTouchForm() {
	$('.get-in-touch form').on('submit', function (e) {
		e.preventDefault();
	});
}

// Handle next tour
function handleNextTour() {
	$('.tour-detail .next').click(function () {

		do {
			let index = window.tour.index;
			
			if (index < window.tours.length - 1) {
                index++;
			} else {
                index = 0;
			}

			tour = window.tours[index];
			
			// Update
			window.tour = tour;
			window.tour.index = index;
			window.tour.activeImage = 0;
		} while (window.tour.type !== 0);

		// Show tour detail
		showTourDetail();
		
		// Handle click on dot
		handleClickOnDot();
	});
}

// Handle previous tour
function handlePrevTour() {
	$('.tour-detail .prev').click(function () {
		do {
			let index = window.tour.index;
			
			if (index > 0) {
                index--;
			} else {
                index = window.tours.length - 1;
			}

			tour = window.tours[index];
			
			// Update
			window.tour = tour;
			window.tour.index = index;
			window.tour.activeImage = 0;
		} while (window.tour.type !== 0);

		// Show tour detail
		showTourDetail();

		// Handle click on dot
		handleClickOnDot();
	});
}

// Handle click on dot
function handleClickOnDot() {
	$('.tour-detail .full-info .images-slider .dots .dot').click(function() {
		let id = parseInt($(this).attr('id')); // dot id
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