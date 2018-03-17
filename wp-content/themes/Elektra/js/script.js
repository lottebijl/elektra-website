function Menu(){
  var menuBtn = $('.btn-menu');
  var mobileMenu = $('.mobile-menu');

  menuBtn.click(function() {
    mobileMenu.toggleClass('open');
    menuBtn.toggleClass('close');
    if (mobileMenu.is('.open')){
      menuBtn.html('Close<i class="icon icon-menu"></i>');
      console.log('open');
      mobileMenu.on('touchmove', function(event) {
        event.preventDefault();
      });
    } else {
      menuBtn.html('Menu<i class="icon icon-menu"></i>');
    }
  });

}
var controller = new ScrollMagic.Controller();
var pinnedMenu = $('#pinned-menu');
var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;

if (width > 780){
  if ( pinnedMenu.length ) {
    $(function () {
      var contentHeight =  $('.content-container .content').height();
      var duration = parseInt(contentHeight - 200);
      var scene = new ScrollMagic.Scene({triggerElement: "#trigger1", duration: duration})
              .setPin("#pinned-menu")
              // .addIndicators({name: "1 (duration: 100%)"}) // add indicators (requires plugin)
              .addTo(controller);
    });
  }
}

function topNav(){
  var menuItem = $('.top-navigation__menu li.dropdown a');

  menuItem.mouseenter(function(event) {
    menuItem.closest('.dropdown').removeClass('open');
    $(this).closest('.dropdown').toggleClass('open');
  });

}
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