// import { owlCarousel, scrollAnchor } from './common';

// Navbar background
function navbarBackground() {
  let y = $(window).scrollTop();
  let h = $('.header').outerHeight();

  if (y >= h) {
    $('nav').addClass('dark-background');
  } else {
    $('nav').removeClass('dark-background');
  }
}

// Navbar background on scroll
function navbarBackgroundOnScroll() {
  $(window).bind('scroll', navbarBackground);
}

// Click on banner chevron
function clickOnBannerChevron() {
  $('.top-see-more .inner').click(() => {
    scrollAnchor('#intro-video');
  });
}

// Tours
function tours() {
  getTours(tours => {
    renderTourPopups(tours);
    renderTours(tours);
    posterFont(window.lang);
  });
}

// Customers carousel
function customersCarousel() {
  owlCarousel('.customers .list .owl-carousel');
}



function ajaxSetup() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
}

$(document).ready(() => {
  ajaxSetup();
  persistStorage(); // comment this
  initLanguage(); // comment this
  renderRewindContent();
  chooseLanguage(renderRewindContent);
  navbarBackground();
  navbarBackgroundOnScroll();
  clickOnBannerChevron();
  tours();
  customersCarousel();
});
