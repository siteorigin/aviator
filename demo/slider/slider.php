<?php
$settings = array(
	'pagination' => true,
	'speed' => 750,
	'timeout' => 5000,
);
$frames = array(
	array(
		'background_image' => array(
			get_template_directory_uri() . '/demo/slider/images/turbine.jpg', 1280, 560
		)
	),

	array(
		'background_image' => array(
			get_template_directory_uri() . '/demo/slider/images/aircraft.jpg', 1280, 560
		)
	),
);


?>

<div tabindex="0" class="sow-slider-base <?php if( wp_is_mobile() ) echo 'sow-slider-is-mobile' ?> sow-slider-nav-black" style="display: none">

	<ul class="sow-slider-images" data-settings="<?php echo esc_attr(json_encode($settings)) ?>">
		<?php
		foreach($frames as $frame) {
			if( empty($frame['background_image']) ) $background_image = false;
			else $background_image = $frame['background_image'];

			if( empty($frame['foreground_image']) ) $foreground_image = false;
			else $background_image = $frame['background_image'];

			?>
			<li
				class="sow-slider-image sow-slider-image-cover"
				style="<?php if(!empty($background_image[0]) && (!empty($foreground_image)) || !empty($frame['background_videos']) ) echo 'background-image: url('.$background_image[0].');' ?>">

				<?php

				if( !empty( $frame['foreground_image'] ) ) {
					?>
					<div class="sow-slider-image-container">
						<div class="sow-slider-image-wrapper" style="max-width: <?php echo intval($foreground_image[1]) ?>px; ">
							<?php
							if(!empty($frame['url'])) echo '<a href="' . esc_url($frame['url']) . '">';
							?><img src="<?php echo esc_url($foreground_image[0]) ?>" width="<?php echo intval($foreground_image[1]) ?>" height="<?php echo intval($foreground_image[1]) ?>" /><?php
							if(!empty($frame['url'])) echo '</a>';
							?>
						</div>
					</div>
					<?php
				}
				else {
					// We need to find another background
					if(!empty($frame['url'])) echo '<a href="' . esc_url($frame['url']) . '">';
					// Lets use the background image
					echo wp_get_attachment_image($frame['background_image'], 'full');

					?><img src="<?php echo esc_url($background_image[0]) ?>" width="<?php echo intval($background_image[1]) ?>" height="<?php echo intval($background_image[1]) ?>" /><?php

					if(!empty($frame['url'])) echo '</a>';
				}
				?>
			</li>
		<?php
		}
		?>
	</ul>

	<ol class="sow-slider-pagination">
		<?php foreach($frames as $i => $frame) : ?>
			<li><a href="#" data-goto="<?php echo $i ?>"><?php echo $i+1 ?></a></li>
		<?php endforeach; ?>
	</ol>

	<div class="sow-slide-nav sow-slide-nav-next">
		<a href="#" data-goto="next" data-action="next">
			<em class="sow-sld-icon-medium-right"></em>
		</a>
	</div>

	<div class="sow-slide-nav sow-slide-nav-prev">
		<a href="#" data-goto="previous" data-action="prev">
			<em class="sow-sld-icon-medium-left"></em>
		</a>
	</div>

</div>