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
