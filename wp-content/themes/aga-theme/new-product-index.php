<!-- new-product -->
<h1 class="text-center">News and Promotions</h1>
<div class="aga-row row max-width"> 
	<article class="col-md-4 aga-box">
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
                    	<h4><?php the_title() ?></h4>
                        <?php the_excerpt(); ?>
                        <p><a class="btn btn-primary btn-sm" href="<?php the_permalink(); ?>" role="button">Learn More <i class="fa fa-angle-double-right"></i></a></p>
                    </div>
                </div>
                    <?php   } ?>
                    <?php wp_reset_postdata(); ?>
            </article>
            <article class="col-sm-4 col-md-4 aga-box">
                <h2>News</h2>
                <ul class="news-list">
               
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
            </article>
            <article class="col-md-4 aga-box">
                     <?php 
			$argsy = array(
				'post_type' 		=> 'post',
				'posts_per_page' 	=>1,
				'tag'				=> 'promotion',
				'order'             => 'DESC',
				'post_status' 		=> 'publish',
                );
            $my_query = new WP_Query($argsy);
            while($my_query->have_posts()){
                $my_query->the_post();
        ?>
        <h2>Latest Promotions</h2>
        <div class="row">
            <div class="col-md-12">
                <?php the_post_thumbnail('tab-rectangle', array( 'class' => 'aga-img img-responsive' )); ?> 
            </div>
            <div class="col-md-12">
            	<h4><?php the_title() ?></h4>
                <?php the_excerpt(); ?>
                <p><a class="btn btn-primary btn-sm" href="<?php the_permalink(); ?>" role="button">Learn More <i class="fa fa-angle-double-right"></i></a></p>
            </div>
        </div>
            <?php   } ?>
            <?php wp_reset_postdata(); ?>
            </article>  
    </div>
<!-- end new-product -->