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
			<div class="footer-nav">
				<nav>
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-3',
							'menu_id'        => 'footer-menu',
						) );
						?>
				</nav>
				<?php if ( get_theme_mod('display_social_media') ) { ?>

					<div class="social">
						<ul>
							<li><a href="<?php echo get_theme_mod('facebook_url') ?>"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="<?php echo get_theme_mod('twitter_url') ?>"><i class="fab fa-twitter"></i></i></a></li>
						</ul>
					</div>

				<?php } ?>
			</div><!-- .footer-nav -->
			<div class="site-info">
				<a class="img-wrapper" href="/"><img src="<?php echo get_stylesheet_directory_uri() . '/images/ta-logo_white.png'; ?>" /></a>
				<p><span><?php echo '<a href="#" data-featherlight="<h1>' . get_theme_mod("phone_number") . '</h1>">' . get_theme_mod("phone_number") . '</a>'; ?></span><span><a href="mailto:fbo@texasaero.com?subject=TexasAero.com%20FBO%20Inquiry">fbo@texasaero.com</a> | <a href="mailto:sales@texasaero.com?subject=TexasAero.com%20Sales%20Inquiry">sales@texasaero.com</a></span><span><?php echo get_theme_mod('physical_address') ?></span></p>
			</div><!-- .site-info -->
			<div class="copyright">
				<p>All Content Copyright &copy; <?php echo date("Y") . ' ' . get_bloginfo( 'name' ); ?></p>
			</div>
		</footer><!-- #colophon -->
	</div><!-- #page -->
</div><!-- #page-wrapper -->

<!-- <div data-scroll="once(false)" id="backToTop" class="backToTop">
	<a href="#main"><i class="fal fa-chevron-up"></i>Back to Top</a>
</div> -->

<script>
	document.addEventListener('DOMContentLoaded', function(){
	  var trigger = new ScrollTrigger({
	    toggle: {
	      visible: 'fadeIn_visible',
	      hidden: 'fadeIn_hidden'
	    },
	    offset: {
	      x: 0,
	      y: 200
	    },
	    once: true
	  }, document.body, window);
	});
</script>

<?php wp_footer(); ?>

</body>
</html>
