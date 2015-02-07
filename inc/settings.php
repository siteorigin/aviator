<?php

/**
 * Initialize the settings
 */
function aviator_settings_init(){

	siteorigin_settings_add_section( 'navigation', __('Navigation', 'aviator') );

	siteorigin_settings_add_field('navigation', 'sticky_menu', 'checkbox', __('Sticky Menu', 'aviator'), array(
		'description' => __('Sticks the menu to the top of the screen when a user scrolls down.', 'aviator')
	) );
}
add_action('siteorigin_settings_init', 'aviator_settings_init');

/**
 * Add default settings.
 *
 * @param $defaults
 *
 * @return mixed
 */
function aviator_settings_defaults( $defaults ){
	$defaults['navigation_sticky_menu'] = true;

	return $defaults;
}
add_filter('siteorigin_theme_default_settings', 'aviator_settings_defaults');