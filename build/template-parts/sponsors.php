<?php

/* Sponsor Slider */
wp_enqueue_script( 'sponsor-slider', get_template_directory_uri() . '/js/sponsor-slider.min.js', array('slick'), '20190224', true);

$args = array(
  'post_type'       => 'sponsors',   // aircraft post type
  'post_status'     => 'publish',    // we only want published posts
  'orderby'         => 'title',      // we will sort posts by title
  'order'           => 'ASC',        // ascending order
  'nopaging'        => true
);

$wp_query = new WP_Query( $args ); ?>

<div data-slick='{"autoplay": true, "autoplaySpeed": 4000}' class="sponsor-slider">
<?php
if( $wp_query->have_posts() ) :
  while ( $wp_query->have_posts() ) : $wp_query->the_post();

    echo '<div class="sponsor"><a href="' . get_the_content() . '"><img src="' . wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ) . '" /></a></div>';

  endwhile;
endif;
?>
</div>
