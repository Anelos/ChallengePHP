<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Challenge PHP de </title>
<?php
include('page/header.php');
 ?>
</head>
<body>

  <?php include('page/navbar.php'); ?>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indic -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('img/slide1.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Title 1</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/slide2.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Title 2</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/slide3.jpg');"></div>
                <div class="carousel-caption">
                    <h2>title 3</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <?php
        if($_SESSION['sliderArrows']==1){
          echo "
        <a class='left carousel-control' href='#myCarousel' data-slide='prev'>
            <span class='icon-prev'></span>
        </a>
        <a class='right carousel-control' href='#myCarousel' data-slide='next'>
            <span class='icon-next'></span>
        </a>";
      }
        ?>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome !
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Lorem ipsum7</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Dolor Sit</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i> Amet</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Repertory Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Last creation</h2>
            </div>
            <div class="portfolio-item col-md-4 col-sm-6">
                <a href="page/repertory.php">
                    <img class="img-responsive img-portfolio img-hover" src="img/portfolio1.jpg" alt="">
                </a>
            </div>
            <div class="portfolio-item col-md-4 col-sm-6">
                <a href="page/repertory.php">
                    <img class="img-responsive img-portfolio img-hover" src="img/portfolio1.jpg" alt="">
                </a>
            </div>
            <div class="portfolio-item col-md-4 col-sm-6">
                <a href="page/repertory.php">
                    <img class="img-responsive img-portfolio img-hover" src="img/portfolio1.jpg" alt="">
                </a>
            </div>
            <div class="portfolio-item col-md-4 col-sm-6">
                <a href="page/repertory.php">
                    <img class="img-responsive img-portfolio img-hover" src="img/portfolio1.jpg" alt="">
                </a>
            </div>
            <div class="portfolio-item col-md-4 col-sm-6">
                <a href="page/repertory.php">
                    <img class="img-responsive img-portfolio img-hover" src="img/portfolio1.jpg" alt="">
                </a>
            </div>
            <div class="portfolio-item col-md-4 col-sm-6">
                <a href="page/repertory.php">
                    <img class="img-responsive img-portfolio img-hover" src="img/portfolio1.jpg" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->


        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
                </div>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <?php
        include('page/footer.php');
         ?>
    <script>
        $('.carousel').carousel({
            interval: 5000
        })
    </script>

</body>

</html>
