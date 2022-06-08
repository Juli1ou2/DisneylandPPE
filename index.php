<?php 
	require_once("controleur/controleur_disney.class.php");
	require_once("controleur/config_bdd.php");

	//lancement de la session
	session_start();

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
		<header>
			<div id="en-tete">
				<div id="titre_menu">
					<a href="index.php?page=0"><img src="images/logo.png" width="215" height="61"></a>
					<h1>PROGRAMMATION DE PARCOURS</h1>
				</div>
				<div id="menu">
					<!--<a href="index.php?page=0"><img src="images/home.png" height="90" width="90"></a>-->
					<a href="index.php?page=0"><h3>ACCUEIL</h3></a>
					<a href="index.php?page=1"><h3>PARCS</h3></a>
					<a href="index.php?page=2"><h3>ATTRACTIONS</h3></a>
					<a href="index.php?page=3"><h3>TECHNICIENS</h3></a>
					<a href="index.php?page=4"><h3>RESTAURANTS</h3></a>
					<a href="index.php?page=5"><h3>RESTAURATEURS</h3></a>
					<a href="index.php?page=6"><h3>TRANSPORTS</h3></a>
					<a href="index.php?page=7"><h3>COMMANDES</h3></a>
					<?php if (! isset($_SESSION['email'])){
						echo '<a href="index.php?page=8"><h3>Connexion</h3></a>';
					} else{
						echo '<a href="index.php?page=8"><h3>Déconnexion</h3></a>';
					} ?>
				</div>
			</div>
		</header>

		<?php 
			if (isset($_GET['page'])){
				$page = $_GET['page'];
			} else {
				$page = 0;
			}
			switch($page){
				case 0 : require_once("home.php"); break;
				case 1 : require_once("parcs.php"); break;
				case 2 : require_once("attractions.php"); break;
				case 3 : require_once("techniciens.php"); break;
				case 4 : require_once("restaurants.php"); break;
				case 5 : require_once("restaurateurs.php"); break;
				case 6 : require_once("transports.php"); break;
				case 7 : require_once("commandes.php"); break;
				case 8 :
				if (! isset($_SESSION['email'])){
					require_once("vues/vue_connexion.php"); break;
				} else{
					session_destroy();
					header("Location: index.php?page=8");
				}
			}

			if (isset($_POST['SeConnecter'])){
				$email = $_POST['email'];
				$mdp = $_POST['mdp'];
				$unUser = $unControleur->selectUser($email, $mdp);
				if($unUser == null){
					echo "<br/>Veuillez vérifier vos identifiants !";
				} else{
					echo "Bienvenue ".$unUser['prenom']." ".$unUser['nom']." !";
					//Création de la session user
					$_SESSION['email'] = $unUser['email'];
					$_SESSION['nom'] = $unUser['nom'];
					$_SESSION['prenom'] = $unUser['prenom'];
					$_SESSION['role'] = $unUser['role'];
					//on recharge la page vers le HOME
					header("Location: index.php?page=0");
				}
			}
		?>
	</center>
</body>
</html>