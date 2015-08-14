<?php
/**
 * @package sparkling
 */
?>
    <header class="entry-header page-header">
       <h1 class="entry-title"><?php $singleCat = single_cat_title(); ?></h1>
        <div class="entry-meta">
            <?php //sparkling_posted_on(); ?>
            <?php
                /* translators: used between list items, there is a space after the comma */
                $categories_list = get_the_category_list( __( ', ', 'sparkling' ) );
                if ( $categories_list && sparkling_categorized_blog() ) :
            ?>
            <span class="cat-links"><i class="fa fa-folder-open-o"></i>
                <?php  printf( __( ' %1$s', 'sparkling' ), $categories_list ); ?>
            </span>
            <?php endif; // End if categories ?>
        </div><!-- .entry-meta -->
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
