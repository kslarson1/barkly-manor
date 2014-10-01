

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

			<!-- // The Arguments -->
			<?php $args = array( 
			    'post_type' => 'barkly_services', 
			    'posts_per_page' => 3
			    );

			// <!-- START LOOP -->
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<!-- LOOP CONTENT BEGINS-->
			<!-- IMAGE HERE -->
			<div class="column one-third circle">
				<img src="<?php the_field('services-column-image'); ?>" alt="">
			</div>
			<!-- END IMAGE -->

			<!-- INSERT HEADER AND TEXT HERE -->
			<div class="column two-thirds">
				<h2><?php the_field('services-column-header'); ?></h2>
				<p><?php the_field('services-column-text'); ?></p>
			</div>
			<!-- END HEADER AND TEXT -->
			<?php endwhile; ?>
			</div>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>
			<?php wp_reset_postdata(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>