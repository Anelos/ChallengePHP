
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<!-- Left -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/challengePHP/index.php">Start Bootstrap</a>
		</div>
		<!-- Right -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="/challengePHP/index.php">Home</a>
				</li>
				<li>
					<a href="/challengePHP/page/repertory.php">Repertory</a>
				</li>
				<li>
					<a href="/challengePHP/page/about.php">About</a>
				</li>
				<li>
					<a href="/challengePHP/page/contact.php">Contact</a>
				</li>
					<?php

						if(empty($_SESSION['login'])||$_SESSION['login']!= 'OK'){
							echo "<li class='dropdown'>
									<a href='#' class='dropdown-toggle' data-toggle='dropdown'><b>Administration</b> <span class='caret'></span></a>
									<ul id='login-dp' class='dropdown-menu'>
										<li>
											<div class='row'>
											<div class='col-md-12'>
												<form class='form' role='form' method='post' action='/challengePHP/page/login.php' accept-charset='UTF-8' id='login-nav'>
													<div class='form-group'>
														<label class='sr-only' for='exampleInputEmail2'>Nom d&rsquo;utilisateur</label>
														<input type='text' class='form-control' id='exampleInputEmail2' placeholder='Nom d&rsquo;utilisateur' required>
													</div>
													<div class='form-group'>
														<label class='sr-only' for='exampleInputPassword2'>Mot de passe</label>
														<input type='password' class='form-control' id='exampleInputPassword2' placeholder='Mot de passe' required>
													</div>
													<div class='form-group'>
														<button type='submit' class='btn btn-primary btn-block'>Se connecter</button>
													</div>
												</form>
											</div>
										</li>
									</ul>
								</li>";
						} else {
							include_once("connexion.php");
							$req=mysqli_query($cnx,"SELECT count(*) as nbNew FROM contact WHERE newcontact = 1");
							$new=mysqli_fetch_assoc($req);
							$nbNew = ($new['nbNew']!=0)?("<span id='nbNew'>&nbsp;".$new['nbNew']." </span>"):"";
							echo "<li class='dropdown'>
									<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>$nbNew<b>Administration</b><span class='caret'></span></a>
									<ul class='dropdown-menu'>
										<li><a href='/challengePHP/page/customPage.php'>Gestion graphique</a></li>
										<li><a href='/challengePHP/page/contactGestion.php'>Gestion des contacts</a></li></ul></li>
									<li><a href='/challengePHP/page/deconnexion.php'><i class='fa fa-power-off' aria-hidden='true'></i></a></li>";
						}
						?>

			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
</nav>
