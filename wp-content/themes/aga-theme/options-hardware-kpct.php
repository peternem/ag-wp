
				<?php if( have_rows('hardware_pull_options') ): ?>
				<div class="post-inner-content aga-row row options">
		        	<!-- Pulls -->
		        	<div id="pull_options" class="col-md-12 type">
					<div class="row">
						<div class="col-md-12">
							<?php
							if(get_field('hardware_pull_option_label')) {
								echo '<header class="entry-header page-header"><h2>' . get_field('hardware_pull_option_label') . '</h2></header>';
							}
							?>
						</div>
					</div>
					<div class="row">
					<?php while( have_rows('hardware_pull_options') ): the_row(); 
						// vars
						$image = get_sub_field('image');
						$label = get_sub_field('label');
						$description = get_sub_field('description');
						?>
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 slides zoom">
							<a href="#" class="pop" title="Popup" data-img-alt="<?php echo str_replace(chr(34), "&rdquo;", $label); ?>" data-img-url="<?php echo $image['url']; ?>" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-expand" alt="Popup"></i></a>
							<img class="img-responsive aga-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
							<div class="acf-label"><?php echo $label; ?></div>
					    	<div class="acf-desc"><?php echo $description; ?></div>
						</div>
					<?php endwhile; ?>
					</div>
					</div>
        		</div>
				<?php endif; ?> 


        	<?php if( have_rows('hardware_knob_options') ): ?>
        	<div class="post-inner-content aga-row row options">
        		<!-- Knobs -->
        		<div id="knob_options" class="col-md-12 type">
					<div class="row">
						<div class="col-md-12">
							<?php
							if(get_field('hardware_knob_option_label')) {
								echo '<header class="entry-header page-header"><h2>' . get_field('hardware_knob_option_label') . '</h2></header>';
							}
							?>
						</div>
					</div>
					<div class="row">
					<?php while( have_rows('hardware_knob_options') ): the_row(); 
					// vars
					$image = get_sub_field('image');
					$label = get_sub_field('label');
					$description = get_sub_field('description');
					?>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 slides zoom">
						<a href="#" class="pop" title="Popup" data-img-alt="<?php echo $label; ?>" data-img-url="<?php echo $image['url']; ?>" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-expand" alt="Popup"></i></a>
						<img class="img-responsive aga-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
						<div class="acf-label"><?php echo $label; ?></div>
					    <div class="acf-desc"><?php echo $description; ?></div>
					</div>
					<?php endwhile; ?>
				
					</div>
				    </div>
        		</div>	
				<?php endif; ?> 

                	
            	<?php if( have_rows('hardware_combo_options') ): ?>
            	 <div class="post-inner-content aga-row row options">
		        <!-- Combos -->
		        	<div id="combo_options"class="col-md-12 type"> 
					<div class="row">
						<div class="col-md-12">
							<?php
							if(get_field('hardware_combo_option_label')) {
								echo '<header class="entry-header page-header"><h2>' . get_field('hardware_combo_option_label') . '</h2></header>';
							}
							?>
						</div>
					</div>
					<div class="row">
					<?php while( have_rows('hardware_combo_options') ): the_row(); 
					// vars
					$image = get_sub_field('image');
					$label = get_sub_field('label');
					$description = get_sub_field('description');
					?>
					<div class="col-xs-4 col-sm-4 col-md-2 slides zoom">
						<a href="#" class="pop" title="Popup" data-img-alt="<?php echo str_replace(chr(34), "&rdquo;", $label); ?>" data-img-url="<?php echo $image['url']; ?>" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-expand" alt="Popup"></i></a>
						<img class="img-responsive aga-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
						<div class="acf-label"><?php echo $label; ?></div>
					    <div class="acf-desc"><?php echo $description; ?></div>
					</div>
					<?php endwhile; ?>
				
					</div>
				    </div>
        		</div>
				<?php endif; ?>   
				<?php if( have_rows('hardware_tbar_options') ): ?>
				 <div class="post-inner-content aga-row row options">
				 			<!-- Sliding Header -->
				        	<div id="hardware_tbar_options" class="col-md-12 type">
								
								
									<div class="row">
										<div class="col-md-12">
											<?php
											if(get_field('hardware_tbar_option_label')) {
												echo '<header class="entry-header page-header"><h2>' . get_field('hardware_tbar_option_label') . '</h2></header>';
											}
											?>
										</div>
									</div>
									<div class="row">
									<?php while( have_rows('hardware_tbar_options') ): the_row(); 
										// vars
										$image = get_sub_field('image');
										$label = get_sub_field('label');
										$description = get_sub_field('description');
										?>
										<div class="col-xs-12 col-sm-6 col-md-6 slides">
											<img class="img-responsive aga-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
											<div class="acf-label"><?php echo $label; ?></div>
									    	<div class="acf-desc"><?php echo $description; ?></div>
										</div>
									<?php endwhile; ?>
									</div>
								
				        	</div>
				
				        </div>
				<?php endif; ?> 						
