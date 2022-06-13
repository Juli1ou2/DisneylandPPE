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

		public function searchParc($mot){
			$lesParcs =  $this->unModele->searchParc($mot);
			//s'il y a des traitements à faire

			//on renvoie les Parcs
			return $lesParcs;
		}

		public function countParcs(){
			$nbParcs =  $this->unModele->countParcs();
			//s'il y a des traitements à faire

			//on renvoie les Parcs
			return $nbParcs;
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

		public function searchRestaurant($mot){
			$lesRestaurants =  $this->unModele->searchRestaurant($mot);
			//s'il y a des traitements à faire

			//on renvoie les Restaurants
			return $lesRestaurants;
		}

		public function countRestaurants(){
			$nbRestaurants =  $this->unModele->countRestaurants();
			//s'il y a des traitements à faire

			//on renvoie les Restaurants
			return $nbRestaurants;
		}

		/********************** RESTAURATEURS ***************************/

		public function insertRestaurateur($tab){
			//on contrôle la validité des données
			//

			//appel au modèle pour l'insertion
			$this->unModele->insertRestaurateur($tab);
		}

		public function selectAllRestaurateurs(){
			$lesRestaurateurs = $this->unModele->selectAllRestaurateurs();
			//s'il y a des traitements à faire

			//on renvoie les Restaurateurs
			return $lesRestaurateurs;
		}

		public function deleteRestaurateur($idRestaurateur){
			$this->unModele->deleteRestaurateur($idRestaurateur);
		}

		public function selectWhereRestaurateur($idRestaurateur){
			return $this->unModele->selectWhereRestaurateur($idRestaurateur);
		}

		public function updateRestaurateur($tab){
			$this->unModele->updateRestaurateur($tab);
		}

		public function searchRestaurateur($mot){
			$lesRestaurateurs =  $this->unModele->searchRestaurateur($mot);
			//s'il y a des traitements à faire

			//on renvoie les Restaurateurs
			return $lesRestaurateurs;
		}

		public function countRestaurateurs(){
			$nbRestaurateurs =  $this->unModele->countRestaurateurs();
			//s'il y a des traitements à faire

			//on renvoie les Restaurateurs
			return $nbRestaurateurs;
		}

		/********************** TRANSPORTS ***************************/

		public function insertTransport($tab){
			//on contrôle la validité des données
			//

			//appel au modèle pour l'insertion
			$this->unModele->insertTransport($tab);
		}

		public function selectAllTransports(){
			$lesTransports = $this->unModele->selectAllTransports();
			//s'il y a des traitements à faire

			//on renvoie les Transports
			return $lesTransports;
		}

		public function deleteTransport($idTransport){
			$this->unModele->deleteTransport($idTransport);
		}

		public function selectWhereTransport($idTransport){
			return $this->unModele->selectWhereTransport($idTransport);
		}

		public function updateTransport($tab){
			$this->unModele->updateTransport($tab);
		}

		public function searchTransport($mot){
			$lesTransports =  $this->unModele->searchTransport($mot);
			//s'il y a des traitements à faire

			//on renvoie les Transports
			return $lesTransports;
		}

		public function countTransports(){
			$nbTransports =  $this->unModele->countTransports();
			//s'il y a des traitements à faire

			//on renvoie les Transports
			return $nbTransports;
		}

		/********************** TECHNICIENS ***************************/

		public function insertTechnicien($tab){
			//on contrôle la validité des données
			//

			//appel au modèle pour l'insertion
			$this->unModele->insertTechnicien($tab);
		}

		public function selectAllTechniciens(){
			$lesTechniciens = $this->unModele->selectAllTechniciens();
			//s'il y a des traitements à faire

			//on renvoie les Techniciens
			return $lesTechniciens;
		}

		public function deleteTechnicien($idTechnicien){
			$this->unModele->deleteTechnicien($idTechnicien);
		}

		public function selectWhereTechnicien($idTechnicien){
			return $this->unModele->selectWhereTechnicien($idTechnicien);
		}

		public function updateTechnicien($tab){
			$this->unModele->updateTechnicien($tab);
		}

		public function searchTechnicien($mot){
			$lesTechniciens =  $this->unModele->searchTechnicien($mot);
			//s'il y a des traitements à faire

			//on renvoie les Techniciens
			return $lesTechniciens;
		}

		public function countTechniciens(){
			$nbTechniciens =  $this->unModele->countTechniciens();
			//s'il y a des traitements à faire

			//on renvoie les Techniciens
			return $nbTechniciens;
		}

		/********************** ATTRACTIONS ***************************/

		public function insertAttraction($tab){
			//on contrôle la validité des données
			//

			//appel au modèle pour l'insertion
			$this->unModele->insertAttraction($tab);
		}

		public function selectAllAttractions(){
			$lesAttractions = $this->unModele->selectAllAttractions();
			//s'il y a des traitements à faire

			//on renvoie les Attractions
			return $lesAttractions;
		}

		public function deleteAttraction($idAttraction){
			$this->unModele->deleteAttraction($idAttraction);
		}

		public function selectWhereAttraction($idAttraction){
			return $this->unModele->selectWhereAttraction($idAttraction);
		}

		public function updateAttraction($tab){
			$this->unModele->updateAttraction($tab);
		}

		public function searchAttraction($mot){
			$lesAttractions =  $this->unModele->searchAttraction($mot);
			//s'il y a des traitements à faire

			//on renvoie les Attractions
			return $lesAttractions;
		}

		public function countAttractions(){
			$nbAttractions =  $this->unModele->countAttractions();
			//s'il y a des traitements à faire

			//on renvoie les Attractions
			return $nbAttractions;
		}

		/********************** CLIENTS ***************************/

		public function insertClient($tab){
			//on contrôle la validité des données
			//

			//appel au modèle pour l'insertion
			$this->unModele->insertClient($tab);
		}

		/********************** COMMANDES ***************************/

		public function insertCommande($idClient){
			//on contrôle la validité des données
			//

			//appel au modèle pour l'insertion
			$this->unModele->insertCommande($idClient);
		}

		public function selectAllCommandes($idClient){
			$lesCommandes = $this->unModele->selectAllCommandes($idClient);
			//s'il y a des traitements à faire

			//on renvoie les Commandes
			return $lesCommandes;
		}

		public function selectWhereCommande($idCommande){
			return $this->unModele->selectWhereCommande($idCommande);
		}

		public function selectFirstIdCommande($idClient){
			return $this->unModele->selectFirstIdCommande($idClient);
		}

		//-------------------------------------------------------------------
		public function insertReserver1($tab){
			//on contrôle la validité des données
			//

			//appel au modèle pour l'insertion
			$this->unModele->insertReserver1($tab);
		}

		public function updatePrixSupCommandeReserver1($tab){
			$this->unModele->updatePrixSupCommandeReserver1($tab);
		}

		public function updatePrixMinCommandeReserver1($idAttraction, $idCommande){
			$this->unModele->updatePrixMinCommandeReserver1($idAttraction, $idCommande);
		}

		public function selectAllReserver1($idCommande){
			$lesAttractionsCommande = $this->unModele->selectAllReserver1($idCommande);
			//s'il y a des traitements à faire

			//on renvoie les Commandes
			return $lesAttractionsCommande;
		}

		public function deleteReserver1($idAttraction, $heure){
			$this->unModele->deleteReserver1($idAttraction, $heure);
		}

		//-------------------------------------------------------------------
		public function insertReserver2($tab){
			//on contrôle la validité des données
			//

			//appel au modèle pour l'insertion
			$this->unModele->insertReserver2($tab);
		}

		public function selectAllReserver2($idCommande){
			$lesRestaurantsCommande = $this->unModele->selectAllReserver2($idCommande);
			//s'il y a des traitements à faire

			//on renvoie les Commandes
			return $lesRestaurantsCommande;
		}

		public function deleteReserver2($idRestaurant){
			$this->unModele->deleteReserver2($idRestaurant);
		}

		//-------------------------------------------------------------------
		public function insertReserver3($tab){
			//on contrôle la validité des données
			//

			//appel au modèle pour l'insertion
			$this->unModele->insertReserver3($tab);
		}

		public function updatePrixSupCommandeReserver3($tab){
			$this->unModele->updatePrixSupCommandeReserver3($tab);
		}

		public function updatePrixMinCommandeReserver3($idTransport, $idCommande){
			$this->unModele->updatePrixMinCommandeReserver3($idTransport, $idCommande);
		}

		public function selectAllReserver3($idCommande){
			$lesTransportsCommande = $this->unModele->selectAllReserver3($idCommande);
			//s'il y a des traitements à faire

			//on renvoie les Commandes
			return $lesTransportsCommande;
		}

		public function deleteReserver3($idTransport, $heure){
			$this->unModele->deleteReserver3($idTransport, $heure);
		}

		/********************** USERS ***************************/

		public function selectUser($email, $mdp){
			//appel au modèle pour l'insertion
			return $this->unModele->selectUser($email, $mdp);
		}
	}
?>