<?php
/**
 * Plugin Name: Gutenberg Ready
 * Description: Gutenblock Boilerplate
 * Author: sagarkbhatt
 * Author URI: https://github.com/sagarkbhatt/
 * Version: 0.1
 * License: GPLv2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: gutenberg-ready
 *
 * @package Gutenberg_Ready
 */

if ( ! defined( 'GUTENBERG_READY' ) ) {
	define( 'GUTENBERG_READY', '0.1' );
}

if ( ! defined( 'GUTENBERG_READY__DIR_URL' ) ) {
	define( 'GUTENBERG_READY__DIR_URL', plugin_dir_url( __FILE__ ) );
}

if ( ! defined( 'ABSPATH' ) ) {
	return;
}

require_once __DIR__ . '/trait-singleton.php';
require_once __DIR__ . '/class-register-blocks.php';
