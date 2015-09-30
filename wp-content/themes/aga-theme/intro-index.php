<!-- Example row of columns -->
<!-- <h2>The Collections</h2> -->
<div class="aga-row row"> 
    <section class="col-xs-8 col-sm-8 col-md-8 aga-box">
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
            <footer class="col-md-12 aga-box entry-meta">
                <?php edit_post_link( __( 'Edit Post', 'sparkling' ), '<i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span>' ); ?>
            </footer><!-- .entry-meta -->
        </div>
            <?php   } ?>
    </section>        
    <section class="col-xs-4 col-sm-4 col-md-4 aga-box">
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
        <h2>Promotions</h2>
        <div class="row">
            <div class="col-md-12">
                <?php the_post_thumbnail('tab-rectangle', array( 'class' => 'aga-img img-responsive' )); ?> 
            </div>
            <div class="col-md-12">
            	<h4><?php the_title() ?></h4>
               <?php if(function_exists('the_subtitle')) { ?>
                <p><strong><?php echo the_subtitle();?></strong></p>
                <?php } ?> 
                <?php the_excerpt(); ?>
                <p><a class="btn btn-primary btn-sm" href="<?php the_permalink(); ?>" role="button">Learn More <i class="fa fa-angle-double-right"></i></a></p>
            </div>
        </div>
            <?php   } ?>
    </section>          
</div>