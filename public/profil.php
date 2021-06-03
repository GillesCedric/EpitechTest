<?php
session_start();
if (isset($_SESSION['user'])) :
?>
	<!doctype html>
	<html lang="fr">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/profil.css" rel="stylesheet">

		<!-- Bootstrap Js -->
		<script src="../js/bootstrap.bundle.min.js"></script>
		<script src="../js/jquery.min.js"></script>

		<title>Epitech test</title>
	</head>

	<body>
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link active" href="profil.html">Profil</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="library.html">Bibliotheque</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="library.html">Utilisateurs</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../php/profil.php?d=t">Se déconnecter</a>
				</li>
			</ul>
		</nav>
		<form action="../php/profil.php" method="post">
			<div class="row">
				<div class="col-md-6 mx-auto p-0">
					<div class="card">
						<div class="login-box">
							<div class="login-snip">
								<div class="title">
									Mon Profil
								</div>
								<div class="login-space">
									<div class="login">
										<div class="group"> <label for="user" class="label">Nom</label> <input id="user" type="text" class="input" placeholder="Entrer votre nom" name="name" required> </div>
										<div class="group"> <label for="society" class="label">Nom de la société</label> <input id="society" type="text" class="input" placeholder="Entrer le nom de votre société" name="society">
										</div>
										<div class="group"> <label for="email" class="label">Adresse mail</label> <input id="email" type="email" class="input" placeholder="Entrer votre adresse mail" name="email"> </div>
										<div class="group"> <label for="tel" class="label">Numéro de téléphone</label> <input id="tel" type="text" class="input" placeholder="Entrer votre numéro de téléphone" name="phone">
										</div>
										<div class="group"> <input type="submit" class="button" value="Enregistrer" name="submit"> </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</body>

	</html>
<?php
else :
	header("location: http://" . $_SERVER['SERVER_NAME'] . '/epitech/public/');
endif;
?>