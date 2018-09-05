window.tickets = [
  {
    name: 'CLASSIC',
    image: 'images/bonbon_package_classic.png',
    descriptions: [
      '24 hours BonBon City Tour Bus',
      '10% off Hanoi Rewind tours',
      `03 exclusive partner's coupons`
    ],
    prices: {
      child: '250,000',
      adult: '350,000',
      family: '999,000'
    }
  },
  {
    name: 'PREMIUM',
    image: 'images/bonbon_package_premium.png',
    descriptions: [
      '24 hours BonBon City Tour Bus',
      '15% off Hanoi Rewind tours',
      '03 exclusive attractions pass',
      `03 exclusive partner's coupons`
    ],
    prices: {
      child: '250,000',
      adult: '350,000',
      family: '999,000'
    }
  },
  {
    name: 'DELUXE',
    image: 'images/bonbon_package_deluxe.png',
    descriptions: [
      '48 hours BonBon City Tour Bus',
      '20% off Hanoi Rewind tours',
      'All-you-can-have attractions pass',
      `Exclusive partner's coupons`
    ],
    prices: {
      child: '250,000',
      adult: '350,000',
      family: '999,000'
    }
  },
  // {
  //   name: 'SUPER DELUXE',
  //   image: 'images/bonbon_package_deluxe.png',
  //   descriptions: [
  //     '48 hours BonBon City Tour Bus',
  //     '20% off Hanoi Rewind tours',
  //     'All-you-can-have attractions pass',
  //     `Exclusive partner's coupons`
  //   ],
  //   prices: {
  //     child: '250,000',
  //     adult: '350,000',
  //     family: '999,000'
  //   }
  // }
];

// Get tickets
function getTickets(cb) {
  cb(window.tickets);
}

// Render tickets
function renderTickets(tickets) {
  let $list = $('.packages .list .owl-carousel');

  // Empty list
  $list.empty();

  // Render tickets
  for (let ticket of tickets) {
    let descriptions;
    let prices;
    let html;

    // Descriptions
    descriptions = `<ul>`;

    for (let desc of ticket.descriptions) {
      descriptions += `<li>${desc}</li>`
    }

    descriptions += `</ul>`
    
    // Prices
    prices = ``;

    for (let k in ticket.prices) {
      prices += `
        <div class="col-4">
          <div class="price">
            <div class="type">${k.toUpperCase()}</div>
            <div class="row">
              <div class="col-2 offset-1">
                <div class="currency">VND</div>
              </div>
              <div class="col-9">
                <div class="number">${ticket.prices[k]}</div>
              </div>
            </div>
          </div>
        </div>
      `;
    }

    // HTML
    html = `
      <div class="item">
        <div class="package">
          <div class="name">${ticket.name}</div>
          <div class="content">
            <div class="empty"></div>
            <div class="descriptions">
              ${descriptions}
            </div>
            <div class="prices">
              <div class="row">
                ${prices}
              </div>
            </div>
            <div class="book-now" data-toggle="modal" data-target="#ticket-popup-test">BOOK NOW</div>
          </div>
          <div class="footer"></div>
        </div>
      </div>
    `;

    $list.append(html);
  }
}

// Get attractions
function getAttractions(cb) {
  $.ajax({
    type: 'GET',
    url: 'http://opensea.vn/api/frontend/attraction',
    success: resData => cb(resData),
    error: err => console.error(err)
  });
}

// Render attractions
function renderAttractions(attractions) {
  let $list = $('.attractions .list .owl-carousel');

  // Empty list
  $list.empty();

  // Render attractions
  for (let attraction of attractions) {
    let html;

    html = `
      <div class="item">
        <div class="attraction" id="${attraction.backend_id}">
          <div class="name">${attraction.title}</div>
          <div class="middle">
            <div class="rectangle" style="background-image: url('http://opensea.vn${attraction.image}');"></div>
          </div>
          <div class="description">
            <div style="width: 100%; height: 100%; overflow: hidden;">
              ${attraction.content}
            </div>
          </div>
          <div class="see-more">
            <div class="icon">+</div>
            <button id="${attraction.backend_id}">MORE</button>
          </div>
        </div>
      </div>
    `;

    $list.append(html);
  }
}

// Calculate sub-total
function calculateSubTotal() {
  let adultAmount = parseInt($('.ticket-popup .adult .choose-amount .amount-number').text());
  let childAmount = parseInt($('.ticket-popup .child .choose-amount .amount-number').text());
  let adultPrice = $('.ticket-popup .adult .inner-price .number').text();
  let childPrice = $('.ticket-popup .child .inner-price .number').text();
  let subTotal;

  adultPrice = parseInt(adultPrice.split(',').join(''));
  childPrice = parseInt(childPrice.split(',').join(''));
  subTotal = adultAmount * adultPrice + childAmount * childPrice;
  $('.ticket-popup .sub-total .price .number').text(subTotal);
}

// Ticket popup amount input
function ticketPopupAmount() {
  $('.ticket-popup .prices .price.adult .choose-amount .add').click(function(e) {
    let x = parseInt($('.ticket-popup .adult .choose-amount .amount-number').text());

    $('.ticket-popup input.amount-adult').val(++x);
    $('.ticket-popup .adult .choose-amount .amount-number').text(x);

    calculateSubTotal();
  });

  $('.ticket-popup .prices .price.adult .choose-amount .sub').click(function(e) {
    let x = parseInt($('.ticket-popup .adult .choose-amount .amount-number').text());

    if (x == 0) return;

    $('.ticket-popup input.amount-adult').val(--x);
    $('.ticket-popup .adult .choose-amount .amount-number').text(x);
    
    calculateSubTotal();
  });

  $('.ticket-popup .prices .price.child .choose-amount .add').click(function(e) {
    let x = parseInt($('.ticket-popup .child .choose-amount .amount-number').text());

    $('.ticket-popup input.amount-child').val(++x);
    $('.ticket-popup .child .choose-amount .amount-number').text(x);
    
    calculateSubTotal();
  });

  $('.ticket-popup .prices .price.child .choose-amount .sub').click(function(e) {
    let x = parseInt($('.ticket-popup .child .choose-amount .amount-number').text());

    if (x == 0) return;

    $('.ticket-popup input.amount-child').val(--x);
    $('.ticket-popup .child .choose-amount .amount-number').text(x);
    
    calculateSubTotal();
  });
}
