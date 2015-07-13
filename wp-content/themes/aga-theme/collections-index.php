   <!-- Example row of columns -->
    <h2>The Collections</h2>
    <div class="aga-row row"> 

            <?php 
            $sticky = get_option( 'sticky_posts' );
            $args= array(
                'post_type' => 'post',
                'category_name' => 'collections',
                'post_type'         => 'post',
                'posts_per_page'    => -1,
                'meta_key'          => 'collection_rank',
                'orderby'           => 'meta_value_num',
                'order'             => 'ASC'
            );
            // the query
            $the_query = new WP_Query( $args ); ?>
            
            <?php if ( $the_query->have_posts() ) : ?>
            
            <!-- pagination here -->
            
            <!-- the loop -->
            <?php $postx_counter = 0; ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
   
                <section class="col-sm-6 col-md-4 col-lg-4 aga-box" data-post="<?php echo $postx_counter ?>">
                     
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
                            <?php edit_post_link( __( 'Edit Post', 'sparkling' ), '<p><i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span></p>' ); ?>
                        </div>
                    </div>
                </section>
            <?php endwhile; endif;?>
            <!-- end of the loop -->
            
            <!-- pagination here -->
            
            <?php wp_reset_postdata(); ?>
    </div>