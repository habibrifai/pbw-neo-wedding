/*var $document =$(document),
    $element =$('.navbar'),
    navbarDefault ='navbar-default';
    navbarTransparent ='navbar-transparent';
    fadeInDown = 'fadeInDown';

$document.scroll(function() {
     if($document.scrollTop() >= 100) {
       $element.addClass(navbarDefault);
       $element.removeClass(navbarTransparent);
       $element.addClass(fadeInDown);
       //if($(window).scrollTop() >= 120){
        //  $('navbar').addClass('scrolled');
       //}
     }
    else {
      //$('navbar').removeClass('scrolled');
      $element.removeClass(navbarDefault);
      $element.addClass(navbarTransparent);
      $element.removeClass(fadeInDown);
    }
});*/
$(function(){
  if($(window).width() < 768){
    jQuery.fx.off = true;
  }
  $(".btn-circle").on('click', function(event) {
      event.preventDefault();
      var target =$('#about');
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 600);
  });

  $('#return-to-top').click(function() {      // When arrow is clicked
      $('body,html').animate({
          scrollTop :0},600);
  });
  $(window).scroll(function() {
   if($(window).scrollTop() >= 100) {
     //$('nav').addClass('scrolled');
     $('.navbar').addClass('navbar-default');
     $('.navbar').removeClass('navbar-transparent');
     $('.navbar').addClass('fadeInDown');
     $('.imgcol1row1').addClass('fadeInLeft');

   }
   else {
      //$('nav').removeClass('scrolled');
      $('.navbar').removeClass('navbar-default');
      $('.navbar').addClass('navbar-transparent');
      $('.navbar').removeClass('fadeInDown');

   }
   if($(window).scrollTop() >= 500){
     $('#return-to-top').fadeIn(200);
   }
   else{
     $('#return-to-top').fadeOut(200);
   }
  });
});
