<div class="latestnews">
  <a class="sectiontitle" href="/archive"><h3>Latest News</h3></a>
  <?php
    // We only want 2 posts
    $the_query = new WP_Query( array( 'showposts' => 2 ) );
    // Start the Loop
    while ($the_query -> have_posts()) : $the_query -> the_post();
      $header_img =  wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
      <article data-thumb="<?php echo $header_img ?>">
        <a href="<?php the_permalink() ?>">
          <h2><?php the_title(); ?></h2>
        </a>
      </article>
    <?php endwhile; ?>
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
