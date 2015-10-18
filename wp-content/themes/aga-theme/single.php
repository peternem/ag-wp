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
	} elseif (is_single('estate-collection')) {
		get_template_part('collection-estate');
	} else {
		get_template_part( 'content', 'single' );
	}
	
	?>
	 <?php if(get_field('collection_hot_link')) { ?>
		<div id="learnMore" class="aga-row row">
		 	<div class="col-md-12 text-center collection-cta">
		 		<h2>Want to Learn More About Our <?php echo the_field('collection_cta_tagline'); ?>?</h2>
				<a class="btn btn-primary btn-lg btn-block" href="<?php echo the_field('collection_hot_link'); ?>"><?php echo the_field('collection_hot_link_label'); ?></a>    		
			</div>
		</div>
	<?php } ?>
  
	<?php endwhile; // end of the loop. ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>