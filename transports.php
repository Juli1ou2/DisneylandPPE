<?php
	$leTransport = null;

	if (isset($_SESSION['email']) and $_SESSION['role']=='admin'){
		if (isset($_GET['action']) and isset($_GET['idTransport'])){
			$action = $_GET['action'];
			$idTransport = $_GET['idTransport'];
			switch ($action){
				case "sup": $unControleur->deleteTransport($idTransport); break;
				case "edit": $leTransport = $unControleur->selectWhereTransport($idTransport); break;
			}
		}

		require_once("vues/vue_insert_transport.php");
		if (isset($_POST['Valider'])){
			$unControleur->insertTransport($_POST);
			header("Location: index.php?page=6");
		}
		if (isset($_POST['Modifier'])){
			$unControleur->updateTransport($_POST);
		}
	}

	if (isset($_POST['Rechercher'])){
		$mot = $_POST['mot'];
		$lesTransports = $unControleur->searchTransport($mot);
	} else {
		$lesTransports = $unControleur->selectAllTransports();
	}
	
	require_once("vues/vue_les_transports.php");
?>