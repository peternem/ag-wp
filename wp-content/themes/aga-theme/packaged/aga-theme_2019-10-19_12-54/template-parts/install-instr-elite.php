<!-- Elite -->
<div class="post-inner-content aga-row row">
	<div class="col-lg-12">
		<h2>Elite Enclosures</h2>
	</div>
	<article class="col-lg-6">
		<?php
		if(get_field('elite_sd_left_label')) {
			echo '<h3>' . get_field('elite_sd_left_label') . '</h3>';
		}
		?>
		<?php
		if( have_rows('elite_docs_left_column') ): ?>
		<!-- hardware_panel_clamp_options -->

		<ul class="doc-list">
			<?php while( have_rows('elite_docs_left_column') ): the_row();
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

		<?php
		if(get_field('elite_sd_right_label')) {
			echo '<h3>' . get_field('elite_sd_right_label') . '</h3>';
		}
		?>
		<?php
		if( have_rows('elite_docs_right_column') ): ?>
		<!-- hardware_panel_clamp_options -->

		<ul class="doc-list">
			<?php while( have_rows('elite_docs_right_column') ): the_row();
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
