<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://clarknikdelpowell.com/agency/people/glenn/
 * @since             1.0.0
 * @package           Get_Off_My_Lawn
 *
 * @wordpress-plugin
 * Plugin Name:       Get Off My Lawn
 * Plugin URI:        https://clarknikdelpowell.com
 * Description:       A plugin to keep "Discourage search engines from indexing this site" set to true.
 * Version:           1.1
 * Author:            Glenn Welser
 * Author URI:        https://clarknikdelpowell.com/agency/people/glenn/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       get-off-my-lawn
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-get-off-my-lawn-activator.php
 */
function activate_get_off_my_lawn() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-get-off-my-lawn-activator.php';
	Get_Off_My_Lawn_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-get-off-my-lawn-deactivator.php
 */
function deactivate_get_off_my_lawn() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-get-off-my-lawn-deactivator.php';
	Get_Off_My_Lawn_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_get_off_my_lawn' );
register_deactivation_hook( __FILE__, 'deactivate_get_off_my_lawn' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-get-off-my-lawn.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_get_off_my_lawn() {

	$plugin = new Get_Off_My_Lawn();
	$plugin->run();

}
run_get_off_my_lawn();
