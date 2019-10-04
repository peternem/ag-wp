<!-- new-product -->
<h1 class="text-center">News and Promotions</h1>
<div class="aga-row row max-width">
	<article class="col-md-4 aga-box">
	<?php
	$np_title = get_field('np_title', 'options');
	$np_content = get_field('np_content', 'options');
	$np_image = get_field('np_image', 'options');
	$link_id = get_field('np_link', 'options');

	if( !empty($np_image) ):
		// vars
		$url = $np_image['url'];
		$title = $np_image['title'];
		$alt = $np_image['alt'];
		$caption = $np_image['caption'];

		$size = 'tab-rectangle';
		$thumb = $np_image['sizes'][ $size ];
		$width = $np_image['sizes'][ $size . '-width' ];
		$height = $np_image['sizes'][ $size . '-height' ];

	endif; ?>


		<h2>New Product</h2>
		<div class="row">
			<div class="col-md-12">
				<?php if( !empty($np_image) ): ?>
				<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" class="aga-img img-responsive"/>
				<?php endif; ?>
			</div>
			<div class="col-md-12">
			<?php if( !empty($np_title) ): ?>
				<h4><?php echo $np_title; ?></h4>
			<?php endif; ?>
			<?php if( !empty($np_content) ): ?>
				<?php echo $np_content; ?>
			<?php endif; ?>
			<?php if( !empty($link_id) ): ?>
			<p><a class="btn btn-primary btn-sm" href="<?php echo $link_id; ?>" role="button">Learn More <i class="fa fa-angle-double-right"></i></a></p>
			<?php endif; ?>
			</div>
		</div>
	</article>
            <article class="col-sm-4 col-md-4 aga-box">
                <h2>News</h2>
                <ul class="news-list">

               <?php
		            $args = array(
						'post_type' 		=> 'news',
						'posts_per_page' 	=>10,
						'taxonomy'  	=> 'news_category',
						'order'             => 'DESC',
						'post_status' 		=> 'publish',
	            	);
		            $my_query = new WP_Query($args);
		            while($my_query->have_posts()) : $my_query->the_post(); ?>
						<li>
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		        				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

							<?php
							$ebtn_text =  __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' );
							edit_post_link($ebtn_text,'<div>','</div>' );
							?>
	       					</article>
	       				</li>
					<?php endwhile; ?>
                </ul>
					<?php  wp_reset_postdata(); ?>
					 <p><a class="btn btn-primary btn-sm" href="/agalite-news/" role="button">More News <i class="fa fa-angle-double-right"></i></a></p>
            </article>
			<article class="col-md-4 aga-box">
		    <?php
			$fp_title = get_field('fp_title', 'options');
			$fp_content = get_field('fp_content', 'options');
			$fp_image = get_field('fp_image', 'options');
			$link_id = get_field('fp_link', 'options');

			if( !empty($fp_image) ):
				// vars
				$url = $fp_image['url'];
				$title = $fp_image['title'];
				$alt = $fp_image['alt'];
				$caption = $fp_image['caption'];

				$size = 'tab-rectangle';
				$thumb = $fp_image['sizes'][ $size ];
				$width = $fp_image['sizes'][ $size . '-width' ];
				$height = $fp_image['sizes'][ $size . '-height' ];

			endif; ?>


				<h2>Featured Product</h2>
				<div class="row">
					<div class="col-md-12">
						<?php if( !empty($fp_image) ): ?>
						<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" class="aga-img img-responsive"/>
						<?php endif; ?>
					</div>
					<div class="col-md-12">
					<?php if( !empty($fp_title) ): ?>
						<h4><?php echo $fp_title; ?></h4>
					<?php endif; ?>
					<?php if( !empty($fp_content) ): ?>
						<?php echo $fp_content; ?>
					<?php endif; ?>
					<?php if( !empty($link_id) ): ?>
					<p><a class="btn btn-primary btn-sm" href="<?php echo $link_id; ?>" role="button">Learn More <i class="fa fa-angle-double-right"></i></a></p>
					<?php endif; ?>
					</div>
				</div>
			</article>
    </div>
<!-- end new-product -->
