<?php
/**
 * Warbox functions and definitions
 *
 * @package Warbox
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Registers text field settings for all saved CGV variables.
 *
 * @return void
 **/
function register_my_settings(): void {
	$cgvs = WP_CONTENT_DIR . '/custom-global-variables/' . md5( AUTH_KEY ) . '.json';
	if ( file_exists( $cgvs ) ) {
		$settings = array();
		$vars = file_get_contents($cgvs);

		if( ! empty( $vars ) ) {
			$settings = json_decode( $vars, true );
		}
		$args = array(
			'type' => 'string',
			'sanitize_callback' => 'sanitize_text_field',
			'default' => null,
			'show_in_graphql' => true,
		);

		foreach ( $settings as $key => $val ) {
			$key             = esc_html($key);
			$val             = htmlentities( wp_kses_post($val) );
			$args['default'] = $val;

			register_setting( 'cgv', $key, $args );
		}
	}
}

add_action( 'init', 'register_my_settings' );

/**
 * Crossorigin_anon_forscript.
 *
 * @param string $url script URL.
 *
 * @return string
 */
function add_defer_forscript( string $url ): string {
	if ( strpos( $url, '#deferload' ) === false ) {
		return $url;
	} elseif ( is_admin() ) {
		return str_replace( '#deferload', '', $url );
	}

	return str_replace( '#deferload', '', $url ) . "' defer='defer";
}

add_filter( 'clean_url', 'add_defer_forscript', 11, 1 );

/**
 * Crossorigin_anon_forscript.
 *
 * @param string $url script URL.
 *
 * @return string
 */
function crossorigin_anon_forscript( string $url ): string {
	if ( strpos( $url, '#crossoriginanon' ) === false ) {
		return $url;
	} elseif ( is_admin() ) {
		return str_replace( '#crossoriginanon', '', $url );
	}

	return str_replace( '#crossoriginanon', '', $url ) . "' crossorigin='anonymous";
}

add_filter( 'clean_url', 'crossorigin_anon_forscript', 12, 1 );
