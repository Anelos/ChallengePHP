<?php
include_once("connexion.php");

$titleColor = $_POST["titleRed"].",".$_POST["titleGreen"].",".$_POST["titleBlue"].",".((float)$_POST["titleAlpha"]/100);
$navbarColor = $_POST["navbarRed"].",".$_POST["navbarGreen"].",".$_POST["navbarBlue"].",".((float)$_POST["navbarAlpha"]/100);
$linkColor = $_POST["linkRed"].",".$_POST["linkGreen"].",".$_POST["linkBlue"].",".((float)$_POST["linkAlpha"]/100);
$buttonColor = $_POST["buttonRed"].",".$_POST["buttonGreen"].",".$_POST["buttonBlue"].",".((float)$_POST["buttonAlpha"]/100);
$arrows = isset($_POST['sliderArrows'])?1:0;
$snow = isset($_POST['snow'])?1:0;
$titleFont = $_POST['titleFont'];

$req=mysqli_query($cnx,"SELECT COUNT(*) as nbRows FROM graphicoptions");
$count = mysqli_fetch_assoc($req);

if ($count['nbRows'] < 10){
  $req=mysqli_query($cnx,"INSERT INTO graphicoptions (titleColor, buttonColor, linkColor, navbarColor, titleFont, sliderArrows, snow) VALUES ('$titleColor','$buttonColor','$linkColor', '$navbarColor','$titleFont','$arrows', '$snow')");
} else {
  $req=mysqli_query($cnx,"UPDATE graphicoptions SET titleColor='$titleColor', buttonColor='$buttonColor', linkColor='$linkColor', navbarColor='$navbarColor', titleFont='$titleFont', sliderArrows='$arrows', snow='$snow' ORDER BY updateDate ASC LIMIT 1");
}
$req = mysqli_query($cnx,"UPDATE user SET idGraph = ( SELECT id FROM graphicoptions ORDER BY updateDate DESC LIMIT 1 )");
mysqli_close($cnx);
header('location:/challengePHP/page/customPage.php');
 ?>
