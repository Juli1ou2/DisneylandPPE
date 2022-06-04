<?php 
// CONTRÔLER LES DONNEES, APPELER LES MODELES ET LA VUE
	require_once("modele/modele.class.php");

	class Controleur{
		private $unModele; //objet de la classe Modele

		public function __construct($serveur, $bdd, $user, $mdp){
			//instanciation du modele
			$this->unModele = new Modele($serveur, $bdd, $user, $mdp);
		}

		/********************** PARCS ***************************/
	}
?>