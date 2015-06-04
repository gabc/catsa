/*INSERT*/
INSERT INTO CS_User(USERNAME, MOTDEPASSE, VISIBILITY)
VALUES('admin', '$2a$10$FuPMKanOvLxrrEXGbzAM1u.r63nbZfUOY2ysjG7dnLMyLZDa2aUmK', '2');

INSERT INTO CS_TEXTE(EMPLACEMENT, CONTENU)
VALUES('acceuil', 'Bienvenue sur Catsa ! Nous faisons des murales pour les gens près de Montréal, Laval, Rive-Sud et les environs ! Depuis 2003, nous faisons des peintures murales hautes gammes ainsi que de magnifiques tableaux !');

INSERT INTO CS_TEXTE(EMPLACEMENT, CONTENU)
VALUES('contact', 'Contactez-moi par téléphone ou par courriel pour toutes informations supplémentaires, faire évaluer la valeur de votre projet et pour prendre rendez-vous.');

INSERT INTO CS_TEXTE(EMPLACEMENT, CONTENU)
VALUES('presentation', 'En 2003, Sarah Bronsard et moi unissons nos noms, notre talent et notre grande passion pour la peinture en démarrant catsa, une entreprise de peinture murale haut de gamme.');

INSERT INTO CS_TYPE(NOM)
VALUES('Chambre');

INSERT INTO CS_TYPE(NOM)
VALUES('Commerce');

INSERT INTO CS_TYPE(NOM)
VALUES('Tableau');

INSERT INTO CS_CATEGORIE(NOM)
VALUES('Bibittes');

INSERT INTO CS_CATEGORIE(NOM)
VALUES('Mer');

INSERT INTO CS_CATEGORIE(NOM)
VALUES('Savane');