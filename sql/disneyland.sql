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
   role enum("admin","user"),
   PRIMARY KEY(idTechnicien)
);

CREATE TABLE transport(
   idTransport int(3) not null auto_increment,
   libelle VARCHAR(50),
   type VARCHAR(50),
   capacite int(5),
   affluence VARCHAR(50),
   horaire time,
   prix int(5),
   PRIMARY KEY(idTransport)
);

CREATE TABLE parc(
   idParc int(3) not null auto_increment,
   nom VARCHAR(50),
   capacite int(5),
   nbAttractionsTotales int(5),
   nbAttractionsFonctionnelles int(5),
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
   idClient int(3) not null auto_increment,
   nom VARCHAR(50),
   prenom VARCHAR(50),
   email VARCHAR(50),
   mdp VARCHAR(50),
   tel VARCHAR(50),
   role enum("admin","user"),
   PRIMARY KEY(idClient)
);

CREATE TABLE attraction(
   idAttraction int(3) not null auto_increment,
   nom VARCHAR(50) NOT NULL,
   status VARCHAR(50),
   type VARCHAR(50),
   capacite int(5),
   affluence VARCHAR(50),
   prix int(5),
   heureOuv TIME,
   heureFerm TIME,
   idTechnicien int(3) NOT NULL,
   idParc int(3) NOT NULL,
   PRIMARY KEY(idAttraction),
   FOREIGN KEY(idTechnicien) REFERENCES technicien(idTechnicien),
   FOREIGN KEY(idParc) REFERENCES parc(idParc)
);

CREATE TABLE restaurant(
   idRestaurant int(3) not null auto_increment,
   nom VARCHAR(50),
   theme VARCHAR(50),
   effectifMax int(5),
   affluence VARCHAR(50),
   type VARCHAR(50),
   capacite int(5),
   idRestaurateur int(3) NOT NULL,
   PRIMARY KEY(idRestaurant),
   FOREIGN KEY(idRestaurateur) REFERENCES restaurateur(idRestaurateur)
);

CREATE TABLE commande(
   idCommande int(3) not null auto_increment,
   prix int(5),
   idClient int(3) NOT NULL,
   idRestaurant int(3) NOT NULL,
   idTransport int(3) NOT NULL,
   PRIMARY KEY(idCommande),
   FOREIGN KEY(idClient) REFERENCES client(idClient),
   FOREIGN KEY(idRestaurant) REFERENCES restaurant(idRestaurant),
   FOREIGN KEY(idTransport) REFERENCES transport(idTransport)
);

CREATE TABLE Reserver1(
   idAttraction int(3),
   idCommande int(3),
   dateResa DATE,
   heureDeb TIME,
   heureFin TIME,
   PRIMARY KEY(idAttraction, idCommande),
   FOREIGN KEY(idAttraction) REFERENCES attraction(idAttraction),
   FOREIGN KEY(idCommande) REFERENCES commande(idCommande)
);