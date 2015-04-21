/*DROP TABLE*/
DROP TABLE CS_Creation;
DROP TABLE CS_Texte;
DROP TABLE CS_Emplacement;
DROP TABLE CS_User;
DROP TABLE CS_Image;
DROP TABLE CS_Type;
DROP TABLE CS_Categorie;

/*Création table*/
CREATE TABLE CS_User(
  id NUMBER,
  username VARCHAR2(50) UNIQUE NOT NULL,
  prenom VARCHAR2(50),
  nom VARCHAR2(50),
  motDePasse VARCHAR2(255) NOT NULL,
  visibility NUMBER(1) NOT NULL,
  CONSTRAINT CS_user_pk PRIMARY KEY(id),
  CONSTRAINT chk_user_visibility CHECK (visibility > 0)
);

CREATE TABLE CS_Image(
  id NUMBER,
  path VARCHAR2(300) NOT NULL,
  CONSTRAINT CS_image_pk PRIMARY KEY(id)
);

CREATE TABLE CS_Categorie(
  id NUMBER,
  nom VARCHAR2(300) NOT NULL,
  CONSTRAINT CS_categorie_pk PRIMARY KEY(id)
);

CREATE TABLE CS_Type(
  id NUMBER,
  idCategorie NUMBER,
  nom VARCHAR2(80) NOT NULL,
  CONSTRAINT CS_type_pk PRIMARY KEY(id),
  CONSTRAINT categorie_type_fk FOREIGN KEY(idCategorie) REFERENCES CS_Categorie(id)
);

CREATE TABLE CS_Creation(
  id NUMBER,
  idImage NUMBER,
  idType NUMBER,
  nom VARCHAR2(100) NOT NULL,
  slideshow NUMBER(1),
  description VARCHAR2(200),
  CONSTRAINT CS_Creation_pk PRIMARY KEY(id),
  CONSTRAINT image_creation_fk FOREIGN KEY(idImage) REFERENCES CS_Image(id),
  CONSTRAINT slideshow CHECK (slideshow = 0 OR slideshow = 1)
);

CREATE TABLE CS_Emplacement(
  id NUMBER,
  place VARCHAR2(80),
  CONSTRAINT CS_Emplacement_pk PRIMARY KEY(id)
);

CREATE TABLE CS_Texte(
  id NUMBER,
  idEmplacement NUMBER,
  contenu VARCHAR2(800) NOT NULL,
  CONSTRAINT CS_Texte_pk PRIMARY KEY(id),
  CONSTRAINT emplacement_texte_fk FOREIGN KEY(idEmplacement) REFERENCES CS_Emplacement(id)
);