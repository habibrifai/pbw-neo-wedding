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
if ( window.location.hash ) scroll(0,0);
// void some browsers issue
setTimeout( function() { scroll(0,0); }, 1);



$(function(){
  // your current click function
  $('.redirect-scroll').on('click', function(e) {
      e.preventDefault();
      $('html, body').animate({
          scrollTop: $($(this).attr('href')).offset().top
      }, 1000, 'swing');
  });

  // *only* if we have anchor on the url
  if(window.location.hash) {
      // smooth scroll to the anchor id
      $('html, body').animate({
          scrollTop: $(window.location.hash).offset().top + 'px'
      }, 1000, 'swing');
  }

  if($(window).width() < 768){
    jQuery.fx.off = true;
  }
  $('.link-kontak').click(function () {
        $('.navbar a').removeClass('active');
        $(this).addClass('active');
  });

  $(".btn-circle").on('click', function(event) {
      event.preventDefault();
      var target =$('#about');
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 600);
  });

  $(".link-kontak").on('click', function(event) {
    if (window.location.hash != null && window.location.hash != '') {
      event.preventDefault();
      var target =$('#kontak-neo');
      $('html, body').animate({
        scrollTop: (target.offset().top-50)
      }, 600);
    }
  });

  $(".link-kontak").on('click', function(event) {
      event.preventDefault();
      var target =$('#kontak-neo');
      $('html, body').animate({
        scrollTop: (target.offset().top-50)
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
   if($(window).scrollTop() >= 900) {
     $('.imgcol1row1').addClass('fadeInLeft');
   }
  });
});
