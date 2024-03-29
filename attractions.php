<?php
	$leAttraction = null;
	$idAttraction = null ;
	$urlAttraction = null;
	$lesParcs = $unControleur->selectAllParcs();
	$lesTechniciens = $unControleur->selectAllTechniciens();

	if(isset($_SESSION['email']) and ($_SESSION['role']=='admin' or $_SESSION['role']=='technicien')){
		if (isset($_GET['action']) and isset($_GET['idAttraction'])){
			$action = $_GET['action'];
			$idAttraction = $_GET['idAttraction'];
			switch ($action){
				case "sup": $unControleur->deleteAttraction($idAttraction); break;
				case "edit": $leAttraction = $unControleur->selectWhereAttraction($idAttraction); break;
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

	if (isset($_GET['action']) and isset($_GET['idAttraction'])){
		$action = $_GET['action'];
		$idAttraction = $_GET['idAttraction'];
		if ($action == "voir"){
		$urlAttraction = $unControleur->selectUrlAttraction($idAttraction); 
		}
	}

	if (isset($_POST['Rechercher'])){
		$mot = $_POST['mot'];
		$lesAttractions = $unControleur->searchAttraction($mot);
	} else{
		$lesAttractions = $unControleur->selectAllAttractions();
	}

	require_once("vues/vue_les_attractions.php");
?>