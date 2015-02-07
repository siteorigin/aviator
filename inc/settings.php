<?php

/**
 * Initialize the settings
 */
function aviator_settings_init(){

	// The branding section

	siteorigin_settings_add_section( 'branding', __('Branding', 'aviator') );

	siteorigin_settings_add_field('branding', 'logo', 'media', __('Logo', 'aviator'), array(
		'description' => __('Logo displayed in your masthead.', 'aviator')
	) );

	siteorigin_settings_add_field('branding', 'description', 'checkbox', __('Site Description', 'aviator'), array(
		'description' => __('Display site description under the site title.', 'aviator')
	) );

	// Navigation section

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
	$defaults['branding_logo'] = false;
	$defaults['branding_description'] = true;

	$defaults['navigation_sticky_menu'] = true;

	return $defaults;
}
add_filter('siteorigin_theme_default_settings', 'aviator_settings_defaults');