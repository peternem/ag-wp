        <div class="post-inner-content aga-row row options designer">
        	<!-- Designer Glass - Face Bevel -->
        	<div class="col-md-12">
            	<?php if( have_rows('face_bevel_options') ): ?>
					<div class="row">	
						<div class="col-md-12">
							<?php
							if(get_field('face_bevel_label')) {
								echo '<header class="entry-header page-header"><h2>' . get_field('face_bevel_label') . '</h2></header>';
							}
							?>
						</div>
					</div>
					<div class="row">
					<?php while( have_rows('face_bevel_options') ): the_row(); 
					// vars
					$image = get_sub_field('image');
					$label = get_sub_field('label');
					$description = get_sub_field('description');
					?>
					<div class="col-xs-4 col-sm-4 col-md-2 slides">
						<img class="img-responsive aga-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
						<div class="acf-label"><?php echo $label; ?></div>
					    <div class="acf-desc"><?php echo $description; ?></div>
					</div>
					<?php endwhile; ?>
				
					</div>
				
				<?php endif; ?>
        	</div>
        </div>	
        <div class="post-inner-content aga-row row options divider designer">
        	<div class="col-md-6 type ">
    			<!-- Pattern Glass -->
        	<?php if( have_rows('sandblasting_options') ): ?>
					<div class="row">	
						<div class="col-md-12">
							<?php
							if(get_field('sandblasting_label')) {
								echo '<header class="entry-header page-header"><h2>' . get_field('sandblasting_label') . '</h2></header>';
							}
							?>
						</div>
					</div>
					<div class="row">
					<?php while( have_rows('sandblasting_options') ): the_row(); 
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
        	<!-- AG Originals Glass -->
        	<div class="col-md-6 type">
				<?php if( have_rows('agalite_originals_options') ): ?>
					<div class="row">	
						<div class="col-md-12">
							<?php
							if(get_field('agalite_originals_label')) {
								echo '<header class="entry-header page-header"><h2>' . get_field('agalite_originals_label') . '</h2></header>';
							}
							?>
						</div>
					</div>
					<div class="row">
					<?php while( have_rows('agalite_originals_options') ): the_row(); 
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