/*INSERT TEST*/

INSERT INTO CS_User(USERNAME, MOTDEPASSE, VISIBILITY)
VALUES('admin', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', '2');

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

