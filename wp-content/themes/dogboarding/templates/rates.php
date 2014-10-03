<?php
/**
 *
 * Template Name: Rates
 *
 *
 * @package Dogboarding
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<!-- BEGIN ACF REPEATER LOOP -->
				<?php if(get_field('barkly-rates')); ?>

				<div class="row">

					<!-- BEGIN SOMETHING REPEATER -->
					<?php while(has_sub_field('barkly-rates'));
					get_sub_field('barkly-rates-daycare-1');
					get_sub_field('barkly-rates-daycare-2');
					get_sub_field('barkly-rates-boarding-1');
					get_sub_field('barkly-rates-boarding-2'); ?>
					<!-- END OF SOMETHING REPEATER -->
				</div>

			<?php endwhile; ?>
		<?php endif; ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>