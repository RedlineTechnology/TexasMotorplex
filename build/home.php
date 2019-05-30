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
			<h1><?php echo stripcslashes( get_theme_mod('fp_cta_text')); ?></h1>
			<a href="<?php echo get_theme_mod('fp_cta_link'); ?>" class="button inverted"><?php echo get_theme_mod('fp_cta_btntext'); ?></a>
			<a class="sub lower" href="#">Plan Your Visit</a>
		</div>
	</div>
	<div id="twitter-container">
		<?php echo do_shortcode('[twitter_profile screen_name="txmplex" width="400" limit="1" chrome="nofooter,noborders,transparent"]'); ?>
	</div>
</section>

<section class="current row">
	<div class="col-6 latestnews">
		<?php get_template_part('/template-parts/latestnews'); ?>
	</div>
	<div class="col-6">
		<?php get_template_part('/template-parts/upcomingevents'); ?>
	</div>
	<div class="news-thumbs-container"></div>
</section>

<section class="planyourtrip row">
	<div class="content-container">
		<h1>Plan Your Visit</h1>
		<?php get_template_part('/template-parts/planyourvisit');
		if ( adrotate_group(1) ) : ?>
			<div class="frontpage-bannerad">
				<?php echo adrotate_group(1); ?>
			</div>
		<?php endif; ?>
	</div>
</section>

<section class="sponsors row">
	<?php get_template_part('/template-parts/sponsors'); ?>
</section>

<?php
get_sidebar();
get_footer();
