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
		<div id="nav-toggle" class="nav-desktop-left">
			<a href="#" id="lefttray-toggle"><i class="fal fa-bars"></i></a>
		</div>
		<div class="nav-desktop-logo"></div>
		<div id="main-navigation" class="nav-desktop-right">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
			<div id="more-container">
				<ul class="menu-item">
					<li class="more menu-item-has-children">
						<a href="">More</a>
						<ul class="sub-menu" id="overflow"></ul>
					</li>
					<li class="button menu-item">
						<a href="#">Buy Tickets</a>
					</li>
				</ul>
			</div>
		</div>
	</nav><!-- #main-navigation -->
</header>

<div class="statusbar">

	<?php
	  echo get_weather_status();
		echo get_track_status();
	 ?>

</div>
