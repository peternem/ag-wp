<?php
/**
 * @package sparkling
 */
?>
                 
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
        <p><a class="btn btn-primary btn-sm" href="<?php the_permalink(); ?>" role="button">Learn More &raquo;</a></p>
    </div>
</div>

