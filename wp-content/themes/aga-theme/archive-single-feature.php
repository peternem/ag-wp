<?php
/**
 * @package sparkling
 */
?>
 <section class="col-md-8 aga-box">
    <header class="entry-header page-header">
        <h1 class="entry-title "><?php the_title(); ?></h1>
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
            <?php edit_post_link( __( 'Edit', 'sparkling' ), '<i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span>' ); ?>

        </div><!-- .entry-meta -->
    </header><!-- .entry-header -->
    <div class="entry-content">
    <?php the_content(); ?>
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
<!-- .entry-content -->
</section>
<section class="col-md-4 aga-features">

<?php
if(get_field('collection_features')){
    echo get_field('collection_features');
}
?>          
</section>