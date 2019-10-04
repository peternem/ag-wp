<!-- Example row of columns -->
<h1 class="text-center">The Collections</h1>
<div class="aga-row row">
    <?php
    $post_objects  = get_field('collection_posts', 'options');
    if($post_objects): ?>

    <div class="home-collections">
        <?php foreach($post_objects as $post): // variable must be called $post (IMPORTANT) ?>
            <?php setup_postdata($post); ?>
            <div class="home-collections__card">
                <div class="card">
                    <div class="card__title">
                        <h2><a class="" href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
                    </div>
                    <div class="card__img">
                        <?php the_post_thumbnail('tab-rectangle', array( 'class' => 'aga-img img-responsive' )); ?>
                    </div>
                    <div class="card__content">
                        <?php if(function_exists('the_subtitle')) { ?>
                            <p class="subtitle"><strong><?php echo the_subtitle();?></strong></p>
                        <?php } else { ?>
                            <?php the_excerpt(); ?>
                        <?php } ?>

                    </div>
                    <div class="card__footer">
                        <a class="btn btn-primary btn-sm" href="<?php the_permalink(); ?>" role="button">Learn More <i class="fa fa-angle-double-right"></i></a>
                        <?php edit_post_link( __( 'Edit Post', 'sparkling' ), '<div class="edit-link">', '<i class="fa fa-pencil-square-o"></i></div>' ); ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
</div>
<?php endif;?>
