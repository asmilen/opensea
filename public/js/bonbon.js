// import { owlCarousel, scrollAnchor } from './common';

// Navbar background
function navbarBackground() {
  $(window).scroll(function() {
    let y = $(window).scrollTop();
    let h = $('.header').outerHeight();

    if (y >= h) {
      $('nav').addClass('light-background');
    } else {
      $('nav').removeClass('light-background');
    }
  });
}

// Click on banner's chevron
function clickOnBannerChevron() {
  $('.top-see-more .inner').click(() => {
    scrollAnchor('#intro-video');
  });
}

// Click on how it work button
function clickOnHowItWorkButton() {
  $('.how-it-work .book-now button').click(() => {
    scrollAnchor('#tickets');
  });
}

// Click on attractions button
function clickOnAttractionsButton() {
  $('.attractions .bonbon button').click(() => {
    scrollAnchor('#tickets');
  });
}

// Tickets carousel
function ticketsCarousel() {
  getTickets(tickets => {
    renderTicketPopups(tickets);
    renderTickets(tickets);
    owlCarousel('.packages .list .owl-carousel');
  });
}

// Attractions carousel
function attractionsCarousel() {
  getAttractions(attractions => {
    renderAttractions(attractions);
    owlCarousel('.attractions .list .owl-carousel');
  });
}

// Customers carousel
function customersCarousel() {
  owlCarousel('.customers .list .owl-carousel');
}

$(document).ready(() => {
  csrfHeader();
  persistStorage(); // comment this
  initLanguage(); // comment this
  renderBonbonContent();
  chooseLanguage(renderBonbonContent);
  navbarBackground();
  clickOnBannerChevron();
  clickOnHowItWorkButton();
  clickOnAttractionsButton();
  ticketsCarousel();
  attractionsCarousel();
  customersCarousel();
});

