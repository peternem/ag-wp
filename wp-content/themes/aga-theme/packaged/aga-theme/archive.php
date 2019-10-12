<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package sparkling
 */

get_header(); ?>

		<?php if ( have_posts() ) : ?>
            <?php $posty_counter = -1; ?>
					<?php
						if ( is_category() ) :
                           ?>
<section class="content-area container-fluid white collections">
	<div class="post-inner-content aga-row row">
		<div class="col-sm-8 col-md-8 col-lg-6">
						 <?php
                    /*******     Collections Feature Post  - Tagged: Fetured Post     ************/
                    $this_category = get_category($cat); //echo $this_category->cat_ID;
                    query_posts("cat=$this_category->cat_ID&tag=featured-post&showposts=1"); ?>
                    <?php  while (have_posts()) : the_post(); ?>

                        <?php get_template_part('archive-single-feature'); ?>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-6 aga-features">
			<?php if (function_exists('z_taxonomy_image')){
			$attr = array('class' => 'single-featured img-responsive aga-img');
			z_taxonomy_image(NULL, 'tab-square', $attr);
			} ?>

		</div>
	</div>
						<?php
						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							printf( __( 'Author: %s', 'sparkling' ), '<span class="vcard">' . get_the_author() . '</span>' );

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'sparkling' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'sparkling' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'sparkling' ) ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'sparkling' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'sparkling' ) ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'sparkling' );

						elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
							_e( 'Galleries', 'sparkling');

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'sparkling');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'sparkling' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'sparkling' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'sparkling' );

						elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
							_e( 'Statuses', 'sparkling' );

						elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
							_e( 'Audios', 'sparkling' );

						elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
							_e( 'Chats', 'sparkling' );

						else :
							_e( 'Archives', 'sparkling' );
						endif;
					?>
					            </section>
			<section class="container-fluid grey">
			<h2 class="text-center section-hdr"><?php $singleCat = single_cat_title(); ?> Options</h2>
            <div class="aga-row row">
                    <?php
                    $cat_slug = get_category(get_query_var('cat'))->slug;
                    $sticky = get_option( 'sticky_posts' );
                    if ($cat_slug == "collections") {
                    	$category_id = get_cat_ID('collections');
                    	$argsx= array(
                    			'post_type' => 'post',
                    			'category__in' => array ($category_id),
                    			'posts_per_page'    => -1,
                    			'meta_key'          => 'collection_rank',
                    			'orderby'           => 'meta_value_num',
                    			'order'             => 'ASC'
                    	);
                    } elseif ( $cat_slug == "silhouette-collection") {
						$idObj1 = get_category_by_slug('silhouette-slider-collection');
						$id1 = $idObj1->term_id;
						$idObj2 = get_category_by_slug('silhouette-swing-door-collection');
						$id2 = $idObj2->term_id;

			            $sticky = get_option( 'sticky_posts' );
			            $cat_namex = "silhouette-collection";
			            $argsx = array(
			                'post_type' => 'post',
			                'category_name' => $cat_namex,
			            	'category__in' => array ($id1,$id2),
			            	'post_count'	=> -1,
			               	'post__in' => $sticky,
			             	'meta_key'          => 'collection_rank',
			             	'orderby'           => 'meta_value_num',
			            	'order'             => 'ASC'
			            );
                    } elseif ( $cat_slug == "silhouette-collection") {
						$idObj1 = get_category_by_slug('silhouette-slider-collection');
						$id1 = $idObj1->term_id;
						$idObj2 = get_category_by_slug('silhouette-swing-door-collection');
						$id2 = $idObj2->term_id;

			            $sticky = get_option( 'sticky_posts' );
			            $cat_namex = "silhouette-collection";
			            $argsx = array(
			                'post_type' => 'post',
			                'category_name' => $cat_namex,
			            	'category__in' => array ($id1,$id2),
			            	'post_count'	=> -1,
			               	'post__in' => $sticky,
			             	'meta_key'          => 'collection_rank',
			             	'orderby'           => 'meta_value_num',
			            	'order'             => 'ASC'
			            );
                    } else {
                        $argsx= array(
                            'order'     => 'ASC',
                            'category_name' => $cat_slug,
                        	'meta_key'          => 'option_rank',
                        	'orderby'           => 'meta_value_num',
                            'posts_per_page' => -1,
                        );
                    }

                    /*******     Collection options     ************/
                    $archive_query = new WP_Query( $argsx);
                    ?>

                    <?php while( $archive_query->have_posts() ) : $archive_query->the_post(); ?>
                        <?php $posty_counter++;  ?>
                       	<?php if ($cat_slug == "collections") { ?>
                       		<article  id="post-<?php the_ID(); ?>" class="col-md-4 aga-box" data-post="<?php echo $posty_counter ?>">
                       	<?php 	} else { ?>
                       		<article  id="post-<?php the_ID(); ?>" class="col-xs-6 col-sm-6 col-md-4 col-lg-3 aga-box" data-post="<?php echo $posty_counter ?>">
                       <?php 	} ?>
                            <?php get_template_part( 'archive-single-option', get_post_format() ); ?>
                        </article>
            		<?php endwhile; ?>
            		<?php wp_reset_postdata(); ?>
                </div>
			</section>
			<?php //sparkling_paging_nav(); ?>
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

            </div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
