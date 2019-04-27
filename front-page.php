<?php
/**
 * Home Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _motorplex
 */

get_header();
?>

<section class="hero row full-frame">
	<div class="video-container">
		<div class="filter"></div>
		<video autoplay loop muted playsinline src="<?php echo get_stylesheet_directory_uri() ?>/vendor/coverr/Motorplex.mp4" class="fillWidth"></video>
		<div class="poster hidden" style="background-image:url('<?php echo get_stylesheet_directory_uri() ?>/vendor/coverr/Motorplex.jpg');">
		</div>
	</div>
	<div class="content-container">
		<div class="box">
			<a class="sub upper" href="#">2019 Schedule</a>
			<h1>Fall Nationals</h1>
			<a class="button inverted">Buy Tickets</a>
			<a class="sub lower" href="#">Plan Your Visit</a>
		</div>
	</div>
</section>

<section class="current row">
	<div class="col-6">
		<?php get_template_part('/template-parts/latestnews'); ?>
	</div>
	<div class="col-6">
		<?php get_template_part('/template-parts/upcomingevents'); ?>
	</div>
	<div class="news-thumbs"></div>
</section>

<section class="planyourtrip row">
	<div class="content-container">
		<h1>Plan Your Visit</h1>
		<?php get_template_part('/template-parts/planyourvisit'); ?>
		<div class="frontpage-bannerad">
			<img src="<?php echo get_stylesheet_directory_uri() . '/images/ennisyall.jpg'; ?>">
		</div>
	</div>
</section>

<section class="sponsors row">
	<?php get_template_part('/template-parts/sponsors'); ?>
</section>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
