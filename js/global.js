
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

  $('#full-history').on('click', function(){
    $(this).remove();
    $('#history-hidden').css('display', 'block');
  });

  $('#map').click(function () {
    $('#map iframe').css('pointer-events', 'auto');
  });

  $('#map' ).mouseleave(function() {
    $('#map iframe').css('pointer-events', 'none');
  });
  initTurnForm();
  initContactForm();
});


function initContactForm(){
  //contact form
  var form = $('#contact-form');
  $(form).submit(function(e) {
    e.preventDefault();
    var formData = $(form).serialize();
    $.ajax({
      type: 'POST',
      url: $(form).attr('action'),
      data: formData
    }).done(function(response) {
      Materialize.toast(response, 4000, 'green accent-4 rounded');
      $('#contact_name').val('');
      $('#contact_email').val('');
      $('#contact_message').val('');
    }).fail(function(data) {
      if (data.responseText !== '') {
        Materialize.toast(data.responseText, 4000, 'red darken-1');
      } else {
        Materialize.toast('No se pudo enviar el mensaje', 4000, 'red darken-1');
      }
    });
  });
}

function initTurnForm(){
  //contact form
  var form = $('#turn-form');
  $(form).submit(function(e) {
    $(form).find('button[type="submit"]').css('display', 'none').parent().append('<span><b>Espere...</b></span>');
    e.preventDefault();
    var formData = new FormData(form[0]);
    $.ajax({
      type: 'POST',
      url: $(form).attr('action'),
      data: formData,
      cache: false,
      contentType: false,
      processData: false
    }).done(function(response) {
      console.log(response);
      Materialize.toast(response, 4000, 'green accent-4 rounded');
      $(form).find('button[type="submit"]').css('display', '').next().remove();
      $('#full_name').val('');
      $('#dni').val('');
      $('#secure').val('');
      $('#age').val('');
      $('#telephone').val('');
      $('#email').val('');
      $('#description').val('');
    }).fail(function(data) {
      $(form).find('button[type="submit"]').css('display', '').next().remove();
      if (data.responseText !== '') {
        Materialize.toast(data.responseText, 4000, 'red darken-1');
      } else {
        Materialize.toast('No se pudo enviar la solicitud', 4000, 'red darken-1');
      }
    });
  });
}
