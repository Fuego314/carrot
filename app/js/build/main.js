'use strict';

$(function () {
  "use strict";

  // NAV

  function navToggle() {
    $('.navbar-toggle').toggleClass('navbar-toggle-open');
    $('nav').toggleClass('open');
  }

  // Show nav toggle animation and open close menu on click
  $('.navbar-toggle').unbind().click(function () {
    return navToggle();
  });

  // HEADER
  $('.carrot-harvest').click(function () {
    $(this).addClass('pull-carrot');
  });

  // TYPES SECTION
  function hideInfo() {
    $('.type-info').removeClass('open-info');
  }

  // Init slider
  $('.types-slider').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 3,
    responsive: [{
      breakpoint: 768,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '20px',
        slidesToShow: 3
      }
    }, {
      breakpoint: 590,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }]
  });

  // Show carrot info on info icon click (only active carrot)
  $('.info-icon').click(function () {
    if ($(this).closest('.carrot-type').hasClass('slick-active')) $('.slick-center .type-info').addClass('open-info');
  });
  // Hide carrot info on close icon click
  $('.type-info img').click(function () {
    return hideInfo();
  });
  // Hide carrot info on arrow click and swipe
  $('.types-slider').on('beforeChange', function (e) {
    return hideInfo();
  });
});