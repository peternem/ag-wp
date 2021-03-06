<!-- hardware-options -->
<div id="options" class="aga-row row"> 
<?php 
$cat_name = "";
if (is_single('agalite-hardware')) {
	$cat_name = "hardware";
}
            
$sticky = get_option( 'sticky_posts' );
         
$args = array(
	'post_type' => 'post',
	'post_count' => -1,
	'category_name' => $cat_name,
	'meta_key'          => 'option_rank',
	'orderby'           => 'meta_value_num',
	'order'             => 'ASC'
);

$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>
<!-- the loop -->
<?php $postx_counter = -1; ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	<?php $postx_counter++;  ?>
	<article class="col-xs-6 col-sm-6 col-md-4 col-lg-3 aga-box " data-post="<?php echo $postx_counter ?>">             
		<h3><a class="" href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
		<div class="row">
			<div class="col-md-12">
				<a class="" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('tab-square', array( 'class' => 'aga-img img-responsive' )); ?></a> 
			</div>
			<div class="col-md-12">		
				<div class="collection-wp">	
					<?php if(function_exists('the_subtitle')) { ?>
					<p class="subtitle"><strong><?php echo the_subtitle();?></strong></p>
					<?php } ?>
					<footer>
						<a class="btn btn-primary btn-sm" href="<?php the_permalink(); ?>" role="button">Learn More <i class="fa fa-angle-double-right"></i></a>
						<?php edit_post_link( __( 'Edit Post', 'sparkling' ), '<div class="edit-link">', '<i class="fa fa-pencil-square-o"></i></div>' ); ?>
					</footer>
				</div>
			</div>
		</div>
	</article>
<?php endwhile; endif;?>
<!-- end of the loop -->
<?php wp_reset_postdata(); ?>         
</div>
<!-- end hardware-options -->