 <div class="post-inner-content aga-row row options">
        	<!-- Hinge Options -->
        	<div id="hingeOptions" class="col-md-12 type">
            	<?php if( have_rows('hinge_options') ): ?>
					<div class="row">
						<div class="col-md-12">
							<?php
							if(get_field('hinge_option_label')) {
								echo '<header class="entry-header page-header"><h2>' . get_field('hinge_option_label') . '</h2></header>';
							}
							?>
						</div>
					</div>
					<div class="row">
					<?php while( have_rows('hinge_options') ): the_row(); 
					// vars
					$image = get_sub_field('image');
					$label = get_sub_field('label');
					$description = get_sub_field('description');
					?>
					<div class="col-xs-4 col-sm-4 col-md-2 slides zoom">
					<a href="#" class="pop" title="Popup" data-img-alt="<?php echo $label; ?>" data-img-url="<?php echo $image['url']; ?>" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-expand" alt="Popup"></i></a>
						<img class="img-responsive aga-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
						 <div class="slide-wp">
						 	<div class="acf-label"><?php echo $label; ?></div>
					    	<div class="acf-desc"><?php echo $description; ?></div>
					    </div>
					</div>
					<?php endwhile; ?>
				
					</div>
				
				<?php endif; ?>
        	</div>
        <!-- Modal -->
		<?php //get_template_part('modal-popup'); ?>
 </div>