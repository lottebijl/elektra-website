$( document ).ready(function() {
    Menu();
    topNav();
   $('.bevestigd-slider').slick({
      slidesToShow: 3,
      slidesToScroll: 3,
      infinite: false,
      responsive: [
      {
        breakpoint: 99999,
        settings: "unslick"
      },
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 3,
          dots: true,
          arrows: false,
          // variableWidth: true,
        }
      }
    ]
    });

});