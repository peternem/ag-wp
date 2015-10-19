<?php if( have_rows('soft_curve_slider_options') ): ?>
<!-- Soft Curve Slider Options -->
<div class="post-inner-content aga-row row options">
	<div id="softCurveOptions" class="col-md-12 type">
		<div class="row">
			<div class="col-md-12">
				<?php
				if(get_field('soft_curve_slider_option_label')) {
					echo '<header class="entry-header page-header"><h2>' . get_field('soft_curve_slider_option_label') . '</h2></header>';
				}
				?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 slides">
				<p class="lead">Are you looking for something unique and eye catching? Try Agalite’s Soft Curve Slider Option.</p>
			</div>
			<?php 
			while( have_rows('soft_curve_slider_options') ): the_row(); 
				$image = get_sub_field('image');
				$label = get_sub_field('label');
				$description = get_sub_field('description');
			?>
				<div class="col-xs-4 col-sm-4 col-md-2 slides zoom">
					<a href="#" class="pop" title="Popup" data-img-alt="<?php echo $label; ?>" data-img-url="<?php echo $image['url']; ?>" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-expand"></i></a>
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