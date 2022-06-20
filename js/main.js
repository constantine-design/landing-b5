
jQuery(document).ready(function($) {
//begin script

  /* ======================================================= */
  /*                   INIT VISUAL LIBRARIES                 */
  /* ======================================================= */

  if (typeof AOS !== 'undefined') {
    AOS.init();
  }

  $(".testimonial-slider").slick({
  arrows: true,
  dots: false,
  infinite: true,
  slidesToShow: 2,
  slidesToScroll: 1,
  centerMode: true,
  centerPadding: true,
  responsive: [
    { breakpoint: 992,
      settings: { slidesToShow: 1,}
    },
   ]
  });

  $(".logo-slider").slick({
    dots: false,
    arrows: false,
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    centerMode: true,
    centerPadding: true,
    infinite: true,
    autoplay: true,
    pauseOnHover: false,
    responsive: [
      { breakpoint: 960, settings: { slidesToShow: 3, } },
      { breakpoint: 570, settings: { slidesToShow: 2, } },
    ]
  });

  $(".slider.placeholder").removeClass('placeholder');

//end script
});
