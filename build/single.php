<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _motorplex
 */

get_header();

wp_reset_postdata();
wp_reset_query();

$header_img = has_post_thumbnail() ? 'style="background-image: url(' . get_the_post_thumbnail_url($post->ID, "full") . ')"' : get_stylesheet_directory_uri() . '/images/mplex_header.jpg';
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="hero section" <?php echo $header_img; ?>>
				<div class="filter"></div>
				<div class="content-container">
					<?php echo '<div class="mobile-hidden"><h1>' . get_the_title( $post->ID ) . '</h1></div>'; ?>
				</div>
			</div>

			<div class="cta">
				<div>
					<h3><?php echo stripcslashes( get_theme_mod('cta_text')); ?></h3>
					<a <?php echo get_theme_mod('cta_link') ? 'href="' . get_theme_mod('cta_link') . '"' : 'data-featherlight="#newsletter-lightbox" data-featherlight-persist="true"'; ?>><?php echo get_theme_mod('cta_btntext'); ?></a>
				</div>
			</div>

			<section class="single-post section">

			<?php
			while ( have_posts() ) : the_post();

				echo '<div class="the-deets">' .
					'Posted on ' . get_the_date( 'l F j, Y' ) .
				'</div>';

				echo '<div class="the-content">';
					echo '<h2 class="mobile">' . get_the_title( $post->ID ) . '</h2>';
					the_content();
				echo '</div>'; ?>

				<div class="fb-like" data-href="<?php echo get_permalink() ?>" data-width="" data-layout="button" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>

				<?php
				if ( adrotate_group(1) ) :
					echo '<div class="bannerad">' . adrotate_group(1) . '</div>';
				endif;

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() ) :
					// comments_template();
					?>
					<div class="fb-comments" data-href="<?php echo get_permalink() ?>" data-width="100%" data-numposts="5"></div>
					<?php
				endif;

			endwhile; // End of the loop.
			wp_reset_postdata();
			?>

			</section>

			<section class="current section">
				<?php get_template_part('/template-parts/latestnews'); ?>
				<div class="news-thumbs-container alignright"></div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div id="newsletter-lightbox">
		<?php
			$page = get_posts(
				array(
					'name'      => 'newsletter',
					'post_type' => 'page'
				)
			);
			if ( $page )
			{ echo $page[0]->post_content; }
		?>
	</div>

<?php
get_footer();
