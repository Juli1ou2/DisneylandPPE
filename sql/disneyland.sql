drop database if exists disneyland;
create database disneyland;
use disneyland;

CREATE TABLE technicien(
   idTechnicien int(3) not null auto_increment,
   nom VARCHAR(50),
   prenom VARCHAR(50),
   adresse VARCHAR(50),
   email VARCHAR(50),
   tel VARCHAR(50),
   qualification VARCHAR(50),
   mdp VARCHAR(50),
   role VARCHAR(50),
   PRIMARY KEY(idTechnicien)
);

CREATE TABLE transport(
   idTransport int(3) not null auto_increment,
   libelle VARCHAR(50),
   type VARCHAR(50),
   capacite VARCHAR(50),
   affluence VARCHAR(50),
   horaire VARCHAR(50),
   prix VARCHAR(50),
   PRIMARY KEY(idTransport)
);

CREATE TABLE parc(
   idParc int(3) not null auto_increment,
   nom VARCHAR(50),
   capacite INT,
   nbAttractionsTotales INT,
   nbAttractionsFonctionnelles INT,
   PRIMARY KEY(idParc)
);

CREATE TABLE restaurateur(
   idRestaurateur int(3) not null auto_increment,
   nom VARCHAR(50),
   prenom VARCHAR(50),
   adresse VARCHAR(50),
   mail VARCHAR(50),
   tel VARCHAR(50),
   qualification VARCHAR(50),
   PRIMARY KEY(idRestaurateur)
);

CREATE TABLE client(
   idClient INT,
   nom VARCHAR(50),
   prenom VARCHAR(50),
   email VARCHAR(50),
   mdp VARCHAR(50),
   tel VARCHAR(50),
   role VARCHAR(50),
   PRIMARY KEY(idClient)
);

CREATE TABLE attraction(
   idAttraction int(3) not null auto_increment,
   nom VARCHAR(50) NOT NULL,
   status VARCHAR(50),
   type VARCHAR(50),
   capacite VARCHAR(50),
   affluence INT,
   prix INT,
   heureOuv TIME,
   heureFerm TIME,
   idTechnicien VARCHAR(50) NOT NULL,
   idParc VARCHAR(50) NOT NULL,
   PRIMARY KEY(idAttraction),
   FOREIGN KEY(idTechnicien) REFERENCES technicien(idTechnicien),
   FOREIGN KEY(idParc) REFERENCES parc(idParc)
);

CREATE TABLE restaurant(
   idRestaurant int(3) not null auto_increment,
   nom VARCHAR(50),
   theme VARCHAR(50),
   effectifMax INT,
   affluence VARCHAR(50),
   type VARCHAR(50),
   capacite INT,
   idRestaurateur VARCHAR(50) NOT NULL,
   PRIMARY KEY(idRestaurant),
   FOREIGN KEY(idRestaurateur) REFERENCES restaurateur(idRestaurateur)
);

CREATE TABLE commande(
   idCommande int(3) not null auto_increment,
   prix VARCHAR(50),
   idClient INT NOT NULL,
   idRestaurant VARCHAR(50) NOT NULL,
   idTransport VARCHAR(50) NOT NULL,
   PRIMARY KEY(idCommande),
   FOREIGN KEY(idClient) REFERENCES client(idClient),
   FOREIGN KEY(idRestaurant) REFERENCES restaurant(idRestaurant),
   FOREIGN KEY(idTransport) REFERENCES transport(idTransport)
);

CREATE TABLE Reserver1(
   idAttraction int(3) not null auto_increment,
   idCommande VARCHAR(50),
   dateResa DATE,
   heureDeb TIME,
   heureFin TIME,
   PRIMARY KEY(idAttraction, idCommande),
   FOREIGN KEY(idAttraction) REFERENCES attraction(idAttraction),
   FOREIGN KEY(idCommande) REFERENCES commande(idCommande)
);
