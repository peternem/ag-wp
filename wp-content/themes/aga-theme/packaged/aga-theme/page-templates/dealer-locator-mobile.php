<?php
/**
 * Template Name: Dealer Locator Mobile Page
 *
 * This is the template that displays full width page without sidebar
 *
 * @package sparkling
 */

get_header(); ?>
<!-- Main jumbotron for a primary marketing message or call to action -->
<section id="primary" class="container-fluid news-list">
	<div class="post-inner-content aga-row row">
		<article class="col-lg-6"> 
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
		<div class="col-md-6 easy-locator">
			<!-- Begin Easy Locator Store Locator Service //-->
			<script type="text/javascript" src="//www.easylocator.net/api/embedIframe/AgaliteRev01/controller/search/function/mobile/template/template3_m1"></script><div id="EasyLocatorWrapper"></div>
			<!-- End Easy Locator Store Locator Service //-->
		</div>
	</div>
</section>
<?php get_footer(); ?>

