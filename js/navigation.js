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
  // Mobile Sub-Menus
  $("#mobilenav .menu-item-has-children > a").click(function(e) {
    e.preventDefault(),
    $("#mobilenav .menu-item-has-children").parent().find(".open").not( $(this).parent() ).not( $(this).parent().find(".sub-menu") ).toggleClass("open"),
    $(this).parent().toggleClass("open"),
    $(this).parent().find(".sub-menu").toggleClass("open")
  })

  // STICKY NAV
  $(window).scroll( function() {
    if( $(this).scrollTop() > 1 ) {
      $("#nav-desktop").addClass('sticky');
    } else {
      $("#nav-desktop").removeClass('sticky');
    }
  });

  // NAV OVERFLOW
  window.onresize = navigationResize;
  navigationResize();
  // Overflow Function
  function navigationResize() {
    $('#main-navigation #primary-menu').append($('#overflow > li'));

    var $more = $('.more'),
        $navItems = $('#main-navigation #primary-menu > li'),
        $moreItems = $('#more-container ul > li'),
        windowWidth = $('#main-navigation').width(),
        navWidth = 0,
        offset = 150;

    // set width of Nav items
    $navItems.each(function() {
      navWidth += $(this).width();
    });
    $moreItems.each(function() {
      navWidth += $(this).width();
    });
    navWidth += offset;

    // do we need to show the More menu?
    navWidth > windowWidth ? $more.show() : $more.hide();

    // move nav items from nav to overflow
    while (navWidth > windowWidth) {
      navWidth -= $navItems.last().width();
      $navItems.last().prependTo('#overflow');
      $navItems.splice(-1,1);
    }
  }

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
