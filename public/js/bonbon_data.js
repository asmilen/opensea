window.tickets = [
  {
    id: 1,
    name: 'CLASSIC',
    image: './images/bonbon_ticket_classic.png',
    type: 'normal',
    feature: [
      {
        icon: './images/ticket_popup_desc_ticket.png',
        text: 'Use your ticket anyday within 6 months',
      },
      {
        icon: './images/ticket_popup_desc_offer.png',
        text: 'Exclusive online offers',
      },
      {
        icon: './images/ticket_popup_desc_safe.png',
        text: `Safe and secure checkout`
      }
    ],
    exclusive_offer: [
      {
        icon: './images/ticket_popup_offer_time.png',
        text: '24 hours BonBon City Tour Bus',
      },
      {
        icon: './images/ticket_popup_offer_voucher.png',
        text: '10% off Hanoi Rewind tours',
      },
      {
        icon: './images/ticket_popup_offer_coupon.png',
        text: `03 exclusive partner's coupons`
      }
    ],
    currency: 'VND',
    prices: {
      child: {
        number: '250,000',
        save: '100,000'
      },
      adult: {
        number: '350,000',
        save: '100,000'
      }
    }
  },
  {
    id: 2,
    name: 'PREMIUM',
    image: './images/bonbon_ticket_premium.png',
    type: 'normal',
    feature: [
      {
        icon: './images/ticket_popup_desc_ticket.png',
        text: 'Use your ticket anyday within 6 months',
      },
      {
        icon: './images/ticket_popup_desc_offer.png',
        text: 'Exclusive online offers',
      },
      {
        icon: './images/ticket_popup_desc_safe.png',
        text: `Safe and secure checkout`
      }
    ],
    exclusive_offer: [
      {
        icon: './images/ticket_popup_offer_time.png',
        text: '24 hours BonBon City Tour Bus',
      },
      {
        icon: './images/ticket_popup_offer_voucher.png',
        text: '10% off Hanoi Rewind tours',
      },
      {
        icon: './images/ticket_popup_offer_coupon.png',
        text: `03 exclusive partner's coupons`
      }
    ],
    currency: 'VND',
    prices: {
      child: {
        number: '250,000',
        save: '100,000'
      },
      adult: {
        number: '350,000',
        save: '100,000'
      }
    }
  },
  {
    id: 3,
    name: 'DELUXE',
    image: './images/bonbon_ticket_deluxe.png',
    type: 'normal',
    feature: [
      {
        icon: './images/ticket_popup_desc_ticket.png',
        text: 'Use your ticket anyday within 6 months',
      },
      {
        icon: './images/ticket_popup_desc_offer.png',
        text: 'Exclusive online offers',
      },
      {
        icon: './images/ticket_popup_desc_safe.png',
        text: `Safe and secure checkout`
      }
    ],
    exclusive_offer: [
      {
        icon: './images/ticket_popup_offer_time.png',
        text: '24 hours BonBon City Tour Bus',
      },
      {
        icon: './images/ticket_popup_offer_voucher.png',
        text: '10% off Hanoi Rewind tours',
      },
      {
        icon: './images/ticket_popup_offer_coupon.png',
        text: `03 exclusive partner's coupons`
      }
    ],
    currency: 'VND',
    prices: {
      child: {
        number: '250,000',
        save: '100,000'
      },
      adult: {
        number: '350,000',
        save: '100,000'
      }
    }
  },
  {
    id: 4,
    name: 'CLASSIC FAMILY',
    image: './images/bonbon_ticket_classic_family.png',
    type: 'family',
    feature: [
      {
        icon: './images/ticket_popup_desc_ticket.png',
        text: 'Use your ticket anyday within 6 months',
      },
      {
        icon: './images/ticket_popup_desc_offer.png',
        text: 'Exclusive online offers',
      },
      {
        icon: './images/ticket_popup_desc_safe.png',
        text: `Safe and secure checkout`
      }
    ],
    exclusive_offer: [
      {
        icon: './images/ticket_popup_offer_time.png',
        text: '24 hours BonBon City Tour Bus',
      },
      {
        icon: './images/ticket_popup_offer_voucher.png',
        text: '10% off Hanoi Rewind tours',
      },
      {
        icon: './images/ticket_popup_offer_coupon.png',
        text: `03 exclusive partner's coupons`
      }
    ],
    currency: 'VND',
    prices: {
      family: {
        number: '250,000',
        save: '100,000'
      }
    }
  },
  {
    id: 5,
    name: 'PREMIUM FAMILY',
    image: './images/bonbon_ticket_premium_family.png',
    type: 'family',
    feature: [
      {
        icon: './images/ticket_popup_desc_ticket.png',
        text: 'Use your ticket anyday within 6 months',
      },
      {
        icon: './images/ticket_popup_desc_offer.png',
        text: 'Exclusive online offers',
      },
      {
        icon: './images/ticket_popup_desc_safe.png',
        text: `Safe and secure checkout`
      }
    ],
    exclusive_offer: [
      {
        icon: './images/ticket_popup_offer_time.png',
        text: '24 hours BonBon City Tour Bus',
      },
      {
        icon: './images/ticket_popup_offer_voucher.png',
        text: '10% off Hanoi Rewind tours',
      },
      {
        icon: './images/ticket_popup_offer_coupon.png',
        text: `03 exclusive partner's coupons`
      }
    ],
    currency: 'VND',
    prices: {
      family: {
        number: '250,000',
        save: '100,000'
      }
    }
  },
];

// Get tickets
function getTickets(cb) {
  $.ajax({
    type: 'GET',
    url: '/api/frontend/ticket',
    success: cb,
    error: handleRequestError
  });
  // cb(window.tickets);
}

// Render tickets
function renderTickets(tickets) {
  let $list = $('.packages .list .owl-carousel');

  // Empty list
  $list.empty();

  // Render tickets
  for (let ticket of tickets) {
    let exclusive_offer;
    let prices;
    let html;
    let bg; // background image

    // Exclusive offer
    exclusive_offer = `<ul>${ticket.type == 'family' ? 'Each will receive' : ''}`;

    for (let offer of ticket.exclusive_offer) {
      exclusive_offer += `<li>${offer.text}</li>`
    }

    exclusive_offer += `</ul>`
    
    // Prices
    prices = ``;
    // n = 12 / Object.keys(ticket.prices).length;

    if (ticket.type == 'normal') {
      prices = `
        <div class="col-6">
          <div class="price adult">
            <div class="type">ADULT</div>
            <div class="row">
              <div class="col-2 offset-1">
                <div class="currency">${ticket.currency}</div>
              </div>
              <div class="col-9">
                <div class="number">${ticket.prices['adult'].number}</div>
              </div>
              <div class="save col-12">
                <span class="text">save up to</span>
                <span class="save-price">
                  <span class="currency">${ticket.currency}</span>
                  <span class="number">${ticket.prices['adult'].save}</span>
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="price child">
            <div class="type">CHILD</div>
            <div class="row">
              <div class="col-2 offset-1">
                <div class="currency">${ticket.currency}</div>
              </div>
              <div class="col-9">
                <div class="number">${ticket.prices['child'].number}</div>
              </div>
              <div class="save col-12">
                <span class="text">save up to</span>
                <span class="save-price">
                  <span class="currency">${ticket.currency}</span>
                  <span class="number">${ticket.prices['child'].save}</span>
                </span>
              </div>
            </div>
          </div>
        </div>
      `;
    } else {
      for (let k in ticket.prices) {
        prices += `
          <div class="col-12">
            <div class="price">
              <div class="row">
                <div class="col-5">
                  <div class="currency">${ticket.currency}</div>
                </div>
                <div class="col-7">
                  <div class="number">${ticket.prices[k].number}</div>
                </div>
                <div class="save col-12">
                  <span class="text">save up to</span>
                  <span class="save-price">
                    <span class="currency">${ticket.currency}</span>
                    <span class="number">${ticket.prices[k].save}</span>
                  </span>
                </div>
              </div>
            </div>
          </div>
        `;
      }
    }

    // HTML
    bg = ticket.type == 'family' ? './images/bonbon_package_family_bg.png'
      : './images/bonbon_package_bg.png';
    html = `
      <div class="item">
        <div class="package ${ticket.type == 'family' ? 'family' : ''}" style="background-image: url('${bg}')">
          <div class="name">${ticket.name}<br>
            <span>${ticket.type == 'family' ? '2 Adult and 2 Children' : ''}</span>
          </div>
          <div class="content">
            <div class="empty"><img src="http://opensea.vn${ticket.image}" style="width:100%;height:100%;"></div>
            <div class="descriptions">
              ${exclusive_offer}
            </div>
            <div class="prices">
              <div class="row">
                ${prices}
              </div>
            </div>
            <div class="book-now" data-toggle="modal" data-target="#ticket-popup-${ticket.id}">BOOK NOW</div>
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
    url: '/api/frontend/attraction',
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
        <div class="attraction" id="${attraction.id}">
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
            <button id="${attraction.id}">MORE</button>
          </div>
        </div>
      </div>
    `;

    $list.append(html);
  }
}

// Calculate sub-total
function calculateSubTotal(popupId) {
  let adultAmount = parseInt($(popupId + '.ticket-popup .adult .choose-amount .amount-number').text());
  let childAmount = parseInt($(popupId + '.ticket-popup .child .choose-amount .amount-number').text());
  let adultPrice = $(popupId + '.ticket-popup .adult .inner-price .number').text();
  let childPrice = $(popupId + '.ticket-popup .child .inner-price .number').text();
  let subTotal;

  adultPrice = parseInt(adultPrice.split(',').join(''));
  childPrice = parseInt(childPrice.split(',').join(''));
  subTotal = adultAmount * adultPrice + childAmount * childPrice;
  $(popupId + '.ticket-popup .sub-total .price .number').text(intToPriceNumber(subTotal));
}

// Calculate sub-total family
function calculateSubTotalFamily(popupId) {
  let amount = parseInt($(popupId + '.ticket-popup.family .choose-amount .amount-number').text());
  let price = $(popupId + '.ticket-popup.family .inner-price .number').text();
  let subTotal;

  price = parseInt(price.split(',').join(''));
  subTotal = amount * price;
  $(popupId + '.ticket-popup.family .sub-total .price .number').text(intToPriceNumber(subTotal));
}

// Ticket popup amount input
function ticketPopupAmount(popupId) {
  $(popupId + '.ticket-popup .prices .price.adult .choose-amount .add').click(function(e) {
    let x = parseInt($(popupId + '.ticket-popup .adult .choose-amount .amount-number').text());

    $(popupId + '.ticket-popup input.amount-adult').val(++x);
    $(popupId + '.ticket-popup .adult .choose-amount .amount-number').text(x);

    calculateSubTotal(popupId);
  });

  $(popupId + '.ticket-popup .prices .price.adult .choose-amount .sub').click(function(e) {
    let x = parseInt($(popupId + '.ticket-popup .adult .choose-amount .amount-number').text());

    if (x == 1) return;

    $(popupId + '.ticket-popup input.amount-adult').val(--x);
    $(popupId + '.ticket-popup .adult .choose-amount .amount-number').text(x);
    
    calculateSubTotal(popupId);
  });

  $(popupId + '.ticket-popup .prices .price.child .choose-amount .add').click(function(e) {
    let x = parseInt($(popupId + '.ticket-popup .child .choose-amount .amount-number').text());

    $(popupId + '.ticket-popup input.amount-child').val(++x);
    $(popupId + '.ticket-popup .child .choose-amount .amount-number').text(x);
    
    calculateSubTotal(popupId);
  });

  $(popupId + '.ticket-popup .prices .price.child .choose-amount .sub').click(function(e) {
    let x = parseInt($(popupId + '.ticket-popup .child .choose-amount .amount-number').text());

    if (x == 1) return;

    $(popupId + '.ticket-popup input.amount-child').val(--x);
    $(popupId + '.ticket-popup .child .choose-amount .amount-number').text(x);
    
    calculateSubTotal(popupId);
  });

  $(popupId + '.ticket-popup.family .prices .choose-amount .add').click(function(e) {
    let x = parseInt($(popupId + '.ticket-popup.family .choose-amount .amount-number').text());

    $(popupId + '.ticket-popup.family input.amount-family').val(++x);
    $(popupId + '.ticket-popup.family .choose-amount .amount-number').text(x);
    
    calculateSubTotalFamily(popupId);
  });

  $(popupId + '.ticket-popup.family .prices .choose-amount .sub').click(function(e) {
    let x = parseInt($(popupId + '.ticket-popup.family .choose-amount .amount-number').text());

    if (x == 1) return;

    $(popupId + '.ticket-popup.family input.amount-family').val(--x);
    $(popupId + '.ticket-popup.family .choose-amount .amount-number').text(x);
    
    calculateSubTotalFamily(popupId);
  });
}

// Request add to cart
function requestAddToCart(data, cb) {
  // Send request
  $.ajax({
    type: 'POST',
    url: '/api/frontend/cart',
    data: JSON.stringify(data),
    headers: {
      'Content-type': 'application/json'
    },
    success: cb,
    error: handleRequestError
  });
}

// Click on ticket popup book now button
function addTicketToCart(id, name, type, btn=null) {
  let quantity = {};
  let submitData;

  // Quantity
  console.log($(`#ticket-popup-${id} .amount-family`).val())
  console.log($(`#ticket-popup-${id} .amount-adult`).val())
  console.log($(`#ticket-popup-${id} .amount-child`).val())
  if (type == 'family') {
    quantity = {
      family: $(`#ticket-popup-${id} .amount-family`).val()
    };
  } else {
    quantity = {
      child: $(`#ticket-popup-${id} .amount-child`).val(),
      adult: $(`#ticket-popup-${id} .amount-adult`).val(),
    };
  }

  // Submit data
  submitData = [{
    product: 'ticket',
    id,
    name: name.toLowerCase(),
    type,
    quantity
  }];

  // Request add to cart
  requestAddToCart(submitData, () => {
    closeModal('#ticket-popup-' + id);
    if (btn == 'book') {
      location.href = '/cart';
    } else {
      alert('Success');
    }
  });
}

// Render ticket popup
function renderTicketPopups(tickets) {
  let $body = $('body');

  for (let ticket of tickets) {
    let offers = '';
    let html;
    let subTotal;
    let pricesDiv;
    let name;

    if (ticket.type == 'family') {
      name = ticket.name.split(' ').shift();
    } else {
      name = ticket.name;
    }

    for (let offer of ticket.exclusive_offer) {
      offers += `
        <div class="col-md-4">
          <div class="row cell">
            <div class="icon col-3">
              <img src="http://opensea.vn${offer.icon}">
            </div>
            <div class="text col-9">${offer.text}</div>
          </div>
        </div>
      `;
    }

    if (ticket.type == 'normal') {
      subTotal = priceNumberToInt(ticket.prices.adult.number) + priceNumberToInt(ticket.prices.child.number);
      subTotal = intToPriceNumber(subTotal);
    } else if (ticket.type == 'family') {
      subTotal = priceNumberToInt(ticket.prices.family.number);
      subTotal = intToPriceNumber(subTotal);
    } else {
      subTotal = '000,000';
    }
      
    if (ticket.type == 'normal') {
      pricesDiv = `
        <div class="prices">
          <div class="row">
            <div class="col-md-3 offset-md-3">
              <div class="price adult">
                <div class="title">Adult</div>
                <div class="inner-price">
                  <span class="currency">${ticket.currency}</span>
                  <span class="number">${ticket.prices.adult.number}</span>
                </div>
                <div class="save">
                  <span class="text">save up to</span>
                  <span class="save-price">
                    <span class="currency">${ticket.currency}</span>
                    <span class="number">${ticket.prices.adult.save}</span>
                  </span>
                </div>
                <div class="choose-amount">
                  <span class="sub">-</span>
                  <span class="amount-number">1</span>
                  <span class="add">+</span>
                  <input type="number"  value="1" name="amountAdult" class="amount-adult" min="1" hidden>
                </div>
              </div>               
            </div>
            <div class="col-md-3">
              <div class="price child">
                <div class="title">
                  Child
                  <div class="sub-title">(3 - 15 years)</div>
                </div>
                <div class="inner-price">
                  <span class="currency">${ticket.currency}</span>
                  <span class="number">${ticket.prices.child.number}</span>
                </div>
                <div class="save">
                  <span class="text">save up to</span>
                  <span class="save-price">
                    <span class="currency">${ticket.currency}</span>
                    <span class="number">${ticket.prices.child.save}</span>
                  </span>
                </div>
                <div class="choose-amount">
                  <span class="sub">-</span>
                  <span class="amount-number">1</span>
                  <span class="add">+</span>
                  <input type="number" value="1" name="amountChild" class="amount-child" min="1" hidden>
                </div>
              </div>  
            </div>
          </div>  
        </div>
      `;
    } else if (ticket.type == 'family') {
      pricesDiv = `
        <div class="prices">
          <div class="row">
            <div class="col-md-4 offset-md-2">
              <div class="price family">
                <div class="title">2 Adults and 2 Children</div>
                <div class="inner-price">
                  <span class="currency">${ticket.currency}</span>
                  <span class="number">${ticket.prices.family.number}</span>
                </div>
                <div class="save">
                  <span class="text">save up to</span>
                  <span class="save-price">
                    <span class="currency">${ticket.currency}</span>
                    <span class="number">${ticket.prices.family.save}</span>
                  </span>
                </div>
              </div>               
            </div>
            <div class="col-md-4 wrap">
              <div class="choose-amount">
                <span class="sub">-</span>
                <span class="amount-number">1</span>
                <span class="add">+</span>
                <input type="number" value="1" name="amountFamily" class="amount-family" hidden>
              </div>
            </div>
          </div>  
        </div>
      `;
    } else {
      pricesDiv = '';
    }

    html = `
      <div class="modal ticket_popup_modal" tabindex="-1" role="dialog" id="ticket-popup-${ticket.id}">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="ticket-popup ${ticket.type == 'family' ? 'family' : ''}">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <form>
                <div class="row">
                  <div class="col-md-3">
                    <div class="banner">
                      <div class="title">${name}</div>
                      <img src="./images/ticket_popup_banner.png">
                      <div class="filter"></div>
                    </div>
                  </div>
                  <div class="col-md-9">
                    <div class="content">
                      <h1>SELECT YOUR BONBON TICKET</h1>
                      ${pricesDiv}

                      <div class="descriptions">
                        <div class="row">
                          <div class="col-md-4">
                            <div class="description row">
                              <div class="icon col-3">
                                <img src="./images/ticket_popup_desc_ticket.png">
                              </div>
                              <div class="text col-9">Use your ticket anyday within 6 months</div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="description row">
                              <div class="icon col-3">
                                <img src="./images/ticket_popup_desc_offer.png">
                              </div>
                              <div class="text col-9">Exclusive online offers</div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="description row">
                              <div class="icon col-3">
                                <img src="./images/ticket_popup_desc_safe.png">
                              </div>
                              <div class="text col-9">Safe and secure checkout</div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="offers row">
                        <div class="col-md-4">
                          <div class="title cell">EXCLUSIVE OFFER</div>
                        </div>
                        ${offers}
                      </div>

                      <div class="sub-total row">
                        <div class="title col-md-3 offset-md-3">SUB-TOTAL</div>
                        <div class="price col-md-3">
                          <span class="currency">${ticket.currency}</span><span class="number">${subTotal}</span>
                        </div>
                      </div>

                      <div class="submit-buttons">
                        <button type="button" class="add-to-cart" onclick="addTicketToCart(${ticket.id}, '${name.toLowerCase()}', '${ticket.type}')">ADD TO CART</button>
                        <button type="button" class="book-now" onclick="addTicketToCart(${ticket.id}, '${name.toLowerCase()}', '${ticket.type}', 'book')">BOOK NOW</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    `;

    $body.append(html);
    ticketPopupAmount('#ticket-popup-' + ticket.id + ' ');
  }
}
