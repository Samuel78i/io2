<?php
	session_start();
?>



<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/informations.css">
	<title>Informations</title>
</head>

<body>
	<header>
		<div class="header">
			<a class="NomDuSite "href="accueil.php">Card<span>Games</span></a>
			<img src="img/question.jpg" width=100% height="400">
			<div class="nav">
				<ul>
					<li><a href="accueil.php">Accueil</a></li>
					<li><a href="jouer.php">Jouer</a></li>
					<li><a href="#">Informations</a></li>
					<li><a href="connexion.php">Connexion</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</div>
		</div>

	</header>

	<div class="infoPerso">
		<p> <?php if($_SESSION['connecte']==true){echo "Pseudo : ", $_SESSION['Pseudo'];}?> </p>
		<p> <?php if($_SESSION['connecte']==true){echo "email : ", $_SESSION['email'];} ?> </p>
		<p> <?php if($_SESSION['connecte']==true){echo "Vous êtes : ", $_SESSION['sexe'];} ?> </p>
	</div>




</body>

</html>