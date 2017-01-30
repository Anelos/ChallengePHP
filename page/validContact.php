<?php
include_once('connexion.php');
if(isset($_POST['valid'])){
  var_dump($_POST);
 $id = $_POST['valid'];
 mysqli_query($cnx,"UPDATE contact SET newcontact='0' WHERE id='".$id."'");
}
if(isset($_POST['reject'])){
  $id = $_POST['reject'];
  $req= mysqli_query($cnx,"DELETE FROM contact WHERE id='$id'");
}
header("location:contactGestion.php");
 ?>
