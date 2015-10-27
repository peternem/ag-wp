<?php
/**
 * Template Name: Dealer Tools
 *
 * This is the template that displays full width page without sidebar
 *
 * @package sparkling
 */

get_header(); ?>
<!-- Main jumbotron for a primary marketing message or call to action -->


	<?php
global $current_user; 
get_currentuserinfo(); 
if ( user_can( $current_user, "dealer" ) || user_can( $current_user, "administrator") ){  ?>
<section id="primary" class="container-fluid news-list">
	<div class="post-inner-content aga-row row">
	<article class="col-lg-7 aga-content">
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
	<div class="post-inner-content aga-row row options">
		<section class="col-md-12">
				<?php
			$acf_option = 'price_book_pdf';
			$acf_label = 'price_book_label';
			if( have_rows($acf_option) ): ?>
					<!-- hardware_panel_clamp_options -->
						<?php
						if(get_field($acf_label)) {
							echo '<header class="entry-header page-header"><h2>' . get_field($acf_label) . '</h2></header>';
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
							<span class="acf-desc"> - <?php echo $description; ?></span>
							<?php //echo $label; ?>
						</li>
						<?php endwhile; ?>
						</ul>	
			<?php endif; ?>			
		</section>
	</div>
	<div class="post-inner-content aga-row row options">
		<section class="col-md-12">
				<?php
			$acf_option = 'technical_documents_pdf';
			$acf_label = 'technical_documents_label';
			if( have_rows($acf_option) ): ?>
					<!-- hardware_panel_clamp_options -->
						<?php
						if(get_field($acf_label)) {
							echo '<header class="entry-header page-header"><h2>' . get_field($acf_label) . '</h2></header>';
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
							<span class="acf-desc"> - <?php echo $description; ?></span>
							<?php //echo $label; ?>
						</li>
						<?php endwhile; ?>
						</ul>	
			<?php endif; ?>
			
		</section>
	</div>
	<div class="post-inner-content aga-row row options">
		<section class="col-md-12">
				<?php
			$acf_option = 'forms_pdf';
			$acf_label = 'forms_label';
			if( have_rows($acf_option) ): ?>
					<!-- hardware_panel_clamp_options -->
						<?php
						if(get_field($acf_label)) {
							echo '<header class="entry-header page-header"><h2>' . get_field($acf_label) . '</h2></header>';
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
							<span class="acf-desc"> - <?php echo $description; ?></span>
							<?php //echo $label; ?>
						</li>
						<?php endwhile; ?>
						</ul>	
			<?php endif; ?>
			
		</section>
	</div>
	<div class="post-inner-content aga-row row options">
		<section class="col-md-12">
				<?php
			$acf_option = 'media_kit_pdf';
			$acf_label = 'media_kit_label';
			if( have_rows($acf_option) ): ?>
					<!-- hardware_panel_clamp_options -->
						<?php
						if(get_field($acf_label)) {
							echo '<header class="entry-header page-header"><h2>' . get_field($acf_label) . '</h2></header>';
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
							<span class="acf-desc"> - <?php echo $description; ?></span>
							<?php //echo $label; ?>
						</li>
						<?php endwhile; ?>
						</ul>	
			<?php endif; ?>	
		</section>
	</div>
	<div class="post-inner-content aga-row row options">
		<div class="col-md-12">
				<?php
			$acf_option = 'logo_artwork_pdf';
			$acf_label = 'logo_artwork_label';
			if( have_rows($acf_option) ): ?>
					<!-- hardware_panel_clamp_options -->
						<?php
						if(get_field($acf_label)) {
							echo '<header class="entry-header page-header"><h2>' . get_field($acf_label) . '</h2></header>';
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
							<span class="acf-desc"> - <?php echo $description; ?></span>
							<?php //echo $label; ?>
						</li>
						<?php endwhile; ?>
						</ul>	
			<?php endif; ?>
			
		</div>
	</div>
	<div class="post-inner-content aga-row row options">
			<div class="col-md-12">
				<header class="entry-header page-header"><h2>Log Out of Dealer Tools</h2></header>
				<p>To exit, please click on the log out button below.</p>
				<p><a class="btn btn-primary btn-sm" href="<?php echo wp_logout_url( home_url() ); ?>">Log out <i class="fa fa-angle-double-right"></i></a></p>
			</div>
		</div>
	</div>
</section>
<?php  } else { ?>
<section id="primary" class="container-fluid news-list">
	<div class="post-inner-content aga-row row">
		<article class="col-lg-7">
			<header class="entry-header page-header">
				<h1 class="entry-title">Dealer Tools Login</h1>
				<p class="subtitle"><strong>You Need To Be Logged into the site inorder to gain access.</strong></p>
			</header>
			<div class="">
				<p>Returning users please login below. First time users, skip to Dealer Request Form.</p>
				<p><a class="btn btn-primary btn-sm" href="<?php echo wp_login_url( get_permalink() ); ?>" role="button">Login <i class="fa fa-angle-double-right"></i></a>
				<br/><br/><br/>
				<h3>Dealer Request Form</h3>
				<p>Please fill-out this quick request form for:</p>
				<ul>
					<li>Account setup to gain access to Dealers Tools Login</li>
					<li>Information on becoming an Agalite dealer</li>
					<li>Additional information that you have not found on this site</li>
					<li>Recommending changes to this site or Agalite products</li>
					<li>Giving general feedback</li>
				</ul>
				<br/>
				<p><a href="/dealer-request-form/" class="btn btn-primary btn-sm">Dealer Request Form <i class="fa fa-angle-double-right"></i></a></p>
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

<?php  } ?>
<?php get_footer(); ?>

