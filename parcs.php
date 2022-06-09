<?php
	$leParc = null;

	if (isset($_SESSION['email']) and $_SESSION['type']=='Technicien'){
		if (isset($_GET['action']) and isset($_GET['idParc'])){
			$action = $_GET['action'];
			$idParc = $_GET['idParc'];
			switch ($action){
				case "sup": $unControleur->deleteParc($idParc); break;
				case "edit": $leParc = $unControleur->selectWhereParc($idParc); break;
			}
		}

		require_once("vues/vue_insert_parc.php");
		if (isset($_POST['Valider'])){
			$unControleur->insertParc($_POST);
			header("Location: index.php?page=1");
		}
		if (isset($_POST['Modifier'])){
			$unControleur->updateParc($_POST);
		}
	}

	if (isset($_POST['Rechercher'])){
		$mot = $_POST['mot'];
		$lesParcs = $unControleur->searchParc($mot);
	} else {
		$lesParcs = $unControleur->selectAllParcs();
	}

	require_once("vues/vue_les_parcs.php");
?>