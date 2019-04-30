<div class="latestnews">
  <a class="sectiontitle" href="/archive"><h3>Latest News</h3></a>
  <?php

  // Let's get Featured Posts first
  $feat_query = new WP_Query(
    array(
      'post_status' => 'publish',
      'category_name' => 'featured-articles',
      'showposts' => 3
  ));

  while ($feat_query -> have_posts()) : $feat_query -> the_post();
    $header_img =  wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
    <article class="featured" data-thumb="<?php echo $header_img ?>">
      <a href="<?php the_permalink() ?>">
        <h2><span><?php the_title(); ?></span></h2>
      </a>
    </article>
    <?php
    $skipIDs[]=$post->ID;
  endwhile;

  // Now let's see if there's room for regular posts
  $post_num = 3 - count( $feat_query );
  if ( $post_num != 0 ) {
    // If so, let's get the ones we need
    $the_query = new WP_Query(
      array(
        'showposts' => $post_num,
        'post__not_in' => $skipIDs
    ));
    // Start the Loop
    while ($the_query -> have_posts()) : $the_query -> the_post();
      $header_img =  wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
      <article data-thumb="<?php echo $header_img ?>">
        <a href="<?php the_permalink() ?>">
          <h2><span><?php the_title(); ?></span></h2>
        </a>
      </article>
    <?php endwhile;
    } ?>
  <a href="#" class="readmore"><h5>Read More</h5></a>
</div>

<script>
jQuery(document).ready( function($){
  var $i = 1;
  $(".latestnews article").each( function() {
    $(this).attr("id", $i);
    var $bg = $(this).data("thumb");
    var $html = '<div data-thumb="' + $i + '" class="news-thumbs"><div style="background-image: url(\'' + $bg + '\')"></div></div>';
    $(".current").append( $html );
    $i++;
  });

  $(".latestnews article").hover( function() {
    var $num = $(this).attr("id");
    $("[data-thumb='" + $num + "']").toggleClass("show");
  });
});
</script>
