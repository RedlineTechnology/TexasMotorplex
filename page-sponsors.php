<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _motorplex
 */

get_header();

wp_reset_postdata();
wp_reset_query();

$header_img = has_post_thumbnail() ? get_the_post_thumbnail_url($post->ID, 'full') : get_stylesheet_directory_uri() . '/images/mplex_header.jpg';

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="hero section" style="background-image: url(' <?php echo $header_img ?>')">
				<div class="filter"></div>
				<div class="content-container">
					<?php echo '<div class="mobile-hidden"><h1>' . get_the_title( $post->ID ) . '</h1></div>'; ?>
				</div>
			</div>

			<section class="sponsors row">
				<?php get_template_part('/template-parts/sponsors'); ?>
			</section>

			<section class="page-content section">
				<?php
				while (have_posts()) : the_post();
					echo '<div class="the-content">';
					  echo '<h2 class="mobile">' . get_the_title( $post->ID ) . '</h2>';
						the_content();
					echo '</div>';
				endwhile;

				wp_reset_postdata();

				if ( adrotate_group(1) ) :
					echo '<div class="bannerad">' . adrotate_group(1) . '</div>';
				endif;
				?>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
