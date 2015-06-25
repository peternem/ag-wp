<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sparkling
 */
?>
            </div><!-- close .main-content-inner -->
        </div><!-- close .main-content-area -->
    </div><!-- close .site-content -->
    <footer id="colophon" class="site-footer" role="contentinfo">
    	<div id="footer-area">
    		<div class="container-fluid footer-inner">
    			<div class="row">
    				<?php get_sidebar( 'footer' ); ?>
    			</div>
    		</div>
    		<div class="site-info container-fluid">
    			<div class="row">
    				<?php //sparkling_social(); ?>
    				<!-- <nav role="navigation" class="col-md-6">
    					<?php //sparkling_footer_links(); ?>
    				</nav> -->
    				<div class="col-md-6">
    					<?php //echo of_get_option( 'custom_footer_text', 'sparkling' ); ?>
    					<?php //sparkling_footer_info(); ?>
    				</div>
    			</div>
    		</div><!-- .site-info --><div class="scroll-to-top"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->
    	</div>
    	
    </footer><!-- #colophon -->
    <div class="copyright">
        <?php echo of_get_option( 'custom_footer_text', 'xxxx' ); ?>
        <?php //sparkling_footer_info(); ?>
    </div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>