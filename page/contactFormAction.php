<?php
include_once('connexion.php');

$target_dir = $_SERVER["DOCUMENT_ROOT"]."/challengePHP/profil_images/";
$gameStr = "";

$req = mysqli_query($cnx,"INSERT INTO contact(pseudo, first_name, birthday, email, game, profil_image) VALUES ('test', 'test', '12/12/1900', 'test.test@test.test', 'test;test', 'test.jpg')");

$req= mysqli_query($cnx,"SELECT id FROM contact WHERE email = 'test.test@test.test'");
$data = mysqli_fetch_assoc($req);
$id = $data['id'];

$pseudo = mysqli_real_escape_string($cnx,$_POST["pseudo"]);
$firstName = mysqli_real_escape_string($cnx,$_POST["firstName"]);
$birthday = mysqli_real_escape_string($cnx,$_POST["birthday"]);
$email = mysqli_real_escape_string($cnx,$_POST["email"]);
$message = mysqli_real_escape_string($cnx,$_POST["message"]);
$games = $_POST["game"];
foreach ($games as $value) {
  $gameStr .= $value.";";
}
$gameStr= mysqli_real_escape_string($cnx, $gameStr);

$temp = explode(".", $_FILES["uploadImage"]["name"]);
$newfilename = "profilImageID".$id.'.'.end($temp);
move_uploaded_file($_FILES["uploadImage"]["tmp_name"], $target_dir.$newfilename);

$req = mysqli_query($cnx,"UPDATE contact SET pseudo='$pseudo' , first_name='$firstName', birthday='$birthday', email='$email' , game = '$gameStr', profil_image='$newfilename', message='$message' WHERE id='$id'");

$to      = 'civodul.teros@gmail.com';
$subject = 'Vous avez un nouveau contact';
$message = "Bonjour !, $firstname aka $pseudo s'est inscrit dans vos contacts";
$headers = 'From: monsite.server.com' . "\r\n" .
'Reply-To: webmaster@server.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

header("location:contact.php");

 ?>
