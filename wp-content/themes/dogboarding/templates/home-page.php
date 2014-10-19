<?php
/**
 *
 * Template Name: Home Page
 *
 *
 * @package Dogboarding
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<!-- BEGIN FULL IMAGE HERO BACKGROUND -->
			<div class="full-width center fixtop" style="background-image: url(<?php the_field('home-hero-image'); ?>);">

				<!-- BEGIN HEADLINE HERE -->
				<div class="row">
					<h1><?php the_field('home-heading'); ?></h1>
				</div>
				<!-- END HEADLINE HERE -->

				<!-- INSERT SUB HEADLINE TEXT HERE -->
				<div class="row">
					<h2><?php the_field('home-subheader'); ?></h2>
				</div>
			<!-- END SUB HEADLINE HERE -->
			</div>
			<!-- END OF HERO BACKGROUND -->
			<div class="row">
			<!-- INSERT COLUMN 1 IMAGE HERE -->
			<div class="column-one-third">
					<div class="circle glow" style="background-image: url(<?php the_field('home-column-1-image'); ?>);" ></div>
			<!-- END COLUMN 1 IMAGE -->
			<!-- INSERT COLUMN 1 TEXT HERE -->
				<p><?php the_field('home-column-1-text'); ?></p>
			<!-- END COLUMN 1 TEXT -->
			</div>

			<!-- INSERT COLUMN 2 IMAGE HERE -->
			<div class="column-one-third">
				<div class="circle glow" style="background-image: url(<?php the_field('home-column-2-image'); ?>);" ></div>
			<!-- END COLUMN 2 IMAGE -->
			<!-- INSERT COLUMN 2 TEXT HERE -->
				<p><?php the_field('home-column-2-text'); ?></p>
			<!-- END COLUMN 2 TEXT -->
			</div>
			
			<!-- INSERT COLUMN 3 IMAGE HERE -->
			<div class="column-one-third">
					<div class="circle glow" style="background-image: url(<?php the_field('home-column-3-image'); ?>);" ></div>
			<!-- END COLUMN 3 IMAGE -->
			<!-- INSERT COLUMN 3 TEXT HERE -->
				<p><?php the_field('home-column-3-text'); ?></p>
			</div>
			<!-- END OF COLUMN 3 TEXT -->
			</div>
				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
