<?php
/**
 * @package sparkling
 */
?>
   
	<?php $cust_post_t = get_post_type( $post  ); ?>
    <?php if ($cust_post_t !== 'news') { ?>
    <nav id="breadCrumb" class="breadcrumb-container" role="breadcrumb">
        <?php if(function_exists('upbootwp_breadcrumbs')) upbootwp_breadcrumbs(); ?>
    </nav>
    <?php } ?>
    
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
    	<div class="collection-options">
        <?php 
        // Loads all options for each collection
        $cat_name = "";
        if (is_single('estate-collection')) {
            get_template_part('collection-options-estate');  
        }

        if (is_single('accent-collection')) {
        	get_template_part('collection-options-estate');
        }

        if (is_single('silhouette-elite-collection') || (is_single('silhouette-slider-collection'))) {
        	get_template_part('collection-options-estate');
        
        }
        if (is_single('fresco-collection')) {
        	get_template_part('collection-options-estate');
        }
        
        if (is_single('vision-collection')) {
        	get_template_part('collection-options-estate');
        }
        
        if (is_single('agalite-hardware')) {
        	get_template_part('hardware-options');
        }
        ?>
        </div>
        
    	<?php  
    	// Loads all idividual items for each collection option
    	if (has_tag("hinges")){
    		get_template_part('options-hinge');
    	}
    	if (has_tag("handle-pull")){
    		get_template_part('options-handle-pull');
    	}
    	if (has_tag("header")){
    		get_template_part('options-header');
    	}
    	if (has_tag("pulls-and-towel-bars")){
    		get_template_part('options-slider-pull-tbar');
    	}
    	if (has_tag("soft-curve-slider")){
    		get_template_part('options-soft-curve');
    	}
    	if (has_tag("sd-special-options")){
    		get_template_part('options-sd-special');
    	}
    	if (has_tag("panels")){
    		get_template_part('options-panel-clamps');
    	}
    	if (has_tag("panels")){
    		get_template_part('options-panel-accessories');
    	}
    	if (has_tag("glass")){
    		get_template_part('options-glass');
    	} 
    	if (has_tag("treatments")){
    		get_template_part('options-glass-treatment');
    	}
    	if (has_tag("designer-glass")){
    		get_template_part('options-designer-glass');
    	}
    	if (has_tag("metal-finish")){
    		get_template_part('options-metal-finishes');
    	}
    	if (has_tag("configs")){
    		get_template_part('options-configs');
    	}
    	
    	//  Hardware Options
    	if (has_tag("hardware-clamps-1")){
    		get_template_part('options-hardware-clamps');
    	}
	  	if (has_tag("standard-hinges")){
	    	get_template_part('options-hardware-hinges');
	    }
	    if (has_tag("heavy-duty-hinges")){
	    	get_template_part('options-hardware-hvy-hinges');
	    }
	    if (has_tag("adjustable-hinges")){
	    	get_template_part('options-hardware-adj-hinges');
	    }
	    if (has_tag("pivot-hinges")){
	    	get_template_part('options-hardware-pivot-hinges');
	    }
	    if (has_tag("hardware-kpct")){
	    	get_template_part('options-hardware-kpct');
	    }
	    if (has_tag("light-duty-hinges")){
	    	get_template_part('options-hardware-lt-hinges');
	    }	    
	    
    	?>
    	<?php get_template_part('modal-popup'); ?>
</section><!-- #post-## -->
<nav id="breadCrumb" class="breadcrumb-container" role="breadcrumb">
	<?php if(function_exists('upbootwp_breadcrumbs')) upbootwp_breadcrumbs(); ?>
</nav>