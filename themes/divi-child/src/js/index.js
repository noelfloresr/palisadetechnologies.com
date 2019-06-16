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

 var benefitsColumn = $('.benefits-column');
 var professionalDevelopmentColumn = $('.professional-development-column');
 var internshipColumn = $('.internship-column');

 var benefitsRow = $('.benefits-row');
 var professionalDevelopmentRow = $('.professional-development-row');
 var internshipRow = $('.internship-row');

professionalDevelopmentRow.hide();
internshipRow.hide();

benefitsColumn.hover(function () { 
  benefitsRow.show();
  professionalDevelopmentRow.hide();
  internshipRow.hide();

  benefitsColumn.addClass('active');
  professionalDevelopmentColumn.removeClass('active');
  internshipColumn.removeClass('active');
});

professionalDevelopmentColumn.hover(function () { 
  benefitsRow.hide();
  professionalDevelopmentRow.show();
  internshipRow.hide();

  benefitsColumn.removeClass('active');
  professionalDevelopmentColumn.addClass('active');
  internshipColumn.removeClass('active');
});

internshipColumn.hover(function () { 
  benefitsRow.hide();
  professionalDevelopmentRow.hide();
  internshipRow.show();

  benefitsColumn.removeClass('active');
  professionalDevelopmentColumn.removeClass('active');
  internshipColumn.addClass('active');
});


});