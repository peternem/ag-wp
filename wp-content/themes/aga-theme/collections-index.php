   <!-- Example row of columns -->
    <h1>The Collections</h1>
    <div class="aga-row row"> 
			<?php 
			$category_id = get_cat_ID('collections');
            $sticky = get_option( 'sticky_posts' );
            $args= array(
                'post_type' => 'post',
               // 'category_name' => 'collections',
            	'category__in' => array ($category_id),
            	//'post__in' => $sticky,
                'posts_per_page'    => -1,
                'meta_key'          => 'collection_rank',
                'orderby'           => 'meta_value_num',
                'order'             => 'ASC'
            );
            // the query
            $the_query = new WP_Query( $args ); ?>
            
            <?php if ( $the_query->have_posts() ) : ?>

            <!-- the loop -->
            <?php $postx_counter = 0; ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
   			<?php $postx_counter++; ?>
   			<?php //if ($postx_counter % 4 ==0) { echo "<div class=\"clearfix visible-xs-block visible-sm-block visible-md-block visible-lg-block\"></div>";}?>
                <section class="col-xs-6 col-sm-6 col-md-4 col-lg-4 aga-box" data-post="<?php echo $postx_counter ?>">
                     
                    <h2><a class="" href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
                   
                 
                            <a class="" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('tab-square', array( 'class' => 'aga-img img-responsive' )); ?></a> 
                      
                        
                           <?php if(function_exists('the_subtitle')) { ?>
                            <p class="subtitle"><strong><?php echo the_subtitle();?></strong></p>
                            <?php } ?> 
                            <?php the_excerpt(); ?>
                            <footer>
                            	<a class="btn btn-primary btn-sm" href="<?php the_permalink(); ?>" role="button">Learn More <i class="fa fa-angle-double-right"></i></a>
                            	<?php edit_post_link( __( 'Edit Post', 'sparkling' ), '<div><i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span></div>' ); ?>
                            </footer>
                            
                  
                    
                </section>
            <?php endwhile; endif;?>
            <!-- end of the loop -->
            <?php wp_reset_postdata(); ?>
    </div>