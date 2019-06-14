jQuery(document).ready(function($){
  $(".mobile_menu_bar").on("click", function(){
    console.log("clicked");
    var mobile_nav = $('.mobile_nav');
    console.log(mobile_nav.hasClass("opened"));
    if (mobile_nav.hasClass("opened")) {
      $('.et_menu_container').removeClass('opened');
      $('#logo').attr('src', '/wp-content/uploads/logo.png')
    } else {
      $('.et_menu_container').addClass('opened');
      $('#logo').attr('src', '/wp-content/uploads/logo-hover.png')
    }
    
 });
});