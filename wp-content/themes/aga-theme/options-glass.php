        <div class="post-inner-content aga-row row glass options">
        	<!-- Clear Glass -->
        	<div id="clearGlass" class="col-md-12 type">
				<?php if( have_rows('clear_glass_options') ): ?>
				
					<div class="row">
						<div class="col-md-12">
							<?php
							if(get_field('clear_glass_label')) {
								echo '<header class="entry-header page-header"><h2>' . get_field('clear_glass_label') . '</h2></header>';
							}
							?>
						</div>
					</div>
					<div class="row">
					<?php while( have_rows('clear_glass_options') ): the_row(); 
						// vars
						$image = get_sub_field('image');
						$label = get_sub_field('label');
						$description = get_sub_field('description');
						?>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 slides zoom">
							<a href="#" class="pop" title="Popup" data-img-alt="<?php echo $label; ?>" data-img-url="<?php echo $image['url']; ?>" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-expand"></i></a>
							<img class="img-responsive aga-img" src="<?php echo $image['url']; ?>" alt="<?php echo $label; ?>" />
							<div class="acf-label"><?php echo $label; ?></div>
					    	<div class="acf-desc"><?php echo $description; ?></div>
						</div>
					<?php endwhile; ?>
					</div>
				<?php endif; ?> 
        	</div>
        	<!-- Tinted Glass -->
        	<div id="tintedGlass" class="col-md-12 type">
            	<?php if( have_rows('tinted_glass_options') ): ?>
					<div class="row">
						<div class="col-md-12">
							<?php
							if(get_field('tinted_glass_label')) {
								echo '<header class="entry-header page-header"><h2>' . get_field('tinted_glass_label') . '</h2></header>';
							}
							?>
						</div>
					</div>
					<div class="row">
					<?php while( have_rows('tinted_glass_options') ): the_row(); 
					// vars
					$image = get_sub_field('image');
					$label = get_sub_field('label');
					$description = get_sub_field('description');
					?>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 slides zoom">
						<a href="#" class="pop" title="Popup" data-img-alt="<?php echo $label; ?>" data-img-url="<?php echo $image['url']; ?>" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-expand"></i></a>
						<img class="img-responsive aga-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
						<div class="acf-label"><?php echo $label; ?></div>
					    <div class="acf-desc"><?php echo $description; ?></div>
					</div>
					<?php endwhile; ?>
				
					</div>
				
				<?php endif; ?>
        	</div>
        </div>	
        <div class="post-inner-content aga-row row options glass">
        	<!-- Pattern Glass -->
        	<div id="patternGlass" class="col-md-12 type">
    			
        	<?php if( have_rows('pattern_glass_options') ): ?>
					<div class="row">
						<div class="col-md-12">
							<?php
							if(get_field('pattern_glass_label')) {
								echo '<header class="entry-header page-header"><h2>' . get_field('pattern_glass_label') . '</h2></header>';
							}
							?>
						</div>
					</div>
					<div class="row">
					<?php while( have_rows('pattern_glass_options') ): the_row(); 
					// vars
					$image = get_sub_field('image');
					$label = get_sub_field('label');
					$description = get_sub_field('description');
					?>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 slides zoom">
						<a href="#" class="pop" title="Popup" data-img-alt="<?php echo $label; ?>" data-img-url="<?php echo $image['url']; ?>" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-expand"></i></a>
						<img class="img-responsive aga-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
						<div class="acf-label"><?php echo $label; ?></div>
					    <div class="acf-desc"><?php echo $description; ?></div>
					</div>
					<?php endwhile; ?>
				
					</div>
				
				<?php endif; ?> 				
        	</div>
        	<!-- Berman Glass -->
        	<div id="bermanGlassEditions" class="col-md-12 type">
        		
				 <?php if( have_rows('berman_glass_options') ): ?>
				<div class="row">
					<div class="col-md-12">
						<?php
							if(get_field('berman_glass_label')) {
								echo '<header class="entry-header page-header"><h2>' . get_field('berman_glass_label') . '</h2></header>';
							}
							?>
					</div>
				</div>
				<div class="row">
				<?php while( have_rows('berman_glass_options') ): the_row(); 
				// vars
				$image = get_sub_field('image');
				$label = get_sub_field('label');
				$description = get_sub_field('description');
				?>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 slides zoom">
					<a href="#" class="pop" title="Popup" data-img-alt="<?php echo $label; ?>" data-img-url="<?php echo $image['url']; ?>" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-expand"></i></a>
					<img class="img-responsive aga-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
					<div class="acf-label"><?php echo $label; ?></div>
					<div class="acf-desc"><?php echo $description; ?></div>
				</div>
				<?php endwhile; ?>
			
				</div>
			
			<?php endif; ?>   
			</div>
        </div>

        