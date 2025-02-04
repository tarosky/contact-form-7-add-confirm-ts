<?php
/*
Plugin Name: Contact Form 7 add confirm TS
Plugin URI: https://github.com/tarosky/contact-form-7-add-confirm-ts
Description: Add confirm step to contact form 7
Author: Yuichiro ABE, Tarosky
Author URI: https://tarosky.co.jp
Text Domain: contact-form-7-add-confirm
Domain Path: /languages/
Version: 5.1
*/

/*  Copyright 2014- Yuichiro ABE (email: y.abe at eyeta.jp), Tarosky (https://tarosky.co.jp)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/


define( 'WPCF7C_VERSION', '5.1-20210324' );

if ( ! defined( 'WPCF7C_PLUGIN_BASENAME' ) )
	define( 'WPCF7C_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );

if ( ! defined( 'WPCF7C_PLUGIN_NAME' ) )
	define( 'WPCF7C_PLUGIN_NAME', trim( dirname( WPCF7C_PLUGIN_BASENAME ), '/' ) );

if ( ! defined( 'WPCF7C_PLUGIN_DIR' ) )
	define( 'WPCF7C_PLUGIN_DIR', untrailingslashit( dirname( __FILE__ ) ) );

if ( ! defined( 'WPCF7C_PLUGIN_URL' ) )
	define( 'WPCF7C_PLUGIN_URL', untrailingslashit( plugins_url( '', __FILE__ ) ) );

if ( ! defined( 'WPCF7C_PLUGIN_MODULES_DIR' ) )
	define( 'WPCF7C_PLUGIN_MODULES_DIR', WPCF7C_PLUGIN_DIR . '/modules' );



require_once WPCF7C_PLUGIN_DIR . '/settings.php';
