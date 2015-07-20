        <div class="post-inner-content aga-row row metal options divider">
        	<!-- Clear Glass -->
        	<div class="col-md-6 type">
				<?php if( have_rows('standard_finishes_option') ): ?>
					<div class="row">
						<div class="col-md-12">
							<?php
							if(get_field('standard_finishes_option_label')) {
								echo '<header class="entry-header page-header"><h2>' . get_field('standard_finishes_option_label') . '</h2></header>';
							}
							?>
						</div>
					</div>
					<div class="row">
					<?php while( have_rows('standard_finishes_option') ): the_row(); 
						// vars
						$image = get_sub_field('image');
						$label = get_sub_field('label');
						$description = get_sub_field('description');
						?>
						<div class="col-xs-4 col-sm-4 col-md-4 slides">
							<img class="img-responsive aga-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
							<div class="acf-label"><?php echo $label; ?></div>
					    	<div class="acf-desc"><?php echo $description; ?></div>
						</div>
					<?php endwhile; ?>
					</div>
				<?php endif; ?> 
        	</div>
        	<!-- Tinted Glass -->
        	<div class="col-md-6 type">
            	<?php if( have_rows('special_order_sliding_options') ): ?>
					<div class="row">
						<div class="col-md-12">
							<?php
							if(get_field('special_order_sliding_label')) {
								echo '<header class="entry-header page-header"><h2>' . get_field('special_order_sliding_label') . '</h2></header>';
							}
							?>
						</div>
					</div>
					<div class="row">
					<?php while( have_rows('special_order_sliding_options') ): the_row(); 
					// vars
					$image = get_sub_field('image');
					$label = get_sub_field('label');
					$description = get_sub_field('description');
					?>
					<div class="col-xs-4 col-sm-4 col-md-4 slides">
						<img class="img-responsive aga-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
						<div class="acf-label"><?php echo $label; ?></div>
					    <div class="acf-desc"><?php echo $description; ?></div>
					</div>
					<?php endwhile; ?>
				
					</div>
				
				<?php endif; ?>
        	</div>
        </div>	
        <div class="post-inner-content aga-row row options metal">
        	<div class="col-md-12 type">
    			<!-- Pattern Glass -->
        	<?php if( have_rows('special_order_swing_options') ): ?>
					<div class="row">
						<div class="col-md-12">
							<?php
							if(get_field('special_order_swing_label')) {
								echo '<header class="entry-header page-header"><h2>' . get_field('special_order_swing_label') . '</h2></header>';
							}
							?>
						</div>
					</div>
					<div class="row">
					<?php while( have_rows('special_order_swing_options') ): the_row(); 
					// vars
					$image = get_sub_field('image');
					$label = get_sub_field('label');
					$description = get_sub_field('description');
					?>
					<div class="col-xs-4 col-sm-2 col-md-2 slides">
						<img class="img-responsive aga-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
						<div class="acf-label"><?php echo $label; ?></div>
					    <div class="acf-desc"><?php echo $description; ?></div>
					</div>
					<?php endwhile; ?>
				
					</div>
				
				<?php endif; ?> 				
        	</div>
        	<div class="col-md-6 type">
			</div>
        </div>