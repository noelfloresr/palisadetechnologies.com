jQuery(document).ready(function($){
  $(".mobile_menu_bar").on("click", function(){

    var mobile_nav = $('.mobile_nav');

    

    if (mobile_nav.hasClass("opened")) {
      $('.et_menu_container').removeClass('opened');
      $('#logo').attr('src', '/wp-content/uploads/logo.png');
    } else {
      $('.et_menu_container').addClass('opened');
      $('#logo').attr('src', '/wp-content/uploads/logo-hover.png');
         
    }
 });

    // var infoSelector = $('ul#mobile_menu > #menu-item-28 > a');
    // var careerSelector = $('ul#mobile_menu #menu-item-33 > a');
    // var contactSelector = $('ul#mobile_menu #menu-item-36 > a');
    // console.log(infoSelector);

    // var infoHtml = infoSelector.html();
    // var careerHtml = careerSelector.html();
    // var contactHtml = contactSelector.html();

    // // Adding Menu Icons
    //   infoSelector.html('<img src="/wp-content/uploads/info.png" class="iconMenu" />' + infoHtml);        
    //   careerSelector.html('<img src="/wp-content/uploads/briefcase.png" class="iconMenu" />' + careerHtml); 
    //   contactSelector.html('<img src="/wp-content/uploads/phone-book.png" class="iconMenu" />' + contactHtml);
    

});