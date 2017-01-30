<!DOCTYPE html>
<html lang='fr'>
	<head>
		<meta charset='utf-8'>
		<meta http-equiv='X-UA-Compatible' content='IE=edge'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<meta name='description' content=''>
		<meta name='author' content=''>

		<title>Challenge PHP de </title>
		<!-- Bootstrap Core CSS -->
		<?php include 'header.php'; ?>
	</head>
	<body>
		<?php include 'navbar.php'; ?>
		<div class='row'>
			<div class='col-lg-12'>
				<h1 class='page-header'>Gestion graphique</h1>
				<ol class='breadcrumb'>
					<li>
						<a href='../index.php'>Home</a>
					</li>
					<li class='active'>Admin/Gestion des contacts</li>
				</ol>
			</div>
		</div>
		<div class='container' id='cont'>
      <div class='row'>
      <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
      <h3>Nouveaux contacts</h3>
<?php
include_once 'connexion.php';
// Demande de confirmation d'effacement
if(isset($_POST['erase'])){
  $req=mysqli_query($cnx,"SELECT pseudo FROM contact WHERE id='".$_POST['erase']."' ");
  $pseudo=mysqli_fetch_assoc($req);
  echo "<div id='confirm'>";
  echo "<h3>Suppression d'un contact</h3>";
  echo "<p>êtes vous sur de vouloir supprimer ".$pseudo['pseudo']."?</p>";
  echo "<form method='post' action='#'>";
  echo "<button class='btn' type='submit' name='delete' value=".$_POST['erase'].">OUI</button>";
  echo "<button class='btn' type='submit' name='delete' value='NO'>NON</button>";
  echo "</form></div>";
}
// effacement d'un contact
if(isset($_POST['delete'])){
  $req= mysqli_query($cnx,"SELECT profil_image FROM contact WHERE id='".$_POST['delete']."'");
  $images = mysqli_fetch_assoc($req);
  unlink("/challengePHP/profil_images/".$image['profil_image']);
  mysqli_query($cnx,"DELETE FROM contact WHERE id='".$_POST['delete']."'");
}

//affichage des nouveaux contacts
$reqNew = mysqli_query($cnx, "SELECT * FROM contact WHERE newcontact='1'");
if ($reqNew) {
    while ($data = mysqli_fetch_assoc($reqNew)) {
        echo "<div class='id-card col-xs-12 col-sm-6 col-md-4 col-lg-4'>";
        echo "<div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>";
        echo '<h4>'.$data['pseudo'].'</h4>';
        echo '<p>'.$data['first_name'].'</p>';
        echo '<p>'.$data['birthday'].'</p>';
        echo '<p>'.$data['email'].'</p></div>';
        echo "<div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>";
        echo "<div class='image'>";
        echo "<img src='/challengePHP/profil_images/".$data['profil_image']."'>";
        echo '</div></div>';
        echo "<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>";
        echo '<p>'.$data['game'].'</p>';
        echo '<p>'.$data['message'].'</p>';
        echo "<form action='validContact.php' method='post'>";
        echo "<button class='btn' type='submit' value='".$data['id']."' name='valid'>Valider</button>";
        echo "<button class='btn' type='submit' value='".$data['id']."' name='reject'>Refuser</button>";
        echo '</form></div></div>';
    }
} else {
    echo '<p>PAS DE NOUVEAUX CONTACTS</p>';
}
 ?>
</div>
<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
<h3>Gerer les contacts</h3>
<table id="contactTable">
<tr>
  <th>pseudo</th>
  <th>prénom</th>
  <th>anniversaire</th>
  <th>email</th>
  <th>jeux</th>
  <th>message</th>
</tr>
<?php
$req = mysqli_query($cnx, "SELECT * FROM contact WHERE newcontact='0'");
while ($data = mysqli_fetch_assoc($req)) {
    if (isset($_POST['modif']) && ($_POST['modif'] == $data['id'])) {
        echo "<tr><form method='post' action = 'modif.php'>";
        echo '<td><input type="text" name="pseudo" value='.$data['pseudo'].'></td>';
        echo '<td><input type="text" name="first_name" value='.$data['first_name'].'></td>';
        echo '<td><input type="text" name="birthday" value='.$data['birthday'].'></td>';
        echo '<td><input type="email" name="email" value='.$data['email'].'></td>';
        echo '<td><input type="text" name="game" value='.$data['game'].'></td>';
        echo '<td><input type="text" name="message" value='.$data['message'].'></td>';
        echo '<td>';
        echo "<button class='btn' type='submit' value='".$data['id']."' name='modif'>Modifier</button>";
        echo '</td>';
        echo '</form></tr>';
    } else {
        echo "<tr>";
        echo '<td>'.$data['pseudo'].'</td>';
        echo '<td>'.$data['first_name'].'</td>';
        echo '<td>'.$data['birthday'].'</td>';
        echo '<td>'.$data['email'].'</td>';
        echo '<td>'.$data['game'].'</td>';
        echo '<td>'.$data['message'].'</td>';
        echo "<td class='btnTd'><form action='#' method='post'>";
        echo "<button class='btn' type='submit' value='".$data['id']."' name='modif'>Modifier</button>";
        echo "<button class='btn' type='submit' value='".$data['id']."' name='erase'>Effacer</button>";
        echo '</td>';
        echo '</form></tr>';
    }
}

?>
</table>






</div>
</div>

      <?php
      include 'footer.php';
      ?>
    </body>
  </html>
