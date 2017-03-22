$(function() {
  "use strict";

  // Init animsition
  $('.animsition').animsition({
    inClass: 'fade-in',
    outClass: 'fade-out',
    inDuration: 1500,
    outDuration: 750,
    loading: false
  });

  // NAV
  function navToggle() {
    $('.navbar-toggle').toggleClass('navbar-toggle-open');
    $('nav').toggleClass('open');
  }

  // Show nav toggle animation and open close menu on click
  $('.navbar-toggle').unbind().click(() => navToggle());

  // HEADER
  $('.carrot-harvest').click(function () {
    $(this).addClass('pull-carrot');
    setTimeout(() => {
      $(this).css('opacity', '0');
    }, 4000);
  });

  // TYPES SECTION
  function hideInfo () {
    $('.type-info').removeClass('open-info');
  }

  // Init slider
  $('.types-slider').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: true,
          centerMode: true,
          centerPadding: '20px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 590,
        settings: {
          arrows: true,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });

  // Show carrot info on info icon click (only active carrot)
  $('.info-icon').click(function () {
    if ($(this).closest('.carrot-type').hasClass('slick-active')) $('.slick-center .type-info').addClass('open-info');
  });
  // Hide carrot info on close icon click
  $('.type-info img').click(() => hideInfo() );
  // Hide carrot info on arrow click and swipe
  $('.types-slider').on('beforeChange', (e) => hideInfo() );

  // CONTACT
  $('#question-form .btn').click((e) => {
    window.location.hash = 'contact';
  });

});
