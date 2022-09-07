<?php
/**
 * Block Patterns Class
 *
 * @package blockette
 * @since 1.0.0
 */

namespace Blockette;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Pattern Class
 *
 * @package blockette
 */
class Block_Patterns {

	/**
	 * Instance variable
	 *
	 * @var $instance
	 */
	private static $instance;

	/**
	 * Class instance.
	 *
	 * @return BlockPatterns
	 */
	public static function instance() {
		if ( null === static::$instance ) {
			static::$instance = new static();
		}

		return static::$instance;
	}

	/**
	 * Class constructor.
	 */
	public function __construct() {
		$this->block_pattern_categories();
	}

	/**
	 * Register Block Patterns
	 */
	private function block_pattern_categories() {

		/**
		 * Register an block pattern category.
		 *
		 * @since 1.0.0
		 */
		register_block_pattern_category(
			'images',
			array( 'label' => esc_html__( 'Images', 'blockette' ) )
		);

		register_block_pattern_category(
			'blockette',
			array( 'label' => esc_html__( 'Blockette', 'blockette' ) )
		);

	}

	/**
	 * Display the search term in the heading on the search page.
	 * Todo: Remove when the query title block is updated to work for the search page.
	 *
	 * @since 1.0.0
	 *
	 * @return string Search page title
	 */
	public static function search_title() {
		if ( isset( $_GET['s'] ) ) {
			$search_term = sanitize_text_field( wp_unslash( $_GET['s'] ) );
			/* translators: %s: Search term. */
			return isset( $search_term ) ? sprintf( esc_html__( 'Search results for "%s"', 'blockette' ), esc_html( $search_term ) ) : __( 'Search results', 'blockette' );
		}
	}

	/**
	 * Display a link to the privacy policy page, if one is published.
	 *
	 * @since 1.0.0
	 *
	 * @return string Link to the privacy policy page, if one is published.
	 */
	public static function privacy() {
		if ( get_the_privacy_policy_link() ) {
			return get_the_privacy_policy_link();
		}
	}

}
