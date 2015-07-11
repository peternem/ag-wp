<?php
/**
 * The Template for displaying all single posts.
 *
 * @package sparkling
 */

get_header(); ?>  
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', 'single' ); ?>
		<?php sparkling_post_nav(); ?>
	<?php endwhile; // end of the loop. ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>