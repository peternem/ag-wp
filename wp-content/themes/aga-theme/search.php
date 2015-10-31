<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package sparkling
 */

get_header(); ?>

	<section id="primary" class="content-area content-area container-fluid white">
	
		<?php if ( have_posts() ) : ?>
 			<div class="post-inner-content aga-row row">
				<div class="entry-content col-md-12">
					<header class="page-header">
						<h1 class="page-title">
						<?php printf( __( 'Search Results for: %s', 'sparkling' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					</header><!-- .page-header -->
				</div>
			</div>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="post-inner-content aga-row row">
				<?php get_template_part( 'content', 'search' ); ?>
			</div>
			<?php endwhile; ?>

			<?php //sparkling_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
	</section><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
