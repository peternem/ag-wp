<?php
$acf_option = 'pg_pvt_hinge_options';
$acf_label = 'pg_pvt_hinge_label';
if( have_rows($acf_option) ): ?>
<!-- pg_pvt_hinge_options -->
    <div class="post-inner-content aga-row row options">
		<div id="<?php echo $acf_option; ?>" class="col-md-12 type">
			<div class="row">
				<div class="col-md-12">
					<?php
					
					if(get_field($acf_label)) {
						echo '<header class="entry-header page-header"><h2>' . get_field($acf_label) . '</h2></header>';
					}
					?>
				</div>
			</div>
			<div class="row">
			<?php while( have_rows($acf_option) ): the_row(); 
			$image = get_sub_field('image');
			$label = get_sub_field('label');
			$description = get_sub_field('description');
			?>
			<div class="col-xs-4 col-sm-4 col-md-2 slides zoom">
				<a href="#" class="pop" title="Popup" data-img-alt="<?php echo str_replace(chr(34), "&rdquo;", $label); ?>" data-img-url="<?php echo $image['url']; ?>" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-expand"></i></a>
				<img class="img-responsive aga-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
				<div class="acf-label"><?php echo $label; ?></div>
			    <div class="acf-desc"><?php echo $description; ?></div>
			</div>
			<?php endwhile; ?>
			<div class="col-md-4">
					<?php
					
					if(get_field('pg_pvt_hinge_copy')) {
						echo '<p class="lead">' . get_field('pg_pvt_hinge_copy') . '</p>';
					}
					?>
				</div>
		</div>
   	</div>
 </div>
<?php endif; ?>
