<?php
/**
 * Template Name: Auxillary Page
 *
 * This is the template that displays full width page without sidebar
 *
 * @package sparkling
 */

get_header(); ?>
  	<section id="primary" class="content-area container-fluid white">

	      <?php while ( have_posts() ) : the_post(); ?>
	
	        <?php get_template_part( 'content', 'auxillary-page' ); ?>
	        
	      <?php endwhile; // end of the loop. ?>

	</section><!-- #primary -->

  

<?php get_footer(); ?>
