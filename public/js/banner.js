// Set banner offset
function setBannerOffset() {
  const h = $('.navbar').outerHeight();

  $('.banner').css('top', `-${h}px`);
  $('.banner').css('margin-bottom', `-${h}px`);
}

// Set banner offset on resize
function setBannerOffsetOnResize() {
  $(window).bind('resize', setBannerOffset);
}

// export {
//   setBannerOffset,
//   setBannerOffsetOnResize,
// };
