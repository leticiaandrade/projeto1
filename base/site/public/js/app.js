function MenuToggle(div) {
    $("html, body").animate({ scrollTop: $('#'+div).offset().top - 60}, 800);
}

$(document).ready(function() {
        // Transition effect for navbar 
        $(window).scroll(function() {
          // checks if window is scrolled more than 500px, adds/removes solid class
          if($(this).scrollTop() > 600) { 
              $('.navbar').addClass('solid');
          } else {
              $('.navbar').removeClass('solid');
          }
        });
        
});

