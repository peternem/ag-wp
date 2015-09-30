<!-- Example row of columns -->
    <!-- <h2>The Collections</h2> -->
    <div class="aga-row row max-width"> 
            <section class="col-md-4 aga-box">
                <?php 
                $argsc = array(
                		'post_type' 		=> 'post',
                		'posts_per_page' 	=>1,
                		'tag'				=> 'new-products',
                		'order'             => 'DESC',
                		'post_status' 		=> 'publish',
                );
                
                $my_query = new WP_Query($argsc);
                    while($my_query->have_posts()){
                        $my_query->the_post();
                ?>
                <h2>New Products</h2>
                <div class="row">
                    <div class="col-md-12">
                        <?php the_post_thumbnail('tab-rectangle', array( 'class' => 'aga-img img-responsive' )); ?> 
                    </div>
                    <div class="col-md-12">
                       <?php if(function_exists('the_subtitle')) { ?>
                       <h4><?php the_title() ?></h4>
                        <p><strong><?php echo the_subtitle();?></strong></p>
                        <?php } ?> 
                        <?php the_excerpt(); ?>
                        <p><a class="btn btn-primary btn-sm" href="<?php the_permalink(); ?>" role="button">Learn More <i class="fa fa-angle-double-right"></i></a></p>
                    </div>
                </div>
                    <?php   } ?>
                    <?php wp_reset_postdata(); ?>
            </section>
            <section class="col-sm-4 col-md-4 aga-box">
                <h2>News</h2>
                <ul>
               
               <?php 	
		            $args = array( 
						'post_type' 		=> 'news',
						'posts_per_page' 	=>10,
						'taxonomy'  	=> 'news_category',
						'order'             => 'ASC',
						'post_status' 		=> 'publish',
	            	);
		          
		            
		            $my_query = new WP_Query($args);
		            
		            while($my_query->have_posts()) : $my_query->the_post(); ?>
						<li>
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		        				<?php //the_date('F Y', '<span class="post-date">', '</span><br/>'); ?>
		        				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		        				
							<?php  
							$ebtn_text =  __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' );
							edit_post_link($ebtn_text,'<div>','</div>' );
							?>
	       					</article>
	       				</li>
					<?php endwhile; ?>
					 
                </ul>		
					<?php  wp_reset_postdata(); ?>
					 <p><a class="btn btn-primary btn-sm" href="/ag-news/" role="button">More News <i class="fa fa-angle-double-right"></i></a></p>
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
                    <?php wp_reset_postdata(); ?>
            </section>  
    </div>