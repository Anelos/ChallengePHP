<?php
include_once('connexion.php');
$req = mysqli_query($cnx,"UPDATE contact SET pseudo='".$_POST['pseudo']."', first_name = '".$_POST['first_name']."', birthday='".$_POST['birthday']."', email='".$_POST['email']."', game='".$_POST['game']."', message='".$_POST['message']."' WHERE id='".$_POST['modif']."'");
header("location:contactGestion.php");
?>
