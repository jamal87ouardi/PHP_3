drop database if exists ecommerce;

create database ecommerce;

use ecommerce;


CREATE TABLE Client (
  `idClient` INT ,
  `NomClient` VARCHAR(45),
  `PrenomClient` VARCHAR(45) ,
  `DateNaiss` DATE,
  `AdressClient` VARCHAR(60),
  `Email` VARCHAR(45),
  PRIMARY KEY (`idClient`)
  );

CREATE TABLE Categorie (
  `idCat` INT ,
  `nomCat` VARCHAR(45) ,
  PRIMARY KEY (`idCat`)
  );


CREATE TABLE Produit (
  `idProduit` INT ,
  `nomProduit` VARCHAR(45),
  `prixPro` FLOAT,
  `idCat` INT ,
  PRIMARY KEY (`idProduit`),
  CONSTRAINT `idCat`
    FOREIGN KEY (idCat)
    REFERENCES Categorie(idCat)
    ON DELETE CASCADE
    ON UPDATE CASCADE
    );

CREATE TABLE Payement (
  `idPayement` INT ,
  `statut` VARCHAR(5),
  `datePay` DATETIME,
  `total` FLOAT,
  `typePayement` VARCHAR(45) ,
  PRIMARY KEY (idPayement)
  );

CREATE TABLE Commandes (
  `idCmd` INT ,
  `idClient` INT ,
  `idPro` INT ,
  `quantite` INT ,
  `idPayment` INT ,
  `dateCmd` DATETIME ,
  PRIMARY KEY (idCmd),
  CONSTRAINT client
    FOREIGN KEY (idClient)
    REFERENCES Client(idClient)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `product`
    FOREIGN KEY (`idPro`)
    REFERENCES Produit (`idProduit`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `pay`
    FOREIGN KEY (`idPayment`)
    REFERENCES Payement (`idPayement`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
    );
    
    
insert into categorie values
(1,'Smartphones'),(2,'Ordinateur protable');

insert into produit values
(1,'Samsung A10',4300,1),(2,'Xioami x23',3200,1),(3,'iphone 12',5800,1),
(4,'HP 840',4100,2),(5,'Dell latitude 2C',5000,2),(6,'IBM thinkpad',5200,2);

insert into client values 
(1,'Labyad','Ayman','2000-03-10','123 Rue nakhil','labyad@gmail.com'),
(2,'Wafi','Taha','1992-06-11','200 Av Bayrout','wafi@gmail.com'),
(3,'Lahmar','wafae','2001-08-19','4 Rue Laayoune','lahmar@gmail.com'),
(4,'Jamali','Ayoub','2002-05-13','138 Av Nasr','ayo@hotmail.fr'),
(5,'Youbi','Amina','1999-01-05','17 Rue nakhil','youbi@yahoo.com');

insert into payement values
(1,'oui','2023-03-30 12:15:00',4300,'en ligne'),
(2,'nom','2023-03-15 12:30:00',6400,'a la vivraison'),
(3,'oui','2023-01-02 10:00:00',10000,'a la vivraison')
;

insert into commandes values
(1,3,1,1,1,'2023-03-30 12:15:00'),
(2,5,2,2,2,'2023-03-15 12:30:00'),
(3,1,5,2,3,'2022-12-25 11:00:00')
