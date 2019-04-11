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

$header_img = has_post_thumbnail() ? 'style="background-image: url(' . get_the_post_thumbnail_url($post->ID, "full") . ')"' : get_stylesheet_directory_uri() . '/assets/images/contact-hero.jpg';
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="hero section" <?php echo $header_img; ?>>
				<?php echo '<div><h1>' . get_the_title() . '</h1></div>'; ?>
			</div>

			<div class="page-content section">
				<div>
					<?php
					while (have_posts()) : the_post();
						the_content();
					endwhile;
					?>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
