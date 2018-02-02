<?php
/**
 * Plugin Name: rtBlocks
 * Description: Simple Gutenberg Boilerplate for plugin development
 * Author: rtCamp, sagarkbhatt, sayed, utkarsh
 * Author URI: https://rtcamp.com/
 * Version: 0.1
 * License: GPLv2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: rt-blocks
 *
 * @package rtBlocks
 */

if ( ! defined( 'RT_BLOCKS_VER' ) ) {
	define( 'RT_BLOCKS_VER', '0.1' );
}

if ( ! defined( 'RT_BLOCKS_DIR' ) ) {
	define( 'RT_BLOCKS_DIR', __DIR__ );
}

if ( ! defined( 'RT_BLOCKS_DIR_URL' ) ) {
	define( 'RT_BLOCKS_DIR_URL', plugin_dir_url( __FILE__ ) );
}

if ( ! defined( 'ABSPATH' ) ) {
	return;
}

require_once RT_BLOCKS_DIR . '/trait-singleton.php';
require_once RT_BLOCKS_DIR . '/class-register-blocks.php';
