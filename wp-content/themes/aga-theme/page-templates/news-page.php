<?php
/**
 * Template Name: News Page
 *
 * This is the template that displays full width page without sidebar
 *
 * @package sparkling
 */

get_header(); ?>
<!-- Main jumbotron for a primary marketing message or call to action -->
<section id="primary" class="container-fluid news-list">
	<div class="post-inner-content aga-row row">
		<article class="col-lg-12"> 
			<header class="entry-header page-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
	       		<?php if(function_exists('the_subtitle')) {	?>
	       			<p class="subtitle"><strong><?php echo the_subtitle();?></strong></p>
	       		<?php  } ?> 
	       	</header>
       </article>
        <div class="entry-content">
            <?php the_content(); ?> 
		 </div>
	</div>
</section>
<section id="newsList" class="container-fluid news-list-last">
	<div class="post-inner-content aga-row row">
		<article class="col-lg-12">
		<ul>
		<?php
		$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
		query_posts( array( 
			'post_type' => 'news',
			'posts_per_page' => 15,
			'caller_get_posts' => 1,
			'taxonomy' => 'news_category',
			'paged' => $paged	
			)
		);
		
		if (have_posts()) :
		
			while (have_posts()) : the_post(); ?>
			<li>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		        				<?php //the_date('F Y', '<span class="post-date">', '</span><br/>'); ?>
		        				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		        				
							<?php  
				$ebtn_text =  __( '<i class="fa fa-pencil-square-o"></i> Edit', 'upbootwp' );
				edit_post_link($ebtn_text,'<div>','</div>' );
				?>
		       					</article>
		       				</li>					
						<?php endwhile;  ?>
		  <?php endif;
		?>
		</ul>
		</article>
		<div class="row">
		<nav class="navigation col-lg-12">
		  	<ul class="pager">
		    	<li><?php previous_posts_link('&laquo; Previous') ?></li>
		    	<li><?php next_posts_link('More &raquo;') ?></li>
		  	</ul>
		</nav>
	</div>	
	</div>
</section>



  

<?php get_footer(); ?>

