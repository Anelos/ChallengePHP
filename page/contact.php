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
include 'header.php';
 ?>
</head>
<body>
    <!-- Navigation -->
    <?php include 'navbar.php'; ?>
    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact</h1>
                <ol class="breadcrumb">
                    <li><a href="../index.php">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- Content Row -->
        <div class="row">
            <!-- Form Column -->
            <div class="col-md-8 col-lg-8">
                <!-- Contact form -->
                <form name="sentMessage" id="contactForm" method="post" action="contactFormAction.php" enctype="multipart/form-data">
                    <fieldset class="col-md-6 col-lg-6 form-group">
                        <div class="controls">
                            <label>Pseudo principal:</label>
                            <input name="pseudo" type="text" class="form-control" id="pseudo" required data-validation-required-message="Veuillez entrer votre pseudo" maxlength="30" style="resize:none">
                            <p id="alertPseudo">votre pseudo ne doit pas commencer par un chiffre</p>
                        </div>
                        <div class="controls">
                            <label>Prénom:</label>
                            <input name="firstName" type="text" class="form-control" id="firstName" required data-validation-required-message="veuillez entrer votre prénom" maxlength="30" style="resize:none">
                            <p id="alertName">votre prénom ne doit pas comporter de chiffre</p>
                        </div>
                        <div class="controls">
                            <label>Date de naissance:</label>
                            <input name="birthday" type="text" class="form-control" id="birthday" style="resize:none" placeholder="JJ/MM/AAAA">
                            <p id="alertBirth">La date de naissance n'est pas au bon format</p>
                        </div>
                        <div class="controls">
                            <label>Mail:</label>
                            <input name="email" type="email" class="form-control" id="mail" required data-validation-required-message="Veuillez entrer votre adresse mail" maxlength="50" style="resize:none">
                        </div>
                    </fieldset>
                    <fieldset class="col-md-6 col-lg-6 form-group">
                        <div class="controls" id="profil_image">
                            <img id="yourImage" src="/challengePHP/img/defaultProfileImage.png" alt="your image" />
                        </div>
                        <input type='file' name='uploadImage' id='uploadIlimage'>
                        <p id="alertFileSize">Votre image est trop grosse</p>
                        <p id="alertFileFormat">votre fichier n'est pas au bon format</p>
                    </fieldset>
                    <fieldset class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <legend><b>Jeux</b></legend>
                        <div class="col-md-4 col-lg-4 col-sm-6">
                            <input type="checkbox" name="game[]" value="World of Warcraft">World of Warcraft<br>
                            <input type="checkbox" name="game[]" value="Diablo III">Diablo III<br>
                            <input type="checkbox" name="game[]" value="Overwatch">Overwatch<br>
                            <input type="checkbox" name="game[]" value="Heroes of the Storm">Heroes of the Storm<br>
                            <input type="checkbox" name="game[]" value="Civilization VI">Civilization VI<br>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-6">
                            <input type="checkbox" name="game[]" value="Borderland II">Borderland II<br>
                            <input type="checkbox" name="game[]" value="Heartstone">Heartstone<br>
                            <input type="checkbox" name="game[]" value="StarCraft II">StarCraft II<br>
                            <input type="checkbox" name="game[]" value="Age of Empire II">Age of Empire II<br>
                            <input type="checkbox" name="game[]" value="Mariokart">Mariokart<br>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-6">
                            <input type="checkbox" name="game[]" value="Smashbros">Smashbros<br>
                            <input type="checkbox" name="game[]" value="The Lord of the Ring Online">The Lord of the Ring Online<br>
                            <input type="checkbox" name="game[]" value="The ElderScroll Online">The ElderScroll Online<br>
                            <input type="checkbox" name="game[]" value="Final Fantasy XIV">Final Fantasy XIV<br>
                            <input type="checkbox" name="game[]" value="SWOTOR">SWOTOR<br>
                        </div>
                    </fieldset>
                    <fieldset class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <br>
                      <label for="message">Votre message</label>
                      <textarea class="form-control" name="message" rows="5"></textarea>
                    </fieldset>
                    <div class = "col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <input class='btn' type="submit" name="submit" id="submit">
                  </div>
                </form>
            </div>
        </div>
        <!-- /.row -->
        <hr>
        <!-- Footer -->
        <?php
        include 'footer.php';
        ?>
    <script src=../js/contactform.js></script>

</body>

</html>
