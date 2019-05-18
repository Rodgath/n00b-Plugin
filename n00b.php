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
 * License:		GPL-2.0+
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
		
		register_activation_hook( __FILE__, array($this, 'activation') );
		
		register_deactivation_hook( __FILE__, array($this, 'deactivation') );
		
		register_uninstall_hook( __FILE__, array($this, 'uninstallation') );
		
	}
	
	public function init() {
		
	}
	
	public function activation() {
		
	}
	
	public function deactivation() {
		
	}
	
	public function uninstallation() {
		
	}
	
}

new n00bPluginName;
