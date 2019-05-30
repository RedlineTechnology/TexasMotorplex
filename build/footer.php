<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _motorplex
 */

?>

		</div><!-- #content -->

		<footer class="site-footer">
			<div class="row">
				<div class="col-8">
					<div class="site-info">
						<a class="img-wrapper" href="/"><img src="<?php echo get_stylesheet_directory_uri() . '/images/motorplex_white.png'; ?>" /></a>
						<?php if ( get_theme_mod('display_social_media') ) { ?>

							<div class="social">
								<ul>
									<li><a href="<?php echo get_theme_mod('youtube_url') ?>"><i class="fab fa-youtube"></i></a></li>
									<li><a href="<?php echo get_theme_mod('facebook_url') ?>"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="<?php echo get_theme_mod('twitter_url') ?>"><i class="fab fa-twitter"></i></i></a></li>
									<li><a href="<?php echo get_theme_mod('insta_url') ?>"><i class="fab fa-instagram"></i></a></li>
								</ul>
							</div>

						<?php } ?>
						<div class="footer-nav">
							<nav>
									<?php
									wp_nav_menu( array(
										'theme_location' => 'menu-3',
										'menu_id'        => 'footer-menu',
									) );
									?>
							</nav>
						</div><!-- .footer-nav -->
					</div><!-- .site-info -->
					<div class="copyright">
						<p>All Content Copyright &copy; <?php echo date("Y") . ' ' . get_bloginfo( 'name' ); ?></p>
					</div>
				</div>
				<div class="col-4 mobile-hidden">
					<div class="fb-page" data-href="https://www.facebook.com/txmplex/" data-tabs="timeline, messages, events" data-width="400" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/txmplex/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/txmplex/">Texas Motorplex</a></blockquote></div>
				</div>
				<div class="col-4 mobile">
					<div class="fb-page" data-href="https://www.facebook.com/txmplex/" data-tabs="timeline, messages, events" data-width="400" data-height="300" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/txmplex/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/txmplex/">Texas Motorplex</a></blockquote></div>
				</div>
			</div>
			<div id="preload-logo"></div>
		</footer><!-- #colophon -->
	</div><!-- #page -->
</div><!-- #page-wrapper -->

<!-- <div data-scroll="once(false)" id="backToTop" class="backToTop">
	<a href="#main"><i class="fal fa-chevron-up"></i>Back to Top</a>
</div> -->

<script>
	document.addEventListener('DOMContentLoaded', function(){
	  var trigger = new ScrollTrigger();
	});
</script>

<?php wp_footer(); ?>

</body>
</html>
