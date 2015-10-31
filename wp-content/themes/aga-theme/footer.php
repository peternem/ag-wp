<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sparkling
 */
?>
	</main>
	<!-- #main -->
</div><!-- #page -->
<!-- Footer Area -->
<footer id="footer-area" class="container-fluid site-footer" role="contentinfo">
	<div class="aga-row row">
		<?php get_sidebar( 'mp-footer' ); ?>
	</div>
	<div class="row copyright">
		<?php echo of_get_option( 'custom_footer_text', 'xxxx' ); ?>
	</div>
</footer>
<!-- end footer -->
<?php wp_footer(); ?>
<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->
</body>
</html>