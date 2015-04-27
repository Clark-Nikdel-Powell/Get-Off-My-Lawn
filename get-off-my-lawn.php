<?php
/**
 * Plugin Name: Get Off My Lawn
 * Plugin URI: http://clarknikdelpowell.com
 * Description: A plugin to keep "Discourage search engines from indexing this site" set to true.
 * Version: 1.0
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
class CNP_GOML {
	
	public function __construct() {
		add_action( 'init', array( $this, 'discourage_se') );
	}

	public function discourage_se() {
		update_option( 'blog_public', 0 );
	}

}

// Instantiate
$CNP_GOML = new CNP_GOML();