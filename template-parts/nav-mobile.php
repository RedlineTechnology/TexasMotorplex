<?php
/**
 * Template part for displaying Mobile Navigation Menu
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _motorplex
 */
?>

<div id="left-tray" class="left tray">
	<nav id="mobilenav">
		<i id="lefttray-close" class="fal fa-times"></i>
		<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
		) );
		?>
	</nav>
</div>
