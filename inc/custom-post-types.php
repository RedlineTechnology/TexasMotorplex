<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package _motorplex
 */

/**
 * Adds custom classes to the array of body classes.
 */

 // Register Custom Post Type
 function register_custom_posts() {

 	$labels = array(
 		'name'                  => _x( 'Testimonials', 'Post Type General Name', '_motorplex' ),
 		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', '_motorplex' ),
 		'menu_name'             => __( 'Testimonials', '_motorplex' ),
 		'name_admin_bar'        => __( 'Testimonials', '_motorplex' ),
 		'archives'              => __( 'Testimonial Archives', '_motorplex' ),
 		'attributes'            => __( 'Testimonial Attributes', '_motorplex' ),
 		'parent_item_colon'     => __( 'Parent Testimonial:', '_motorplex' ),
 		'all_items'             => __( 'All Testimonials', '_motorplex' ),
 		'add_new_item'          => __( 'Add New Testimonial', '_motorplex' ),
 		'add_new'               => __( 'Add New', '_motorplex' ),
 		'new_item'              => __( 'New Testimonial', '_motorplex' ),
 		'edit_item'             => __( 'Edit Testimonial', '_motorplex' ),
 		'update_item'           => __( 'Update Testimonial', '_motorplex' ),
 		'view_item'             => __( 'View Testimonial', '_motorplex' ),
 		'view_items'            => __( 'View Testimonials', '_motorplex' ),
 		'search_items'          => __( 'Search Testimonials', '_motorplex' ),
 		'not_found'             => __( 'Not found', '_motorplex' ),
 		'not_found_in_trash'    => __( 'Not found in Trash', '_motorplex' ),
 		'featured_image'        => __( 'Featured Image', '_motorplex' ),
 		'set_featured_image'    => __( 'Set featured image', '_motorplex' ),
 		'remove_featured_image' => __( 'Remove featured image', '_motorplex' ),
 		'use_featured_image'    => __( 'Use as featured image', '_motorplex' ),
 		'insert_into_item'      => __( 'Insert into Testimonial', '_motorplex' ),
 		'uploaded_to_this_item' => __( 'Uploaded to this item', '_motorplex' ),
 		'items_list'            => __( 'Items list', '_motorplex' ),
 		'items_list_navigation' => __( 'Items list navigation', '_motorplex' ),
 		'filter_items_list'     => __( 'Filter items list', '_motorplex' ),
 	);
 	$args = array(
 		'label'                 => __( 'Testimonial', '_motorplex' ),
 		'description'           => __( 'Short Client Testimonials', '_motorplex' ),
 		'labels'                => $labels,
 		'supports'              => array( 'title', 'editor', 'custom-fields' ),
 		'taxonomies'            => array( 'category', 'post_tag' ),
 		'hierarchical'          => false,
 		'public'                => true,
 		'show_ui'               => true,
 		'show_in_menu'          => true,
 		'menu_position'         => 20,
 		'menu_icon'             => 'dashicons-format-quote',
 		'show_in_admin_bar'     => true,
 		'show_in_nav_menus'     => false,
 		'can_export'            => true,
 		'has_archive'           => false,
 		'exclude_from_search'   => true,
 		'publicly_queryable'    => true,
 		'capability_type'       => 'page',
 	);
 	register_post_type( 'testimonials', $args );

	$labels = array(
		'name'                  => _x( 'People', 'Post Type General Name', '_motorplex' ),
		'singular_name'         => _x( 'Person', 'Post Type Singular Name', '_motorplex' ),
		'menu_name'             => __( 'People', '_motorplex' ),
		'name_admin_bar'        => __( 'People', '_motorplex' ),
		'archives'              => __( 'Peson Archives', '_motorplex' ),
		'attributes'            => __( 'Person Attributes', '_motorplex' ),
		'parent_item_colon'     => __( 'Parent:', '_motorplex' ),
		'all_items'             => __( 'All People', '_motorplex' ),
		'add_new_item'          => __( 'Add New Person', '_motorplex' ),
		'add_new'               => __( 'Add New Person', '_motorplex' ),
		'new_item'              => __( 'New Person', '_motorplex' ),
		'edit_item'             => __( 'Edit Person', '_motorplex' ),
		'update_item'           => __( 'Update Person', '_motorplex' ),
		'view_item'             => __( 'View Person', '_motorplex' ),
		'view_items'            => __( 'View People', '_motorplex' ),
		'search_items'          => __( 'Search Person', '_motorplex' ),
		'not_found'             => __( 'Person Not found', '_motorplex' ),
		'not_found_in_trash'    => __( 'Not found in Trash', '_motorplex' ),
		'featured_image'        => __( 'Headshot', '_motorplex' ),
		'set_featured_image'    => __( 'Set headshot', '_motorplex' ),
		'remove_featured_image' => __( 'Remove headshot', '_motorplex' ),
		'use_featured_image'    => __( 'Use as headshot', '_motorplex' ),
		'insert_into_item'      => __( 'Insert into item', '_motorplex' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', '_motorplex' ),
		'items_list'            => __( 'Items list', '_motorplex' ),
		'items_list_navigation' => __( 'Items list navigation', '_motorplex' ),
		'filter_items_list'     => __( 'Filter items list', '_motorplex' ),
	);
	$args = array(
		'label'                 => __( 'Person', '_motorplex' ),
		'description'           => __( 'Employees of Texas Motorplex', '_motorplex' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 30,
		'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'people', $args );

	$labels = array(
		'name'                  => _x( 'Sponsors', 'Post Type General Name', '_motorplex' ),
		'singular_name'         => _x( 'Sponsor', 'Post Type Singular Name', '_motorplex' ),
		'menu_name'             => __( 'Sponsors', '_motorplex' ),
		'name_admin_bar'        => __( 'Sponsors', '_motorplex' ),
		'archives'              => __( 'Item Archives', '_motorplex' ),
		'attributes'            => __( 'Item Attributes', '_motorplex' ),
		'parent_item_colon'     => __( 'Parent Item:', '_motorplex' ),
		'all_items'             => __( 'All Items', '_motorplex' ),
		'add_new_item'          => __( 'Add New Item', '_motorplex' ),
		'add_new'               => __( 'Add Sponsor', '_motorplex' ),
		'new_item'              => __( 'New Sponsor', '_motorplex' ),
		'edit_item'             => __( 'Edit Sponsor', '_motorplex' ),
		'update_item'           => __( 'Update Sponsor', '_motorplex' ),
		'view_item'             => __( 'View Sponsor', '_motorplex' ),
		'view_items'            => __( 'View Sponsors', '_motorplex' ),
		'search_items'          => __( 'Search Item', '_motorplex' ),
		'not_found'             => __( 'Not found', '_motorplex' ),
		'not_found_in_trash'    => __( 'Not found in Trash', '_motorplex' ),
		'featured_image'        => __( 'Logo', '_motorplex' ),
		'set_featured_image'    => __( 'Set Logo', '_motorplex' ),
		'remove_featured_image' => __( 'Remove Logo', '_motorplex' ),
		'use_featured_image'    => __( 'Use as Logo', '_motorplex' ),
		'insert_into_item'      => __( 'Insert into item', '_motorplex' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', '_motorplex' ),
		'items_list'            => __( 'Items list', '_motorplex' ),
		'items_list_navigation' => __( 'Items list navigation', '_motorplex' ),
		'filter_items_list'     => __( 'Filter items list', '_motorplex' ),
	);
	$args = array(
		'label'                 => __( 'Sponsor', '_motorplex' ),
		'description'           => __( 'Will display Sponsors in a Carousel on the Front Page', '_motorplex' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 25,
		'menu_icon'             => 'dashicons-heart',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'sponsors', $args );

 }
 add_action( 'init', 'register_custom_posts', 0 );


 // CUSTOM FIELDS
 ///////////////////////////////////////////////////////////////////////////////
 //www.taniarascia.com/wordpress-part-three-custom-fields-and-metaboxes/

// Add People Meta Box
function add_people_meta_box() {
 add_meta_box(
   'people_meta_box', // $id
   'Additional Information', // $title
   'show_person_meta_box', // $callback
   'people', // post type
   'normal', // $context
   'high' // $priority
 );
}
add_action( 'add_meta_boxes', 'add_people_meta_box' );

// Show People Custom Fields
function show_person_meta_box() {
 global $post;
   $meta = get_post_meta( $post->ID, 'person_fields', true ); ?>

 <input type="hidden" name="people_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

   <!-- All fields will go here -->
   <div style="width: 100%; padding-left: 1em;">
     <p class="regular-text" style="margin-bottom:0;">Show on Contact Page</p>
     <br>
     <input type="radio" id="person_fields_show_1" name="person_fields[show]" value="Yes" <?php echo $meta['show']=='Yes'?'checked':''; ?>>
     <label for="person_fields_show_1">Yes</label>
     <input type="radio" id="person_fields_show_2" name="person_fields[show]" value="No" <?php echo $meta['show']=='No'?'checked':''; ?>>
     <label for="person_fields_show_2">No</label>
   </div>
   <div style="display:flex; flex-wrap:wrap;">
     <p style="margin: 1em;">
       <label for="person_fields[jobtitle]">Job Title</label>
       <br>
       <input type="text" name="person_fields[jobtitle]" id="person_fields[jobtitle]" class="regular-text" value="<?php echo $meta['jobtitle']; ?>">
     </p>
     <p style="margin: 1em;">
       <label for="person_fields[phone]">Phone Number</label>
       <br>
       <input type="text" name="person_fields[phone]" id="person_fields[phone]" class="regular-text" value="<?php echo $meta['phone']; ?>">
     </p>
     <p style="margin: 1em;">
       <label for="person_fields[email]">Email Address</label>
       <br>
       <input type="text" name="person_fields[email]" id="person_fields[email]" class="regular-text" value="<?php echo $meta['email']; ?>">
     </p>
     <p style="margin: 1em;">
       <label for="person_fields[mailto]">Mailto Subject Line</label>
       <br>
       <input type="text" name="person_fields[mailto]" id="person_fields[mailto]" class="regular-text" value="<?php echo $meta['mailto']; ?>">
     </p>
   </div>

 <?php }

// Save People Custom Fields
function save_people_fields_meta( $post_id ) {
 // verify nonce
 if ( !wp_verify_nonce( $_POST['people_meta_box_nonce'], basename(__FILE__) ) ) {
   return $post_id;
 }
 // check autosave
 if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
   return $post_id;
 }
 // check permissions
 if ( 'people' === $_POST['post_type'] ) {
   if ( !current_user_can( 'edit_page', $post_id ) ) {
     return $post_id;
   } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
     return $post_id;
   }
 }

 $old = get_post_meta( $post_id, 'person_fields', true );
 $new = $_POST['person_fields'];

 if ( $new && $new !== $old ) {
   update_post_meta( $post_id, 'person_fields', $new );
 } elseif ( '' === $new && $old ) {
   delete_post_meta( $post_id, 'person_fields', $old );
 }
}
add_action( 'save_post', 'save_people_fields_meta' );

// Admin Styles
function admin_style() {
  wp_enqueue_style('admin-fontawesome', get_template_directory_uri().'/vendor/css/all.css', array(), '20151215', all);
  wp_enqueue_style('admin-styles', get_template_directory_uri().'/admin.css', array(), '20151222', all);
}
add_action('admin_enqueue_scripts', 'admin_style');
