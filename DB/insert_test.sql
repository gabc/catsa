/*INSERT TEST*/

INSERT INTO CS_User(USERNAME, MOTDEPASSE, VISIBILITY)
VALUES('admin', '$2a$10$FuPMKanOvLxrrEXGbzAM1u.r63nbZfUOY2ysjG7dnLMyLZDa2aUmK', '2');

INSERT INTO CS_EMPLACEMENT(PLACE)
VALUES('acceuil');

INSERT INTO CS_EMPLACEMENT(PLACE)
VALUES('contact');

INSERT INTO CS_EMPLACEMENT(PLACE)
VALUES('presentation');

INSERT INTO CS_TEXTE(IDEMPLACEMENT, CONTENU)
SELECT id, 'Bienvenue sur Catsa !' FROM CS_EMPLACEMENT WHERE place = 'acceuil';

INSERT INTO CS_TEXTE(IDEMPLACEMENT, CONTENU)
SELECT id, 'Contact' FROM CS_EMPLACEMENT WHERE place = 'contact';

INSERT INTO CS_TEXTE(IDEMPLACEMENT, CONTENU)
SELECT id, 'Qui suis-je ?' FROM CS_EMPLACEMENT WHERE place = 'presentation';

INSERT INTO CS_TYPE(NOM)
VALUES('Chambre');

INSERT INTO CS_TYPE(NOM)
VALUES('Commerce');

INSERT INTO CS_TYPE(NOM)
VALUES('Tableau');

INSERT INTO CS_CATEGORIE(NOM)
VALUES('Bibittes');

INSERT INTO CS_CREATION(nom)
VALUES('test');

