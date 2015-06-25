<?php
/**
 * Template Name: Product Overview Page
 *
 * This is the template that displays full width page without sidebar
 *
 * @package sparkling
 */

get_header(); ?>
<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron">
	 <?php the_post_thumbnail( 'sparkling-full-width', array( 'class' => 'single-featured img-responsive' )); ?>
	
      <div class="jumbo-caption">
           
        <h1 class="entry-title"><?php the_title(); ?></h1>
       <?php if(function_exists('the_subtitle')) {
       	?>
       	<p><?php echo the_subtitle();?></p>
       	<?php 
       }
       ?> 
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more <i class="fa fa-angle-double-right"></i></a></p>
      </div>
    </div>
  	<div id="primary" class="content-area container-fluid">

    	<main id="main" class="site-main" role="main">

	      <?php while ( have_posts() ) : the_post(); ?>
	
	        <?php get_template_part( 'content', 'home-page' ); ?>
	        
	      <?php endwhile; // end of the loop. ?>

    	</main><!-- #main -->

	</div><!-- #primary -->
	<div class="content-area container-fluid">
        <!-- Example row of columns -->
        <div class="row">
            <section class="col-md-4 aga-box">
                <h2>New Product</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-default" href="#" role="button">View details <i class="fa fa-angle-double-right"></i></a></p>
            </section>
            <section class="col-md-4 aga-box">
                <h2>News</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-default" href="#" role="button">View details <i class="fa fa-angle-double-right"></i></a></p>
            </section>
            <section class="col-md-4 aga-box">
                <h2>Product Gallery</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-default" href="#" role="button">View details <i class="fa fa-angle-double-right"></i></a></p>
            </section>
        </div>
    </div>
  

<?php get_footer(); ?>
