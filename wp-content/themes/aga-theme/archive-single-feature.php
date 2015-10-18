<?php
/**
 * @package sparkling
 */
?>
    <header class="entry-header page-header">
       <h1 class="entry-title"><?php $singleCat = single_cat_title(); ?></h1>
       <?php if(function_exists('the_subtitle')) { ?>
			        <p class="subtitle"><strong><?php echo the_subtitle();?></strong></p>
			        <?php } ?> 
    </header><!-- .entry-header -->
    <div class="entry-content">
    <?php the_content(); ?>
    <?php edit_post_link( __( 'Edit', 'sparkling' ), '<i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span>' ); ?>
    <?php
        wp_link_pages( array(
            'before'            => '<div class="page-links">'.__( 'Pages:', 'sparkling' ),
            'after'             => '</div>',
            'link_before'       => '<span>',
            'link_after'        => '</span>',
            'pagelink'          => '%',
            'echo'              => 1
        ) );
    ?>
    </div>
