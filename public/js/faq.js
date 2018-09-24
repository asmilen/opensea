$(document).ready(() => {
  csrfHeader();
  persistStorage(); // comment this
  initLanguage(); // comment this
  renderFAQContent();
  chooseLanguage(renderFAQContent);
  navigateCarousel();
  navigate();
});

// Navigate owl carousel
function navigateCarousel() {
  owlCarousel('.navigate .owl-carousel');
}

// Navigate
function navigate() {
  for (let x of ['bonbon', 'rewind', 'more']) {
    $('.navigate-item#nav-' + x).click(() => {
      scrollAnchor('.faqs#faqs-' + x)
    });
  }
}
