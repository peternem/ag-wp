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
                 <footer class="col-md-12 aga-box entry-meta">
                <?php edit_post_link( __( 'Edit Post', 'sparkling' ), '<i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span>' ); ?>
                </footer><!-- .entry-meta -->
    		</article>
    		<article class="col-sm-6 col-md-6 col-lg-6 aga-features">
    		    <?php the_post_thumbnail( 'tab-square', array( 'class' => 'single-featured img-responsive aga-img' )); ?>
    		    <?php

//                 if(get_field('collection_features'))
//                 {
//                     echo get_field('collection_features');
//                 }
                
                ?>    		
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
</section><!-- #post-## -->
