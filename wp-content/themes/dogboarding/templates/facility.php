

<?php
/**
 *
 * Template Name: Facility
 *
 *
 * @package Dogboarding
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<!-- START TOP HALF MAP AND INFO -->
			<div id="facility-top">
				<div class="row">
					<div class="column-one-half">
						<p><?php the_field('facility-top-text'); ?></p>
					</div>
					<!-- *********NEED TO INSERT BUTTONS HERE -->
					<div class="column-one-half">
						<!--  THE GOOGLE MAP GOES HERE -->
						<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:400px;width:500px;border-radius:10px;"><div id="gmap_canvas" style="height:400px;width:500px;border-radius:10px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.map-embed.com/sheego-gutschein/" id="get-map-data"></a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(39.7400802,-104.9291589),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(39.7400802, -104.9291589)});infowindow = new google.maps.InfoWindow({content:"<b>Barkly Manor</b><br/>5010 East Colfax Avenue<br/>Denver, CO 80220" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
						<!-- END OF GOOGLE MAPS -->
					</div>
				</div>
			</div>
			<!-- END TOP HALF MAP AND INFO -->

			<!-- START BOTTOM HALF -->
			<div class="row">
				<!-- START FIRST COLUMN -->
				<div class="column-one-third">
						<div class="circle glow" style="background-image: url(<?php the_field('facility-bottom-image-1'); ?>)"></div>
					<div class="center">
						<h1><?php the_field('facility-bottom-header-1'); ?></h1>
					</div>
					<p><?php the_field('facility-bottom-text-1'); ?></p>
				</div>
				<!-- END FIRST COLUMN -->
				<!-- START SECOND COLUMN -->
				<div class="column-one-third">
						<div class="circle glow" style="background-image: url(<?php the_field('facility-bottom-image-2'); ?>)"></div>
					<div class="center">
						<?php the_field('facility-bottom-header-2'); ?>
					</div>
					<p><?php the_field('facility-bottom-text-2'); ?></p>
				</div>
				<!-- END SECOND COLUMN -->
				<!-- START THIRD COLUMNN -->
				<div class="column-one-third">
						<div class="circle glow" style="background-image: url(<?php the_field('facility-bottom-image-3'); ?>)"></div>
					<div class="center">
						<?php the_field('facility-bottom-header-3'); ?>
					</div>
					<p><?php the_field('facility-bottom-text-3'); ?></p>
				</div>
				<!-- END THIRD COLUMN -->
			</div>
			<!-- END BOTTOM HALF -->
				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
