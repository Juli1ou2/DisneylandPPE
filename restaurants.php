<?php
	$leRestaurant = null;

	if (isset($_GET['action']) and isset($_GET['idRestaurant'])){
		$action = $_GET['action'];
		$idRestaurant = $_GET['idRestaurant'];
		switch ($action){
			case "sup": $unControleur->deleteRestaurant($idRestaurant); break;
			case "edit": $leRestaurant = $unControleur->selectWhereRestaurant($idRestaurant); break;
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

	$lesRestaurants = $unControleur->selectAllRestaurants();
	require_once("vues/vue_les_restaurants.php");
?>