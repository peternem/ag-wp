<?php $my_query = new WP_Query('name=elegance-style-quality');
    while($my_query->have_posts()){
        $my_query->the_post();
?>
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="/wp-content/uploads/2015/06/ESD290-4609.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Elegance, Style, Quality</h1>
              <p>Welcome to Agalite. Agalite Shower Doors Are The Focal Point Of Bathroom Design.</p>
              <p><a class="btn btn-md btn-primary" href="#welcome" role="button">Learn More <i class="fa fa-angle-double-right"></i></a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="/wp-content/uploads/2015/06/2A-Photo-SSE-3767.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>The Collections</h1>
              <p>Agalite Offers Five Different Collections To Complement Any Bathroom Design</p>
              <p><a class="btn btn-md btn-primary" href="#collections" role="button">Learn More <i class="fa fa-angle-double-right"></i></a></p>
            </div>
          </div>
        </div>
         <div class="item">
          <img class="third-slide" src="/wp-content/uploads/2015/10/ASD-5182-1920x1080.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>The Collections</h1>
              <p>Agalite Offers Five Different Collections To Complement Any Bathroom Design</p>
              <p><a class="btn btn-md btn-primary" href="#collections" role="button">Browse Gallery <i class="fa fa-angle-double-right"></i></a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="fourth-slide" src="/wp-content/uploads/2015/06/2B-Photo-SESD180-4564.jpg" alt="Forth slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Heavy Glass Hardware</h1>
              <p>Featuring 1/2" or 3/8" Frameless Heavy Glass Shower Doors Hardware</p>
              <p><a class="btn btn-md btn-primary" href="#hardware" role="button">Browse Gallery <i class="fa fa-angle-double-right"></i></a></p>
            </div>
          </div>
        </div>
      </div>
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