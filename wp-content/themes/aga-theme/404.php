<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package sparkling
 */

get_header(); ?>
<div id="primary" class="content-area">
	<section id="404-error" class="error-404 not-found content-area container-fluid white">
		<div class="post-inner-content aga-row row">
			<div class="col-md-12">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'sparkling' ); ?></h1>
				</header><!-- .page-header -->			
			</div>
			<div class="col-md-12">
				<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'sparkling' ); ?></p>
				<div class="row">
					<div class="col-md-6"><?php get_search_form(); ?></div>
				</div>
			</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>
