<?php
	$leRestaurant = null;
	$lesRestaurateurs = $unControleur->selectAllRestaurateurs();

	if (isset($_SESSION['email']) and $_SESSION['type']=='Technicien'){
		if (isset($_GET['action']) and isset($_GET['idRestaurant'])){
			$action = $_GET['action'];
			$idRestaurant = $_GET['idRestaurant'];
			switch ($action){
				case "sup": $unControleur->deleteRestaurant($idRestaurant); break;
				case "edit": $leRestaurant = $unControleur->selectWhereRestaurant($idRestaurant); break;
				case "voir" : $leRestaurant = $unControleur->selectWhereRestaurant($idRestaurant);break;
			}
		}

		require_once("vues/vue_insert_restaurant.php");
		if (isset($_POST['Valider'])){
			$unControleur->insertRestaurant($_POST);
			header("Location: index.php?page=4");
		}
		if (isset($_POST['Modifier'])){
			$unControleur->updateRestaurant($_POST);
		}
	}

	if (isset($_POST['Rechercher'])){
		$mot = $_POST['mot'];
		$lesRestaurants = $unControleur->searchRestaurant($mot);
	} else {
		$lesRestaurants = $unControleur->selectAllRestaurants();
	}

	if (isset($_POST['Nom_ASC'])){

		$lesRestaurants =$unControleur->filtreASCRestaurant("ASC");
		echo "asc";
	} else {
		$lesRestaurants = $unControleur->selectAllRestaurants();
	}
	
	require_once("vues/vue_les_restaurants.php");
?>