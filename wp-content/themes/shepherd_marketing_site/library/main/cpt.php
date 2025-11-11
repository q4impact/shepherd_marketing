<?php
// FAQ CPT 
function faq_cpt() {

	$labels = array(
		'name'                  => _x( 'FAQs', 'Post Type General Name', 'blankie' ),
		'singular_name'         => _x( 'FAQs', 'Post Type Singular Name', 'blankie' ),
		'menu_name'             => __( 'FAQs', 'blankie' ),
		'name_admin_bar'        => __( 'FAQs', 'blankie' ),
		'archives'              => __( 'FAQ Archives', 'blankie' ),
		'attributes'            => __( 'FAQ Attributes', 'blankie' ),
		'parent_item_colon'     => __( 'Parent Item:', 'blankie' ),
		'all_items'             => __( 'All Items', 'blankie' ),
		'add_new_item'          => __( 'Add New Item', 'blankie' ),
		'add_new'               => __( 'Add New', 'blankie' ),
		'new_item'              => __( 'New Item', 'blankie' ),
		'edit_item'             => __( 'Edit Item', 'blankie' ),
		'update_item'           => __( 'Update Item', 'blankie' ),
		'view_item'             => __( 'View Item', 'blankie' ),
		'view_items'            => __( 'View Items', 'blankie' ),
		'search_items'          => __( 'Search Item', 'blankie' ),
		'not_found'             => __( 'Not found', 'blankie' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'blankie' ),
		'featured_image'        => __( 'Featured Image', 'blankie' ),
		'set_featured_image'    => __( 'Set featured image', 'blankie' ),
		'remove_featured_image' => __( 'Remove featured image', 'blankie' ),
		'use_featured_image'    => __( 'Use as featured image', 'blankie' ),
		'insert_into_item'      => __( 'Insert into item', 'blankie' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'blankie' ),
		'items_list'            => __( 'Items list', 'blankie' ),
		'items_list_navigation' => __( 'Items list navigation', 'blankie' ),
		'filter_items_list'     => __( 'Filter items list', 'blankie' ),
	);
	$args = array(
		'label'                 => __( 'FAQs', 'blankie' ),
		'description'           => __( 'FAQs', 'blankie' ),
		'supports'            => array( 'title' ),
		'hierarchical'        => false,
		'public'              => false,
		'publicly_queryable'  => false,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'rewrite'             => false,
		'query_var'           => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => false,
		'show_in_rest'        => false,
		'can_export'          => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'faq', $args );

}
add_action( 'init', 'faq_cpt', 0 );