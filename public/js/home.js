// import { navbarBackground } from './nav';
// import { setBannerOffset, setBannerOffsetOnResize } from './banner';

// Click on banner's chevron
function clickOnBannerChevron() {
  $('.banner .see-more').click(() => {
    $('body, html').animate({
      scrollTop: $('#about-us').offset().top/* - $('nav').outerHeight()*/,
    }, 1200, () => {});
  });
}

// Fade about us image 1
function fadeAboutUsImage1() {
  let y = $(document).scrollTop();
  let aboutY = $('.about-us').offset().top - 200;
  let image2Y = $('.about-us .image-2').offset().top - 200;

  if (y >= aboutY && y <= image2Y) {
    $('.about-us .image-1').addClass('show');

    $(window).unbind('scroll', fadeAboutUsImage1);
  }
}

// Fade about us image 2
function fadeAboutUsImage2() {
  let y = $(document).scrollTop();
  let image2Y = $('.about-us .image-2').offset().top - 200;
  let bonbonY = $('.journeys #bonbon').offset().top - 200;

  if (y >= image2Y && y <= bonbonY) {
    $('.about-us .image-2').addClass('show');

    $(window).unbind('scroll', fadeAboutUsImage2);
  }
}

// Fade bonbon images
function fadeBonbonImage() {
  let y = $(document).scrollTop();
  let bonbonY = $('.journeys #bonbon').offset().top - 200;
  let rewindY = $('.journeys #rewind').offset().top - 200;

  if (y >= bonbonY && y <= rewindY) {
    $('.journeys #bonbon .image').addClass('show');

    $(window).unbind('scroll', fadeBonbonImage);
  }
}

// Fade rewind images
function fadeRewindImage() {
  let y = $(document).scrollTop();
  let rewindY = $('.journeys #rewind').offset().top - 200;
  let countY = $('.count').offset().top - 200;

  if (y >= rewindY && y <= countY) {
    $('.journeys #rewind .image').addClass('show');

    $(window).unbind('scroll', fadeRewindImage);
  }
}

// Count item
function countItem(id, max) {
  let i = 0;
  let interval = setInterval(() => {
    i++;
    if (i <= max) {
      $(`#${id} .header-1`).text(i);      
    } else {
      clearInterval(interval);
    }
  }, 4000 / max);
}

// Count
function count() {
  let y = $(document).scrollTop();
  let countY = $('.count').offset().top - 500;
  let joinUsY = $('.join-us').offset().top - 200;

  if (y >= countY && y <= joinUsY) {
    $(window).unbind('scroll', count);

    countItem('count-bonbon', 123);
    countItem('count-customers', 456);
    countItem('count-tours', 789);
  }
}

// Fade on scroll
function fadeOnScroll() {
  $(window).bind('scroll', fadeAboutUsImage1);
  $(window).bind('scroll', fadeAboutUsImage2);
  $(window).bind('scroll', fadeBonbonImage);
  $(window).bind('scroll', fadeRewindImage);
  $(window).bind('scroll', count);
}

$(document).ready(() => {
  csrfHeader();
  persistStorage(); // comment this
  initLanguage(); // comment this
  renderHomeContent();
  chooseLanguage(renderHomeContent);
  clickOnBannerChevron();
  fadeOnScroll();
});
