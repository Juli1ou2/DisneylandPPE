<?php
	//INJECTION ET EXTRACTION DES DONNEES 
	class Modele{
		private $pdo; //PHP Data Object

		public function __construct($serveur, $bdd, $user, $mdp){
			$this->pdo = null;

			try{
				//code qui peut poser problème
				$this->pdo = new PDO("mysql:host=".$serveur.";dbname=".$bdd, $user, $mdp);
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

		/****************************** RESTAURANTS *******************************************/

		public function insertRestaurant($tab){
			$requete = "insert into restaurant values (null, :nom, :theme, :effectifMax, :affluence, :type, :capacite, :idRestaurateur)";
			$donnees = array(
				":nom"=>$tab['nom'],
				":theme"=>$tab['theme'],
				":effectifMax"=>$tab['effectifMax'],
				":affluence"=>$tab['affluence'],
				":type"=>$tab['type'],
				":capacite"=>$tab['capacite'],
				":idRestaurateur"=>$tab['idRestaurateur']
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
			$requete = "update restaurant set nom = :nom, theme = :theme, effectifMax = :effectifMax, affluence = :affluence, type = :type, capacite = :capacite, idRestaurateur = :idRestaurateur where idRestaurant = :idRestaurant";
			$donnees = array(
				":nom"=>$tab['nom'],
				":theme"=>$tab['theme'],
				":effectifMax"=>$tab['effectifMax'],
				":affluence"=>$tab['affluence'],
				":type"=>$tab['type'],
				":capacite"=>$tab['capacite'],
				":idRestaurateur"=>$tab['idRestaurateur'],
				":idRestaurant"=>$tab['idRestaurant']
			);
			if ($this->pdo != null){
				//on prépare la requête
				$update = $this->pdo->prepare($requete);
				$update->execute($donnees);
			}
		}

		/****************************** RESTAURATEURS *******************************************/

		public function insertRestaurateur($tab){
			$requete = "insert into restaurateur values (null, :nom, :prenom, :adresse, :mail, :tel, :qualification)";
			$donnees = array(
				":nom"=>$tab['nom'],
				":prenom"=>$tab['prenom'],
				":adresse"=>$tab['adresse'],
				":mail"=>$tab['mail'],
				":tel"=>$tab['tel'],
				":qualification"=>$tab['qualification']
			);
			if ($this->pdo != null){
				//on prépare la requête
				$insert = $this->pdo->prepare($requete);
				$insert->execute($donnees);
			}
		}

		public function selectAllRestaurateurs(){
			$requete = "select * from restaurateur";
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
			$requete = "delete from restaurateur where idRestaurateur = :idRestaurateur;";
			$donnees = array(
				":idRestaurateur"=>$idRestaurateur);
			if ($this->pdo != null){
				//on prépare la requête
				$delete = $this->pdo->prepare($requete);
				$delete->execute($donnees);
			}
		}

		public function selectWhereRestaurateur($idRestaurateur){
			$requete = "select * from restaurateur where idRestaurateur = :idRestaurateur;";
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
			$requete = "update restaurateur set nom = :nom, prenom = :prenom, adresse = :adresse, mail = :mail, tel = :tel, qualification = :qualification where idRestaurateur = :idRestaurateur";
			$donnees = array(
				":nom"=>$tab['nom'],
				":prenom"=>$tab['prenom'],
				":adresse"=>$tab['adresse'],
				":mail"=>$tab['mail'],
				":tel"=>$tab['tel'],
				":qualification"=>$tab['qualification'],
				":idRestaurateur"=>$tab['idRestaurateur']
			);
			if ($this->pdo != null){
				//on prépare la requête
				$update = $this->pdo->prepare($requete);
				$update->execute($donnees);
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

		/****************************** TECHNICIENS *******************************************/

		public function insertTechnicien($tab){
			$requete = "insert into technicien values (null, :nom, :prenom, :adresse, :email, :tel, :qualification, :mdp, :role)";
			$donnees = array(
				":nom"=>$tab['nom'],
				":prenom"=>$tab['prenom'],
				":adresse"=>$tab['adresse'],
				":email"=>$tab['email'],
				":tel"=>$tab['tel'],
				":qualification"=>$tab['qualification'],
				":mdp"=>$tab['mdp'],
				":role"=>$tab['role']
			);
			if ($this->pdo != null){
				//on prépare la requête
				$insert = $this->pdo->prepare($requete);
				$insert->execute($donnees);
			}
		}

		public function selectAllTechniciens(){
			$requete = "select * from technicien";
			if ($this->pdo != null){
				$select = $this->pdo->prepare($requete);
				$select->execute();
				//extraction de tous les Techniciens
				return $select->fetchAll();
			} else {
				return null;
			}
		}

		public function deleteTechnicien($idTechnicien){
			$requete = "delete from technicien where idTechnicien = :idTechnicien;";
			$donnees = array(
				":idTechnicien"=>$idTechnicien);
			if ($this->pdo != null){
				//on prépare la requête
				$delete = $this->pdo->prepare($requete);
				$delete->execute($donnees);
			}
		}

		public function selectWhereTechnicien($idTechnicien){
			$requete = "select * from technicien where idTechnicien = :idTechnicien;";
			$donnees = array(
				":idTechnicien"=>$idTechnicien);
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
			$requete = "update technicien set nom = :nom, prenom = :prenom, adresse = :adresse, email = :email, tel = :tel, qualification = :qualification, mdp = :mdp, mdp = :mdp, role = :role where idTechnicien = :idTechnicien";
			$donnees = array(
				":nom"=>$tab['nom'],
				":prenom"=>$tab['prenom'],
				":adresse"=>$tab['adresse'],
				":email"=>$tab['email'],
				":tel"=>$tab['tel'],
				":qualification"=>$tab['qualification'],
				":mdp"=>$tab['mdp'],
				":role"=>$tab['role'],
				":idTechnicien"=>$tab['idTechnicien']
			);
			if ($this->pdo != null){
				//on prépare la requête
				$update = $this->pdo->prepare($requete);
				$update->execute($donnees);
			}
		}

		/****************************** ATTRACTIONS *******************************************/

		public function insertAttraction($tab){
			$requete = "insert into attraction values (null, :nom, :status, :type, :capacite, :affluence, :prix, :heureOuv, :heureFerm, :idParc, :idTechnicien)";
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
				":idTechnicien"=>$tab['idTechnicien']
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
			$requete = "update attraction set nom = :nom, status = :status, type = :type, capacite = :capacite, affluence = :affluence, prix = :prix, heureOuv = :heureOuv, heureFerm = :heureFerm, idParc = :idParc, idTechnicien = :idTechnicien where idAttraction = :idAttraction";
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
				":idTechnicien"=>$tab['idTechnicien'],
				":idAttraction"=>$tab['idAttraction']
			);
			if ($this->pdo != null){
				//on prépare la requête
				$update = $this->pdo->prepare($requete);
				$update->execute($donnees);
			}
		}
	}
?>