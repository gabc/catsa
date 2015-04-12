/*DROP TABLE*/
DROP TABLE CS_Creation;
DROP TABLE CS_Texte;
DROP TABLE CS_Emplacement;
DROP TABLE CS_User;
DROP TABLE CS_Categorie;
DROP TABLE CS_Image;
DROP TABLE CS_Type;

CREATE DATABASE CatsaDB;
/*USE CatsaDB*/

/*Création table*/
CREATE TABLE CS_User(
  id INT AUTO_INCREMENT,
  username VARCHAR(50) UNIQUE NOT NULL,
  prenom VARCHAR(50),
  nom VARCHAR(50),
  motDePasse VARCHAR(200) NOT NULL,
  visibility INT NOT NULL,
  CONSTRAINT CS_user_pk PRIMARY KEY(id),
  CONSTRAINT chk_user_visibility CHECK (visibility > 0)
);

CREATE TABLE CS_Categorie(
  id INT AUTO_INCREMENT,
  nom VARCHAR(300) NOT NULL,
  CONSTRAINT CS_categorie_pk PRIMARY KEY(id)
);

CREATE TABLE CS_Image(
  id INT AUTO_INCREMENT,
  path VARCHAR(300) NOT NULL,
  CONSTRAINT CS_image_pk PRIMARY KEY(id)
);

CREATE TABLE CS_Type(
  id INT AUTO_INCREMENT,
  nom VARCHAR(80) NOT NULL,
  CONSTRAINT CS_type_pk PRIMARY KEY(id)
);

CREATE TABLE CS_Creation(
  id INT AUTO_INCREMENT,
  idImage INT,
  idType INT,
  nom VARCHAR(100) NOT NULL,
  description VARCHAR(200),
  CONSTRAINT CS_Creation_pk PRIMARY KEY(id),
  CONSTRAINT image_creation_fk FOREIGN KEY(idImage) REFERENCES CS_Image(id)
);

CREATE TABLE CS_Emplacement(
  id INT AUTO_INCREMENT,
  place VARCHAR(80),
  CONSTRAINT CS_Emplacement_pk PRIMARY KEY(id)
);

CREATE TABLE CS_Texte(
  id INT AUTO_INCREMENT,
  idEmplacement INT,
  contenu VARCHAR(800) NOT NULL,
  CONSTRAINT CS_Texte_pk PRIMARY KEY(id),
  CONSTRAINT emplacement_texte_fk FOREIGN KEY(idEmplacement) REFERENCES CS_Emplacement(id)
);