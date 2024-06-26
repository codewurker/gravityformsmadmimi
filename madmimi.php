<?php

// don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die();
}

/*
Plugin Name: Gravity Forms Mad Mimi Add-On
Plugin URI: https://gravityforms.com
Description: Integrates Gravity Forms with Mad Mimi, allowing form submissions to be automatically sent to your Mad Mimi account.
Version: 1.5.0
Author: Gravity Forms
Author URI: https://gravityforms.com
License: GPL-2.0+
Text Domain: gravityformsmadmimi
Domain Path: /languages

------------------------------------------------------------------------
Copyright 2009-2024 Rocketgenius, Inc.

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
*/

define( 'GF_MADMIMI_VERSION', '1.5.0' );

add_action('gform_loaded', array('GF_MadMimi_Bootstrap', 'load'), 5);

class GF_MadMimi_Bootstrap {

	public static function load(){
		require_once('class-gf-madmimi.php');
		GFAddOn::register('GFMadMimi');
	}

}

function gf_madmimi() {
	return GFMadMimi::get_instance();
}
