<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package aviator
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="footer-widgets container" >
			<?php dynamic_sidebar('sidebar-footer') ?>
		</div>

		<div class="site-info container">
			<?php printf( __( 'Theme by %1$s.', 'aviator' ), '<a href="https://siteorigin.com/" rel="designer">SiteOrigin</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
