<!-- Example row of columns -->
    <!-- <h2>The Collections</h2> -->
    <div class="aga-row row max-width"> 
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
            <section class="col-sm-4 col-md-4 aga-box">
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