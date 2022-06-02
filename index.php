<?php 
	require_once("controleur/controleur.class.php");
	require_once("controleur/config_bdd.php");

	//instanciation du controleur
	$unControleur = new Controleur($serveur, $bdd, $user, $mdp);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Disneyland Paris</title>
</head>
<body>
	<center>
		<h1>Billeterie DISNEYLAND PARIS</h1>
	</center>
</body>
</html>