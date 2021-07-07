// Hero typed
if ($('.typed').length) {
    var typed_strings = $(".typed").data('typed-items');
    typed_strings = typed_strings.split(',')
    new Typed('.typed', {
      strings: typed_strings,
      loop: true,
      typeSpeed: 100,
      backSpeed: 50,
      backDelay: 2000
    });
  }


//approach text switching js

$('.apprh').click(function() {
	$('#content div').hide();
    var target = '#' + $(this).data('target');
    $(target).show();
})

//Aos animation
AOS.init();

$(function() {

  $(".btn").on("click", function() {
    //hide all sections
    $(".content-section").hide();
    //show the section depending on which button was clicked
    $("#" + $(this).attr("data-section")).show();
  });

});