<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package sparkling
 */
?>
<div class="post-inner-content aga-row row">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content col-md-7">
		<header class="entry-header page-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php if(function_exists('the_subtitle')) {
	       	echo '<p>'.the_subtitle().'</p>'; 
	       }
	       ?>
		</header><!-- .entry-header -->
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'sparkling' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<div class="col-md-5 aga-box">
	    <?php
        if (is_page('company-news')) {
            ?>
                <h2>Recent News Posts</h2>
                <ul>
                    <li><a href="#">Donec id elit non mi porta gravida at eget metus</a></li>
                    <li><a href="#">Donec id elit non mi porta gravida at eget metus</a></li>
                    <li><a href="#">Donec id elit non mi porta gravida at eget metus</a></li>
                    <li><a href="#">Donec id elit non mi porta gravida at eget metus</a></li>
                </ul>
            <?php
        } else {
            if(get_field('right_column_image')) {
                ?>
                <img src="<?php echo get_field('right_column_image'); ?>" alt="" class="aga-img img-responsive" />
                <?php
            }
        }
        
        
        
        ?>
	</div>
	<?php edit_post_link( __( 'Edit', 'sparkling' ), '<footer class="entry-footer col-md-12"><i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
</div>