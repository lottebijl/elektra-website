function topNav(){
  var menuItem = $('.top-navigation__menu li.dropdown a');

  menuItem.mouseenter(function(event) {
    menuItem.closest('.dropdown').removeClass('open');
    $(this).closest('.dropdown').toggleClass('open');
  });

}