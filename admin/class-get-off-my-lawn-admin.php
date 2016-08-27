<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://clarknikdelpowell.com/agency/people/glenn/
 * @since      1.0.0
 *
 * @package    Get_Off_My_Lawn
 * @subpackage Get_Off_My_Lawn/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Get_Off_My_Lawn
 * @subpackage Get_Off_My_Lawn/admin
 * @author     Glenn Welser <glenn@clarknikdelpowell.com>
 */
class Get_Off_My_Lawn_Admin {

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
	 * @param      string $plugin_name The name of this plugin.
	 * @param      string $version     The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;
	}

	/**
	 * Display notice in the admin that GOML is installed and active.
	 *
	 * @since 1.2.0
	 */
	public function admin_notice() {

		$class   = 'notice notice-warning';
		$message = __( 'Sad robot is sad! Search engines are being discouraged!', 'get-off-my-lawn' );

		printf( '<div class="%1$s"><p>%2$s</p></div>', $class, $message );
	}
}
