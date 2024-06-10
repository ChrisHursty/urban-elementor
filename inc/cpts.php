<?php
/**
 * Urban Elementor Custom Post Types
 *
 * @package Urban Elementor WP
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Testimonials CPT
function register_testimonial_post_type() {
    $args = array(
        'public'        => true,
        'label'         => 'Testimonials',
        'supports'      => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'menu_icon'     => 'dashicons-groups',
        'menu_position' => 6,
    );
    register_post_type('testimonial', $args);
  }
  add_action('init', 'register_testimonial_post_type');

// Portfolio Custom Post Type
function portfolio() {

	$labels = array(
		'name'                  => _x( 'Portfolio', 'Post Type General Name', 'urban-elementor' ),
		'singular_name'         => _x( 'Portfolio Item', 'Post Type Singular Name', 'urban-elementor' ),
		'menu_name'             => __( 'Portfolio', 'urban-elementor' ),
		'name_admin_bar'        => __( 'Portfolio', 'urban-elementor' ),
		'archives'              => __( 'Portfolio Archives', 'urban-elementor' ),
		'attributes'            => __( 'Item Attributes', 'urban-elementor' ),
		'parent_item_colon'     => __( 'Parent Item:', 'urban-elementor' ),
		'all_items'             => __( 'All Portfolio Items', 'urban-elementor' ),
		'add_new_item'          => __( 'Add New Portfolio Item', 'urban-elementor' ),
		'add_new'               => __( 'Add New Portfolio Item', 'urban-elementor' ),
		'new_item'              => __( 'New Item', 'urban-elementor' ),
		'edit_item'             => __( 'Edit Item', 'urban-elementor' ),
		'update_item'           => __( 'Update Item', 'urban-elementor' ),
		'view_item'             => __( 'View Item', 'urban-elementor' ),
		'view_items'            => __( 'View Items', 'urban-elementor' ),
		'search_items'          => __( 'Search Item', 'urban-elementor' ),
		'not_found'             => __( 'Not found', 'urban-elementor' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'urban-elementor' ),
		'featured_image'        => __( 'Featured Image', 'urban-elementor' ),
		'set_featured_image'    => __( 'Set featured image', 'urban-elementor' ),
		'remove_featured_image' => __( 'Remove featured image', 'urban-elementor' ),
		'use_featured_image'    => __( 'Use as featured image', 'urban-elementor' ),
		'insert_into_item'      => __( 'Insert into item', 'urban-elementor' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'urban-elementor' ),
		'items_list'            => __( 'Items list', 'urban-elementor' ),
		'items_list_navigation' => __( 'Items list navigation', 'urban-elementor' ),
		'filter_items_list'     => __( 'Filter items list', 'urban-elementor' ),
	);
	$args = array(
		'label'                 => __( 'Portfolio Item', 'urban-elementor' ),
		'description'           => __( 'Post Type Description', 'urban-elementor' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes' ),
		'taxonomies'            => array( 'post_tag', 'genres' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
        'menu_icon'             => 'dashicons-portfolio',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'portfolio', 0 );

// Genre Custom Taxonomy
function urban_elementor_create_genre_taxonomy() {
    $labels = array(
        'name'          => _x('Genres', 'Taxonomy General Name', 'urban-elementor'),
        'singular_name' => _x('Genre', 'Taxonomy Singular Name', 'urban-elementor'),
    );

    $args = array(
        'labels'       => $labels,
        'hierarchical' => true,
        'public'       => true,
        'show_in_rest' => true,
    );

    register_taxonomy('genre', array('portfolio'), $args);
}

add_action('init', 'urban_elementor_create_genre_taxonomy');

function company_post_type() {
    $labels = array(
        'name'                  => _x('Companies', 'Post Type General Name', 'urban-elementor'),
        'singular_name'         => _x('Company', 'Post Type Singular Name', 'urban-elementor'),
        'menu_name'             => __('Companies', 'urban-elementor'),
        'name_admin_bar'        => __('Company', 'urban-elementor'),
        'archives'              => __('Company Archives', 'urban-elementor'),
        'attributes'            => __('Company Attributes', 'urban-elementor'),
        'parent_item_colon'     => __('Parent Company:', 'urban-elementor'),
        'all_items'             => __('All Companies', 'urban-elementor'),
        'add_new_item'          => __('Add New Company', 'urban-elementor'),
        'add_new'               => __('Add New', 'urban-elementor'),
        'new_item'              => __('New Company', 'urban-elementor'),
        'edit_item'             => __('Edit Company', 'urban-elementor'),
        'update_item'           => __('Update Company', 'urban-elementor'),
        'view_item'             => __('View Company', 'urban-elementor'),
        'view_items'            => __('View Companies', 'urban-elementor'),
        'search_items'          => __('Search Company', 'urban-elementor'),
        'not_found'             => __('Not found', 'urban-elementor'),
        'not_found_in_trash'    => __('Not found in Trash', 'urban-elementor'),
        'featured_image'        => __('Featured Image', 'urban-elementor'),
        'set_featured_image'    => __('Set featured image', 'urban-elementor'),
        'remove_featured_image' => __('Remove featured image', 'urban-elementor'),
        'use_featured_image'    => __('Use as featured image', 'urban-elementor'),
        'insert_into_item'      => __('Insert into company', 'urban-elementor'),
        'uploaded_to_this_item' => __('Uploaded to this company', 'urban-elementor'),
        'items_list'            => __('Companies list', 'urban-elementor'),
        'items_list_navigation' => __('Companies list navigation', 'urban-elementor'),
        'filter_items_list'     => __('Filter companies list', 'urban-elementor'),
    );

    $args = array(
        'label'               => __('Company', 'urban-elementor'),
        'description'         => __('Post Type Description', 'urban-elementor'),
        'labels'              => $labels,
        'supports'            => array('title', 'thumbnail'),
        'taxonomies'          => array('category', 'post_tag'),
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-building',
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
    );

    register_post_type('company', $args);
}

add_action('init', 'company_post_type');

