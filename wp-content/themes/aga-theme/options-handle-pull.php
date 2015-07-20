        <div class="post-inner-content aga-row row options divider">
        	<!-- Pulls -->
        	<div class="col-md-6 type">
				<?php if( have_rows('pull_options') ): ?>
				
					<div class="row">
						<div class="col-md-12">
							<?php
							if(get_field('pull_option_label')) {
								echo '<header class="entry-header page-header"><h2>' . get_field('pull_option_label') . '</h2></header>';
							}
							?>
						</div>
					</div>
					<div class="row">
					<?php while( have_rows('pull_options') ): the_row(); 
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
        	<!-- Combos -->
        	<div class="col-md-6 type">
            		<!-- Pattern Glass -->
        	<?php if( have_rows('knob_options') ): ?>
					<div class="row">
						<div class="col-md-12">
							<?php
							if(get_field('knob_options_label')) {
								echo '<header class="entry-header page-header"><h2>' . get_field('knob_options_label') . '</h2></header>';
							}
							?>
						</div>
					</div>
					<div class="row">
					<?php while( have_rows('knob_options') ): the_row(); 
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
        <div class="post-inner-content aga-row row options divider">
        	<div class="col-md-6 type">          	
            	<?php if( have_rows('combo_options') ): ?>
					<div class="row">
						<div class="col-md-12">
							<?php
							if(get_field('combo_options_label')) {
								echo '<header class="entry-header page-header"><h2>' . get_field('combo_options_label') . '</h2></header>';
							}
							?>
						</div>
					</div>
					<div class="row">
					<?php while( have_rows('combo_options') ): the_row(); 
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
        	<div class="col-md-6 type">
			</div>
        </div>