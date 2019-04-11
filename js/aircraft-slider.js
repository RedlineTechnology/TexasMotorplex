/**
 * File testimonial-slider.js.
 *
 * Calls the Slick function for testimonial page element
 */

 jQuery(document).ready( function($){
     $('.aircraft-slider').slick({
       slidesToShow: 1,
       slidesToScroll: 1,
       infinite: true,
       pauseOnHover: false,
       paseOnFocus: false
     });
 });
