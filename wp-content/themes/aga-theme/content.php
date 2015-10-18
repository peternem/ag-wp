<?php
/**
 * @package sparkling
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog-item-wrap col-md-8">
				
		<div class="post-inner-content">
			<header class="entry-header page-header">

				<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				<?php if ( 'post' == get_post_type() ) : ?>
				<div class="entry-meta">
					<?php //sparkling_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->

			<?php if ( is_search() ) : // Only display Excerpts for Search ?>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
				<?php edit_post_link( __( 'Edit', 'sparkling' ), '<p><i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span></p>' ); ?>
				<p><a class="btn btn-primary btn-sm read-more" href="<?php the_permalink(); ?>"><?php _e( 'Read More', 'sparkling' ); ?> <i class="fa fa-angle-double-right"></i></a></p>
			</div><!-- .entry-summary -->
			<?php else : ?>
				<?php the_content(); ?>
				<p><a class="btn btn-primary btn-sm read-more" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php _e( 'Read More', 'sparkling' ); ?> <i class="fa fa-angle-double-right"></i></a></p>

				<?php
					wp_link_pages( array(
						'before'            => '<div class="page-links">'.__( 'Pages:', 'sparkling' ),
						'after'             => '</div>',
						'link_before'       => '<span>',
						'link_after'        => '</span>',
						'pagelink'          => '%',
						'echo'              => 1
		       		) );
		    	?>
			<?php endif; ?>
		</div>
		
	</div>
	<div class="col-md-4">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
			 	<?php the_post_thumbnail( 'tab-rectangle', array( 'class' => 'img-responsive single-featured aga-img' )); ?>
			</a>
		</div>
</article><!-- #post-## -->
