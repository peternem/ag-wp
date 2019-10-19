<?php if( have_rows('slider_pull_options') ): ?>
<!-- Slider Pulls -->
<div class="post-inner-content aga-row row options">
	<div id="pullOptions" class="col-md-12 type">
		<div class="row">
			<div class="col-md-12">
				<?php
				if(get_field('slider_pull_option_label')) {
					echo '<header class="entry-header page-header"><h2>' . get_field('slider_pull_option_label') . '</h2></header>';
				}
				?>
			</div>
		</div>
		<div class="row">
			<?php while( have_rows('slider_pull_options') ): the_row(); 
			$image = get_sub_field('image');
			$label = get_sub_field('label');
			$description = get_sub_field('description');
			?>
			<div class="col-xs-12 col-sm-6 col-md-6 slides">
				<img class="img-responsive aga-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
				<div class="slide-wp">
					<div class="acf-label"><?php echo $label; ?></div>
			    	<div class="acf-desc"><?php echo $description; ?></div>
			    </div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>				
<?php endif; ?>
<?php if( have_rows('slider_towel_bar_options') ): ?>
<!-- Sliding tbar -->
<div class="post-inner-content aga-row row options">
	<div id="towelBar" class="col-md-12 type">				
		<div class="row">
			<div class="col-md-12">
				<?php
				if(get_field('slider_towel_bar_label')) {
					echo '<header class="entry-header page-header"><h2>' . get_field('slider_towel_bar_label') . '</h2></header>';
				}
				?>
			</div>
		</div>
		<div class="row">
		<?php while( have_rows('slider_towel_bar_options') ): the_row(); 
			$image = get_sub_field('image');
			$label = get_sub_field('label');
			$description = get_sub_field('description');
			?>
			<div class="col-xs-12 col-sm-6 col-md-6 slides">
				<img class="img-responsive aga-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
				<div class="slide-wp">
					<div class="acf-label"><?php echo $label; ?></div>
		    		<div class="acf-desc"><?php echo $description; ?></div>
		    	</div>
			</div>
		<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?> 