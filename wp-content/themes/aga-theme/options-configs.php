 <div class="post-inner-content aga-row row options">
        	<!-- SD Configs -->
        	<div id="configSD" class="col-md-12 type">
            	<?php if( have_rows('config_sd_options') ): ?>
					<div class="row">
						<div class="col-md-12">
							<?php
							if(get_field('config_sd_option_label')) {
								echo '<header class="entry-header page-header"><h2>' . get_field('config_sd_option_label') . '</h2></header>';
							}
							?>
						</div>
					</div>
					<div class="row">
					 <?php $postx_counter = 0; ?>
					<?php while( have_rows('config_sd_options') ): the_row(); 
					$postx_counter++;
					// vars
					$image = get_sub_field('image');
					$label = get_sub_field('label');
					$description = get_sub_field('description');
					?>
					<div class="col-xs-4 col-sm-4 col-md-2 slides zoom" data-post="<?php echo $postx_counter ?>">
						<a href="#" class="pop" title="Popup" data-img-alt="<?php echo str_replace(chr(34), "&rdquo;", $label); ?>" data-img-url="<?php echo $image['url']; ?>" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-expand"></i></a>
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
</div>
 <div class="post-inner-content aga-row row options">
 			<!-- SE Configs -->
        	<div id="configSE" class="col-md-12 type">
            	<?php if( have_rows('config_se_options') ): ?>
					<div class="row">
						<div class="col-md-12">
							<?php
							if(get_field('config_se_options_label')) {
								echo '<header class="entry-header page-header"><h2>' . get_field('config_se_options_label') . '</h2></header>';
							}
							?>
						</div>
					</div>
					<div class="row">
					<?php $postx_counter = 0; ?>
					<?php while( have_rows('config_se_options') ): the_row(); 
					$postx_counter++;
					// vars
					$image = get_sub_field('image');
					$label = get_sub_field('label');
					$description = get_sub_field('description');
					?>
					<div class="col-xs-4 col-sm-4 col-md-2 slides zoom" data-post="<?php echo $postx_counter ?>">
						<a href="#" class="pop" title="Popup" data-img-alt="<?php echo str_replace(chr(34), "&rdquo;", $label); ?>" data-img-url="<?php echo $image['url']; ?>" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-expand"></i></a>
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
 </div>