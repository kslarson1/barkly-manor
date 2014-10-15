

<?php
/**
 *
 * Template Name: About
 *
 *
 * @package Dogboarding
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<!-- BEGIN ABOUT TOP SECTION -->
			<div class="row">
			<!-- BEGIN TEXT AREA -->
			<div class="column-one-half">
				<p><?php the_field('about-text'); ?></p>
			</div>
			<!-- END OF TEXT AREA -->
			<!-- BEGIN ABOUT IMAGE -->
			<div class="column-one-half rectangle-rounded">
				<div class="krounded">
					<img src="<?php the_field('about-image'); ?>" alt="">
				</div>
			</div>
			<!-- END OF ABOUT IMAGE -->
			</div>
			<!-- END OF ABOUT TOP SECTION -->

			<!-- BEGIN BUTTON SECTION -->
			<div class="row">
				<!-- *********INSERT BUTTONS HERE FAQ, BOOK NOW, POLICIES***** -->
			</div>
			<!-- END OF BUTTON SECTION -->

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
