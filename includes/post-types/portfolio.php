<?php

/**
 * Hook into 'init' action to register the post type.
 */
add_action('init', 'n00b_portfolio_post_type');


/**
 * Function to create the custom post type.
 * 
 * Register a custom post type called "portoflio".
 *
 * @see get_post_type_labels() for label keys.
 */
function n00b_portfolio_post_type() {

	$labels = array(
		'name'                  => _x( 'Projects', 'Post type general name', 'plugin-text-domain' ),
		'singular_name'         => _x( 'Project', 'Post type singular name', 'plugin-text-domain' ),
		'menu_name'             => _x( 'Projects', 'Admin Menu text', 'plugin-text-domain' ),
		'name_admin_bar'        => _x( 'Project', 'Add New on Toolbar', 'plugin-text-domain' ),
		'add_new'               => __( 'Add New', 'plugin-text-domain' ),
		'add_new_item'          => __( 'Add New Project', 'plugin-text-domain' ),
		'new_item'              => __( 'New Project', 'plugin-text-domain' ),
		'edit_item'             => __( 'Edit Project', 'plugin-text-domain' ),
		'view_item'             => __( 'View Project', 'plugin-text-domain' ),
		'all_items'             => __( 'All Projects', 'plugin-text-domain' ),
		'search_items'          => __( 'Search Projects', 'plugin-text-domain' ),
		'parent_item_colon'     => __( 'Parent Projects:', 'plugin-text-domain' ),
		'not_found'             => __( 'No projects found.', 'plugin-text-domain' ),
		'not_found_in_trash'    => __( 'No projects found in Trash.', 'plugin-text-domain' ),
		'featured_image'        => _x( 'Project Cover Image', 'Overrides the "Featured Image" phrase for this post type.', 'plugin-text-domain' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the "Set featured image" phrase for this post type.', 'plugin-text-domain' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the "Remove featured image" phrase for this post type.', 'plugin-text-domain' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the "Use as featured image" phrase for this post type.', 'plugin-text-domain' ),
		'archives'              => _x( 'Project archives', 'The post type archive label used in nav menus. Default "Post Archives".', 'plugin-text-domain' ),
		'insert_into_item'      => _x( 'Insert into project', 'Overrides the "Insert into post"/"Insert into page" phrase (used when inserting media into a post).', 'plugin-text-domain' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this project', 'Overrides the "Uploaded to this post"/"Uploaded to this page" phrase (used when viewing media attached to a post).', 'plugin-text-domain' ),
		'filter_items_list'     => _x( 'Filter projects list', 'Screen reader text for the filter links heading on the post type listing screen. Default "Filter posts list"/"Filter pages list".', 'plugin-text-domain' ),
		'items_list_navigation' => _x( 'Projects list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default "Posts list navigation"/"Pages list navigation".', 'plugin-text-domain' ),
		'items_list'            => _x( 'Projects list', 'Screen reader text for the items list heading on the post type listing screen. Default "Posts list"/"Pages list".', 'plugin-text-domain' ),
	);
	
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'portfolio' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'          => 'dashicons-portfolio',
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		'taxonomies'         => array( 'category', 'post_tag' ),
		'show_in_rest'       => true // Set to "true" to add Gutenberg compatibility
	);
	
	register_post_type('portfolio', $args);
}


add_action( 'init', 'n00b_register_taxonomy', 0 );

function n00b_register_taxonomy() {}
