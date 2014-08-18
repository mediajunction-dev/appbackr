$(function() {
	$('body').scrollspy({ target: '.side-nav' })
});
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
// Prevents static carousel from speeding up once clicked
$(function() {
     $('.carousel').carousel({interval: false});
     $(document).on('mouseleave', '.carousel', function() {
         $(this).carousel('pause');
     });
});