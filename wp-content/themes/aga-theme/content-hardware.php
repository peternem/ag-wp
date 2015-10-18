<?php
/**
 * @package sparkling
 */
?>
    <?php //the_post_thumbnail( 'sparkling-featured', array( 'class' => 'single-featured' )); ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <section id="post-<?php the_ID(); ?>" <?php post_class('container-fluid white'); ?>>
        <div class="post-inner-content aga-row row">
    	    <article class="col-sm-6 col-md-6 col-lg-6">
        		<header class="entry-header page-header">
        			<h1 class="entry-title "><?php the_title(); ?></h1>
        			<?php if(function_exists('the_subtitle')) { ?>
			        <p class="subtitle"><strong><?php echo the_subtitle();?></strong></p>
			        <?php } ?> 
			     
        		</header><!-- .entry-header -->
                <div class="entry-content">
                <?php the_content(); ?> 
                              
                </div>
                 <footer class="entry-meta">
                <?php edit_post_link( __( 'Edit Post', 'sparkling' ), '<i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span>' ); ?>
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
    		<article class="col-sm-6 col-md-6 col-lg-6 aga-features">
    		    <?php the_post_thumbnail( 'tab-square', array( 'class' => 'single-featured img-responsive aga-img' )); ?>  		
                </article>
        	
    	</div>
    	
        <?php 
        $cat_name = "";
        if (is_single('agalite-hardware')) {
        	echo '<div class="collection-options">';
        	get_template_part('hardware-options');
        	echo ' </div>';
        }
        ?>
       
		
    	
    	<?php get_template_part('modal-popup'); ?>
</section><!-- #post-## -->