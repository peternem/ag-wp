<?php
/**
 * The Template for displaying all single posts.
 *
 * @package sparkling
 */

get_header(); ?>  
	<?php 
	while ( have_posts() ) : the_post(); 
	if (is_single('the-collections')) {
		get_template_part('collection-overview');
	} elseif (is_single('silhouette-collection')) {
		get_template_part('collection-silhouette');
	} elseif (is_single('estate-collection')) {
		get_template_part('collection-estate');
	} else {
		get_template_part( 'content', 'single' );
	}

	endwhile; // end of the loop. ?>
	<?php 
	get_template_part('collection-cta');
	get_template_part('modal-popup');
	?>
<?php get_footer(); ?>