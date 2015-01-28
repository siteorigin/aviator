<?php
/**
 * Integrates this theme with SiteOrigin Page Builder.
 *
 * @package vantage
 * @since 1.0
 * @license GPL 2.0
 */

/**
 * Adds default page layouts
 *
 * @param $layouts
 */
function aviator_prebuilt_page_layouts($layouts){
	$layouts['default-home'] = array (
		'name' => __('Default Home', 'aviator'),
		'widgets' =>
			array (
				0 =>
					array (
						'frames' =>
							array (
								0 =>
									array (
										'background_image' => false,
										'background_image_type' => 'cover',
										'foreground_image' => 0,
										'url' => '',
										'background_videos' => false,
									),
							),
						'speed' => 800,
						'timeout' => 8000,
						'nav_color_hex' => '#FFFFFF',
						'nav_style' => 'thin',
						'nav_size' => 25,
						'panels_info' =>
							array (
								'class' => 'SiteOrigin_Widget_Slider_Widget',
								'raw' => false,
								'grid' => 0,
								'cell' => 0,
								'id' => 0,
								'style' =>
									array (
										'background_display' => 'tile',
									),
							),
					),
				1 =>
					array (
						'features' =>
							array (
								0 =>
									array (
										'container_color' => '#404040',
										'icon' => 'fontawesome-heart',
										'icon_color' => '#FFFFFF',
										'icon_image' => 0,
										'title' => __('Simple and Free', 'aviator'),
										'text' => 'Praesent semper, ex quis mollis dictum, mauris enim sollicitudin mi, quis aliquet lorem odio vel augue. Aliquam ac nisl scelerisque, tempus elit a, tempor lectus. Aenean vel vehicula lectus.',
										'more_text' => __('Download Now', 'aviator'),
										'more_url' => '#',
									),
								1 =>
									array (
										'container_color' => '#404040',
										'icon' => 'fontawesome-cubes',
										'icon_color' => '#FFFFFF',
										'icon_image' => 0,
										'title' => __('Advanced Builder', 'aviator'),
										'text' => 'Praesent semper, ex quis mollis dictum, mauris enim sollicitudin mi, quis aliquet lorem odio vel augue. Aliquam ac nisl scelerisque, tempus elit a, tempor lectus. Aenean vel vehicula lectus.',
										'more_text' => __('Try Now', 'aviator'),
										'more_url' => '#',
									),
								2 =>
									array (
										'container_color' => '#404040',
										'icon' => 'fontawesome-magic',
										'icon_color' => '#FFFFFF',
										'icon_image' => 0,
										'title' => __('Simple Setup', 'aviator'),
										'text' => 'Praesent semper, ex quis mollis dictum, mauris enim sollicitudin mi, quis aliquet lorem odio vel augue. Aliquam ac nisl scelerisque, tempus elit a, tempor lectus. Aenean vel vehicula lectus.',
										'more_text' => __('Setup Now', 'aviator'),
										'more_url' => '#',
									),
							),
						'container_shape' => 'sticker',
						'container_size' => 84,
						'icon_size' => 24,
						'per_row' => 3,
						'responsive' => true,
						'panels_info' =>
							array (
								'class' => 'SiteOrigin_Widget_Features_Widget',
								'grid' => 0,
								'cell' => 0,
								'id' => 1,
								'style' =>
									array (
										'background_image_attachment' => false,
										'background_display' => 'tile',
									),
							),
						'title_link' => false,
						'icon_link' => false,
						'new_window' => false,
					),
				2 =>
					array (
						'type' => 'html',
						'title' => '',
						'text' => '<h1 style="text-align: center;">' . __('This is a Visual Editor', 'aviator') . '</h1>
<hr style="max-width:400px;" />
<h3 style="text-align: center;">' . __("It's Amazing What You Can Accomplish", 'aviator') . '</h3>',
						'filter' => '1',
						'panels_info' =>
							array (
								'class' => 'WP_Widget_Black_Studio_TinyMCE',
								'raw' => false,
								'grid' => 1,
								'cell' => 0,
								'id' => 2,
								'style' =>
									array (
										'background_display' => 'tile',
									),
							),
					),
				3 =>
					array (
						'type' => 'visual',
						'title' => '',
						'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet augue tincidunt, convallis turpis in, dictum elit. Sed risus felis, tincidunt sed nisl in, vehicula venenatis leo. Suspendisse nec tortor sed augue elementum mollis in nec enim. Phasellus commodo suscipit ligula a egestas. Vestibulum placerat vestibulum consequat. Praesent nec nisl feugiat, rhoncus metus ac, scelerisque diam. Donec nec euismod orci, a luctus tellus. Vivamus lacus purus, imperdiet quis nisl sit amet, varius ornare sem.</p>
',
						'filter' => '1',
						'panels_info' =>
							array (
								'class' => 'WP_Widget_Black_Studio_TinyMCE',
								'raw' => false,
								'grid' => 2,
								'cell' => 0,
								'id' => 3,
								'style' =>
									array (
										'background_display' => 'tile',
									),
							),
					),
				4 =>
					array (
						'type' => 'visual',
						'title' => '',
						'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet augue tincidunt, convallis turpis in, dictum elit. Sed risus felis, tincidunt sed nisl in, vehicula venenatis leo. Suspendisse nec tortor sed augue elementum mollis in nec enim. Phasellus commodo suscipit ligula a egestas. Vestibulum placerat vestibulum consequat. Praesent nec nisl feugiat, rhoncus metus ac, scelerisque diam. Donec nec euismod orci, a luctus tellus. Vivamus lacus purus, imperdiet quis nisl sit amet, varius ornare sem.</p>',
						'filter' => '1',
						'panels_info' =>
							array (
								'class' => 'WP_Widget_Black_Studio_TinyMCE',
								'raw' => false,
								'grid' => 2,
								'cell' => 1,
								'id' => 4,
								'style' =>
									array (
										'background_display' => 'tile',
									),
							),
					),
				5 =>
					array (
						'title' => 'Latest Posts',
						'posts' => '',
						'panels_info' =>
							array (
								'class' => 'SiteOrigin_Widget_PostCarousel_Widget',
								'raw' => false,
								'grid' => 3,
								'cell' => 0,
								'id' => 5,
								'style' =>
									array (
										'background_display' => 'tile',
									),
							),
					),
			),
		'grids' =>
			array (
				0 =>
					array (
						'cells' => 1,
						'style' =>
							array (
								'row_css' => 'padding:0px !important;',
								'background_display' => 'tile',
							),
					),
				1 =>
					array (
						'cells' => 1,
						'style' =>
							array (
								'padding' => '30px',
								'row_stretch' => 'full',
								'background' => '#f4f4f4',
								'background_display' => 'tile',
								'border_color' => '#e0e0e0',
							),
					),
				2 =>
					array (
						'cells' => 2,
						'style' =>
							array (
								'background_display' => 'tile',
							),
					),
				3 =>
					array (
						'cells' => 1,
						'style' =>
							array (
							),
					),
			),
		'grid_cells' =>
			array (
				0 =>
					array (
						'grid' => 0,
						'weight' => 1,
					),
				1 =>
					array (
						'grid' => 1,
						'weight' => 1,
					),
				2 =>
					array (
						'grid' => 2,
						'weight' => 0.618033992092,
					),
				3 =>
					array (
						'grid' => 2,
						'weight' => 0.381966007908,
					),
				4 =>
					array (
						'grid' => 3,
						'weight' => 1,
					),
			),
	);

	return $layouts;
}
add_filter('siteorigin_panels_prebuilt_layouts', 'aviator_prebuilt_page_layouts');