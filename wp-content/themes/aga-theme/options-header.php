 <div class="post-inner-content aga-row row options divider">
        	<!-- Swing Header -->
        	<div class="col-md-6 type">
            	<?php if( have_rows('swing_door_header_options') ): ?>
					<div class="row">
						<div class="col-md-12">
							<?php
							if(get_field('swing_option_label')) {
								echo '<header class="entry-header page-header"><h2>' . get_field('swing_option_label') . '</h2></header>';
							}
							?>
						</div>
					</div>
					<div class="row">
					<?php while( have_rows('swing_door_header_options') ): the_row(); 
					// vars
					$image = get_sub_field('image');
					$label = get_sub_field('label');
					$description = get_sub_field('description');
					?>
					<div class="col-xs-12 col-sm-6 col-md-12 slides">
						<img class="img-responsive aga-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
						<div class="acf-label"><?php echo $label; ?></div>
					    <div class="acf-desc"><?php echo $description; ?></div>
					</div>
					<?php endwhile; ?>
				
					</div>
				
				<?php endif; ?>
        	</div>
 			<!-- Sliding Header -->
        	<div class="col-md-6 type">
				<?php if( have_rows('sliding_header_options') ): ?>
				
					<div class="row">
						<div class="col-md-12">
							<?php
							if(get_field('sliding_option_label')) {
								echo '<header class="entry-header page-header"><h2>' . get_field('sliding_option_label') . '</h2></header>';
							}
							?>
						</div>
					</div>
					<div class="row">
					<?php while( have_rows('sliding_header_options') ): the_row(); 
						// vars
						$image = get_sub_field('image');
						$label = get_sub_field('label');
						$description = get_sub_field('description');
						?>
						<div class="col-xs-12 col-sm-6 col-md-12 slides">
							<img class="img-responsive aga-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
							<div class="acf-label"><?php echo $label; ?></div>
					    	<div class="acf-desc"><?php echo $description; ?></div>
						</div>
					<?php endwhile; ?>
					</div>
				<?php endif; ?> 
        	</div>

        </div>	