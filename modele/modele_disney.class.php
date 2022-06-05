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
	}
?>