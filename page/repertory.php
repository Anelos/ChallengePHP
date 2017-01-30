<?php
session_start();
include_once('connexion.php');
 ?>

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
include('header.php');
 ?>
</head>
<body>

    <!-- Navigation -->
  <?php  include("navbar.php");?>


    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Repertory</h1>
                <ol class="breadcrumb">
                    <li><a href="../index.php">Home</a>
                    </li>
                    <li class="active">Portfolio</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Friends Row -->
        <div class="row">
          <?php
            $req=mysqli_query($cnx,"SELECT * FROM contact WHERE newcontact='0'");
            while ($data=mysqli_fetch_assoc($req)) {
              $datestr = explode('/',$data['birthday']);
              $btime = mktime(0,0,0, $datestr[1], $datestr[0], $datestr[2]);
              $date = date_create();
              $age =floor((date_timestamp_get($date)-$btime)/60/60/24/365.25);
                echo "<div class='col-md-4 img-portfolio'>";
                echo "<img class='img-responsive img-hover' src='/challengePHP/profil_images/".$data['profil_image']."' alt=''>";
                echo "<h3>".$data['first_name']."</h3>";
                echo "<p>$age ans <span>(".$data['birthday'].")</span></p>";
                echo "<p>".$data['message']."</p>";
                echo "<h4>Games</h4>";
                echo "<table class='table table-striped  table-hover'>";
                echo "<thead><tr>";
                echo "<th>Game</td>";
                echo "<th>Username</td>";
                echo "</tr></thead><tr>";
                echo "<td>".$data['game']."</td>";
                echo "<td>".$data['pseudo']."</td>";
                echo "</tr></table></div>";
            }
          ?>

          </div>


        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <?php
        include('footer.php');
        ?>
</body>

</html>
