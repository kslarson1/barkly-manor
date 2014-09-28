

<?php
/**
 *
 * Template Name: Services
 *
 *
 * @package Dogboarding
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<div class="row">
			<!-- INSERT COLUMN 1 IMAGE HERE -->
			<div class="column one-third circle">
				<?php the_field('services-column-1-image'); ?>
			</div>
			<!-- END COLUMN 1 IMAGE -->

			<!-- INSERT COLUMN 1 TEXT HERE -->
			<div class="column two-thirds">
				<?php the_field('services-column-1-header'); ?>
				<?php the_field('services-column-1-text'); ?>
			</div>
			<!-- END COLUMN 1 TEXT -->
			</div>

			<div class="row">
			<!-- INSERT COLUMN 2 TEXT HERE -->
			<div class="column two-thirds">
				<?php the_field('services-column-2-header'); ?>
				<?php the_field('services-column-2-text'); ?>
			</div>
			<!-- END COLUMN 2 TEXT -->

			<!-- INSERT COLUMN 2 IMAGE HERE -->
			<div class="column one-third circle">
				<?php the_field('services-column-2-image'); ?>
			</div>
			<!-- END COLUMN 2 IMAGE -->
			</div>

			<div class="row">
			<!-- INSERT COLUMN 3 IMAGE HERE -->
			<div class="column one-third circle">
				<?php the_field('services-column-3-image'); ?>
			</div>
			<!-- END COLUMN 3 IMAGE -->

			<!-- INSERT COLUMN 3 TEXT HERE -->
			<div class="column two-thirds">
				<?php the_field('services-column-3-header'); ?>
				<?php the_field('services-column-3-text'); ?>
			</div>
			<!-- END COLUMN 3 TEXT -->
			</div>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
