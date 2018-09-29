
 // This code dosen't works on Firefox and IE and works on other browesers.
// Works everywhere
$(document).ready(function () {

  // Hide/show animation hamburger function
  $('.navbar-toggler').on('click', function () {

    // Take this line to first hamburger animations
    $('.animated-icon1').toggleClass('open');

    // Take this line to second hamburger animation
    $('.animated-icon3').toggleClass('open');

    // Take this line to third hamburger animation
    $('.animated-icon4').toggleClass('open');
  });

});

$('a[href^="#"]').on('click', function(event) {
    var target = $(this.getAttribute('href'));
    if( target.length ) {
        event.preventDefault();
        $('html, body').stop().animate({
            scrollTop: target.offset().top
        }, 1500);
    }
});

$('.druck').click(function () {
  $(this).parent().toggleClass('expand');
});


var typed5 = new Typed('#title', {
  strings: ['Welcome to my Website', 'Nikolaos Moshonas '],
  typeSpeed: 50,
  backSpeed: 20,
  cursorChar: '|',
  shuffle: false,
  smartBackspace: true,
  loop: false
});
