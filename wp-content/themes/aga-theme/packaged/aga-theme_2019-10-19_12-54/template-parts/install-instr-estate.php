<div class="post-inner-content aga-row row">
	<div class="col-lg-12">
		<h2>Estate Enclosures</h2>
	</div>
	<article class="col-lg-6">
		<!-- Estate Docs -->
		<?php
		$acf_option = 'estate_sd_install_docs';
		$acf_label = 'estate_sd_label';
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
$acf_option = 'estate_se_install_docs';
$acf_label = 'estate_se_label';
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
