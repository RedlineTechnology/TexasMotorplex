/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu and smooth scrolling
 */

 jQuery(document).ready( function($){
     // MOBILE MENU TOGGLE
     // Open Mobile Menu when Hamburger is Clicked
     $("#lefttray-toggle, #lefttray-close").click(function(e) {
       e.preventDefault(),
       $("#left-tray").toggleClass( "open" ),
       $("body").toggleClass("noscroll")
     });
     // Close Mobile Menu when clicked anywhere Outside
     $(document).on('click', function(event) {
       if ( (!$(event.target).closest('#mobilenav').length) && (!$(event.target).closest('#lefttray-toggle').length) ) {
         if ( $("#left-tray").hasClass( "open" ) ) {
           $("#left-tray").toggleClass( "open" ),
           $("body").toggleClass( "noscroll" )
         }
       }
     });

      // SMOOTH SCROLLING
      // Select all links with hashes
      $('a[href*="#"]')
        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
          // On-page links
          if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
            &&
            location.hostname == this.hostname
          ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
              // Only prevent default if animation is actually gonna happen
              event.preventDefault();
              $('html, body').animate({
                scrollTop: target.offset().top
              }, 1000, function() {
                // Callback after animation
                // Must change focus!
                var $target = $(target);
                $target.focus();
                if ($target.is(":focus")) { // Checking if the target was focused
                  return false;
                } else {
                  $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                  $target.focus(); // Set focus again
                }
              });
            }
          }
        });
 });
