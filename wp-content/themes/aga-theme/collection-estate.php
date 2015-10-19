<!-- collection-estate -->
<section id="post-<?php the_ID(); ?>" <?php post_class('container-fluid white'); ?>>
	<div class="post-inner-content aga-row row">
		<article class="col-sm-12 col-md-12 col-lg-6">
			<header class="entry-header page-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php if(function_exists('the_subtitle')) { ?>
				<p class="subtitle"><strong><?php echo the_subtitle();?></strong></p>
				<?php } ?> 
			</header><!-- .entry-header -->
			<div class="entry-content">
			<?php the_content(); ?> 
			</div>
			<footer class="entry-meta">
				<?php edit_post_link( __( 'Edit Post', 'sparkling' ), '<span class="edit-link">', '<i class="fa fa-pencil-square-o"></i></span>' ); ?>
			</footer><!-- .entry-meta -->
			<?php if( have_rows('options_jump_menu') ): ?>
			<div class="opt-jumpmenu">
			<?php
					if(get_field('options_menu_label')) {
						echo '<header><h4>' . get_field('options_menu_label') . '</h4></header>';
					}
					?>	
			<?php while( have_rows('options_jump_menu') ): the_row(); 
				// vars
				$button_link = get_sub_field('button_link');
				$button_name = get_sub_field('button_name');
				//$description = get_sub_field('description');
				?>

					<a href="<?php echo $button_link; ?>" class="btn btn-primary"><?php echo $button_name; ?></a>
			<?php endwhile; ?>
			</div>
			<?php endif; ?> 
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
		</article>
		<article class="hidden-xs hidden-sm hidden-md col-lg-6 aga-features">
			<?php the_post_thumbnail( 'tab-square', array( 'class' => 'single-featured img-responsive aga-img' )); ?>  		
		</article>
    </div>
</section>
<!-- collection-estate sub collections -->
<section class="container-fluid grey">
	<div class="options aga-row row">
	<?php 
	$idObj1 = get_category_by_slug('estate-transcend'); 
	$id1 = $idObj1->term_id;
	$idObj2 = get_category_by_slug('estate-sd-and-se-doors');
	$id2 = $idObj2->term_id;
	$sticky = get_option( 'sticky_posts' );
	$cat_namex = "estate-collection";
	$args = array(
                'post_type' => 'post',
                'category_name' => $cat_namex,
            	'category__in' => array ($id1,$id2),
            	'post_count'	=> -1, 
               	'post__in' => $sticky,
             	'meta_key'          => 'collection_rank',
             	'orderby'           => 'meta_value_num',
            	'order'             => 'ASC'
	);
	// the query
	$the_query = new WP_Query( $args ); ?>
	<?php if ( $the_query->have_posts() ) : ?>
	<!-- the loop -->
    <?php $postx_counter = -1; ?>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	<?php $postx_counter++;  ?>
		<article class="col-xs-6 col-sm-6 col-md-4 col-lg-4 aga-box" data-post="<?php echo $postx_counter ?>" id="<?php echo $post->post_name;?>">
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
</section>