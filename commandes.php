<?php 
	//bouton création de commande et dès qu'on ajoute qqchose -> update du prix

	$leReserver1 = null;
	$leReserver2 = null;
	$leReserver3 = null;
	$idCommande = 0;
	$lesCommandes = $unControleur->selectAllCommandes($_SESSION['id']);
	$lesTransports = $unControleur->selectAllTransports();
	$lesAttractions = $unControleur->selectAllAttractions();
	$lesRestaurants = $unControleur->selectAllRestaurants();
	

	if (isset($_SESSION['email'])){
		if (isset($_GET['action']) and isset($_GET['idAttraction']) and isset($_GET['idCommande'])){
			$action = $_GET['action'];
			$idAttraction = $_GET['idAttraction'];
			$heure = $_GET['heure'];
			$idCommande = $_GET['idCommande'];
			switch ($action){
				case "sup":
				$unControleur->deleteReserver1($idAttraction, $heure); 
				$unControleur->updatePrixMinCommandeReserver1($idAttraction, $idCommande);
				header("Location: index.php?page=7");
				break;
				// case "edit": $leAttraction = $unControleur->selectWhereAttraction($idAttraction); break;
			}
		}
		if (isset($_GET['action']) and isset($_GET['idRestaurant'])){
			$action = $_GET['action'];
			$idRestaurant = $_GET['idRestaurant'];
			switch ($action){
				case "sup": $unControleur->deleteReserver2($idRestaurant); break;
			}
		}
		if (isset($_GET['action']) and isset($_GET['idTransport']) and isset($_GET['idCommande']) and isset($_GET['heure'])){
			$action = $_GET['action'];
			$idTransport = $_GET['idTransport'];
			$heure = $_GET['heure'];
			$idCommande = $_GET['idCommande'];
			switch ($action){
				case "sup":
				$unControleur->deleteReserver3($idTransport, $heure);
				$unControleur->updatePrixMinCommandeReserver3($idTransport, $idCommande);
				break;
			}
		}

		if (isset($_POST['nouvelleCommande'])){
			$unControleur->insertCommande($_SESSION['id']);
		}

		//Insertion des activités
		require_once("vues/vue_insert_commande.php");

		if (isset($_POST['AjouterAttraction'])){
			$unControleur->insertReserver1($_POST);
			$unControleur->updatePrixSupCommandeReserver1($_POST);
		}

		if (isset($_POST['AjouterRestaurant'])){
			$unControleur->insertReserver2($_POST);
		}

		if (isset($_POST['AjouterTransport'])){
			$unControleur->insertReserver3($_POST);
			$unControleur->updatePrixSupCommandeReserver3($_POST);
		}

		// Affichage du récapitulatif
		if (isset($_POST['SelectionCommande'])){
			$idCommande = $_POST['idCommande'];
			// header("Location: index.php?page=7");
		}
		$laCommande = $unControleur->selectWhereCommande($idCommande);
		$lesAttractionsCommande = $unControleur->selectAllReserver1($idCommande);
		$lesRestaurantsCommande = $unControleur->selectAllReserver2($idCommande);
		$lesTransportsCommande = $unControleur->selectAllReserver3($idCommande);
		require_once("vues/vue_les_commandes.php");
	}
?>