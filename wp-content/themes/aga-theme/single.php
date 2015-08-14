<?php
/**
 * The Template for displaying all single posts.
 *
 * @package sparkling
 */

get_header(); ?>  
	<?php while ( have_posts() ) : the_post(); ?>
	<?php 
	
	if (is_single('the-collections')) {
		get_template_part('collection-overview');
	} elseif (is_single('silhouette-collection')) {
		get_template_part('collection-silhouette');
	} else {
		get_template_part( 'content', 'single' );
	}
	
	?>
	<?php endwhile; // end of the loop. ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>