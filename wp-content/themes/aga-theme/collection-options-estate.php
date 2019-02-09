<!-- collection-options -->
<?php

// get the top level cat id of a single post
$category = get_the_category($post->ID);
$catid = $category[0]->cat_ID;
$top_level_cat = smart_category_top_parent_id ($catid);

// get the child level cat id of a single post
foreach((get_the_category()) as $childcat) {
	if (cat_is_ancestor_of($top_level_cat, $childcat)) {
		$my_child_cat_id = $childcat->cat_ID;
 		$my_cat_name = $childcat->cat_name;
	}
}

echo '<h2 class="text-center section-hdr">'.$my_cat_name.' Options</h2>';

?>
<div id="options" class="aga-row row">
<?php
$sticky = get_option( 'sticky_posts' );

$categories = wp_get_post_categories( get_the_ID(), array('fields' => 'ids') );


$args = array(
	'post_type' => 'post',
	'post_count' => -1,
	'cat' => $my_child_cat_id,
	//'post__not_in' => $sticky,
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
		<article class="col-xs-6 col-sm-6 col-md-4 col-lg-3 aga-box " data-post="<?php echo $postx_counter ?>" id="<?php echo $post->post_name;?>">
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
<!-- end - collection-options -->
