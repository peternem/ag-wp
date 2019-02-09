<?php
/**
* Template Name: Install Documents Page
*
* This is the template that displays full width page without sidebar
*
* @package sparkling
*/

get_header(); ?>
<!-- Main jumbotron for a primary marketing message or call to action -->
<section id="primary" class="container-fluid news-list">
	<div class="post-inner-content aga-row row">
		<article class="col-lg-7">
			<header class="entry-header page-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php if(function_exists('the_subtitle')) {	?>
					<p class="subtitle"><strong><?php echo the_subtitle();?></strong></p>
				<?php  } ?>
			</header>

			<div class="entry-content">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile;  ?>
				<?php endif; ?>
			</div>
		</article>
		<div class="col-md-5 aga-box">
			<?php
			if(get_field('right_column_image')) {
				?>
				<img src="<?php echo get_field('right_column_image'); ?>" alt="" class="aga-img img-responsive" />
				<?php
			}
			?>
		</div>
	</div>
</section>
<section class="container-fluid install">
	<?php get_template_part('template-parts/install-instr-estate'); ?>
	<?php get_template_part('template-parts/install-instr-transcend'); ?>
	<?php get_template_part('template-parts/install-instr-elite'); ?>
	<?php get_template_part('template-parts/install-instr-sill'); ?>
	<?php get_template_part('template-parts/install-instr-accent'); ?>
	<?php get_template_part('template-parts/install-instr-fresco'); ?>
	<?php get_template_part('template-parts/install-instr-vision'); ?>


</section>
<section id="newsList" class="container-fluid news-list-last">
	<div class="post-inner-content aga-row row">

	</div>
</section>





<?php get_footer(); ?>
