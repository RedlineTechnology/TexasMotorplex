/**
 * File sponsor-slider.js.
 *
 * Calls the Slick function for sponsor page element
 */

 jQuery(document).ready( function($){
     $('.sponsor-slider').slick({
       slidesToShow: 10,
       slidesToScroll: 1,
       infinite: true,
       pauseOnHover: true,
       paseOnFocus: false
     });
 });
