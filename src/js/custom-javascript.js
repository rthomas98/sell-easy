// Add your custom JS here.

jQuery(document).ready(function () {
    /*============================================
    Navigation Functions
    ==============================================*/
    if (jQuery(window).scrollTop() === 0) {
        jQuery('#main-nav').removeClass('scrolled');
    } else {
        jQuery('#main-nav').addClass('scrolled');
    }
  
    jQuery(window).scroll(function () {
      if (jQuery(window).scrollTop() === 0) {
        jQuery('#main-nav').removeClass('scrolled');
      } else {
        jQuery('#main-nav').addClass('scrolled');
      }
    });
  
    // Select all links with hashes
    jQuery(document).on('click', 'a[href^="#"]', function (event) {
      event.preventDefault();
  
      jQuery('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top-100
       }, 500);
  });
  
  (function () {
    jQuery('.menu-wrapper').on('click', function() {
          $('.hamburger-menu').toggleClass('animate');
      })
  })();
  
  });
  