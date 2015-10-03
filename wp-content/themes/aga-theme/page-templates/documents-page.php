<?php
/**
 * Template Name: Documents Page
 *
 * This is the template that displays full width page without sidebar
 *
 * @package sparkling
 */

get_header(); ?>
<!-- Main jumbotron for a primary marketing message or call to action -->
<section id="primary" class="container-fluid news-list">
	<div class="post-inner-content aga-row row">
		<article class="col-lg-7"> 
			<header class="entry-header page-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
	       		<?php if(function_exists('the_subtitle')) {	?>
	       			<p class="subtitle"><strong><?php echo the_subtitle();?></strong></p>
	       		<?php  } ?> 
	       	</header>
       
	        <div class="entry-content">
		        <?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
		            	<?php the_content(); ?> 
					<?php endwhile;  ?>
				<?php endif; ?>
			</div>
			<section class="entry-content">
			<?php
			$acf_option = 'pdf_document_list';
			$acf_label = 'document_label';
			if( have_rows($acf_option) ): ?>
					<!-- hardware_panel_clamp_options -->
						<?php
						if(get_field($acf_label)) {
							echo '<h3>' . get_field($acf_label) . '</h3>';
						}
						?>
						<ul class="doc-list">
						<?php while( have_rows($acf_option) ): the_row(); 
						$file_url = get_sub_field('file');
						$label = get_sub_field('label');
						$description = get_sub_field('description');
						?>
						<li>
							<img class="pdf-icon" src="<?php echo $file_url['icon']; ?>" alt="" />
							<a href="<?php echo $file_url['url']; ?>" title="<?php echo $file_url['url'];?>" target="blank"><?php echo $label; ?></a>
							<span class="acf-desc"><?php echo $description; ?></span>
							<?php //echo $label; ?>
						</li>
						<?php endwhile; ?>
						</ul>	
			<?php endif; ?>
			
			<?php
			$acf_option = 'pdf_document_list_x';
			$acf_label = 'document_label_x';
			if( have_rows($acf_option) ): ?>
				<ul>
					<!-- hardware_panel_clamp_options -->
						<?php
						if(get_field($acf_label)) {
							echo '<h3>' . get_field($acf_label) . '</h3>';
						}
						?>
						<ul class="doc-list">
						<?php while( have_rows($acf_option) ): the_row(); 
						$file_url = get_sub_field('file');
						$label = get_sub_field('label');
						$description = get_sub_field('description');
						?>
						<li>
							<img class="pdf-icon" src="<?php echo $file_url['icon']; ?>" alt="" />
							<a href="<?php echo $file_url['url']; ?>" title="<?php echo $file_url['url'];?>" target="blank"><?php echo $label; ?></a>
							<span class="acf-desc"><?php echo $description; ?></span>
							<?php //echo $label; ?>
						</li>
						<?php endwhile; ?>
						</ul>	
			<?php endif; ?>
			</section>
		</article>
		<div class="col-md-5 aga-box">
			<?php 
			if(get_field('right_column_image')) {
				?>
                <img src="<?php echo get_field('right_column_image'); ?>" alt="" class="aga-img img-responsive" />
                <?php
            }
			?>
		</div>
			</div>
</section>
<section id="newsList" class="container-fluid news-list-last">
	<div class="post-inner-content aga-row row">

	</div>
</section>



  

<?php get_footer(); ?>

