<?php
	$leParc = null;

	if (isset($_GET['action']) and isset($_GET['idParc'])){
		$action = $_GET['action'];
		$idParc = $_GET['idParc'];
		switch ($action){
			case "sup": $unControleur->deleteParc($idParc); break;
			case "edit": $leParc = $unControleur->selectWhereParc($idParc); break;
		}
	}

	require_once("vue/vue_insert_parc.php");
	if (isset($_POST['Valider'])){
		$unControleur->insertParc($_POST);
		header("Location: index.php?page=1");
	}
	if (isset($_POST['Modifier'])){
		$unControleur->updateParc($_POST);
	}

	$lesParcs = $unControleur->selectAllParcs();
	require_once("vue/vue_les_parcs.php");
?>