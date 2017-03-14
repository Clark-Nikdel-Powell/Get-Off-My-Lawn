<?php

/**
 * Plugin Name: Get Off My Lawn
 * Plugin URI: http://clarknikdelpowell.com
 * Description: A plugin to keep "Discourage search engines from indexing this site" set to true.
 * Version: 2.0.0
 * Author: Glenn Welser
 * Author URI: hhttp://clarknikdelpowell.com/agency/people/glenn
 * License: GPL2
 *
 * Copyright (C) 2014  Glenn Welser  glenn@clarknikdelpowell.com
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */
class Get_Off_My_Lawn {

	/**
	 * Url of live, public site
	 *
	 * @var string
	 *
	 * @since 2.0.0
	 */
	private $live_url = '';

	/**
	 * Setup WordPress hooks.
	 *
	 * @since 1.3.0
	 */
	public function run() {

		add_action( 'init', array( $this, 'set_robot_permissions' ) );
		add_action( 'admin_notices', array( $this, 'admin_notice' ) );

	}

	/**
	 * Get site url without scheme
	 *
	 * @return string
	 *
	 * @since 2.0.0
	 */
	private function no_scheme_url() {

		$site_url = site_url();
		$site_url = str_replace( 'https://', '', $site_url );
		$site_url = str_replace( 'http://', '', $site_url );

		return $site_url;
	}

	/**
	 * Set blog_public based on site url
	 *
	 * @since 2.0.0
	 */
	public function set_robot_permissions() {

		if ( $this->no_scheme_url() === $this->live_url ) {
			update_option( 'blog_public', 1 );
		} else {
			update_option( 'blog_public', 0 );
		}

	}

	/**
	 * Show a notice in the admin.
	 *
	 * @since 1.2.0
	 */
	public function admin_notice() {

		if ( get_option( 'blog_public' ) ) {

			$class = 'notice notice-info';

			$message = sprintf( '<strong>%1$s</strong> %2$s %3$s',
				__( 'Robots are allowed!', 'get-off-my-lawn' ),
				__( 'The blog is public!', 'get-off-my-lawn' ),
				__( 'The current site url matches the live url.', 'get-off-my-lawn' )
			);

		} else {

			$class = 'notice notice-error';

			$message = sprintf( '<strong>%1$s</strong> %2$s %3$s',
				__( 'Robots not allowed!', 'get-off-my-lawn' ),
				__( 'Search engines are being discouraged!', 'get-off-my-lawn' ),
				__( 'The current site url does not match the live url.', 'get-off-my-lawn' )
			);

		}

		$message .= sprintf( '<br>%1$s: <b>%2$s</b> %3$s: <b>%4$s</b>',
			__( 'Current url', 'get-off-my-lawn' ),
			$this->no_scheme_url(),
			__( 'Live url', 'get-off-my-lawn' ),
			$this->live_url
		);

		printf( '<div class="%1$s"><p>%2$s</p></div>', $class, $message );

	}
}

// Instantiate
$get_off = new Get_Off_My_Lawn();
$get_off->run();
