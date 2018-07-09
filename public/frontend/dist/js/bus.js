$(document).ready(() => {
	// Render tickets
	renderTickets();

	// Render attractions
	renderAttractions();

	// Render testinomial
	renderTestinomial();
});

// Responsive carousel tickets
function responsiveCarouselTickets() {
	if ($(window).width() <= 768) {
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
	if ($(window).width() <= 768) {
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
	if ($(window).width() <= 768) {
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

	// $('#tickets .item .item-inner.clone').hide();
	// if ($(window).width() > 768) {
	// 	if (window.tickets.length <= 3) {
	// 		// Render row
 // 			$('#tickets').removeClass('carousel slide'); // add carousel
	// 		$('#tickets .inner').removeClass('carousel-inner multi') // carousel inner
	// 		$('#tickets .carousel-control').hide();
	// 		$('#tickets .carousel-indicators').hide();
	// 	} else {
	// 		// Render multi-carousel
	// 		$('#tickets .inner').addClass('carousel-inner multi');
	// 		$('#tickets .inner .item .item-inner').addClass('col-md-4 col-xs-4')
	// 		$('#tickets .item .item-inner.clone').show();
	// 	}
	// }
}

// Render attractions
function renderAttractions() {
	$('#attractions .inner').empty() // empty carousel inner
	$('#attractions .carousel-indicators').empty() // empty indicators
	
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

		// Append to list
		$('#attractions .inner').append(html);

		// Indicators
		html = `<li data-target="#attractions" data-slide-to="${i}" class="${active}"></li>`

		$('#attractions .carousel-indicators').append(html)
	}

	// Clone
	$('#attractions .item').each(function(){
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
	responsiveCarouselAttractions();
}

// Render testinomial
function renderTestinomial() {
	if ($(window).width() <= 768) {
		console.log('s')
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