<?php if( have_rows('glass_treatment_options') ): ?>
<!-- Glass Treatment -->
<div class="post-inner-content aga-row row options treatments">
	<div class="col-md-12 type">
		<div class="row">
			<div class="col-md-12">
				<?php
				if(get_field('glass_treatment_label')) {
					echo '<header id="treatmemtOptions" class="entry-header page-header"><h2>' . get_field('glass_treatment_label') . '</h2></header>';
				}
				?>
			</div>
		</div>
		<div class="row">
			<?php while( have_rows('glass_treatment_options') ): the_row(); 
			// vars
			$image = get_sub_field('image');
			$label = get_sub_field('label');
			$description = get_sub_field('description');
			?>
			<div class="col-xs-12 col-sm-6 col-md-6 slides">
				<img class="img-responsive aga-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
			    <div class="acf-label"><?php echo $label; ?></div>
			    <div class="acf-desc"><?php echo $description; ?></div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>