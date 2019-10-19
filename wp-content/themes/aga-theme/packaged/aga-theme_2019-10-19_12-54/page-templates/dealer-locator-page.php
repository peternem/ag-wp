<?php
/**
 * Template Name: Dealer Locator Page
 *
 * This is the template that displays full width page without sidebar
 *
 * @package sparkling
 */

get_header(); ?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<section id="primary" class="container-fluid news-list">
	<div class="post-inner-content aga-row row">
		<article class="col-lg-12"> 
			<header class="entry-header page-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
	       		<?php if(function_exists('the_subtitle')) {	?>
	       			<p class="subtitle"><strong><?php echo the_subtitle();?></strong></p>
	       		<?php  } ?> 
	       	</header>
       </article>
	</div>
</section>
<?php while ( have_posts() ) : the_post(); ?>
<section id="newsList" class="container-fluid news-list-last">
	<div class="post-inner-content aga-row row">
		<div class="entry-content col-lg-12">
             <?php the_content(); ?> 
		 </div>
	</div>
</section>
<?php endwhile; // end of the loop. ?>
<section id="newsList" class="container-fluid news-list-last">
	<div class="post-inner-content aga-row row">
		<article class="col-lg-12">
		<iframe id="EasyLocator" width="780" height="450" scrolling="no" frameborder="0" src="http://www.easylocator.net/search/map2/AgaliteRev01/product/A" allowtransparency="true"></iframe>
		</article>
	</div>
</section>



  

<?php get_footer(); ?>

