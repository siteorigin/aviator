<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package aviator
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function aviator_jetpack_setup() {

	// Support Jetpack site logo feature
	add_theme_support( 'site-logo', array(
		'size' => 'medium',
	) );

	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'aviator_jetpack_setup' );
