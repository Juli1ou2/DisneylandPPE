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
   PRIMARY KEY(idClient)
);

CREATE TABLE attraction(
   idAttraction int(3) not null auto_increment,
   nom VARCHAR(50) NOT NULL,
   status enum ("Ouverte", "Fermée", "En Travaux"),
   type enum ("Spectacle", "Montagne Russe", "Manège", "Dark Ride", "Simulateur de vol", "Chute dans le vide" ),
   capacite int(5),
   affluence enum ("Vide", "10%", "20%", "30%", "40%", "50%", "60", "70%", "80%", "90%", "Pleine"),
   prix int(5),
   heureOuv TIME,
   heureFerm TIME,
   idParc int(3) NOT NULL,
   idTechnicien int(3) NOT NULL,
   PRIMARY KEY(idAttraction),
   FOREIGN KEY(idTechnicien) REFERENCES technicien(idTechnicien),
   FOREIGN KEY(idParc) REFERENCES parc(idParc)
);

CREATE TABLE restaurant(
   idRestaurant int(3) not null auto_increment,
   nom VARCHAR(50),
   theme VARCHAR(50),
   effectifMax int(5),
   affluence enum ("Vide", "10%", "20%", "30%", "40%", "50%", "60", "70%", "80%", "90%", "Pleine"),
   type enum ("Service à Table", "Restauration à Emporter"),
   capacite int(5),
   idRestaurateur int(3) NOT NULL,
   PRIMARY KEY(idRestaurant),
   FOREIGN KEY(idRestaurateur) REFERENCES restaurateur(idRestaurateur)
);

CREATE TABLE commande(
   idCommande int(3) not null auto_increment,
   prix int(5),
   idClient int(3) NOT NULL,
   PRIMARY KEY(idCommande),
   FOREIGN KEY(idClient) REFERENCES client(idClient)
);

CREATE TABLE Reserver1(
   idAttraction int(3),
   idCommande int(3),
   dateResa DATE,
   heure TIME,
   PRIMARY KEY(idAttraction, idCommande),
   FOREIGN KEY(idAttraction) REFERENCES attraction(idAttraction),
   FOREIGN KEY(idCommande) REFERENCES commande(idCommande)
);

CREATE TABLE Reserver2(
   idCommande int(3),
   idRestaurant int(3),
   PRIMARY KEY(idCommande, idRestaurant),
   FOREIGN KEY(idCommande) REFERENCES commande(idCommande),
   FOREIGN KEY(idRestaurant) REFERENCES restaurant(idRestaurant)
);

CREATE TABLE Reserver3(
   idTransport int(3),
   idCommande int(3),
   dateResa DATE,
   heure TIME,
   PRIMARY KEY(idTransport, idCommande),
   FOREIGN KEY(idTransport) REFERENCES attraction(idTransport),
   FOREIGN KEY(idCommande) REFERENCES commande(idCommande)
);


insert into parc values (null, "Parc Disneyland", 28000, 34, 14);

insert into parc values (null, "Parc Walt Disney Studio", 12000, 15, 10);

insert into technicien values (null, "Morisseau", "Julien", "8 rue du CSS", "jm@gmail.com", "0606060606", "Ingénieur son", "te");

insert into technicien values (null, "te", "te", "te", "te", "te", "te", "te");

insert into technicien values (null, "Zeboudj", "Mouhamed", "10 rue de Disney", " mz@gmail.com", "0607070707", "technicien plateau", "te");

insert into technicien values ( null, "Da Costa", "Lucas", "9 rue du repas", "ld@gmail.com", "0707070707", "Technicien lumiere", "te");


insert into attraction values(null, "Big Thunder Moutain", "Ouverte", "Montagne Russe", 2400, "70%", 15, "09:00", "19:00", 1, 1);

insert into attraction values(null, "Space Moutain", "Ouverte", "Montagne Russe", 1800, "40%", 20, "09:00", "19:00", 1, 3);

insert into attraction values(null, "It's a Small World", "Ouverte", "Dark Ride", 2400, "70%", 15, "09:00", "19:00", 1, 2);

insert into attraction values(null, "Peter Pan", "En Travaux", "Dark Ride", 1500, "Vide", 10, "09:00", "19:00", 1, 1);

insert into attraction values(null, "Indiana Jones et le temple du peril", "Fermée", "Montagne Russe", 1444, "Vide", 10, "09:00", "19:00", 1, 2);

insert into attraction values(null, "Star Tour", "En Travaux", "Simulateur de vol", 1444, "Vide", 10, "09:00", "19:00", 1, 2);

insert into attraction values (null, "Crush Coaster", "Ouverte", "Montagne Russe", 895, "Pleine", 25, "09:00", "19:00", 2, 1 );

insert into attraction values (null, "Ratatouille : L'aventure Totalement Toquée de Remy", "Ouverte", "Dark Ride", 1500, "50%", 15, "09:00", "19:00", 2, 3 );

insert into attraction values (null, "Toy Soldiers Parachute Drop", "En Travaux", "Chute dans le vide", 800, "20%", 5, "09:00", "19:00", 2, 2 );

insert into attraction values (null, "Tower of Terror", "Ouverte", "Chute dans le vide", 1200, "90%", 25, "09:00", "19:00", 2, 1 );



insert into restaurateur values ( null, "Da Costa", "Lucas", "9 rue du repas", "ldacosta7797@gmail.com", "0707070707", "Chef cuisinier");

insert into restaurateur values (null, "Zeboudj", "Mouhamed", "10 rue de Disney", " mohamedzeboudj@gmail.com", "0607070707", "Comis de cuisine" ) ;

insert into restaurateur values (null, "Morisseau", "Julien", "8 rue du CSS", " julienmorisseau@gmail.com", "0606060606", "Comis de cuisine" ) ;



insert into restaurant values (null, "Chez Rémy", "Ratatouille", 25, "40%", "Service à table", 200, 1 );

insert into restaurant values (null, "Au Chalet de la Marionnette", "Pinocchio", 7, "30%", "Restauration à Emporter", 0, 1 );

insert into restaurant values (null, "Restaurant en coulisse", "Hollywood", 15, "50%", "Service à table", 60, 2 );

insert into restaurant values (null, "Speciality Ice Cream", "Glaces", 7, "70%", "Restauration à Emporter", 0, 2 );



insert into transport values (null, "RER A", "Transport externe", 2600, "40%", "00:15", 5.20);

insert into transport values (null, "Interparc", "Navette interne", 150, "40", "00:05", 0.00);