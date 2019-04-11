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

			<div id="upper" class="section">
				<div id="google_map">
					<iframe width="100%" height="450" frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJIepjjSqbT4YR7ajUpIe3sq0&key=AIzaSyDHCQNgQ7NREbQxvecFaBux5P0lMa24wOE" allowfullscreen></iframe>
				</div>
				<div class="page-content">
					<div>
						<?php
						while (have_posts()) : the_post();
							the_content();
						endwhile;
						?>
					</div>
				</div>
			</div>


			<div id="people" class="section">
				<div>
					<?php
					$args = array(
			      'post_type'       => 'people',
			      'post_status'     => 'publish',
			      'orderby'         => 'date',
			      'order'           => 'ASC',
			      'nopaging'        => true
			    );

					$wp_query = new WP_Query( $args );

					$offset = 0;

					if( $wp_query->have_posts() ) :
						while ( $wp_query->have_posts() ) : $wp_query->the_post();

						$person_info = get_post_meta( $post->ID, 'person_fields', true );

						if ( $person_info['show']=='Yes') :

							echo '<div data-scroll="offset(0,' . $offset . 'px)" class="person animate">
								<h4>' . get_the_title() . '</h4>
								<p>' . $person_info['jobtitle'] . '<br />
									<a href="mailto:' . $person_info['email'] .  '?subject=TexasAero.com%20General%20Inquiry">' . $person_info['email'] . '</a>
								</p>
							</div>';

							$offset += 15;

						endif;

						endwhile;
					endif;
					wp_reset_postdata();

					?>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
