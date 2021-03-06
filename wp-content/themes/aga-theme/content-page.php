<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package sparkling
 */
?>
<div class="post-inner-content aga-row row">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content col-md-7">
			<header class="entry-header page-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php if(function_exists('the_subtitle')) {
	       		echo '<p>'.the_subtitle().'</p>'; 
	       		}
	       		?>
			</header><!-- .entry-header -->	
			<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'sparkling' ),
						'after'  => '</div>',
					) );
				?>
			<?php edit_post_link( __( 'Edit', 'sparkling' ), '<footer class="entry-footer"><i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span></footer>' ); ?>	
		</div>
		<div class="col-md-5 aga-box">
			<?php the_post_thumbnail( 'sparkling-featured', array( 'class' => 'aga-img img-responsive' )); ?>
            <?php
	     		 // Checks if this is homepage to enable homepage widgets
	      		if ( is_front_page() ) :
	        		get_sidebar( 'home' );
	      		endif;
	    	?>
		</div>	
	    
	</article><!-- #post-## -->
</div>

