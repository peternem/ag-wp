<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package sparkling
 */
?>
<?php get_header(); ?>
	<?php if ( have_posts() ) :?>
		<?php if( is_home() ) { ?>
			<section id="welcome" class="content-area container-fluid white">
				<?php get_template_part('intro-index'); ?>
			</section>
			<section id="collections" class="content-area container-fluid grey collections">
				<?php get_template_part('collections-index'); ?>
			</section>
			<section id="hardware" class="content-area container-fluid white hardware">
		            <?php get_template_part('hardware-index'); ?>
		    </section>
			<section id="news" class="content-area container-fluid grey">
				<?php get_template_part('new-product-index'); ?>
			</section>
		<?php } else { ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part('content', get_post_format()); ?>
			<?php endwhile; ?>
			<?php sparkling_paging_nav(); ?>
		<?php } ?>
	<?php else : ?>
	<?php get_template_part('content', 'none'); ?>
	<?php endif; ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>