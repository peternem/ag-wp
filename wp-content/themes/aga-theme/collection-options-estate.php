   <!-- Example row of columns -->

    <div id="options" class="aga-row row row-eg-height"> 
        
            
            <?php 
            // $cat_name = "";
            if (is_single('estate-collection')) {
                $cat_name = "estate-collection";
            }
           
            if (is_single('accent-collection')) {
                $cat_name = "accent-collection";              
            }
            $sticky = get_option( 'sticky_posts' );
            
            $args = array(
                'post_type' => 'post',
                'category_name' => $cat_name,
                'ignore_sticky_posts' => 1, 
                'post__not_in' => $sticky,
            );
            
            // the query
            $the_query = new WP_Query( $args ); ?>
            
            <?php if ( $the_query->have_posts() ) : ?>
            
            <!-- pagination here -->
            
            <!-- the loop -->
            <?php $postx_counter = -1; ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <?php $postx_counter++;  ?>
                <article class="col-sm-6 col-md-6 col-lg-4 aga-box col-eq-height" data-post="<?php echo $postx_counter ?>">
                    
                    <h2><a class="" href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
                    <div class="row">
                        <div class="col-md-12">
                            <a class="" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('tab-rectangle', array( 'class' => 'aga-img img-responsive' )); ?></a> 
                        </div>
                        <div class="col-md-12">
                           <?php if(function_exists('the_subtitle')) { ?>
                            <p class="subtitle"><strong><?php echo the_subtitle();?></strong></p>
                            <?php } ?> 
                            <?php the_excerpt(); ?>
                            <p><a class="btn btn-primary btn-sm" href="<?php the_permalink(); ?>" role="button">Learn More <i class="fa fa-angle-double-right"></i></a></p>
                            <?php edit_post_link( __( 'Edit Post', 'sparkling' ), '<p><span class="edit-link"><i class="fa fa-pencil-square-o"></i>', '</span></p>' ); ?>
                            <!-- <p>Rank: <?php the_field('start_date'); ?></p> -->
                        </div>
                    </div>
                </article>
            <?php endwhile; endif;?>
            <!-- end of the loop -->
            
            <!-- pagination here -->
            
            <?php wp_reset_postdata(); ?>
    </div>