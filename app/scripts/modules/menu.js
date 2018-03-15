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