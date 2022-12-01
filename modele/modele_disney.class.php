<?php
	//INJECTION ET EXTRACTION DES DONNEES 
	class Modele{
		private $pdo; //PHP Data Object

		public function __construct($serveur, $bdd, $user, $mdp){
			$this->pdo = null;

			try{
				//code qui peut poser problème
				$this->pdo = new PDO("mysql:host=".$serveur.";dbname=".$bdd, $user, $mdp);
				$this->pdo->query('SET NAMES utf8'); //utf-8 pour les requêtes MySQL
			} catch (PDOException $exp){
				//levée d'exception
				echo "Erreur de connexion au serveur !<br>";
				echo $exp->getMessage();
			}
		}

		/****************************** PARCS *******************************************/

		public function insertParc($tab){
			$requete = "insert into parc values (null, :nom, :capacite, :nbAttractionsTotales, :nbAttractionsFonctionnelles)";
			$donnees = array(
				":nom"=>$tab['nom'],
				":capacite"=>$tab['capacite'],
				":nbAttractionsTotales"=>$tab['nbAttractionsTotales'],
				":nbAttractionsFonctionnelles"=>$tab['nbAttractionsFonctionnelles']
			);
			if ($this->pdo != null){
				//on prépare la requête
				$insert = $this->pdo->prepare($requete);
				$insert->execute($donnees);
			}
		}

		public function selectAllParcs(){
			$requete = "select * from parc";
			if ($this->pdo != null){
				$select = $this->pdo->prepare($requete);
				$select->execute();
				//extraction de tous les Parcs
				return $select->fetchAll();
			} else {
				return null;
			}
		}

		public function deleteParc($idParc){
			$requete = "delete from parc where idParc = :idParc;";
			$donnees = array(
				":idParc"=>$idParc);
			if ($this->pdo != null){
				//on prépare la requête
				$delete = $this->pdo->prepare($requete);
				$delete->execute($donnees);
			}
		}

		public function selectWhereParc($idParc){
			$requete = "select * from parc where idParc = :idParc;";
			$donnees = array(
				":idParc"=>$idParc);
			if ($this->pdo != null){
				$select = $this->pdo->prepare($requete);
				$select->execute($donnees);
				//extraction du Parc
				return $select->fetch();
			} else {
				return null;
			}
		}

		public function updateParc($tab){
			$requete = "update parc set nom = :nom, capacite = :capacite, nbAttractionsTotales = :nbAttractionsTotales, nbAttractionsFonctionnelles = :nbAttractionsFonctionnelles where idParc = :idParc";
			$donnees = array(
				":nom"=>$tab['nom'],
				":capacite"=>$tab['capacite'],
				":nbAttractionsTotales"=>$tab['nbAttractionsTotales'],
				":nbAttractionsFonctionnelles"=>$tab['nbAttractionsFonctionnelles'],
				":idParc"=>$tab['idParc']
			);
			if ($this->pdo != null){
				//on prépare la requête
				$update = $this->pdo->prepare($requete);
				$update->execute($donnees);
			}
		}

		public function searchParc($mot){
			$requete = "select * from parc where nom like'%".$mot."%' or capacite like '%".$mot."%' or nbAttractionsTotales like '%".$mot."%' or nbAttractionsFonctionnelles like '%".$mot."%';";
			if ($this->pdo != null){
				$select = $this->pdo->prepare($requete);
				$select->execute();
				//extraction des Parcs
				return $select->fetchAll();
			} else {
				return null;
			}
		}

		public function countParcs(){
			$requete = "select count(*) as nb from parc;";
			if ($this->pdo != null){
				$select = $this->pdo->prepare($requete);
				$select->execute();
				//extraction du Parc
				$nb = $select->fetch();
				return $nb['nb'];
			} else {
				return null;
			}
		}

		/****************************** RESTAURANTS *******************************************/

		public function insertRestaurant($tab){
			$requete = "insert into restaurant values (null, :nom, :theme, :effectifMax, :affluence, :type, :capacite, :idRestaurateur);";
			$donnees = array(
				":nom"=>$tab['nom'],
				":theme"=>$tab['theme'],
				":effectifMax"=>$tab['effectifMax'],
				":affluence"=>$tab['affluence'],
				":type"=>$tab['type'],
				":capacite"=>$tab['capacite'],
				":idRestaurateur"=>$tab['iduser']
			);
			if ($this->pdo != null){
				//on prépare la requête
				$insert = $this->pdo->prepare($requete);
				$insert->execute($donnees);
			}
		}

		public function selectAllRestaurants(){
			$requete = "select * from restaurant";
			if ($this->pdo != null){
				$select = $this->pdo->prepare($requete);
				$select->execute();
				//extraction de tous les Restaurants
				return $select->fetchAll();
			} else {
				return null;
			}
		}

		public function deleteRestaurant($idRestaurant){
			$requete = "delete from restaurant where idRestaurant = :idRestaurant;";
			$donnees = array(
				":idRestaurant"=>$idRestaurant);
			if ($this->pdo != null){
				//on prépare la requête
				$delete = $this->pdo->prepare($requete);
				$delete->execute($donnees);
			}
		}

		public function selectWhereRestaurant($idRestaurant){
			$requete = "select * from restaurant where idRestaurant = :idRestaurant;";
			$donnees = array(
				":idRestaurant"=>$idRestaurant);
			if ($this->pdo != null){
				$select = $this->pdo->prepare($requete);
				$select->execute($donnees);
				//extraction du Restaurant
				return $select->fetch();
			} else {
				return null;
			}
		}

		public function updateRestaurant($tab){
			$requete = "update restaurant set nom = :nom, theme = :theme, effectifMax = :effectifMax, affluence = :affluence, type = :type, capacite = :capacite, iduser = :idRestaurateur where idRestaurant = :idRestaurant";
			$donnees = array(
				":nom"=>$tab['nom'],
				":theme"=>$tab['theme'],
				":effectifMax"=>$tab['effectifMax'],
				":affluence"=>$tab['affluence'],
				":type"=>$tab['type'],
				":capacite"=>$tab['capacite'],
				":idRestaurateur"=>$tab['iduser'],
				":idRestaurant"=>$tab['idRestaurant']
			);
			if ($this->pdo != null){
				//on prépare la requête
				$update = $this->pdo->prepare($requete);
				$update->execute($donnees);
			}
		}

		public function searchRestaurant($mot){
			$requete = "select * from restaurant where nom like'%".$mot."%' or theme like '%".$mot."%' or effectifMax like '%".$mot."%' or affluence like '%".$mot."%' or type like '%".$mot."%' or capacite like '%".$mot."%';";
			if ($this->pdo != null){
				$select = $this->pdo->prepare($requete);
				$select->execute();
				//extraction des Restaurants
				return $select->fetchAll();
			} else {
				return null;
			}
		}

		public function countRestaurants(){
			$requete = "select count(*) as nb from restaurant;";
			if ($this->pdo != null){
				$select = $this->pdo->prepare($requete);
				$select->execute();
				//extraction du Restaurant
				$nb = $select->fetch();
				return $nb['nb'];
			} else {
				return null;
			}
		}

		/****************************** RESTAURATEURS *******************************************/

		public function insertRestaurateur($tab){
			$requete = "call insertRestaurateur(:nom, :prenom, :adresse, :mail, :mdp, :tel, 'restaurateur', :qualification, :anciennete) ;";
			$donnees = array(
				":nom"=>$tab['nom'],
				":prenom"=>$tab['prenom'],
				":adresse"=>$tab['adresse'],
				":mail"=>$tab['mail'],
				":mdp"=>$tab['mdp'],
				":tel"=>$tab['tel'],
				":qualification"=>$tab['qualification'],
				":anciennete"=>$tab['anciennete'],
			);
			if ($this->pdo != null){
				//on prépare la requête
				$insert = $this->pdo->prepare($requete);
				$insert->execute($donnees);
			}
		}

		public function selectAllRestaurateurs(){
			$requete = "select * from vueRestaurateurs";
			if ($this->pdo != null){
				$select = $this->pdo->prepare($requete);
				$select->execute();
				//extraction de tous les Restaurateurs
				return $select->fetchAll();
			} else {
				return null;
			}
		}

		public function deleteRestaurateur($idRestaurateur){
			$requete = "call deleteRestaurateur (:idRestaurateur);";
			$donnees = array(
				":idRestaurateur"=>$idRestaurateur);
			if ($this->pdo != null){
				//on prépare la requête
				$delete = $this->pdo->prepare($requete);
				$delete->execute($donnees);
			}
		}

		public function selectWhereRestaurateur($idRestaurateur){
			$requete = "select * from vueRestaurateurs where iduser = :idRestaurateur;";
			$donnees = array(
				":idRestaurateur"=>$idRestaurateur);
			if ($this->pdo != null){
				$select = $this->pdo->prepare($requete);
				$select->execute($donnees);
				//extraction du Restaurateur
				return $select->fetch();
			} else {
				return null;
			}
		}

		public function updateRestaurateur($tab){
			$requete = "call updateRestaurateur (:nom, :prenom, :adresse, :email, :mdp, :tel, :qualification, :anciennete, :iduser) ;";
			$donnees = array(
				":nom"=>$tab['nom'],
				":prenom"=>$tab['prenom'],
				":adresse"=>$tab['adresse'],
				":email"=>$tab['email'],
				":mdp"=>$tab['mdp'],
				":tel"=>$tab['tel'],
				":qualification"=>$tab['qualification'],
				":anciennete"=>$tab['anciennete'],
				":iduser"=>$tab['iduser']
			);
			if ($this->pdo != null){
				//on prépare la requête
				$update = $this->pdo->prepare($requete);
				$update->execute($donnees);
			}
		}

		public function searchRestaurateur($mot){
			$requete = "select * from vueRestaurateurs where nom like'%".$mot."%' or prenom like '%".$mot."%' or adresse like '%".$mot."%' or email like '%".$mot."%' or tel like '%".$mot."%'
						or qualification like '%".$mot."%' or anciennete like '%".$mot."%' ;";
			if ($this->pdo != null){ 
				$select = $this->pdo->prepare($requete);
				$select->execute(); 
				//extraction des Restaurateurs
				return $select->fetchAll();
			} else {
				return null;
			}
		}

		public function countRestaurateurs(){
			$requete = "select count(*) as nb from restaurateur;";
			if ($this->pdo != null){
				$select = $this->pdo->prepare($requete);
				$select->execute();
				//extraction du Restaurateur
				$nb = $select->fetch();
				return $nb['nb'];
			} else {
				return null;
			}
		}

		/****************************** TRANSPORTS *******************************************/

		public function insertTransport($tab){
			$requete = "insert into transport values (null, :libelle, :type, :capacite, :affluence, :horaire, :prix)";
			$donnees = array(
				":libelle"=>$tab['libelle'],
				":type"=>$tab['type'],
				":capacite"=>$tab['capacite'],
				":affluence"=>$tab['affluence'],
				":horaire"=>$tab['horaire'],
				":prix"=>$tab['prix']
			);
			if ($this->pdo != null){
				//on prépare la requête
				$insert = $this->pdo->prepare($requete);
				$insert->execute($donnees);
			}
		}

		public function selectAllTransports(){
			$requete = "select * from transport";
			if ($this->pdo != null){
				$select = $this->pdo->prepare($requete);
				$select->execute();
				//extraction de tous les Transports
				return $select->fetchAll();
			} else {
				return null;
			}
		}

		public function deleteTransport($idTransport){
			$requete = "delete from transport where idTransport = :idTransport;";
			$donnees = array(
				":idTransport"=>$idTransport);
			if ($this->pdo != null){
				//on prépare la requête
				$delete = $this->pdo->prepare($requete);
				$delete->execute($donnees);
			}
		}

		public function selectWhereTransport($idTransport){
			$requete = "select * from transport where idTransport = :idTransport;";
			$donnees = array(
				":idTransport"=>$idTransport);
			if ($this->pdo != null){
				$select = $this->pdo->prepare($requete);
				$select->execute($donnees);
				//extraction du Transport
				return $select->fetch();
			} else {
				return null;
			}
		}

		public function updateTransport($tab){
			$requete = "update transport set libelle = :libelle, type = :type, capacite = :capacite, affluence = :affluence, horaire = :horaire, prix = :prix where idTransport = :idTransport";
			$donnees = array(
				":libelle"=>$tab['libelle'],
				":type"=>$tab['type'],
				":capacite"=>$tab['capacite'],
				":affluence"=>$tab['affluence'],
				":horaire"=>$tab['horaire'],
				":prix"=>$tab['prix'],
				":idTransport"=>$tab['idTransport']
			);
			if ($this->pdo != null){
				//on prépare la requête
				$update = $this->pdo->prepare($requete);
				$update->execute($donnees);
			}
		}

		public function searchTransport($mot){
			$requete = "select * from transport where libelle like'%".$mot."%' or type like '%".$mot."%' or capacite like '%".$mot."%'
						or affluence like '%".$mot."%'or horaire like '%".$mot."%'or prix like '%".$mot."%';";
			if ($this->pdo != null){
				$select = $this->pdo->prepare($requete);
				$select->execute();
				//extraction des Transports
				return $select->fetchAll();
			} else {
				return null;
			}
		}

		public function countTransports(){
			$requete = "select count(*) as nb from transport;";
			if ($this->pdo != null){
				$select = $this->pdo->prepare($requete);
				$select->execute();
				//extraction du Transport
				$nb = $select->fetch();
				return $nb['nb'];
			} else {
				return null;
			}
		}

		/****************************** TECHNICIENS *******************************************/

		public function insertTechnicien($tab){
			$requete = "call insertTechnicien (:nom, :prenom, :adresse, :email, :mdp, :tel, 'technicien', :qualification, :dateentree)";
			$donnees = array(
				":nom"=>$tab['nom'],
				":prenom"=>$tab['prenom'],
				":adresse"=>$tab['adresse'],
				":email"=>$tab['email'],
				":mdp"=>$tab['mdp'],
				":tel"=>$tab['tel'],
				":qualification"=>$tab['qualification'],
				":dateentree"=>$tab['dateentree'],
			);
			if ($this->pdo != null){
				//on prépare la requête
				$insert = $this->pdo->prepare($requete);
				$insert->execute($donnees);
			}
		}

		public function selectAllTechniciens(){
			$requete = "select * from vueTechniciens";
			if ($this->pdo != null){
				$select = $this->pdo->prepare($requete);
				$select->execute();
				//extraction de tous les Techniciens
				return $select->fetchAll();
			} else {
				return null;
			}
		}

		public function deleteTechnicien($iduser){
			$requete = "call deleteTechnicien(:iduser)";
			$donnees = array(
				":iduser"=>$iduser);
			if ($this->pdo != null){
				//on prépare la requête
				$delete = $this->pdo->prepare($requete);
				$delete->execute($donnees);
			}
		}

		public function selectWhereTechnicien($iduser){
			$requete = "select * from vueTechniciens where iduser = :iduser;";
			$donnees = array(
				":iduser"=>$iduser);
			if ($this->pdo != null){
				$select = $this->pdo->prepare($requete);
				$select->execute($donnees);
				//extraction du Technicien
				return $select->fetch();
			} else {
				return null;
			}
		}

		public function updateTechnicien($tab){
			$requete = "update technicien set nom = :nom, prenom = :prenom, adresse = :adresse, email = :email, tel = :tel, qualification = :qualification, mdp = :mdp, mdp = :mdp where idTechnicien = :idTechnicien";
			$donnees = array(
				":nom"=>$tab['nom'],
				":prenom"=>$tab['prenom'],
				":adresse"=>$tab['adresse'],
				":email"=>$tab['email'],
				":tel"=>$tab['tel'],
				":qualification"=>$tab['qualification'],
				":mdp"=>$tab['mdp'],
				":idTechnicien"=>$tab['idTechnicien']
			);
			if ($this->pdo != null){
				//on prépare la requête
				$update = $this->pdo->prepare($requete);
				$update->execute($donnees);
			}
		}

		public function searchTechnicien($mot){
			$requete = "select * from vueTechniciens where nom like'%".$mot."%' or prenom like '%".$mot."%' or adresse like '%".$mot."%' or email like
						'%".$mot."%' or tel like '%".$mot."%' or qualification like '%".$mot."%' or dateentree like '%".$mot."%';";
			if ($this->pdo != null){
				$select = $this->pdo->prepare($requete);
				$select->execute();
				//extraction des Techniciens
				return $select->fetchAll();
			} else {
				return null;
			}
		}

		public function countTechniciens(){
			$requete = "select count(*) as nb from technicien;";
			if ($this->pdo != null){
				$select = $this->pdo->prepare($requete);
				$select->execute();
				//extraction du Technicien
				$nb = $select->fetch();
				return $nb['nb'];
			} else {
				return null;
			}
		}

		/****************************** ATTRACTIONS *******************************************/

		public function insertAttraction($tab){
			$requete = "insert into attraction values (null, :nom, :status, :type, :capacite, :affluence, :prix, :heureOuv, :heureFerm, :idParc, :idTechnicien) ;";
			$donnees = array(
				":nom"=>$tab['nom'],
				":status"=>$tab['status'],
				":type"=>$tab['type'],
				":capacite"=>$tab['capacite'],
				":affluence"=>$tab['affluence'],
				":prix"=>$tab['prix'],
				":heureOuv"=>$tab['heureOuv'],
				":heureFerm"=>$tab['heureFerm'],
				":idParc"=>$tab['idParc'],
				":idTechnicien"=>$tab['iduser']
			);
			if ($this->pdo != null){
				//on prépare la requête
				$insert = $this->pdo->prepare($requete);
				$insert->execute($donnees);
			}
		}

		public function selectAllAttractions(){
			$requete = "select * from attraction";
			if ($this->pdo != null){
				$select = $this->pdo->prepare($requete);
				$select->execute();
				//extraction de tous les Attractions
				return $select->fetchAll();
			} else {
				return null;
			}
		}

		public function deleteAttraction($idAttraction){
			$requete = "delete from attraction where idAttraction = :idAttraction;";
			$donnees = array(
				":idAttraction"=>$idAttraction);
			if ($this->pdo != null){
				//on prépare la requête
				$delete = $this->pdo->prepare($requete);
				$delete->execute($donnees);
			}
		}

		public function selectWhereAttraction($idAttraction){
			$requete = "select * from attraction where idAttraction = :idAttraction;";
			$donnees = array(
				":idAttraction"=>$idAttraction);
			if ($this->pdo != null){
				$select = $this->pdo->prepare($requete);
				$select->execute($donnees);
				//extraction du Attraction
				return $select->fetch();
			} else {
				return null;
			}
		}

		public function updateAttraction($tab){
			$requete = "update attraction set nom = :nom, status = :status, type = :type, capacite = :capacite, affluence = :affluence, prix = :prix, heureOuv = :heureOuv, heureFerm = :heureFerm, idParc = :idParc, iduser = :iduser where idAttraction = :idAttraction ;";
			$donnees = array(
				":nom"=>$tab['nom'],
				":status"=>$tab['status'],
				":type"=>$tab['type'],
				":capacite"=>$tab['capacite'],
				":affluence"=>$tab['affluence'],
				":prix"=>$tab['prix'],
				":heureOuv"=>$tab['heureOuv'],
				":heureFerm"=>$tab['heureFerm'],
				":idParc"=>$tab['idParc'],
				":iduser"=>$tab['iduser'],
				":idAttraction"=>$tab['idAttraction']
			);
			if ($this->pdo != null){
				//on prépare la requête
				$update = $this->pdo->prepare($requete);
				$update->execute($donnees);
			}
		}

		public function searchAttraction($mot){
			$requete = "select * from attraction where nom like'%".$mot."%' or status like '%".$mot."%' or type like '%".$mot."%' or capacite like '%".$mot."%' or affluence like '%".$mot."%' or prix like '%".$mot."%' or heureOuv like '%".$mot."%' or heureFerm like '%".$mot."%';";
			if ($this->pdo != null){
				$select = $this->pdo->prepare($requete);
				$select->execute();
				//extraction des Attractions
				return $select->fetchAll();
			} else {
				return null;
			}
		}

		public function countAttractions(){
			$requete = "select count(*) as nb from attraction;";
			if ($this->pdo != null){
				$select = $this->pdo->prepare($requete);
				$select->execute();
				//extraction du Attraction
				$nb = $select->fetch();
				return $nb['nb'];
			} else {
				return null;
			}
		}

		/****************************** CLIENTS *******************************************/

		public function insertClient($tab){
			$requete = "call insertClient (:nom, :prenom, :adresse, :email, :mdp,  :tel, 'client', 0, :dateNaissance, 1)";
			$donnees = array(
				":nom"=>$tab['nom'],
				":prenom"=>$tab['prenom'],
				":adresse"=>$tab['adresse'],
				":email"=>$tab['email'],
				":mdp"=>$tab['mdp'],
				":tel"=>$tab['tel'],
				// ":fidelite"=>$tab['fidelite'],
				":dateNaissance"=>$tab['dateNaissance'],
				// ":promotion"=>$tab['promotion'],
			);
			if ($this->pdo != null){
				//on prépare la requête
				$insert = $this->pdo->prepare($requete);
				$insert->execute($donnees);
			}
		}

		/****************************** COMMANDES *******************************************/

		public function insertCommande($idClient){
			$requete = "insert into commande values (null, 0, ".$idClient.");";
			if ($this->pdo != null){
				//on prépare la requête
				$insert = $this->pdo->prepare($requete);
				$insert->execute();
			}
		}

		public function selectAllCommandes($idClient){
			$requete = "select * from commande where idClient = ".$idClient.";";
			if ($this->pdo != null){
				$select = $this->pdo->prepare($requete);
				$select->execute();
				//extraction de tous les Attractions
				return $select->fetchAll();
			} else {
				return null;
			}
		}

		public function selectWhereCommande($idCommande){
			$requete = "select * from commande where idCommande = :idCommande;";
			$donnees = array(
				":idCommande"=>$idCommande);
			if ($this->pdo != null){
				$select = $this->pdo->prepare($requete);
				$select->execute($donnees);
				//extraction de la Commande
				return $select->fetch();
			} else {
				return null;
			}
		}

		public function selectFirstIdCommande($idClient){
			$requete = "select idCommande from commande where idClient = ".$idClient.";";
			if ($this->pdo != null){
				$select = $this->pdo->prepare($requete);
				$select->execute();
				//extraction de tous les Attractions
				var_dump($select->fetchAll()[0]);
				return $select->fetchAll()[0];
			} else {
				return null;
			}
		}

		//-------------------------------------------------------------------
		public function insertReserver1($tab){
			$requete = "insert into Reserver1 values (:idAttraction, :idCommande, :dateResa, :heure);";
			$donnees = array(
				":idAttraction"=>$tab['idAttraction'],
				":idCommande"=>$tab['idCommande'],
				":dateResa"=>$tab['dateResa'],
				":heure"=>$tab['heure']
			);
			if ($this->pdo != null){
				//on prépare la requête
				$insert = $this->pdo->prepare($requete);
				$insert->execute($donnees);
			}
		}

		public function updatePrixSupCommandeReserver1($tab){
			$leAttraction = $this->selectWhereAttraction($tab['idAttraction']);
			$requete = "update commande set prix=(prix+:prix) where idCommande = :idCommande;";
			$donnees = array(
				":prix"=>$leAttraction['prix'],
				":idCommande"=>$tab['idCommande']
			);
			if ($this->pdo != null){
				//on prépare la requête
				$insert = $this->pdo->prepare($requete);
				$insert->execute($donnees);
			}
		}

		public function updatePrixMinCommandeReserver1($idAttraction, $idCommande){
			$leAttraction = $this->selectWhereAttraction($idAttraction);
			$requete = "update commande set prix=(prix-:prix) where idCommande = :idCommande;";
			$donnees = array(
				":prix"=>$leAttraction['prix'],
				":idCommande"=>$idCommande
			);
			if ($this->pdo != null){
				//on prépare la requête
				$insert = $this->pdo->prepare($requete);
				$insert->execute($donnees);
			}
		}

		public function selectAllReserver1($idCommande){
			$requete = "select a.idAttraction, a.nom, a.affluence, r.dateResa, r.heure, r.idCommande, a.prix from attraction a, commande c, Reserver1 r where c.idCommande = r.idCommande and a.idAttraction = r.idAttraction and r.idCommande = ".$idCommande.";";
			if ($this->pdo != null){
				$select = $this->pdo->prepare($requete);
				$select->execute();
				return $select->fetchAll();
			} else {
				return null;
			}
		}

		public function deleteReserver1($idAttraction, $heure){
			$requete = "delete from Reserver1 where idAttraction = :idAttraction and heure = :heure;";
			$donnees = array(
				":idAttraction"=>$idAttraction,
				":heure"=>$heure
			);
			if ($this->pdo != null){
				//on prépare la requête
				$delete = $this->pdo->prepare($requete);
				$delete->execute($donnees);
			}
		}

		//-------------------------------------------------------------------
		public function insertReserver2($tab){
			$requete = "insert into Reserver2 values (:idCommande, :idRestaurant)";
			$donnees = array(
				":idRestaurant"=>$tab['idRestaurant'],
				":idCommande"=>$tab['idCommande']
			);
			if ($this->pdo != null){
				//on prépare la requête
				$insert = $this->pdo->prepare($requete);
				$insert->execute($donnees);
			}
		}

		public function selectAllReserver2($idCommande){
			$requete = "select re.idRestaurant, re.nom, re.affluence, r.idCommande from restaurant re, commande c, Reserver2 r where c.idCommande = r.idCommande and re.idRestaurant = r.idRestaurant and r.idCommande = ".$idCommande.";";
			if ($this->pdo != null){
				$select = $this->pdo->prepare($requete);
				$select->execute();
				return $select->fetchAll();
			} else {
				return null;
			}
		}

		public function deleteReserver2($idRestaurant){
			$requete = "delete from Reserver2 where idRestaurant = :idRestaurant;";
			$donnees = array(
				":idRestaurant"=>$idRestaurant);
			if ($this->pdo != null){
				//on prépare la requête
				$delete = $this->pdo->prepare($requete);
				$delete->execute($donnees);
			}
		}

		//-------------------------------------------------------------------
		public function insertReserver3($tab){
			$requete = "insert into Reserver3 values (:idTransport, :idCommande, :dateResa, :heure);";
			$donnees = array(
				":idTransport"=>$tab['idTransport'],
				":idCommande"=>$tab['idCommande'],
				":dateResa"=>$tab['dateResa'],
				":heure"=>$tab['heure'],
			);
			if ($this->pdo != null){
				//on prépare la requête
				$insert = $this->pdo->prepare($requete);
				$insert->execute($donnees);
			}
		}

		public function updatePrixSupCommandeReserver3($tab){
			$leTransport = $this->selectWhereTransport($tab['idTransport']);
			$requete = "update commande set prix=(prix+:prix) where idCommande = :idCommande;";
			$donnees = array(
				":prix"=>$leTransport['prix'],
				":idCommande"=>$tab['idCommande']
			);
			if ($this->pdo != null){
				//on prépare la requête
				$insert = $this->pdo->prepare($requete);
				$insert->execute($donnees);
			}
		}

		public function updatePrixMinCommandeReserver3($idTransport, $idCommande){
			$leTransport = $this->selectWhereTransport($idTransport);
			$requete = "update commande set prix=(prix-:prix) where idCommande = :idCommande;";
			$donnees = array(
				":prix"=>$leTransport['prix'],
				":idCommande"=>$idCommande
			);
			if ($this->pdo != null){
				//on prépare la requête
				$insert = $this->pdo->prepare($requete);
				$insert->execute($donnees);
			}
		}

		public function selectAllReserver3($idCommande){
			$requete = "select t.idTransport, t.libelle, t.affluence, r.dateResa, r.heure, r.idCommande, t.prix from transport t, commande c, Reserver3 r where c.idCommande = r.idCommande and t.idTransport = r.idTransport and r.idCommande = ".$idCommande.";";
			if ($this->pdo != null){
				$select = $this->pdo->prepare($requete);
				$select->execute();
				return $select->fetchAll();
			} else {
				return null;
			}
		}

		public function deleteReserver3($idTransport, $heure){
			$requete = "delete from Reserver3 where idTransport = :idTransport and heure = :heure;";
			$donnees = array(
				":idTransport"=>$idTransport,
				":heure"=>$heure
			);
			if ($this->pdo != null){
				//on prépare la requête
				$delete = $this->pdo->prepare($requete);
				$delete->execute($donnees);
			}
		}

		/****************************** USERS *******************************************/

		public function selectUser($email, $mdp){
			$requete = "select * from user where email ='".$email."' and mdp ='".$mdp."'; " ;
			if ($this->pdo != null){
				$select_client = $this->pdo->prepare($requete);
				$select_client->execute();
				return $select_client->fetch(); 
			} else {
				return null;
			}
		}
	}
?>