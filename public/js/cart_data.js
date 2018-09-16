// Get cart data
function getCartData(cb) {
  $.ajax({
    type: 'GET',
    url: 'api/frontend/cart/index',
    success: cb,
    error: handleRequestError
  });

}

// Request remove item
function requestRemoveItem(product, id, cb) {
  // $.ajax({
  //   type: 'DELETE',
  //   url: 'http://opensea.vn/api/frontend/cart/' + product + '/' + id,
  //   success: cb,
  //   error: handleRequestError
  // });

  cb();
}

// Remove item success
function removeItemSuccess() {
  getCartData(renderCartData);
}

// Remote item
function removeItem(product, id) {
  requestRemoveItem(product, id, removeItemSuccess);
}

// Render cart data
function renderCartData(data) {
  let $tbody = $('.cart-info table tbody');
  let html = ``;
  let currency = 'VND';
  let total = 0;

  if (data[0]) {
    currency = data[0].currency;
  }

  data.forEach((item, i) => {
    let name = item.name;
    let desc;
    let prices = '<br>';
    let quantities = '<br>';
    let img;

    // Img
    if (item.product == 'ticket') {
      img = './images/bonbon_logo.png';
    } else {
      img = './images/rewind_logo.png';
    }

    // Name
    name = toCapitalize(name);
    if (item.product == 'ticket') {
      name += ' package';
    }

    // Prices and quantities
    desc = `<div class="name">${name}</div>`;

    for (let k in item.price) {
      prices += `
        <div>
          <div style="display: inline-block;" class="type mr-1">${toCapitalize(k)}</div>
          <div style="display: inline-block;" class="price ${k}">
            <span class="currency">${currency}</span><span class="number">${item.price[k]}</span>
          </div>
        </div>
      `;

      // desc += `<div class="type">${toCapitalize(k)}</div>`;

      // prices += `
      //   <div class="price ${k}">
      //     <span class="currency">${currency}</span>
      //     <span class="number">${item.price[k]}</span>
      //   </div>
      // `;

      quantities += `
        <div class="quantity ${k}">${item.quantity[k]}</div>
      `;

      total += item.sub_total;
    }

    html += `
      <tr id="${item.product}-${item.id}">
        <td class="product"><img src="${img}"></td>
        
        <td class="desc">
          ${desc}
        </td>
        <td class="prices">
          ${prices}
        </td>
        <td class="quantities">
          ${quantities}
        </td>
        <td class="subtotal">
          <div class="price">
            <span class="currency">${currency}</span>
            <span class="number">${item.sub_total}</span>
          </div>
        </td>
        <td class="action">
          <a onclick="removeItem('${item.product}', ${item.id})">REMOVE</a>
        </td>
      </tr>
    `;
  });

  $tbody.html(html);

  // Order
  $('.order .total .price .currency').text(currency);
  $('.order .total .price .number').text(total);
  $('.order .actual-total .price .currency').text(currency);
  $('.order .actual-total .price .number').text(total);
}



$(document).ready(() => {
    csrfHeader();
  getCartData(renderCartData);
  processCheckout(renderCartData);
});
