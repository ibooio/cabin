
function removePreloader(){
  $('html').css('overflow', 'auto');
  $('body').css('display', 'inherit');
  $('#preloader').remove();
}

function addPreloader(){
  $('html').append('<div id="preloader">');
  var logo= $('<div class="logo">').appendTo('#preloader');
  $('#preloader').append('<div class="loading">');
  $(logo).css('margin-top', ($(window).height()-$(logo).height())/2);
}


$(window).on("load", function() {
  removePreloader();
});
$('html').css('overflow', 'hidden');
addPreloader();

new WOW().init();

$(document).scroll(function() {
  var y = jQuery(this).scrollTop();
  var limit= $('#bg').height()-100;
  if (y > limit) {
      $('#nav').addClass('nav-white');
      //$('#nav').find('li').addClass('blue');
  } else {
      $('#nav').removeClass('nav-white');
      //$('#nav').find('li').removeClass('blue');
  }
});

function scrollTo(target){
  $('html, body').stop().animate({
      scrollTop: $('#' +target).offset().top -50
  }, 500);
   $('.button-collapse').sideNav('hide');
}

$(document).ready(function(){
  $('#bg').css('height', $(window).outerHeight(true) -100);
  $('#bg .override').css('min-height', $(window).outerHeight(true) -100);
  $(".button-collapse").sideNav();
  $('.menu-item').on('click', function() {
    scrollTo($(this).data('target'));
  });

  $('#map').click(function () {
    $('#map iframe').css('pointer-events', 'auto');
  });

  $('#map' ).mouseleave(function() {
    $('#map iframe').css('pointer-events', 'none');
  });

});
