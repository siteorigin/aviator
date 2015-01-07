<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package aviator
 */

if ( ! is_active_sidebar( 'sidebar-main' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-main' ); ?>
</div><!-- #secondary -->
