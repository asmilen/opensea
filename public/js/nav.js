// Enable navbar background
function enableNavbarBackground() {
  $('.navbar').addClass('bg-dark');
}

// Disable navbar background
function disableNavbarBackground() {
  $('.navbar').removeClass('bg-dark');
}

// Toggle navbar background
function toggleNavbarBackground() {
  const y = $(window).scrollTop();
  const h = $('.header').outerHeight();

  if (y > h) {
    enableNavbarBackground();
  } else {
    disableNavbarBackground();
  }
}

// Navbar background
function navbarBackground() {
  toggleNavbarBackground();
  $(window).scroll(toggleNavbarBackground);
}

// export { navbarBackground };
// exports.navbarBackground = navbarBackground;
