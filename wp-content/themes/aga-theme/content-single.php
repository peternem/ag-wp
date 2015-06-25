<?php
/**
 * @package sparkling
 */
?>
    <?php //the_post_thumbnail( 'sparkling-featured', array( 'class' => 'single-featured' )); ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
     <?php the_post_thumbnail( 'sparkling-full-page', array( 'class' => 'single-featured img-responsive' )); ?>
    
      <div class="jumbo-caption">
           
        <h1 class="entry-title"><?php the_title(); ?></h1>
       <?php if(function_exists('the_subtitle')) {
        ?>
        <p class="subtitle"><?php echo the_subtitle();?></p>
        <?php 
       }
       ?> 
        <div class="jumbo-btn">
            <a class="btn btn-primary" href="#welcome" role="button">Learn more <i class="fa fa-angle-double-right"></i></a>
        </div>
      </div>
    </div>
    <div id="welcome" class="breadcrumb-container">
        <?php if(function_exists('upbootwp_breadcrumbs')) upbootwp_breadcrumbs(); ?>
    </div>
    <article id="post-<?php the_ID(); ?>" <?php post_class('container-fluid white'); ?>>
	<div class="content-area">
        <div class="post-inner-content aga-row row">
    	    <section class="col-md-8 aga-box">
        		<header class="entry-header page-header">
        			<h1 class="entry-title "><?php the_title(); ?></h1>
        			<div class="entry-meta">
        				<?php //sparkling_posted_on(); ?>
        				<?php
        					/* translators: used between list items, there is a space after the comma */
        					$categories_list = get_the_category_list( __( ', ', 'sparkling' ) );
        					if ( $categories_list && sparkling_categorized_blog() ) :
        				?>
        				<span class="cat-links"><i class="fa fa-folder-open-o"></i>
        					<?php printf( __( ' %1$s', 'sparkling' ), $categories_list ); ?>
        				</span>
        				<?php endif; // End if categories ?>
        				
        			</div><!-- .entry-meta -->
        		</header><!-- .entry-header -->
        		<div  class="entry-content">
                <?php the_content(); ?>
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
            </div><!-- .entry-content -->
    		</section>
    		<section class="col-md-4 aga-features">
    		    
    		    <?php

                if(get_field('collection_features'))
                {
                    echo get_field('collection_features');
                }
                
                ?>    		
                </section>
    
    		
    
                <footer class="col-md-12 aga-box entry-meta">
                <?php edit_post_link( __( 'Edit Post', 'sparkling' ), '<i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span>' ); ?>
                </footer><!-- .entry-meta -->
        	
    	</div>
        <?php 
        $cat_name = "";
        if (is_single('estate-collection')) {
            get_template_part('collection-options-estate');
        }
        
        if (is_single('accent-collection')) {
        get_template_part('collection-options-estate');
          
        }
        ?>
<?php
$table = get_field( 'swing_door_options' );

if ( $table ) {
    echo '<div class="table ">';
        if ( $table['header'] ) {
            echo '<div class="thead">';
                echo '<div class="tr post-inner-content aga-row row">';
                    foreach ( $table['header'] as $th ) {
                        echo '<span class="th col-md-6">';
                            echo "<h2>".$th['c']."</h2>";
                        echo '</span>';
                    }
                echo '</div>';
            echo '</div>';
        }
        echo '<div class="tbody">';
            foreach ( $table['body'] as $tr ) {
                echo '<div class="tr post-inner-content aga-row row">';
                    foreach ( $tr as $td ) {
                        echo '<div class="td col-md-6">';
                            echo $td['c'];
                        echo '</div>';
                    }
                echo '</div>';
            }
        echo '</div>';
    echo '</div>';
}        
?>
<?php

$table = get_field( 'sliding_door_options' );

if ( $table ) {
    echo '<div class="table ">';
        if ( $table['header'] ) {
            echo '<div class="thead">';
                echo '<div class="tr post-inner-content aga-row row">';
                    foreach ( $table['header'] as $th ) {
                        echo '<span class="th col-md-6">';
                            echo "<h2>".$th['c']."</h2>";
                        echo '</span>';
                    }
                echo '</div>';
            echo '</div>';
        }
        echo '<div class="tbody">';
            foreach ( $table['body'] as $tr ) {
                echo '<div class="tr post-inner-content aga-row row">';
                    foreach ( $tr as $td ) {
                        echo '<div class="td col-md-6">';
                            echo $td['c'];
                        echo '</div>';
                    }
                echo '</div>';
            }
        echo '</div>';
    echo '</div>';
}        
?>

	</div>
</article><!-- #post-## -->
