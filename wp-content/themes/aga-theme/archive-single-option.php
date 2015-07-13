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
        <p><a class="btn btn-primary btn-sm" href="<?php the_permalink(); ?>" role="button">Learn More <i class="fa fa-angle-double-right"></i></a></p>
        <?php edit_post_link( __( 'Edit Post', 'sparkling' ), '<p><span class="edit-link"><i class="fa fa-pencil-square-o"></i>', '</span></p>' ); ?>
         
         <?php
//          if ( is_admin_bar_showing()) {
//             echo "<p>Rank: ".the_field('collection_rank')."</p>";
//             $cat_slug = get_category(get_query_var('cat'))->slug;  
//             echo "<p>Slug: ".$cat_slug."</p>";            
//          } 
         ?>
    </div>
</div>

