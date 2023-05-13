(function ($) {
  $(document).ready(function () {
    $('.top-slider').slick({
      dots: true,
      arrows: false,
    });

    $('.reviews').slick({
      dots: true,
      arrows: false,
      slidesToShow: 3,
      // infinity: false,
      // initialSlide: 1,
      centerMode: true,
      focusOnSelect: true,
      responsive: [
        {
          breakpoint: 760,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
    });

    $('.header__menu-burger').on('click', function () {
      $(this).find('div').toggleClass('menu-burger_active');
      $('.header__menu').toggleClass('header__menu_active');
    });
  });
})(jQuery);
