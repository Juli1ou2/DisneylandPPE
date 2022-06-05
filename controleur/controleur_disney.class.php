<?php 
// CONTRÔLER LES DONNEES, APPELER LES MODELES ET LA VUE
	require_once("modele/modele_disney.class.php");

	class Controleur{
		private $unModele; //objet de la classe Modele

		public function __construct($serveur, $bdd, $user, $mdp){
			//instanciation du modele
			$this->unModele = new Modele($serveur, $bdd, $user, $mdp);
		}

		/********************** PARCS ***************************/

		public function insertParc($tab){
			//on contrôle la validité des données
			//

			//appel au modèle pour l'insertion
			$this->unModele->insertParc($tab);
		}

		public function selectAllParcs(){
			$lesParcs = $this->unModele->selectAllParcs();
			//s'il y a des traitements à faire

			//on renvoie les Parcs
			return $lesParcs;
		}

		public function deleteParc($idParc){
			$this->unModele->deleteParc($idParc);
		}

		public function selectWhereParc($idParc){
			return $this->unModele->selectWhereParc($idParc);
		}

		public function updateParc($tab){
			$this->unModele->updateParc($tab);
		}

		/********************** RESTAURANTS ***************************/

		public function insertRestaurant($tab){
			//on contrôle la validité des données
			//

			//appel au modèle pour l'insertion
			$this->unModele->insertRestaurant($tab);
		}

		public function selectAllRestaurants(){
			$lesRestaurants = $this->unModele->selectAllRestaurants();
			//s'il y a des traitements à faire

			//on renvoie les Restaurants
			return $lesRestaurants;
		}

		public function deleteRestaurant($idRestaurant){
			$this->unModele->deleteRestaurant($idRestaurant);
		}

		public function selectWhereRestaurant($idRestaurant){
			return $this->unModele->selectWhereRestaurant($idRestaurant);
		}

		public function updateRestaurant($tab){
			$this->unModele->updateRestaurant($tab);
		}
	}
?>