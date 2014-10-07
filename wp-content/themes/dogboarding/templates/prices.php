<?php
/**
 *
 * Template Name: Prices
 *
 *
 * @package Dogboarding
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
			
			<!-- BEGIN REPEATER -->
			<?php

			// check if the repeater field has rows of data
			if( have_rows('barkly-prices') ):

			 	// loop through the rows of data
			    while ( have_rows('barkly-prices') ) : the_row();

			        // display a sub field value
			        the_sub_field('barkly-prices-daycare-1');
			        the_sub_field('barkly-prices-daycare-2');
			        the_sub_field('barkly-prices-boarding-1');
			        the_sub_field('barkly-prices-boarding-1');

			    endwhile;

			else :

			    // no rows found

			endif;

			?>
			<!-- END OF REPEATER -->
				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
