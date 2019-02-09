<?php $my_query = new WP_Query('name=elegance-style-quality');
    while($my_query->have_posts()){
        $my_query->the_post();
?>
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="10000">
      <!-- Indicators -->
     <?php if( have_rows('carousel_repeater', 'options') ):
         $ind_count = -1;
         ?>

      <ol class="carousel-indicators">
          <?php
          while( have_rows('carousel_repeater', 'options') ): the_row();
                $ind_count++;
                if( $ind_count == 0):
                    $ind_class = "active";
                else:
                    $ind_class = "";
                endif;
          ?>
              <li data-target="#myCarousel" data-slide-to="<?php echo $ind_count; ?>" class="<?php echo $ind_class; ?>"></li>
            <?php endwhile; ?>
      </ol>
    <?php endif; ?>
    <?php if( have_rows('carousel_repeater', 'options') ): ?>
        <div class="carousel-inner" role="listbox">

            <?php
                $slide_count = 0;
                while( have_rows('carousel_repeater', 'options') ): the_row();

                // vars
                $slide_count++;
                $photo = get_sub_field('photo', 'options');
                $title = get_sub_field('title', 'options');
                $sub_title = get_sub_field('sub_title', 'options');
                $link = get_sub_field('button_link', 'options');
                $img_thumb_size = 'full'; // (thumbnail, medium, large, full or custom size)

                if ($link) {
                    $link_url = $link['url'];
                } else {
                    $link_url = "#";
                }
                if( $slide_count == 1):
                    $active_class = "active";
                else:
                    $active_class = "";
                endif;
                ?>
                <div class="item <?php echo $active_class; ?>" data-count="<?php echo "slide-count-".$slide_count; ?>">
                	<?php if( $photo ): ?>
                        <?php echo wp_get_attachment_image( $photo, $img_thumb_size,'', array( "class" => "img-responsive" )); ?>
                	<?php endif; ?>
                    <div class="container">
                      <div class="carousel-caption">

                        <?php if( $title ): ?>
                            <h1><?php echo $title; ?></h1>
                        <?php endif; ?>

                        <?php if( $sub_title ): ?>
                            <p><?php echo $sub_title; ?></p>
                        <?php endif; ?>

                        <?php if( $link ): ?>
                        <p><a class="btn btn-md btn-primary" href="<?php echo $link_url; ?>" role="button">Learn More <i class="fa fa-angle-double-right"></i></a></p>
                        <?php endif; ?>

                      </div>
                    </div>

                </div>
            <?php endwhile; ?>

        </div>
    <?php endif; ?>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
<?php   } ?>
