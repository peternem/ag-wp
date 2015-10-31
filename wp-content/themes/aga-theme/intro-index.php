<!-- intro-index -->
<div class="aga-row row"> 
    <article class="col-sm-8 col-md-8 col-lg-8 aga-box">
        <?php $my_query = new WP_Query('name=welcome-to-agalite');
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
                <?php the_content(); ?>
            </div>
            <?php edit_post_link( __( 'Edit Post', 'sparkling' ), '<p><span class="edit-link">', ' <i class="fa fa-pencil-square-o"></i></span></p>' ); ?>
           
        </div>
            <?php   } ?>
    </article>        
    <article class="col-sm-4 col-md-4 col-lg-4 aga-box">
                <?php $my_query = new WP_Query('name=product-image-gallery');
                    while($my_query->have_posts()){
                        $my_query->the_post();
                ?>
                <h2><a href="/product-gallery/" role="button"><?php the_title() ?></a></h2>
                <div class="row">
                    <div class="col-md-12">
                        <a href="/product-gallery/" role="button"><?php the_post_thumbnail('tab-rectangle', array( 'class' => 'aga-img img-responsive' )); ?></a> 
                    </div>
                    <div class="col-md-12">
                        <?php the_excerpt(); ?>
                        <p><a class="btn btn-primary btn-sm" href="/product-gallery/" role="button">Learn More <i class="fa fa-angle-double-right"></i></a></p>
                    </div>
                </div>
                    <?php   } ?>
                    <?php wp_reset_postdata(); ?> 
    </article>          
</div>
<!-- end intro-index -->