<?php
/**
 * The Sidebar widget area for static frontpage.
 *
 * @package sparkling
 */
?>
    <section class="home-widget aga-box">
        <?php $my_query = new WP_Query(array('tag'=>'promotion'));
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
	<?php
	// If footer sidebars do not have widget let's bail.

	if ( ! is_active_sidebar( 'home-widget-1' ) && ! is_active_sidebar( 'home-widget-2' ) && ! is_active_sidebar( 'home-widget-3' ) )
		return;
	// If we made it this far we must have widgets.
	?>

		<?php if ( is_active_sidebar( 'home-widget-1' ) ) : ?>
		<section class=" home-widget aga-box" role="complementary">
			<?php dynamic_sidebar( 'home-widget-1' ); ?>
		</section><!-- .widget-area .first -->
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'home-widget-2' ) ) : ?>
		<section class=" home-widget aga-box" role="complementary">
			<?php dynamic_sidebar( 'home-widget-2' ); ?>
		</section><!-- .widget-area .second -->
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'home-widget-3' ) ) : ?>
		<section class="home-widget aga-box" role="complementary">
			<?php dynamic_sidebar( 'home-widget-3' ); ?>
		</section><!-- .widget-area .third -->
		<?php endif; ?>

