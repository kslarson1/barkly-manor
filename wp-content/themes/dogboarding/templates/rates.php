<?php
/**
 *
 * Template Name: Rates template
 *
 *
 * @package Dogboarding
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      
      <?php while ( have_posts() ) : the_post(); ?>

			<?php

  //if( have_rows('barkly-rates') ):

  // loop through the rows of data
    while ( have_rows('barkly-rates') ) : the_row(); ?>

        <p><?php the_sub_field('barkly-rates-daycare-1'); ?></p>

   <?php endwhile;

else :

    // no rows found

//endif;

?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>