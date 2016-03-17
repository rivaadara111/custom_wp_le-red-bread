<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

 // Register Custom Post Type
 function register_product_post_types() {

 	$labels = array(
 		'name'                  => 'Products',
 		'singular_name'         => 'Product',
 		'menu_name'             => 'Products',
 		'name_admin_bar'        => 'Products',
 		'archives'              => 'Product Archives',
 		'parent_item_colon'     => 'Parent Product:',
 		'all_items'             => 'Products',
 		'add_new_item'          => 'Add New Product',
 		'add_new'               => 'Add New',
 		'new_item'              => 'New Item',
 		'edit_item'             => 'Edit Product',
 		'update_item'           => 'Update Product',
 		'view_item'             => 'View Product',
 		'search_items'          => 'Search Products',
 		'not_found'             => 'Not found',
 		'not_found_in_trash'    => 'Not found in Trash',
 		'featured_image'        => 'Featured Image',
 		'set_featured_image'    => 'Set featured image',
 		'remove_featured_image' => 'Remove featured image',
 		'use_featured_image'    => 'Use as featured image',
 		'insert_into_item'      => 'Insert into Product',
 		'uploaded_to_this_item' => 'Uploaded to this Product',
 		'items_list'            => 'Products list',
 		'items_list_navigation' => 'Products list navigation',
 		'filter_items_list'     => 'Filter products list',
 	);
 	$args = array(
 		'label'                 => 'Product',
 		'description'           => 'The products for Le Red Bread Bakery.',
 		'labels'                => $labels,
 		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', ),
 		'taxonomies'            => array( 'category', 'post_tag' ),
 		'hierarchical'          => false,
 		'public'                => true,
 		'show_ui'               => true,
 		'show_in_menu'          => true,
 		'menu_position'         => 5,
 		'menu_icon'             => 'dashicons-cart',
 		'show_in_admin_bar'     => true,
 		'show_in_nav_menus'     => true,
 		'can_export'            => true,
 		'has_archive'           => 'products',
 		'exclude_from_search'   => false,
 		'publicly_queryable'    => true,
 		'capability_type'       => 'post',
 	);
 	register_post_type( 'product', $args );

 }
 add_action( 'init', 'register_product_post_types', 0 );
