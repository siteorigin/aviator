<?php

/**
 * This file gives additional Page Builder compatibility by rendering missing widgets.
 */

function aviator_panels_missing_widgets($code, $widget, $args, $instance){
	switch( $widget ) {
		case 'SiteOrigin_Widget_Slider_Widget':
			ob_start();
			echo $args['before_widget'];
			aviator_panels_missing_widgets_slider($instance, $args);
			echo $args['after_widget'];
			$code = ob_get_clean();
			break;

		case 'SiteOrigin_Widget_Features_Widget':
			ob_start();
			echo $args['before_widget'];
			aviator_panels_missing_widgets_features($instance, $args);
			echo $args['after_widget'];
			$code = ob_get_clean();
			break;

		case 'SiteOrigin_Widget_PostCarousel_Widget':
			ob_start();
			echo $args['before_widget'];
			aviator_panels_missing_widgets_carousel($instance, $args);
			echo $args['after_widget'];
			$code = ob_get_clean();
			break;
	}

	return $code;
}
add_filter('siteorigin_panels_missing_widget', 'aviator_panels_missing_widgets', 10, 4);

/**
 * Render the slider widget.
 *
 * @param $instance
 * @param $args
 */
function aviator_panels_missing_widgets_slider($instance, $args){
	$js_suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	wp_enqueue_script('aviator-demo-slider-cycle', get_template_directory_uri() . '/demo/slider/js/jquery.cycle' . $js_suffix . '.js', array('jquery'), SITEORIGIN_THEME_VERSION);
	wp_enqueue_script('aviator-demo-slider-cycle-swipe', get_template_directory_uri() . '/demo/slider/js/jquery.cycle.swipe' . $js_suffix . '.js', array('jquery'), SITEORIGIN_THEME_VERSION);
	wp_enqueue_script('aviator-demo-slider', get_template_directory_uri() . '/demo/slider/js/slider' . $js_suffix . '.js', array('jquery'), SITEORIGIN_THEME_VERSION);
	
	wp_enqueue_style('aviator-demo-slider', get_template_directory_uri() . '/demo/slider/css/slider.css', array(), SITEORIGIN_THEME_VERSION);

	get_template_part('demo/slider/slider');
}

/**
 * Render the features widget
 *
 * @param $instance
 * @param $args
 */
function aviator_panels_missing_widgets_features($instance, $args){
	global $aviator_demo_features_instance;
	// enqueue all the required styles
	wp_enqueue_style('aviator-demo-features', get_template_directory_uri() . '/demo/features/css/style.css', array(), SITEORIGIN_THEME_VERSION);
	wp_enqueue_style('aviator-demo-features-fontawesome', get_template_directory_uri() . '/demo/features/css/fontawesome/style.css', array(), SITEORIGIN_THEME_VERSION);

	$aviator_demo_features_instance = $instance;
	get_template_part('demo/features/features');
}

/**
 * Render the carousel widget
 */
function aviator_panels_missing_widgets_carousel($instance, $args) {
	$js_suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	wp_enqueue_style('aviator-demo-carousel-basic', get_template_directory_uri() . '/demo/carousel/css/style.css', array(), SITEORIGIN_THEME_VERSION);
	wp_enqueue_script('aviator-demo-carousel-basic', get_template_directory_uri() . '/demo/carousel/js/carousel' . $js_suffix . '.js', array('jquery'), SITEORIGIN_THEME_VERSION);

	get_template_part('demo/carousel/carousel');
}