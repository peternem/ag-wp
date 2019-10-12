<?php
/**
 * The Template for displaying all single posts.
 *
 * @package sparkling
 */

get_header(); ?>

	<?php
	while ( have_posts() ) : the_post(); ?>
	<?php
	if (is_single('the-collections')) {
		get_template_part('collection-overview');
	} else {
		get_template_part( 'content', 'single' );
	}

	endwhile; // end of the loop. ?>
	<?php
	get_template_part('collection-cta');
	get_template_part('modal-popup');
	?>
<?php get_footer(); ?>
