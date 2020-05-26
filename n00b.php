<?php
/*
 * Plugin Name: [Plugin Name]
 * Plugin URI:  [http://link to your plugin homepage]
 * Description: [Sample plugin description]
 * Version:     1.0
 * Author:      [Plugin Author Name]
 * Author URI:  [http://plugin-author-url.tld]
 * Text Domain: [plugin-text-domain]
 * Domain Path: /languages
 * License:     GPL-2.0+
 * License URI:	http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * This program is free software; you can redistribute it and/or modify 
 * it under the terms of the GNU General Public License version 2, 
 * as published by the Free Software Foundation. You cannot use any 
 * other versions of the License except version 2 or later.
 *
 * This program is distributed in the hope that it will be useful, 
 * but WITHOUT ANY WARRANTY; without even the implied warranty of 
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 */

/*
 * Exit if accessed directly
 */
defined('ABSPATH') || exit('No Dice!');

/*
 * Main Class
 *
 */
class n00bPluginName {
	
	public function __construct() {
		
		add_action( 'plugins_loaded', array($this, 'init') );
		add_action( 'admin_menu', array($this, 'admin_menu') );
		add_action( 'wp_enqueue_scripts', array($this, 'enqueue_scripts') );
		add_action( 'admin_enqueue_scripts', array($this, 'admin_enqueue_scripts') );
		
		register_activation_hook( __FILE__, array($this, 'activation') );
		register_deactivation_hook( __FILE__, array($this, 'deactivation') );
		register_uninstall_hook( __FILE__, array($this, 'uninstallation') );
		
	}
	
	/**
	 * Initialize the plugin
	 * 
	 * @since 1.0
	 */
	public function init() {
		
		/* Load constants */
		$this->constants();
		
		/* Load the text domain for translations */
		$this->i18n();
		
		/* Load admin functions */
		$this->backend();
		
		/* Load files needed by the plugin */
		$this->includes();
		
	}
	
	/**
	 * Enqueue plugin frontend scripts
	 * 
	 * @since 1.0
	 */
	public function enqueue_scripts() {

		/* Frontend styles */
		wp_enqueue_style('n00b-style', N00B_URL . 'assets/css/style.css' );
	}
	
	/**
	 * Enqueue plugin admin scripts
	 * 
	 * @since 1.0
	 */
	public function admin_enqueue_scripts() {

		/* Ensure that the scripts load only in portfolio post type page */
		if ('portfolio' != get_current_screen()->post_type) return;

		/* Admin styles */
		wp_enqueue_style('n00b-admin-style', N00B_URL . 'assets/css/admin-style.css', null, null);

		/* Admin scripts */
		wp_enqueue_script('n00b-admin-script', N00B_URL . 'assets/js/admin-script.js', array('jquery'), null, true);

		/* Admin script localization */
		wp_localize_script('n00b-admin-script', 'n00b_l10n',
			array(
				'site_name'  => __('n00b Site', 'plugin-text-domain'),
				'n00b_url' => N00B_URL,
				'n00b_dir' => N00B_DIR,
				'site_url' => site_url(),
			)
		);
	}
	
	/**
	 * Plugin admin menu
	 * 
	 * @since 1.0
	 */
	public function admin_menu() {
		
	}
	
	/**
	 * Define onstants
	 *
	 * @since 1.0
	 * @return void
	 */
	public function constants() {
		define('N00B_URL', trailingslashit(plugin_dir_url(__FILE__)));
		define('N00B_DIR', trailingslashit(plugin_dir_path(__FILE__)));
	}
	
	/**
	 * Set the locale for the plugin internationlization.
	 *
	 * @since 1.0
	 */
	public function i18n() {
		load_plugin_textDomain( 'plugin-name', false, N00B_DIR . 'languages/' );
	}

	/**
	 * Admin functions - Options panel, metabox options etc
	 *
	 * @since 1.0
	 */
	public function backend() {
		
	}
	
	/**
	 * Plugin includes
	 *
	 * @since 1.0
	 * @return void
	 */
	public function includes() {
		
	}
	
	/**
	 * Plugin activation
	 * This is called when plugin is activated.
	 * 
	 * @since 1.0
	 */
	public function activation() {
		
	}
	
	/**
	 * Plugin deactivation
	 * This is called when plugin is deactivated.
	 * Contains all the code that should run when the plugin is deactivated.
	 * 
	 * @since 1.0
	 */
	public function deactivation() {
		
	}
	
	/**
	 * Plugin uninstallation
	 * This is called when plugin is uninstalled.
	 * Contains all the code that should run when the plugin is unsinstalled.
	 * 
	 * @since 1.0
	 */
	public function uninstallation() {
		
	}
	
}

new n00bPluginName;