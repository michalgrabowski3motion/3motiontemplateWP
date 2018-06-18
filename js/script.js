$(document).ready(function(){

  new WOW().init();

  $('.hamburger-menu').click(function(){
      $('#nav-icon3').toggleClass('open');
      $('section.top .navigation').slideToggle(100);
    });


if(window.location.href.indexOf('stronywww') > -1 || window.location.href.indexOf('portfolio') > -1) {
  $('section.top .logo a img').remove();
  $('section.top .logo a').append('<img src="http://new.3motion.net.pl/wp-content/themes/3motiontemplate/images/assets/3motion-white.svg" alt="logo 3motion">');
  $('.colorTop .hamburger-menu #nav-icon3 span').css({
    'background' : "#ffffff",
  })
  $('.colorTop .hamburger-menu label').css({
    'color' : "#ffffff !important",
  })
}


// forms

$('.btn-sendmail').on('click', function(){
  if($('input:checked').val() == 'zapytanie') {
    $('#zapytanieForm .form-content .wpcf7').addClass('downForm');
    $('#zapytanieForm').fadeIn();
  }
  else if ($('input:checked').val() == 'spotkanie') {
    $('#spotkanieForm .form-content .wpcf7').addClass('downForm');
    $('#spotkanieForm').fadeIn();
  }
  else if ($('input:checked').val() == 'oferta') {
    $('#ofertaForm .form-content .wpcf7').addClass('downForm');
    $('#ofertaForm').fadeIn();
  }
})


$('#CloseForm1').on('click', function(){
  $('#zapytanieForm').fadeOut();
});
$('#CloseForm2').on('click', function(){
  $('#spotkanieForm').fadeOut();
});
$('#CloseForm3').on('click', function(){
  $('#ofertaForm').fadeOut();
});

var btnOnline = $('section.online button.second-btn');
if (btnOnline.is(':empty')){
$(this).hide();
}

if(window.location.href.indexOf('kontakt') > -1){
  $('.box-footer').css({
    "display" : "none",
  })
  $('.icon-footer').appendTo('.next-project');
  $('section.footer .next-project .btn').css({
    "margin-bottom" : "100px !important",
  })
}


$(".questionAbout h3").click(function(){
  if(false == $(this).next().is(':visible')) {
    $('.questionAbout p').hide();
    $('.questionAbout h3').removeClass('rotate');
  }
  $(this).next().slideToggle();
  $(this).toggleClass('rotate');
});

  $('.questionAbout p').hide();



$('.box-work .content-work .category-work button').each(function() {
  $(this).html($(this).html().replace('Wyróżnione slide', '').replace('Wyróżnione - strony www', '').replace('Wyróżnione na stronie głównej', ''));
});




 if($(window).width() <= 991) {
  $(".second .box-menu .click-second").click(function(){
  	if(false == $(this).next().is(':visible')) {
  		$('section.top .navigation .second ul').hide();
  	}
  	$(this).next().toggle();
  });
  }

  $('section.top .navigation .second ul:eq(0)').show();


  $('.my-slider').unslider({
    autoplay: true,
    arrows: {
    	//  Unslider default behaviour
    	prev: '<a class="unslider-arrow prev"></a>',
    	next: '<a class="unslider-arrow next"></a>',

    	//  Example: generate buttons to start/stop the slider autoplaying
    	stop: '<a class="unslider-pause" />',
    	start: '<a class="unslider-play"></a>'
    }
  });

});
