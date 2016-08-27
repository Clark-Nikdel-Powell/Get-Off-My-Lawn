<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://clarknikdelpowell.com/agency/people/glenn/
 * @since      1.0.0
 *
 * @package    Get_Off_My_Lawn
 * @subpackage Get_Off_My_Lawn/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Get_Off_My_Lawn
 * @subpackage Get_Off_My_Lawn/includes
 * @author     Glenn Welser <glenn@clarknikdelpowell.com>
 */
class Get_Off_My_Lawn_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'get-off-my-lawn',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
