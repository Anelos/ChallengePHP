<?php
include_once 'connexion.php';
session_start();
$req = mysqli_query($cnx, "SELECT linkColor, buttonColor, navbarColor, titleColor, titleFont, sliderArrows, snow FROM graphicoptions WHERE id=(SELECT idGraph FROM user WHERE id='1')");
$data = mysqli_fetch_assoc($req);
foreach ($data as $key => $value) {
    $customization[$key] = $value;
}
$titleColor = isset($customization['titleColor']) ? $customization['titleColor'] : '100,100,100,1';
list($titleRed, $titleGreen, $titleBlue, $titleAlpha) = explode(',', $titleColor);

$buttonColor = isset($customization['buttonColor']) ? $customization['buttonColor'] : '100,100,100,1';
list($buttonRed, $buttonGreen, $buttonBlue, $buttonAlpha) = explode(',', $buttonColor);

$linkColor = isset($customization['linkColor']) ? $customization['linkColor'] : '100,100,100,1';
list($linkRed, $linkGreen, $linkBlue, $linkAlpha) = explode(',', $linkColor);

$navbarColor = isset($customization['navbarColor']) ? $customization['navbarColor'] : '100,100,100,1';
list($navbarRed, $navbarGreen, $navbarBlue, $navbarAlpha) = explode(',', $navbarColor);

$titleFont = isset($customization['titleFont']) ? $customization['titleFont'] : 'roboto';
?>
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
		<?php include('header.php');?>
	</head>
	<body>
		<?php include('navbar.php'); ?>
		<div class='row'>
			<div class='col-lg-12'>
				<h1 class='page-header'>Gestion graphique</h1>
				<ol class='breadcrumb'>
					<li>
						<a href='../index.php'>Home</a>
					</li>
					<li class='active'>Admin/Gestion Graphique</li>
				</ol>
			</div>
		</div>
		<div class='container' id='graph'>
			<form method='post' action='customActionForm.php'>
				<fieldset>
					<legend>Police des titres</legend>
					<div class='col-xs-6 col-sm-6 col-md-6 col-lg-6' id='selectBox'>
						<select name='titleFont' id='selectTag'>
							<option value='roboto' <?php echo ($titleFont == 'roboto')? " selected = 'selected'":""; ?>>Roboto</option>
							<option value='lobster' <?php echo ($titleFont == 'lobster')? " selected = 'selected'":""; ?>>Lobster</option>
							<option value='quicksand' <?php echo ($titleFont == 'quicksand')? " selected = 'selected'":""; ?>>Quicksand</option>
							<option value='slabo' <?php echo ($titleFont == 'slabo')? " selected = 'selected'":""; ?>>Slabo</option>
						</select>
					</div>
        </fieldset>
        <fieldset>
          <legend>Divers</legend>
          <div class='col-xs-6 col-sm-6 col-md-6 col-lg-6' id='hideArrows'>
						<input type="checkbox" name="sliderArrows" value = "1" <?php echo ($customization['sliderArrows']==1)?'checked':'';  ?>><label for="sliderArrows">Cacher les flèches du caroussel</label><br>
            <input type="checkbox" name="snow" value = "1" <?php echo ($customization['snow']==1)?'checked':'';  ?>><label for="snow">Activer la neige</label><br>
					</div>
        </fieldset>
		<!-- Couleur des Titres -->
				<fieldset class='col-xs-12 col-sm-6 col-md-3 col-lg-3'>
					<legend>Titre</legend>
					<div class='form-group col-xs-3 col-sm-3 col-md-3 col-lg-3'>
						<label for='titleRed'>Rouge</label>
						<input type='range' orient='vertical' class='red' min='0' max='255' name='titleRed' value='<?php echo $titleRed ?>' id='titleRed' link-to='titleBoxRed'>
						<input type='number' class='littleBox' id='titleBoxRed' min='0' max='255'>
					</div>
					<div class='form-group col-xs-3 col-sm-3 col-md-3 col-lg-3'>
						<label for='titleGreen'>Vert</label>
						<input type='range' orient='vertical' class='green' min='0' max='255' name='titleGreen' value='<?php echo $titleGreen ?>' id='titleGreen' link-to='titleBoxGreen'>
						<input type='number' class='littleBox' id='titleBoxGreen' min='0' max='255'>
					</div>
					<div class='form-group col-xs-3 col-sm-3 col-md-3 col-lg-3'>
						<label for='titleBlue'>Bleu</label>
						<input type='range' orient='vertical' class='blue' min='0' max='255' name='titleBlue' value='<?php echo $titleBlue ?>' id='titleBlue' link-to='titleBoxBlue'>
						<input type='number' class='littleBox' id='titleBoxBlue'>
					</div>
					<div class='form-group col-xs-3 col-sm-3 col-md-3 col-lg-3' min='0' max='255'>
						<label for='titleAlpha'>Alpha</label>
						<input type='range' orient='vertical' class='alpha' min='0' max='100' name='titleAlpha' value='<?php echo $titleAlpha*100 ?>' id='titleAlpha' link-to='titleBoxAlpha'>
						<input type='number' class='littleBox' id='titleBoxAlpha' min='0' max='100'>
					</div>
				</fieldset>
		<!-- Couleur du header -->
				<fieldset class='col-xs-12 col-sm-6 col-md-3 col-lg-3'>
					<legend>Barre de navigation</legend>
					<div class='form-group col-xs-3 col-sm-3 col-md-3 col-lg-3'>
						<label for='navbarRed'>Rouge</label>
						<input type='range' orient='vertical' class='red' min='0' max='255' name='navbarRed' value='<?php echo $navbarRed ?>' id='navbarRed' link-to='navbarBoxRed'>
						<input type='number' class='littleBox' id='navbarBoxRed' min='0' max='255'>
					</div>
					<div class='form-group col-xs-3 col-sm-3 col-md-3 col-lg-3'>
						<label for='navbarGreen'>Vert</label>
						<input type='range' orient='vertical' class='green' min='0' max='255' name='navbarGreen' value='<?php echo $navbarGreen ?>' id='navbarGreen' link-to='navbarBoxGreen'>
						<input type='number' class='littleBox' id='navbarBoxGreen' min='0' max='255'>
					</div>
					<div class='form-group col-xs-3 col-sm-3 col-md-3 col-lg-3'>
						<label for='navbarBlue'>Bleu</label>
						<input type='range' orient='vertical' class='blue' min='0' max='255' name='navbarBlue' value='<?php echo $navbarBlue ?>' id='navbarBlue' link-to='navbarBoxBlue'>
						<input type='number' class='littleBox' id='navbarBoxBlue' min='0' max='255'>
					</div>
					<div class='form-group col-xs-3 col-sm-3 col-md-3 col-lg-3'>
						<label for='navbarAlpha'>Alpha</label>
						<input type='range' orient='vertical' class='alpha' min='0' max='100' name='navbarAlpha' value='<?php echo $navbarAlpha*100 ?>' id='navbarAlpha' link-to='navbarBoxAlpha'>
						<input type='number' class='littleBox' id='navbarBoxAlpha' min='0' max='100'>
					</div>
				</fieldset>
		<!-- Couleur des Liens -->
				<fieldset class='col-xs-12 col-sm-6 col-md-3 col-lg-3'>
					<legend>Liens</legend>
					<div class='form-group col-xs-3 col-sm-3 col-md-3 col-lg-3'>
						<label for='linkRed'>Rouge</label>
						<input type='range' orient='vertical' class='red' min='0' max='255' name='linkRed' value='<?php echo $linkRed ?>' id='linkRed' link-to='linkBoxRed'>
						<input type='number' class='littleBox' id='linkBoxRed' min='0' max='255'>
					</div>
					<div class='form-group col-xs-3 col-sm-3 col-md-3 col-lg-3'>
						<label for='linkGreen'>Vert</label>
						<input type='range' orient='vertical' class='green' min='0' max='255' name='linkGreen' value='<?php echo $linkGreen ?>' id='linkGreen' link-to='linkBoxGreen'>
						<input type='number' class='littleBox' id='linkBoxGreen' min='0' max='255'>
					</div>
					<div class='form-group col-xs-3 col-sm-3 col-md-3 col-lg-3'>
						<label for='linkBlue'>Bleu</label>
						<input type='range' orient='vertical' class='blue' min='0' max='255' name='linkBlue' value='<?php echo $linkBlue ?>' id='linkBlue' link-to='linkBoxBlue'>
						<input type='number' class='littleBox' id='linkBoxBlue' min='0' max='255'>
					</div>
						<div class='form-group col-xs-3 col-sm-3 col-md-3 col-lg-3'>
						<label for='linkAlpha'>Alpha</label>
						<input type='range' orient='vertical' class='alpha' min='0' max='100' name='linkAlpha' value='<?php echo $linkAlpha*100 ?>' id='linkAlpha' link-to='linkBoxAlpha'>
						<input type='number' class='littleBox' id='linkBoxAlpha' min='0' max='100'>
					</div>
				</fieldset>
		<!-- Couleur des Boutons -->
				<fieldset class='col-xs-12 col-sm-6 col-md-3 col-lg-3'>
					<legend>Boutons</legend>
					<div class='form-group col-xs-3 col-sm-3 col-md-3 col-lg-3'>
						<label for='buttonRed'>Rouge</label>
						<input type='range' orient='vertical' class='red' min='0' max='255' name='buttonRed' value='<?php echo $buttonRed ?>' link-to='buttonBoxRed'>
						<input type='number' class='littleBox' id='buttonBoxRed' min='0' max='255'>
					</div>
					<div class='form-group col-xs-3 col-sm-3 col-md-3 col-lg-3'>
						<label for='buttonGreen'>Vert</label>
						<input type='range' orient='vertical' class='green' min='0' max='255' name='buttonGreen' value='<?php echo $buttonGreen ?>' link-to='buttonBoxGreen'>
						<input type='number' class='littleBox' id='buttonBoxGreen' min='0' max='255'>
					</div>
					<div class='form-group col-xs-3 col-sm-3 col-md-3 col-lg-3'>
						<label for='buttonBlue'>Bleu</label>
						<input type='range' orient='vertical' class='blue' min='0' max='255' name='buttonBlue' value='<?php echo $buttonBlue ?>' link-to='buttonBoxBlue'>
						<input type='number' class='littleBox' id='buttonBoxBlue' min='0' max='255'>
					</div>
					<div class='form-group col-xs-3 col-sm-3 col-md-3 col-lg-3'>
						<label for='buttonAlpha'>Alpha</label>
						<input type='range' orient='vertical' class='alpha' min='0' max='100' name='buttonAlpha' value='<?php echo $buttonAlpha*100 ?>' link-to='buttonBoxAlpha'>
						<input type='number' class='littleBox' id='buttonBoxAlpha' min='0' max='100'>
					</div>
				</fieldset>
				<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12' id='submitBox'>
					<fieldset>
						<input type='submit' class='btn btn-default' name='Modifier' value='Modifier'>
					</fieldset>
				</div>
			</form>


      <hr>
		</div>
    <?php
    include('footer.php');
    ?>
		<script src='../js/custom.js'></script>
	</body>
</html>
