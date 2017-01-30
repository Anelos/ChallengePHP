<?php
include("connexion.php");
$id = $_POST['id'];

if(isset($id)){
  $req = mysqli_query($cnx,"SELECT profil_image FROM contact WHERE id='$id'");
  $data = mysqli_fetch_assoc($req);
  unlink("/challengePHP/profil_images/".$data['profil_image']);
  $req = mysqli_query($cnx,"DELETE FROM contact WHERE id='$id'");
}
mysqli_close();
 ?>
