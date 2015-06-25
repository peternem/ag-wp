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

get_header();
?>
<?php if( is_home() ) {
?>
<?php get_template_part('carousel-index'); ?>
<?php } ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) :
		?>
		<?php if( is_home() ) {
		?>
		<!-- About Section -->
		<div id="welcome" class="content-area container-fluid white">
			<?php get_template_part('intro-index'); ?>
		</div>
		<div id="collections" class="content-area container-fluid grey">
			<?php get_template_part('collections-index'); ?>
		</div>
		<div id="hardware" class="content-area container-fluid white">
            <?php get_template_part('hardware-index'); ?>
        </div>
		<div id="news" class="content-area container-fluid grey">
			<?php get_template_part('new-product-index'); ?>
		</div>
		<?php } else { ?>
		<?php while ( have_posts() ) : the_post();
		?>

		<?php get_template_part('content', get_post_format()); ?>

		<?php endwhile; ?>

		<?php sparkling_paging_nav(); ?>

		<?php } ?>

		<?php else : ?>
		<?php get_template_part('content', 'none'); ?>
		<?php endif; ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>