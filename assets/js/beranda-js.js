$('#return-to-top').fadeOut(200);
function initMap(){
  var location ={ lat:-7.239557, lng:112.752729};
	var map = new google.maps.Map(document.getElementById("map"), {
		zoom: 17,
		center :location
	});
	var marker = new google.maps.Marker({
		position:location,
		map: map
	});
}
function scrollKontak(){
  var target =$('#kontak-neo');
  $('html, body').animate({
    scrollTop: target.offset().top -50
  }, 600);
}

$(function(){

  if($(window).width() < 768){
    jQuery.fx.off = true;
  }

  $(".btn-circle").on('click', function(event) {
      event.preventDefault();
      var target =$('#about');
      $('html, body').animate({
        scrollTop: target.offset().top -30
      }, 600);
  });

  $(".one-page").on('click', function(event) {
      scrollKontak();
  });

  $(".link-kontak").on('click', function(event) {
      windows.location.replace("url");
      scrollKontak();




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
   if($(window).scrollTop() >= 200){
     $('#return-to-top').fadeIn(200);
     $('.imgcol1row1').addClass('fadeInLeft');
   }
   else{
     $('#return-to-top').fadeOut(200);
   }
   if($(window).scrollTop() >=$('#kontak-neo').position().top -60){
     $('.navbar a').removeClass('active');
     $('.one-page').addClass('active');
   }
   else{
     $('.one-page').removeClass('active');
     $('.beranda').addClass('active');
   }
   if ($(window).scrollTop() >=$('#kontak-neo').position().top +750){
     $('.one-page').removeClass('active');
     $('.beranda').addClass('active');
   }
  });
});
