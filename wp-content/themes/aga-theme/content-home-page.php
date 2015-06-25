<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package sparkling
 */
?>

<?php //the_post_thumbnail( 'sparkling-featured', array( 'class' => 'single-featured' )); ?>
<div class="post-inner-content">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content row">
	    <div class="post-area col-md-8">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'sparkling' ),
				'after'  => '</div>',
			) );
		?>
		<?php edit_post_link( __( 'Edit', 'sparkling' ), '<footer class="entry-footer"><i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span></footer>' ); ?>
		</div>
		<div class="home-widget-area col-md-4">
    <?php
      // Checks if this is homepage to enable homepage widgets
      if ( is_front_page() ) : ?>
      
      <?php
        get_sidebar( 'home' );
      endif;
      
    ?>
        </div>
	</div><!-- .entry-content -->
	
</article><!-- #post-## -->
</div>