<?php
/**
 * The Sidebar widget area for footer.
 *
 * @package sparkling
 */
?>

	<?php
	// If footer sidebars do not have widget let's bail.

	if ( ! is_active_sidebar( 'footer-widget-1' ) && ! is_active_sidebar( 'footer-widget-2' ) && ! is_active_sidebar( 'footer-widget-3' ) )
		return;
	// If we made it this far we must have widgets.
	?>

	<div class="footer-widget-area">
	    <nav role="navigation" class="col-md-3 footer-widget">
	        <h3 class="widgettitle">Agalite Quick Links</h3>
            <?php sparkling_footer_links(); ?>
        </nav>
		<?php if ( is_active_sidebar( 'footer-widget-1' ) ) : ?>
		<div class="col-md-3 footer-widget" role="complementary">
			<?php dynamic_sidebar( 'footer-widget-1' ); ?>
		</div><!-- .widget-area .first -->
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'footer-widget-2' ) ) : ?>
		<div class="col-md-3 footer-widget" role="complementary">
			<?php dynamic_sidebar( 'footer-widget-2' ); ?>
		</div><!-- .widget-area .second -->
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'footer-widget-3' ) ) : ?>
		<div class="col-md-3 footer-widget" role="complementary">
			<?php dynamic_sidebar( 'footer-widget-3' ); ?>
		</div><!-- .widget-area .third -->
		<?php endif; ?>
	</div>