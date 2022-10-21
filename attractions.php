<?php
	$leAttraction = null;
	$lesParcs = $unControleur->selectAllParcs();
	$lesTechniciens = $unControleur->selectAllTechniciens();
	$lesAttractions = $unControleur->selectAllAttractions();

	if (isset($_SESSION['email']) and $_SESSION['type']=='Technicien'){
		if (isset($_GET['action']) and isset($_GET['idAttraction'])){
			$action = $_GET['action'];
			$idAttraction = $_GET['idAttraction'];
			switch ($action){
				case "sup": $unControleur->deleteAttraction($idAttraction); break;
				case "edit": $leAttraction = $unControleur->selectWhereAttraction($idAttraction); break;
			}
		}

		// if (isset($_GET['action']) and isset($_GET['type']) and isset($_GET['categorie']) and isset($_GET['fleche'])){
		// 	$action = $_GET['action'];
		// 	$type = $_GET['type'];
		// 	$categorie = $_GET['categorie'];
		// 	$fleche = $_GET['fleche'];
		// 	switch ($action){
		// 		case "search": $lesAttractions = $unControleur->searchAttractionWhereType($type); break;
		// 		case "order": $lesAttractions = $unControleur->searchAttractionOrderBy($categorie, $fleche); break;
		// 	}
		// }

		if (isset($_GET['action']) and isset($_GET['categorie']) and isset($_GET['fleche'])){
			echo 'test';
			$action = $_GET['action'];
			$categorie = $_GET['categorie'];
			$fleche = $_GET['fleche'];
			switch ($action){
				case "order": $lesAttractions = $unControleur->searchAttractionOrderBy($categorie, $fleche); break;
			}
		}

		if (isset($_GET['action']) and isset($_GET['type'])){
			$action = $_GET['action'];
			$type = $_GET['type'];
			switch ($action){
				case "search": $lesAttractions = $unControleur->searchAttractionWhereType($type); break;
			}
		}

		

		require_once("vues/vue_insert_attraction.php");
		if (isset($_POST['Valider'])){
			$unControleur->insertAttraction($_POST);
			header("Location: index.php?page=2");
		}
		if (isset($_POST['Modifier'])){
			$unControleur->updateAttraction($_POST);
		}
	}


	if (isset($_POST['Rechercher'])){
		$mot = $_POST['mot'];
		$lesAttractions = $unControleur->searchAttraction($mot);
	}

	require_once("vues/vue_les_attractions.php");
?>