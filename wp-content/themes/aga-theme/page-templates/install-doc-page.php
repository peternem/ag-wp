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
<section class="container-fluid install">
	<div class="post-inner-content aga-row row">
		<div class="col-lg-12">
			<h2>Estate Enclosures</h2>
		</div>
				<article class="col-lg-6"> 
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
				</article>
				<article class="col-lg-6"> 
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
				</article>						
	</div>
	<!-- Transcend -->
	<div class="post-inner-content aga-row row">
		<div class="col-lg-12">
			<h2>Transcend Enclosures</h2>
		</div>
				<article class="col-lg-6"> 
							<!-- Etranscend_sd_install_docs Docs -->
							<?php
							$acf_option = 'transcend_sd_install_docs';
							$acf_label = 'transcend_sd_label';
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
				</article>
				<article class="col-lg-6"> 
							<!-- transcend_se_install_docs -->
							<?php
							$acf_option = 'transcend_se_install_docs';
							$acf_label = 'transcend_se_label';
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
				</article>						
	</div>
	<!-- Silhouette -->
	<div class="post-inner-content aga-row row">
		<div class="col-lg-12">
			<h2>Silhouette Enclosures</h2>
		</div>
				<article class="col-lg-6"> 
							<!-- silhouette_sd_install_docs -->
							<?php
							$acf_option = 'silhouette_sd_install_docs';
							$acf_label_si = 'silhouette_sd_label';
							if( have_rows($acf_option) ): ?>
									<!-- hardware_panel_clamp_options -->
										<?php
										if(get_field($acf_label_si)) {
											echo '<h3>' . get_field($acf_label_si) . '</h3>';
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
				</article>
				<article class="col-lg-6"> 
							<!-- ilhouette_se_install_docs -->
							<?php
							$acf_option_s = 'silhouette_se_install_docs';
							$acf_label_s = 'silhouette_se_label';
							if( have_rows($acf_option_s) ): ?>
									<!-- hardware_panel_clamp_options -->
										<?php
										if(get_field($acf_label_s)) {
											echo '<h3>' . get_field($acf_label_s) . '</h3>';
										}
										?>
										<ul class="doc-list">
										<?php while( have_rows($acf_option_s) ): the_row(); 
										$file_url_s = get_sub_field('file');
										$label_s = get_sub_field('label');
										$description_s = get_sub_field('description');
										?>
										<li>
											<img class="pdf-icon" src="<?php echo $file_url_s['icon']; ?>" alt="" />
											<a href="<?php echo $file_url['url']; ?>" title="<?php echo $file_url_s['url'];?>" target="blank"><?php echo $label; ?></a>
											<span class="acf-desc"><?php echo $description_s; ?></span>
											<?php //echo $label; ?>
										</li>
										<?php endwhile; ?>
										</ul>	
							<?php endif; ?>
				</article>						
	</div>
	<!-- Accent -->
	<div class="post-inner-content aga-row row">
		<div class="col-lg-12">
			<h2>Accent Enclosures</h2>
		</div>
				<article class="col-lg-6"> 
				<!-- Accent SE Docs -->
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
			</article>
			<article class="col-lg-6"> 
			<!-- Fresco SE Docs -->
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
			</article>


<!-- Vision -->
	<div class="post-inner-content aga-row row">
		<div class="col-lg-12">
			<h2>Vision Enclosures</h2>
		</div>
			<article class="col-lg-6"> 
			<!-- Fresco SD Docs -->
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
			</article>
			<article class="col-lg-6"> 
			<!-- Fresco SE Docs -->
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
			</article>			
	</div>
	
<!-- Fresco -->
	<div class="post-inner-content aga-row row">
		<div class="col-lg-12">
			<h2>Fresco Enclosures</h2>
		</div>
			<article class="col-lg-6"> 
			<!-- Fresco SD Docs -->
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
			</article>
			<article class="col-lg-6"> 
			<!-- Fresco SE Docs -->
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
			</article>			
	</div>	
</section>
<section id="newsList" class="container-fluid news-list-last">
	<div class="post-inner-content aga-row row">

	</div>
</section>



  

<?php get_footer(); ?>

