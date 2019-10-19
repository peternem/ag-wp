<!-- Transcend -->
<div class="post-inner-content aga-row row">
	<div class="col-lg-12">
		<h2>Napa Enclosures</h2>
	</div>
	<article class="col-lg-6">
		<?php
		$napa_sd_col_a_docs = 'napa_sd_col_a_docs';
		$napa_sd_col_a_label = 'napa_sd_col_a_label';

		if(get_field($napa_sd_col_a_label)) {
			echo '<h3>' . get_field($napa_sd_col_a_label) . '</h3>';
		}
		if( have_rows($napa_sd_col_a_docs) ): ?>
			<!-- hardware_panel_clamp_options -->

			<ul class="doc-list">
				<?php while( have_rows($napa_sd_col_a_docs) ): the_row();
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
		$napa_sd_col_b_docs = 'napa_sd_col_b_docs';
		$napa_sd_col_b_label = 'napa_sd_col_b_label';

		if(get_field($napa_sd_col_b_label)) {
			echo '<h3>' . get_field($napa_sd_col_b_label) . '</h3>';
		}
		if( have_rows($napa_sd_col_b_docs) ): ?>
			<!-- hardware_panel_clamp_options -->

			<ul class="doc-list">
				<?php while( have_rows($napa_sd_col_b_docs) ): the_row();
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
