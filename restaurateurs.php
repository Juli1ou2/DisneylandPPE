<?php
	$leRestaurateur = null;

	if (isset($_GET['action']) and isset($_GET['idRestaurateur'])){
		$action = $_GET['action'];
		$idRestaurateur = $_GET['idRestaurateur'];
		switch ($action){
			case "sup": $unControleur->deleteRestaurateur($idRestaurateur); break;
			case "edit": $leRestaurateur = $unControleur->selectWhereRestaurateur($idRestaurateur); break;
		}
	}

	require_once("vues/vue_insert_restaurateur.php");
	if (isset($_POST['Valider'])){
		$unControleur->insertRestaurateur($_POST);
		header("Location: index.php?page=5");
	}
	if (isset($_POST['Modifier'])){
		$unControleur->updateRestaurateur($_POST);
	}

	$lesRestaurateurs = $unControleur->selectAllRestaurateurs();
	require_once("vues/vue_les_restaurateurs.php");
?>