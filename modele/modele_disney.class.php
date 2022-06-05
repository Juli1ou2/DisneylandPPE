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

		/****************************** RESTAURANTS *******************************************/

		public function insertRestaurant($tab){
			$requete = "insert into restaurant values (null, :nom, :theme, :effectifMax, :affluence, :type, :capacite)";
			$donnees = array(
				":nom"=>$tab['nom'],
				":theme"=>$tab['theme'],
				":effectifMax"=>$tab['effectifMax'],
				":affluence"=>$tab['affluence'],
				":type"=>$tab['type'],
				":capacite"=>$tab['capacite']
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
			$requete = "update restaurant set nom = :nom, theme = :theme, effectifMax = :effectifMax, affluence = :affluence, type = :type capacite = :capacite where idRestaurant = :idRestaurant";
			$donnees = array(
				":nom"=>$tab['nom'],
				":theme"=>$tab['theme'],
				":effectifMax"=>$tab['effectifMax'],
				":affluence"=>$tab['affluence'],
				":type"=>$tab['type'],
				":capacite"=>$tab['capacite']
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
				":qualification"=>$tab['qualification']
			);
			if ($this->pdo != null){
				//on prépare la requête
				$update = $this->pdo->prepare($requete);
				$update->execute($donnees);
			}
		}
	}
?>