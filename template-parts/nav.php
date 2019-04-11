<?php
/**
 * Template part for displaying Navigation Menu
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ta
 */
?>

<header>

	<nav id="nav-desktop" class="nav-desktop">
		<div id="main-navigation" class="nav-desktop-left">
			<a href="#" id="lefttray-toggle"><i class="fal fa-bars"></i></a>
			<?php if (!is_home()) {
				echo ta_get_menu_parent_children( 'menu-1' );
				// wp_nav_menu( array(
				// 	'theme_location' => 'menu-1',
				// 	'menu_id'        => 'primary-menu',
				// ) );
			} ?>
		</div>
		<?php if (!is_home()) { ?>

			<div id="site-branding" class="nav-desktop-mid">
				<div class="menu-mid-menu-container">
					<?php echo ta_get_menu_parent_children( 'menu-1', 'children' ); ?>
				</div>
				<div class="mobile logo-container"></div>
			</div><!-- #site-branding -->

		<?php } ?>
		<div id="secondary-navigation" class="nav-desktop-right">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-2',
				'menu_id'        => 'secondary-menu',
			) );
			if (!is_home()) { echo '<a href="/"><div class="mobile logo-container"></div></a>'; }
			?>
		</div>
	</nav><!-- #main-navigation -->
</header>
