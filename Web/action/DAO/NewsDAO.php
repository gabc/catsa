<?php
	require_once("action/DAO/TexteDAO.php");

	class NewsDAO {

		public static function getAllNews(){
			$connection = Connection::getConnection();

			$statement = $connection->prepare("SELECT * FROM CS_News ORDER BY CREATED DESC");

			$statement->setFetchMode(PDO::FETCH_ASSOC);
			$statement->execute();

			$news = [];

			while ($row = $statement->fetch()) {
				$row["TITRE"] = TexteDAO::getTexteById($row["IDTITRE"])["CONTENU"];
				$row["TEXTE"] = TexteDAO::getTexteById($row["IDTEXTE"])["CONTENU"];
				$news[] = $row;
			}

			return $news;
		}

		public static function getNbNews($offset, $nbRows){
			$connection = Connection::getConnection();

			$statement = $connection->prepare("SELECT * FROM CS_News ORDER BY CREATED DESC 
											   OFFSET ? ROWS FETCH NEXT ? ROWS ONLY");

			$statement->bindParam(1, $offset);
			$statement->bindParam(2, $nbRows);

			$statement->setFetchMode(PDO::FETCH_ASSOC);
			$statement->execute();

			$news = [];

			while ($row = $statement->fetch()) {
				$row["TITRE"] = TexteDAO::getTexteById($row["IDTITRE"])["CONTENU"];
				$row["TEXTE"] = TexteDAO::getTexteById($row["IDTEXTE"])["CONTENU"];
				$news[] = $row;
			}

			return $news;
		}

		public static function getCountNews(){
			$connection = Connection::getConnection();

			$statement = $connection->prepare("SELECT count(*) FROM CS_News");

			$statement->setFetchMode(PDO::FETCH_ASSOC);
			$statement->execute();

			$nbNews = $statement->fetch()["COUNT(*)"];

			return $nbNews;
		}

		public static function insertNews($titre, $texte){
			$connection = Connection::getConnection();

			$statement = $connection->prepare("INSERT INTO CS_News(idTitre, idTexte) VALUES(?,?)");
			
			$idTitre = TexteDAO::insertTexte($titre, "news");
			$idTexte = TexteDAO::insertTexte($texte, "news");

			$statement->bindParam(1, $idTitre);
			$statement->bindParam(2, $idTexte);

			return $statement->execute();
		}
	}