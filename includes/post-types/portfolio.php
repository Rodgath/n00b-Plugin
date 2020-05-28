<?php

/* Hook into 'init' action to register the post type */
add_action('init', 'n00b_portfolio_post_type');

/* Function to create the custom post type */
function n00b_portfolio_post_type() {
	
	$args = array();
	
	register_post_type('portfolio', $args);
}