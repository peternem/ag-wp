<?php
/**
 * Template Name: Install Documents Page
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
			<section class="entry-content install">
			<!-- Estate Docs -->
			<?php
			$acf_option = 'estate_install_docs';
			$acf_label = 'estate_label';
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
			<!-- Accent SD Docs -->
			<?php
			$acf_option = 'accent_sd_install_docs';
			$acf_label = 'accent_sd_label';
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
			<!-- Accent SE Docs -->
			<?php
			$acf_option = 'accent_se_install_docs';
			$acf_label = 'accent_se_label';
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
			<!-- Fresco SE Docs -->
			<?php
			$acf_option = 'fresco_sd_install_docs';
			$acf_label = 'fresco_sd_label';
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
			<!-- Fresco SD Docs -->
			<?php
			$acf_option = 'fresco_se_install_docs';
			$acf_label = 'fresco_se_label';
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
			
			<!-- Vision SD Docs -->
			<?php
			$acf_option = 'vision_sd_install_docs';
			$acf_label = 'vision_sd_label';
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
			<!-- Vision SD Docs -->
			<?php
			$acf_option = 'vision_se_install_docs';
			$acf_label = 'vision_se_label';
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

