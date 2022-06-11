<?php 
	//bouton création de commande et dès qu'on ajoute qqchose -> update du prix

	$leReserver1 = null;
	$leReserver2 = null;
	$leReserver3 = null;
	$lesCommandes = $unControleur->selectAllCommandes();
	$lesTransports = $unControleur->selectAllTransports();
	$lesAttractions = $unControleur->selectAllAttractions();
	$lesRestaurants = $unControleur->selectAllRestaurants();
	
	// $lesRestaurantsCommande = $unControleur->selectAllReserver2();
	// $lesTransportsCommande = $unControleur->selectAllReserver3();

	if (isset($_SESSION['email'])){
		if (isset($_GET['action']) and isset($_GET['idAttraction'])){
			$action = $_GET['action'];
			$idAttraction = $_GET['idAttraction'];
			switch ($action){
				case "sup": $unControleur->deleteReserver1($idAttraction); break;
				// case "edit": $leAttraction = $unControleur->selectWhereAttraction($idAttraction); break;
			}
		}

		if (isset($_POST['nouvelleCommande'])){
			$unControleur->insertCommande($_SESSION['id']);
		}

		//Insertion des activités
		require_once("vues/vue_insert_commande.php");

		if (isset($_POST['AjouterAttraction'])){
			$unControleur->insertReserver1($_POST);
			// $unControleur->updateCommande($_POST);
			//header("Location: index.php?page=7");
		}
		if (isset($_POST['ModifierAttraction'])){
			$unControleur->updateReserver1($_POST);
			// $unControleur->updateCommande($_POST);
		}

		if (isset($_POST['AjouterRestaurant'])){
			$unControleur->insertReserver2($_POST);
			// $unControleur->updateCommande($_POST);
			// header("Location: index.php?page=7");
		}
		if (isset($_POST['ModifierRestaurant'])){
			$unControleur->updateReserver2($_POST);
			// $unControleur->updateCommande($_POST);
		}

		if (isset($_POST['AjouterTransport'])){
			$unControleur->insertReserver3($_POST);
			// $unControleur->updateCommande($_POST);
			// header("Location: index.php?page=7");
		}
		if (isset($_POST['ModifierTransport'])){
			$unControleur->updateReserver3($_POST);
			// $unControleur->updateCommande($_POST);
		}

		// Affichage du récapitulatif
		$lesAttractionsCommande = $unControleur->selectAllReserver1();
		require_once("vues/vue_les_commandes.php");
	}
?>