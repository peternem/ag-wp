
				<?php if( have_rows('pull_options') ): ?>
				<div class="post-inner-content aga-row row options">
		        	<!-- Pulls -->
		        	<div id="pullOptions" class="col-md-12 type">
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
						<div class="col-xs-4 col-sm-4 col-md-2 slides zoom">
							<a href="#" class="pop" title="Popup" data-img-alt="<?php echo str_replace(chr(34), "&rdquo;", $label); ?>" data-img-url="<?php echo $image['url']; ?>" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-expand" alt="Popup"></i></a>
							<img class="img-responsive aga-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
							<div class="slide-wp">
							<div class="acf-label"><?php echo $label; ?></div>
					    	<div class="acf-desc"><?php echo $description; ?></div>
					    	</div>
						</div>
					<?php endwhile; ?>
					</div>
					</div>
        		</div>
				<?php endif; ?> 


        	<?php if( have_rows('knob_options') ): ?>
        	<div class="post-inner-content aga-row row options">
        		<!-- Knobs -->
        		<div id="knobOptions" class="col-md-12 type">
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
				    </div>
        		</div>	
				<?php endif; ?> 

                	
            	<?php if( have_rows('combo_options') ): ?>
            	 <div class="post-inner-content aga-row row options">
		        <!-- Combos -->
		        	<div id="comboOptions"class="col-md-12 type"> 
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
					<div class="col-xs-4 col-sm-4 col-md-2 slides zoom">
						<a href="#" class="pop" title="Popup" data-img-alt="<?php echo str_replace(chr(34), "&rdquo;", $label); ?>" data-img-url="<?php echo $image['url']; ?>" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-expand" alt="Popup"></i></a>
						<img class="img-responsive aga-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
						<div class="slide-wp">
						<div class="acf-label"><?php echo $label; ?></div>
					    <div class="acf-desc"><?php echo $description; ?></div>
					    </div>
					</div>
					<?php endwhile; ?>
				
					</div>
				    </div>
        		</div>
				<?php endif; ?>   						
