<?php
/**
 * @package sparkling
 */
?>
    <?php //the_post_thumbnail( 'sparkling-featured', array( 'class' => 'single-featured' )); ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
   
    <nav id="breadCrumb" class="breadcrumb-container" role="breadcrumb">
        <?php if(function_exists('upbootwp_breadcrumbs')) upbootwp_breadcrumbs(); ?>
    </nav>
    <section id="post-<?php the_ID(); ?>" <?php post_class('container-fluid white'); ?>>
        <div class="post-inner-content aga-row row">
    	    <article class="col-sm-8 col-md-8 col-lg-8">
        		<header class="entry-header page-header">
        			<h1 class="entry-title "><?php the_title(); ?></h1>
        			<?php if(function_exists('the_subtitle')) { ?>
			        <p class="subtitle"><strong><?php echo the_subtitle();?></strong></p>
			        <?php } ?> 
        		</header><!-- .entry-header -->
                <div class="entry-content">
                <?php the_content(); ?>
                </div>
                
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
                 <footer class="entry-meta">
                <?php edit_post_link( __( 'Edit Post', 'sparkling' ), '<i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span>' ); ?>
                </footer><!-- .entry-meta -->
    		</article>
    		<article class="col-sm-4 col-md-4 col-lg-4 aga-features">
    		    <?php the_post_thumbnail( 'tab-square', array( 'class' => 'single-featured img-responsive aga-img' )); ?>  		
                </article>
        	
    	</div>
    	<div class="collections">
    	
        <?php 
        $cat_name = "";
        if (is_single('estate-collection')) {
            get_template_part('collection-options-estate');
            
            
        }
        
        if (is_single('accent-collection')) {
        get_template_part('collection-options-estate');
          
        }
        ?>
        </div>
		
    	<?php  
    	if (has_tag("glass")){
    		get_template_part('options-glass');
    	} 
    	if (has_tag("header")){
    		get_template_part('options-header');
    	}
    	if (has_tag("handle-pull")){
    		get_template_part('options-handle-pull');
    	}
    	if (has_tag("pulls-and-towel-bars")){
    		get_template_part('options-slider-pull-tbar');
    	}
    	if (has_tag("hinges")){
    		get_template_part('options-hinge');
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
    	
    	?>
</section><!-- #post-## -->
