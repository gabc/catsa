<?php
	require_once("action/DAO/ImageDAO.php");
	require_once("action/DAO/TypeDAO.php");
	require_once("action/DAO/CategorieDAO.php");
	
	class CreationDAO {
		public static function getAllCreations() {
			$connection = Connection::getConnection();

			$statement = $connection->prepare("SELECT * FROM CS_Creation");

			$statement->setFetchMode(PDO::FETCH_ASSOC);
			$statement->execute();

			$creations = [];

			while ($row = $statement->fetch()) {
				$row["IMAGE"] = ImageDAO::getImageById($row["IDIMAGE"])["PATH"];
				$creations[] = $row;
			}

			return $creations;
		}

		public static function insertCreation($path, $pathSlideshow, $type, $categorie, $nom, $slideshow, $desc){
			$connection = Connection::getConnection();

			$idImage = ImageDAO::insertImage($path)["ID"];
			$idImageSlideshow = null;
			if($pathSlideshow !== null){
				$idImageSlideshow = ImageDAO::insertImage($pathSlideshow)["ID"];
			}
			$idType = TypeDAO::getType($type)["ID"];
			$idCategorie = null;
			if($categorie !== null)
				$idCategorie = CategorieDAO::getCategorie($categorie)["ID"];

			 $statement = $connection->prepare("INSERT INTO CS_Creation(idImage,idImageSlideshow, idType,idCategorie,
			 															nom, slideshow, description)
			 															VALUES(?,?,?,?,?,?,?)");
				
			$statement->bindParam(1, $idImage);
			$statement->bindParam(2, $idImageSlideshow);
			$statement->bindParam(3, $idType);
			$statement->bindParam(4, $idCategorie);
			$statement->bindParam(5, $nom);
			$statement->bindParam(6, $slideshow);
			$statement->bindParam(7, $desc);
			try {

			$statement->execute();
			}
			catch (Exception $e) {
				echo "|". $nom ."|";
				var_dump($e);exit;
			}
		}
	}
