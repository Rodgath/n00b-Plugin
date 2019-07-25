<?php
/*
 * Plugin Name: [Plugin Name]
 * Plugin URI:  [http://link to your plugin homepage]
 * Description: [Sample plugin description]
 * Version:     1.0
 * Author:      [Plugin Author Name]
 * Author URI:  [http://plugin-author-url.tld]
 * Text Domain: [plugin-name]
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
	
	public function init() {
		
	}
	
	public function enqueue_scripts() {
		
	}
	
	public function admin_enqueue_scripts() {
		
	}
	
	public function admin_menu() {
		
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
