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
					<a href="index.php?page=0"><img src="images/logo.png" width="136.5" height="39.5"></a>
					<!-- <h1>Programmation de Parcours</h1> -->
				</div>
				<div id="menu">
					<!--<a href="index.php?page=0"><img src="images/home.png" height="90" width="90"></a>-->
					<!-- <a href="index.php?page=0"><h3>ACCUEIL</h3></a> -->
					<a href="index.php?page=1"><h3>PARCS</h3></a>
					<a href="index.php?page=2"><h3>ATTRACTIONS</h3></a>
					<?php if(isset($_SESSION['email']) and ($_SESSION['role']=='admin' or $_SESSION['role']=='technicien')){
						echo '<a href="index.php?page=3"><h3>TECHNICIENS</h3></a>';
					} ?>
					<a href="index.php?page=4"><h3>RESTAURANTS</h3></a>
					<?php if(isset($_SESSION['email']) and ($_SESSION['role']=='admin' or $_SESSION['role']=='restaurateur')){
						echo '<a href="index.php?page=5"><h3>RESTAURATEURS</h3></a>';
					} ?>
					<a href="index.php?page=6"><h3>TRANSPORTS</h3></a>
					<?php if(isset($_SESSION['email'])){
						echo '<a href="index.php?page=7"><h3>COMMANDES</h3></a>';
					} ?>
				</div>
				<?php
					if (! isset($_SESSION['email'])){
						echo '<a href="index.php?page=8"><h4 class="bouton_connexion">Connexion</h4></a>';
					} else{
						// echo "<h4 class='bloc_role'>".$_SESSION['role']." : ".$_SESSION['prenom']." ".$_SESSION['nom']."</h4>";
						echo '<a href="index.php?page=8"><h4 class="bouton_connexion">Déconnexion<br>'.$_SESSION['prenom'].' '.$_SESSION['nom'].', '.$_SESSION['role'].'</h4></a>';
					} ?>
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
				case 3 : 
				if(isset($_SESSION['email']) and $_SESSION['role']=='technicien'){
					require_once("techniciens.php"); break;
				}
				case 4 : require_once("restaurants.php"); break;
				case 5 : 
				if(isset($_SESSION['email']) and $_SESSION['role']=='restaurateur'){
					require_once("restaurateurs.php"); break;
				}
				case 6 : require_once("transports.php"); break;
				case 7 : 
				if(isset($_SESSION['email'])){
					require_once("commandes.php"); break;
				}
				case 8 :
				if (! isset($_SESSION['email'])){
					require_once("vues/vue_connexion.php"); break;
				} else{
					session_destroy();
					header("Location: index.php?page=8");
				}
				case 9 : require_once("vues/vue_mentions_legales.php"); break;
			}

			if (isset($_POST['SeConnecter'])){
				$email = $_POST['email'];
				$mdp = $_POST['mdp'];
				$unUser = $unControleur->selectUser($email, $mdp);
				if($unUser == null){
					echo "<p><br><br>VEUILLEZ VERIFIER VOS IDENTIFIANTS !</p>";
				} else {
					//Création de la session user
					$_SESSION['role'] = $unUser['role'];
					$_SESSION['id'] = $unUser['iduser'];
					$_SESSION['email'] = $unUser['email'];
					$_SESSION['nom'] = $unUser['nom'];
					$_SESSION['prenom'] = $unUser['prenom'];

					//on recharge la page vers le HOME
					header("Location: index.php?page=0");

				}
			}
			if (isset($_POST['SInscrire'])){
				$unControleur->insertClient($_POST);
				header("Location: index.php?page=8");
			}
		?>

		<br><br><br><br>
		<footer>
			<h3>Contact :</h3>
			<p><a href="mailto:sav@disneyland.fr">sav@disneyland.fr</a> | <a href="tel:+33825300500" title="Service 0,15 €/min + prix appel">0 825 300 500</a></p>
			<p><br><a href="index.php?page=9">Mentions légales</a></p>
		</footer>
	</center>
</body>
</html>