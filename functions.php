<?php
/**
 * ta functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _motorplex
 */

if ( ! function_exists( 'motorplex_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function motorplex_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ta, use a find and replace
		 * to change '_motorplex' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( '_motorplex', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// Set up Navigation Menus
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', '_motorplex' ),
			'menu-2' => esc_html__( 'Secondary', '_motorplex' ),
			'menu-3' => esc_html__( 'Footer', '_motorplex')
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'motorplex_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

	}
endif;
add_action( 'after_setup_theme', 'motorplex_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function motorplex_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', '_motorplex' ),
		'id'            => 'sidebar',
		'description'   => esc_html__( 'Add widgets here.', '_motorplex' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'motorplex_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function motorplex_scripts() {

	wp_enqueue_script( 'jquery' );

	// Frosted Glass Effect is really cool, but unfortunately it's just a huge page load. Not gonna fly. Leaving the files and scripts intact, but disabling.
	// wp_enqueue_script( 'html2canvas', get_template_directory_uri() . '/js/html2canvas.min.js', array(), '20190215', true );
	// wp_enqueue_script( 'StackBlur', get_template_directory_uri() . '/js/stackblur.min.js', array(), '20190216', true );

	// Custom Mobile Navigation JS
	wp_enqueue_script( 'motorplex-navigation', get_template_directory_uri() . '/js/navigation.min.js', array('jquery'), '20190220', true );
	// This thing
	wp_enqueue_script( 'motorplex-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	// Slick
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '20190220', true);
	// ScrollTrigger
	wp_enqueue_script( 'scrolltrigger', get_template_directory_uri() . '/js/scrolltrigger.min.js', array('jquery'), '20190220', true);
	// Featherlight
	wp_enqueue_script( 'featherlight', get_template_directory_uri() . '/js/featherlight.min.js', array('jquery'), '20190226', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'motorplex_scripts' );

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Custom Post Types
 */
require get_template_directory() . '/inc/custom-post-types.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
