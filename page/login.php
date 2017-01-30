<?php
include_once("connexion.php");
session_start();
$post_password = isset($_POST["password"])?$_POST["password"]:"";
$post_username = isset($_POST["username"])?$_POST["username"]:"";
$req = mysqli_query($cnx,"SELECT * FROM user WHERE username='".$post_username."' AND password='".$post_password."'");
if($req){
$_SESSION['login'] = "OK";
}
mysqli_close($cnx);
header('location: /challengePHP/index.php');

?>
