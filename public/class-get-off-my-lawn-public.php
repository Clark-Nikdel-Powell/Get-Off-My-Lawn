<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://clarknikdelpowell.com/agency/people/glenn/
 * @since      1.0.0
 *
 * @package    Get_Off_My_Lawn
 * @subpackage Get_Off_My_Lawn/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Get_Off_My_Lawn
 * @subpackage Get_Off_My_Lawn/public
 * @author     Glenn Welser <glenn@clarknikdelpowell.com>
 */
class Get_Off_My_Lawn_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $plugin_name The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $version The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 *
	 * @param      string $plugin_name The name of the plugin.
	 * @param      string $version     The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;
	}

	/**
	 * Keep "Discourage Search Engines" checked.
	 *
	 * @since 1.0.0
	 */
	public function discourage_se() {

		$blog_public = get_option( 'blog_public' );
		if ( $blog_public ) {
			update_option( 'blog_public', 0 );
		}
	}
}
