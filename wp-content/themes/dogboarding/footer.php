<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Dogboarding
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<!-- BEGIN FIRST ROW -->
		<div class="row">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/barklylogo.gif" ) alt=" " />
		</div>

		<!-- BEGIN SECOND ROW (FOR SMALL COPYRIGHT STUFF) -->
		<div class="row">
			<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
			<?php wp_nav_menu( array( 'theme_location' => 'social' ) ); ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
