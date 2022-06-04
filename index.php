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
	<link rel="stylesheet" href="css/disneyland.css">
	<link rel="icon" href="images/favicon.ico" />
	<title>Disneyland Paris</title>
</head>
<body>
	<center>
		<h1>Programmation de Parcours<br>DISNEYLAND PARIS</h1>

		<!--<a href="index.php?page=0"><img src="images/home.png" height="90" width="90"></a>-->
		<a href="index.php?page=0"><h3>Accueil</h3></a>
		<a href="index.php?page=1"><h3>Parcs</h3></a>
		<a href="index.php?page=2"><h3>Attractions</h3></a>
		<a href="index.php?page=3"><h3>Techniciens</h3></a>
		<a href="index.php?page=4"><h3>Restaurants</h3></a>
		<a href="index.php?page=5"><h3>Restaurateurs</h3></a>
		<a href="index.php?page=6"><h3>Transports</h3></a>
		<a href="index.php?page=7"><h3>Commandes</h3></a>

		<?php 
			if (isset($_GET['page'])){
				$page = $_GET['page'];
			} else {
				$page = 0;
			}
			switch($page){
				case 1 : require_once("parcs.php"); break;
				case 2 : require_once("attractions.php"); break;
				case 3 : require_once("techniciens.php"); break;
				case 4 : require_once("restaurants.php"); break;
				case 5 : require_once("restaurateurs.php"); break;
				case 6 : require_once("transports.php"); break;
				case 7 : require_once("commandes.php"); break;
			}
		?>
	</center>
</body>
</html>