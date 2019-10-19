        <div class="post-inner-content aga-row row options designer">
        	<!-- AG Originals Glass -->
        	<div id="agaliteOriginals" class="col-md-12 type">
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
						<div class="col-xs-4 col-sm-4 col-md-2 slides zoom">
							<a href="#" class="pop" title="Popup" data-img-alt="<?php echo str_replace(chr(34), "&rdquo;", $label); ?>" data-img-url="<?php echo $image['url']; ?>" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-expand"></i></a>
							<img class="img-responsive aga-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
							<div class="slide-container">
							<div class="acf-label"><?php echo $label; ?></div>
					    	<div class="acf-desc"><?php echo $description; ?></div>
					    	</div>
						</div>
					<?php endwhile; ?>
					</div>
				<?php endif; ?> 
        	</div>
        	<!-- Designer Glass - Face Bevel -->
        	<div id="faceBevel" class="col-md-12">
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
					<div class="col-xs-4 col-sm-4 col-md-2 slides zoom">
						<a href="#" class="pop" title="Popup" data-img-alt="<?php echo str_replace(chr(34), "&rdquo;", $label); ?>" data-img-url="<?php echo $image['url']; ?>" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-expand"></i></a>
						<img class="img-responsive aga-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
						<div class="slide-container">
						<div class="acf-label"><?php echo $label; ?></div>
					    <div class="acf-desc"><?php echo $description; ?></div>
					    </div>
					</div>
					<?php endwhile; ?>
				
					</div>
				
				<?php endif; ?>
        	</div>
        </div>	
        <div class="post-inner-content aga-row row options designer">
        	<!-- sandBlasted -->
        	<div  id="sandBlasted" class="col-md-12 type ">
    
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
					<div class="col-xs-4 col-sm-4 col-md-2 slides zoom">
						<a href="#" class="pop" title="Popup" data-img-alt="<?php echo str_replace(chr(34), "&rdquo;", $label); ?>" data-img-url="<?php echo $image['url']; ?>" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-expand"></i></a>
						<img class="img-responsive aga-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
						<div class="slide-container">
						<div class="acf-label"><?php echo $label; ?></div>
					    <div class="acf-desc"><?php echo $description; ?></div>
					    </div>
					</div>
					<?php endwhile; ?>
				
					</div>
				
				<?php endif; ?> 				
        	</div>
        </div>