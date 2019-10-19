<?php if( have_rows('standard_sd_finishes_options') ): ?>        
	<div class="post-inner-content aga-row row metal options">
        	<!-- standard_sd_finishes_options -->
        	<div id="standardSwingFinishes" class="col-md-12 type">

					<div class="row">
						<div class="col-md-12">
							<?php
							if(get_field('standard_sd_finishes_option_label')) {
								echo '<header class="entry-header page-header"><h2>' . get_field('standard_sd_finishes_option_label') . '</h2></header>';
							}
							?>
						</div>
					</div>
					<div class="row">
					<?php while( have_rows('standard_sd_finishes_options') ): the_row(); 
						// vars
						$image = get_sub_field('image');
						$label = get_sub_field('label');
						$description = get_sub_field('description');
						?>
						<div class="col-xs-4 col-sm-2  col-md-2 slides">
							<img class="img-responsive aga-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
							<div class="acf-label"><?php echo $label; ?></div>
					    	<div class="acf-desc"><?php echo $description; ?></div>
						</div>
					<?php endwhile; ?>
					</div>

        	</div>
        </div>
<?php endif; ?> 
<?php if( have_rows('special_order_swing_options') ): ?>
        <div class="post-inner-content aga-row row metal options">
        	<!-- special_order_swing_options -->
        	<div id="specialOrderSwingFinishes" class="col-md-12 type">
    			
        	
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
					<div class="row">
						<div class="col-md-12">
							<?php
							if(get_field('special_order_sd_disclaimer')) {
								echo '<p class="text-center">' . get_field('special_order_sd_disclaimer') . '</p>';
							}
							?>
						</div>
					</div>
				
								
        	</div>
        </div>
<?php endif; ?> 
<?php if( have_rows('standard_sliding_finish_options') ): ?>
        <div class="post-inner-content aga-row row metal options">
        	<!-- standard_sliding_finish_options -->
        	<div id="standardSlidingFinishes" class="col-md-12 type">
            	
					<div class="row">
						<div class="col-md-12">
							<?php
							if(get_field('standard_sliding_finishes_label')) {
								echo '<header class="entry-header page-header"><h2>' . get_field('standard_sliding_finishes_label') . '</h2></header>';
							}
							?>
						</div>
					</div>
					<div class="row">
					<?php while( have_rows('standard_sliding_finish_options') ): the_row(); 
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
				
				
        	</div>
        </div>	
<?php endif; ?>   
<?php if( have_rows('special_order_se_options') ): ?>     
        <div class="post-inner-content aga-row row metal options">
                <!-- special_order_sliding_options -->
        	<div id="specialOrderSlidingFinishes" class="col-md-12 type">
    			
        	
					<div class="row">
						<div class="col-md-12">
							<?php
							if(get_field('standard_se_finishes_label')) {
								echo '<header class="entry-header page-header"><h2>' . get_field('standard_se_finishes_label') . '</h2></header>';
							}
							?>
						</div>
					</div>
					<div class="row">
					<?php while( have_rows('special_order_se_options') ): the_row(); 
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
					<div class="row">
						<div class="col-md-12">
							<?php
							if(get_field('special_order_se_disclaimer')) {
								echo '<p class="text-center">' . get_field('special_order_se_disclaimer') . '</p>';
							}
							?>
						</div>
					</div>
				
								
        	</div>
        </div>
<?php endif; ?> 