<?php
/**
 * Template Name: Home Page
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
       	<p class="subtitle"><?php echo the_subtitle();?></p>
       	<?php 
       }
       ?> 
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more <i class="fa fa-angle-double-right"></i></a></p>
      </div>
    </div>
    <div class="content-area container-fluid">
       
        <!-- Example row of columns -->
        <h2>The Collections</h2>
        <div class="aga-row row"> 
                
                <?php 
                $args = array(
                    'post_type' => 'post',
                    'category_name' => 'collections'
                );
                // the query
                $the_query = new WP_Query( $args ); ?>
                
                <?php if ( $the_query->have_posts() ) : ?>
                
                <!-- pagination here -->
                
                <!-- the loop -->
                <?php $postx_counter = 0; ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <?php $postx_counter++;  ?>
                    <?php if ($postx_counter == 4) {
                        ?>
                    </div><div class="aga-row row"> 
                        <?php
                    } ?>
                    <section class="col-md-4 aga-box" data-post="<?php echo $postx_counter ?>">
                        <h2><?php the_title() ?></h2>
                        <div class="row">
                            <div class="col-md-12">
                                <?php the_post_thumbnail('tab-rectangle', array( 'class' => 'aga-img img-responsive' )); ?> 
                            </div>
                            <div class="col-md-12">
                               <?php if(function_exists('the_subtitle')) { ?>
                                <p class="subtitle"><strong><?php echo the_subtitle();?></strong></p>
                                <?php } ?> 
                                <?php the_excerpt(); ?>
                                <p><a class="btn btn-primary btn-sm" href="<?php the_permalink(); ?>" role="button">Learn More <i class="fa fa-angle-double-right"></i></a></p>
                            </div>
                        </div>
                    </section>
                <?php endwhile; ?>
                <!-- end of the loop -->
                
                <!-- pagination here -->
                
                <?php wp_reset_postdata(); ?>
                
                <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
                
                
                
                

        </div>
    </div>
  	<div id="primary" class="content-area container-fluid">

    	<main id="main" class="site-main" role="main">

	      <?php while ( have_posts() ) : the_post(); ?>
	
	        <?php get_template_part( 'content', 'home-page' ); ?>
	        
	      <?php endwhile; // end of the loop. ?>

    	</main><!-- #main -->

	</div><!-- #primary -->
	<div class="content-area container-fluid grey">
		<!-- Example row of columns -->
		<div class="row">
            <section class="col-md-4 aga-box">
                <?php $my_query = new WP_Query('name=new-products');
                    while($my_query->have_posts()){
                        $my_query->the_post();
                ?>
                <h2><?php the_title() ?></h2>
                <div class="row">
                    <div class="col-md-12">
                        <?php the_post_thumbnail('tab-rectangle', array( 'class' => 'aga-img img-responsive' )); ?> 
                    </div>
                    <div class="col-md-12">
                       <?php if(function_exists('the_subtitle')) { ?>
                        <p class="subtitle"><strong><?php echo the_subtitle();?></strong></p>
                        <?php } ?> 
                        <?php the_excerpt(); ?>
                        <p><a class="btn btn-primary btn-sm" href="<?php the_permalink(); ?>" role="button">Learn More <i class="fa fa-angle-double-right"></i></a></p>
                    </div>
                </div>
                    <?php   } ?>
            </section>
			<section class="col-md-4 aga-box">
				<h2>News</h2>
				<ul>
				    <li><a href="#">Donec id elit non mi porta gravida at eget metus.</a>
				        
				    </li>
				    <li><a href="#">Fusce dapibus, tellus ac cursus commodo odio dui.</a>
				        <a class="btn btn-link pull-right" href="#" role="button">Learn More <i class="fa fa-angle-double-right"></i></a>
				    </li>
                    <li><a href="#">Donec id elit non mi porta gravida at eget metus.</a>
                        <a class="btn btn-link pull-right" href="#" role="button">Learn More <i class="fa fa-angle-double-right"></i></a>
                    </li>
                    <li><a href="#">Fusce dapibus, tellus ac cursus commodo odio dui.</a>
                        <a class="btn btn-link pull-right" href="#" role="button">Learn More <i class="fa fa-angle-double-right"></i></a>
                    </li>
                    <li><a href="#">Donec id elit non mi porta gravida at eget metus.</a>
                        <a class="btn btn-link pull-right" href="#" role="button">Learn More <i class="fa fa-angle-double-right"></i></a>
                    </li>
                    <li><a href="#">Fusce dapibus, tellus ac cursus commodo odio dui.</a>
                        <a class="btn btn-link pull-right" href="#" role="button">Learn More <i class="fa fa-angle-double-right"></i></a></li>
                    </ul>
			</section>
			<section class="col-md-4 aga-box">
			    <?php $my_query = new WP_Query('name=product-gallery');
                    while($my_query->have_posts()){
                        $my_query->the_post();
                ?>
				<h2><?php the_title() ?></h2>
				<div class="row">
				    <div class="col-md-12">
				        <?php the_post_thumbnail('tab-rectangle', array( 'class' => 'aga-img img-responsive' )); ?> 
				    </div>
				    <div class="col-md-12">
    				    <?php if(function_exists('the_subtitle')) { ?>
                        <p class="subtitle"><strong><?php echo the_subtitle();?></strong></p>
                        <?php } ?> 
                        <?php the_excerpt(); ?>
                        <p><a class="btn btn-primary btn-sm" href="<?php the_permalink(); ?>" role="button">Learn More <i class="fa fa-angle-double-right"></i></a></p>
    				</div>
    			</div>
                    <?php   } ?>
			</section>
		</div>
  	</div>
  

<?php get_footer(); ?>
