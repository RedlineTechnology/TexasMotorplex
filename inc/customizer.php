<?php
/**
 * Texas Aero Theme Customizer
 *
 * @package _motorplex
 */

/* Reference
 * https://github.com/WordPress/WordPress/blob/master/wp-includes/class-wp-customize-manager.php
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ta_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'ta_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'ta_customize_partial_blogdescription',
		) );
	}

	/* Add Physical Address */
	$wp_customize->add_setting( 'physical_address', array(
		'default'			=> __( '7500 W Hwy 287, Ennis, Texas 75119', '_motorplex' ),
		'sanitize_callback'	=> 'theme_slug_sanitize_html'
	));
	$wp_customize->add_control( 'physical_address', array(
		'settings'		=> 'physical_address',
		'section'		=> 'title_tagline',
		'type'			=> 'text',
		'label'			=> __( 'Physical Address', '_motorplex' ),
	));

	/* Add Mailing Address */
	$wp_customize->add_setting( 'mailing_address', array(
		'default'			=> __( 'PO Box 1439, Ennis, Texas 75120-1439', '_motorplex' ),
		'sanitize_callback'	=> 'theme_slug_sanitize_html'
	));
	$wp_customize->add_control( 'mailing_address', array(
		'settings'		=> 'mailing_address',
		'section'		=> 'title_tagline',
		'type'			=> 'text',
		'label'			=> __( 'Mailing Address', '_motorplex' ),
	));

	/* Add Phone Number */
	$wp_customize->add_setting( 'phone_number', array(
		'default'			=> __( '972.878.2641', '_motorplex' ),
		'sanitize_callback'	=> 'theme_slug_sanitize_html'
	));
	$wp_customize->add_control( 'phone_number', array(
		'settings'		=> 'phone_number',
		'section'		=> 'title_tagline',
		'type'			=> 'text',
		'label'			=> __( 'Phone Number', '_motorplex' ),
	));

	/* Add Secondary Phone Number */
	$wp_customize->add_setting( 'phone_secondary', array(
		'default'			=> __( '800.668.6775', '_motorplex' ),
		'sanitize_callback'	=> 'theme_slug_sanitize_html'
	));
	$wp_customize->add_control( 'phone_secondary', array(
		'settings'		=> 'phone_secondary',
		'section'		=> 'title_tagline',
		'type'			=> 'text',
		'label'			=> __( 'Secondary Phone Number', '_motorplex' ),
	));

	/* SOCIAL MEDIA SECTION */
	$wp_customize->add_section( 'social_media', array(
		'title'       => __( 'Social Media', '_motorplex' ),
		'priority'    => 30,
		'capability'  => 'edit_theme_options'
	));
	/* Display Social Media */
	$wp_customize->add_setting( 'display_social_media', array(
		'default'			=> false,
		'sanitize_callback'	=> 'theme_slug_sanitize_checkbox'
	));
	$wp_customize->add_control( 'display_social_media', array(
		'settings'		=> 'display_social_media',
		'section'		=> 'social_media',
		'type'			=> 'checkbox',
		'label'			=> __( 'Display Social Media', '_motorplex' ),
	));

	/* Facebook */
	$wp_customize->add_setting( 'facebook_url', array(
		'default'			=> 'http://www.facebook.com/taglobalmedia',
		'sanitize_callback'	=> 'theme_slug_sanitize_url'
	));
	$wp_customize->add_control( 'facebook_url', array(
		'settings'		=> 'facebook_url',
		'section'		=> 'social_media',
		'type'			=> 'url',
		'label'			=> __( 'Facebook Page URL', '_motorplex' ),
	));

	/* Twitter */
	$wp_customize->add_setting( 'twitter_url', array(
		'default'			=> 'http://www.twitter.com/taglobalmedia',
		'sanitize_callback'	=> 'theme_slug_sanitize_url'
	));
	$wp_customize->add_control( 'twitter_url', array(
		'settings'		=> 'twitter_url',
		'section'		=> 'social_media',
		'type'			=> 'url',
		'label'			=> __( 'Twitter URL', '_motorplex' ),
	));

	/* TRACKING SECTION */
	$wp_customize->add_section( 'tracking_scripts', array(
		'title'       => __( 'Tracking Scripts', '_motorplex' ),
		'priority'    => 30,
		'capability'  => 'edit_theme_options'
	));
	/* Google Analytics ID */
	$wp_customize->add_setting( 'google_analytics_id', array(
		'default'			=> __( 'UA-124302518-1', '_motorplex' ),
		'sanitize_callback'	=> 'theme_slug_sanitize_html'
	));
	$wp_customize->add_control( 'google_analytics_id', array(
		'settings'		=> 'google_analytics_id',
		'section'		=> 'tracking_scripts',
		'type'			=> 'text',
		'label'			=> __( 'Google Analytics ID', '_motorplex' ),
		'description'	=> __( 'i.e., UA-XXXXXXXXX-1', '_motorplex' )
	));
	/* Google Analytics ID */
	$wp_customize->add_setting( 'google_tag_id', array(
		'default'			=> __( 'GTM-T76QC6J', '_motorplex' ),
		'sanitize_callback'	=> 'theme_slug_sanitize_html'
	));
	$wp_customize->add_control( 'google_tag_id', array(
		'settings'		=> 'google_tag_id',
		'section'		=> 'tracking_scripts',
		'type'			=> 'text',
		'label'			=> __( 'Google Tag Manager ID', '_motorplex' ),
		'description'	=> __( 'i.e., GTM-XXXXXXX', '_motorplex' )
	));
	/* Head */
	$wp_customize->add_setting( 'head_scripts', array(
		'default'			=> '',
		'sanitize_callback'	=> 'theme_slug_sanitize_html'
	));
	$wp_customize->add_control( 'head_scripts', array(
		'settings'		=> 'head_scripts',
		'section'		=> 'tracking_scripts',
		'type'			=> 'textarea',
		'label'			=> __( 'Head Scripts', '_motorplex' ),
	));
	/* Footer */
	$wp_customize->add_setting( 'footer_scripts', array(
		'default'			=> '',
		'sanitize_callback'	=> 'theme_slug_sanitize_html'
	));
	$wp_customize->add_control( 'footer_scripts', array(
		'settings'		=> 'footer_scripts',
		'section'		=> 'tracking_scripts',
		'type'			=> 'textarea',
		'label'			=> __( 'Footer Scripts', '_motorplex' ),
	));

}
add_action( 'customize_register', 'ta_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function ta_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function ta_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function ta_customize_preview_js() {
	wp_enqueue_script( 'ta-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'ta_customize_preview_js' );

/**
 * SANITIZATION CALLBACK functions
 */

 function theme_slug_sanitize_checkbox( $checked ) {
 	// Boolean check.
 	return ( ( isset( $checked ) && true == $checked ) ? true : false );
 }
 function theme_slug_sanitize_css( $css ) {
 	return wp_strip_all_tags( $css );
 }
 function theme_slug_sanitize_html( $html ) {
 	return wp_filter_post_kses( $html );
 }
 function theme_slug_sanitize_nohtml( $nohtml ) {
 	return wp_filter_nohtml_kses( $nohtml );
 }
 function theme_slug_sanitize_url( $url ) {
 	return esc_url_raw( $url );
 }
 function theme_slug_sanitize_hex_color( $hex_color, $setting ) {
 	// Sanitize $input as a hex value without the hash prefix.
 	$hex_color = sanitize_hex_color( $hex_color );

 	// If $input is a valid hex value, return it; otherwise, return the default.
 	return ( ! is_null( $hex_color ) ? $hex_color : $setting->default );
 }
 function theme_slug_sanitize_image( $image, $setting ) {
 	/*
 	 * Array of valid image file types.
 	 *
 	 * The array includes image mime types that are included in wp_get_mime_types()
 	 */
     $mimes = array(
         'jpg|jpeg|jpe' => 'image/jpeg',
         'gif'          => 'image/gif',
         'png'          => 'image/png',
         'bmp'          => 'image/bmp',
         'tif|tiff'     => 'image/tiff',
         'ico'          => 'image/x-icon'
     );
 	// Return an array with file extension and mime_type.
     $file = wp_check_filetype( $image, $mimes );
 	// If $image has a valid mime_type, return it; otherwise, return the default.
     return ( $file['ext'] ? $image : $setting->default );
 }
 function theme_slug_sanitize_email( $email, $setting ) {
 	// Strips out all characters that are not allowable in an email address.
 	$email = sanitize_email( $email );

 	// If $email is a valid email, return it; otherwise, return the default.
 	return ( ! is_null( $email ) ? $email : $setting->default );
 }
 function theme_slug_sanitize_select( $input, $setting ) {

 	// Ensure input is a slug.
 	$input = sanitize_key( $input );

 	// Get list of choices from the control associated with the setting.
 	$choices = $setting->manager->get_control( $setting->id )->choices;

 	// If the input is a valid key, return it; otherwise, return the default.
 	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
 }
 function theme_slug_sanitize_dropdown_pages( $page_id, $setting ) {
 	// Ensure $input is an absolute integer.
 	$page_id = absint( $page_id );

 	// If $page_id is an ID of a published page, return it; otherwise, return the default.
 	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
 }
 function theme_slug_sanitize_number_absint( $number, $setting ) {
 	// Ensure $number is an absolute integer (whole number, zero or greater).
 	$number = absint( $number );

 	// If the input is an absolute integer, return it; otherwise, return the default
 	return ( $number ? $number : $setting->default );
 }
 function theme_slug_sanitize_number_range( $number, $setting ) {

 	// Ensure input is an absolute integer.
 	$number = absint( $number );

 	// Get the input attributes associated with the setting.
 	$atts = $setting->manager->get_control( $setting->id )->input_attrs;

 	// Get minimum number in the range.
 	$min = ( isset( $atts['min'] ) ? $atts['min'] : $number );

 	// Get maximum number in the range.
 	$max = ( isset( $atts['max'] ) ? $atts['max'] : $number );

 	// Get step.
 	$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );

 	// If the number is within the valid range, return it; otherwise, return the default
 	return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
 }
