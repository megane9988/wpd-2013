<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package WP-D-2013
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function wp_d_2013_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'wp_d_2013_jetpack_setup' );
