

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


			<!-- // The Arguments -->
			<?php $args = array( 
			    'post_type' => 'barkly_services', 
			    'posts_per_page' => 3
			    );

			// <!-- START LOOP -->
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<div class="fixtop">
			<!-- LOOP CONTENT BEGINS-->
			<div class="row">
			<!-- IMAGE HERE -->
				<div class="column-one-third">
					<div class="circle glow" style="background-image: url(<?php the_field('services-column-image'); ?>);"></div>
				</div>
				<!-- END IMAGE -->

				<!-- INSERT HEADER AND TEXT HERE -->
				<div class="column-two-thirds">
					<div class="center">
						<h1><?php the_field('services-column-header'); ?></h1>
					</div>
					<p><?php the_field('services-column-text'); ?></p>
				</div>
			</div>
			<!-- END HEADER AND TEXT -->
			</div>
			<?php endwhile; ?>
	

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>
			<?php wp_reset_postdata(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>