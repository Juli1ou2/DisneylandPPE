<?php
	$leTechnicien = null;

	if (isset($_GET['action']) and isset($_GET['idTechnicien'])){
		$action = $_GET['action'];
		$idTechnicien = $_GET['idTechnicien'];
		switch ($action){
			case "sup": $unControleur->deleteTechnicien($idTechnicien); break;
			case "edit": $leTechnicien = $unControleur->selectWhereTechnicien($idTechnicien); break;
		}
	}

	require_once("vues/vue_insert_technicien.php");
	if (isset($_POST['Valider'])){
		$unControleur->insertTechnicien($_POST);
		header("Location: index.php?page=3");
	}
	if (isset($_POST['Modifier'])){
		$unControleur->updateTechnicien($_POST);
	}

	if (isset($_POST['Rechercher'])){
		$mot = $_POST['mot'];
		$lesTechniciens = $unControleur->searchTechnicien($mot);
	} else {
		$lesTechniciens = $unControleur->selectAllTechniciens();
	}
	
	require_once("vues/vue_les_techniciens.php");
?>