<?php
/**
 * Register plugin blocks
 *
 * @package Gutenberg_Ready
 */

namespace Gutenberg_Ready\Gutenblocks;

/**
 * Class Register_Blocks
 *
 * @package WP_Lyrucs\Gutenblocks
 */
class Register_Blocks {

	use \Gutenberg_Ready\Traits\Singleton;

	/**
	 * Initialize Block.
	 */
	protected function init() {

		// add_action( 'enqueue_block_editor_assets', array( $this, 'register_sample_block' ) );
	}
}

add_action( 'plugins_loaded', function () {
	Register_Blocks::get_instance();
} );
