// Owl carousel
function owlCarousel(selector) {
  let $owl = $(selector);

  $owl.owlCarousel({
    loop: true,
    nav: true,
    responsiveClass: true,
    dots: true,
    responsive:{
      0: {
        items: 1,
        center: true
      },
      992: {
        items: 3,
        center: true
      }
    }
  });
}

// Scroll anchor
function scrollAnchor(id) {
  $('body, html').animate({
    scrollTop: $(id).offset().top - $('nav').outerHeight(),
  }, 1200, () => {});
}

// Get cookies
function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

// Handle request error
function handleRequestError(err) {
    swal("Error!", "Something went wrong!", "error");
}

// CSRF header
function csrfHeader() {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
}

// Close modal
function closeModal(id) {
  $(id + ' button.close').click();
}

// To capitalize
function toCapitalize(s) {
  return s[0].toUpperCase() + s.substr(1);
}

// Price number to int
function priceNumberToInt(num) {
  let s = num.split(/\D/gmi).join('');

  return parseInt(s);
}

// Int to price number
function intToPriceNumber(num) {
  let a = num.toString().split('');
  let s = '';

  for (let i = a.length - 1; i >= 0; i--) {
    if ((a.length - i - 1) % 3 == 0 && i < a.length - 1) {
      s = a[i] + ',' + s;
    } else {
      s = a[i] + s;
    }
  }

  return s;
}

// export { scrollAnchor, owlCarousel, getCookie, handleRequestError }
