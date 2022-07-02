<!-- Slider starts -->
            <div class="hero-title test-border">
              <p class="paragraph-title"> Selamat datang di Petshopku </p>
            </div>  

            <div class="container-parallax-slider">
      <div class="parallax-slider">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
       
            <ol class="carousel-indicators">
              <?php
              for ($i=0; $i < 4; $i++) { ?>
              <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i; ?>"<?php if($i == 0){echo ' class="active"';} ?>></li>
              <?php
              } ?>
            </ol>

           
            <div class="carousel-inner">
              <?php
              for ($i=1; $i <= 4; $i++) { ?>
                <div class="item<?php if($i == 1){echo " active";} ?>">
                  <img src="img/slide2/<?php echo $i; ?>.jpg" alt="..." width="100%" style="height:500px;">
                </div>
              <?php
              } ?>
            </div>

    
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
            </div>
  </div>
  </div>
<!-- Slider ends -->
