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
				$row["CATEGORIE"] = CategorieDAO::getCategorieById($row["IDCATEGORIE"]);
				$row["TYPE"] = TypeDAO::getTypeById($row["IDTYPE"]);
				$creations[] = $row;
			}

			return $creations;
		}

		public static function getCreation($path, $type, $categorie, $nom, $slideshow, $desc) {
			$connection = Connection::getConnection();

			$idImage = ImageDAO::getImage($path)["ID"];
			$idType = TypeDAO::getType($type)["ID"];
			
			if($slideshow === "true")
				$slideshow = 1;
			else
				$slideshow = 0;

			// return !empty($categorie);
			// var_dump(empty($categorie));
			// var_dump($categorie === "");

			if(!empty($categorie)){
				$idCategorie = CategorieDAO::getCategorie($categorie)["ID"];
				$statement = $connection->prepare("SELECT * FROM CS_Creation WHERE idImage= ? AND idType = ? AND
												 nom = ? AND slideshow = ? AND description = ? AND idCategorie = ?");
				$statement->bindParam(1, $idImage);
				$statement->bindParam(2, $idType);
				$statement->bindParam(3, $nom);
				$statement->bindParam(4, $slideshow);
				$statement->bindParam(5, $desc);
				$statement->bindParam(6, $idCategorie);
			}else{
				$statement = $connection->prepare("SELECT * FROM CS_Creation WHERE idImage= ? AND idType = ? AND
												 nom = ? AND slideshow = ? AND description = ? AND idCategorie IS NULL");
				$statement->bindParam(1, $idImage);
				$statement->bindParam(2, $idType);
				$statement->bindParam(3, $nom);
				$statement->bindParam(4, $slideshow);
				$statement->bindParam(5, $desc);
			}
			

			$statement->setFetchMode(PDO::FETCH_ASSOC);
			$statement->execute();

			$creation = null;

			if ($row = $statement->fetch()) {
				$row["IMAGE"] = ImageDAO::getImageById($row["IDIMAGE"])["PATH"];

				$row["IMAGESLIDESHOW"] = ImageDAO::getImageById($row["IDIMAGESLIDESHOW"])["PATH"];

				$row["CATEGORIE"] = CategorieDAO::getCategorieById($row["IDCATEGORIE"]);
				$row["TYPE"] = TypeDAO::getTypeById($row["IDTYPE"]);
				$creation = $row;
			}

			return $creation;
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

		public static function removeCreation($idCreation){
			$connection = Connection::getConnection();

			$statement = $connection->prepare("DELETE FROM CS_CREATION WHERE ID = ? ");
				
			$statement->bindParam(1, $idCreation);

			return $statement->execute();
		}
		
		private static function getThumbnail($str){
			$ex = explode(".", $str);
			return $ex[0] . ".t." . $ex[1];
		}

		public static function getTableauxByType($type){
			$connection = Connection::getConnection();

			$idType = TypeDAO::getType("Tableau")["ID"];
			$idCategorie = CategorieDAO::getCategorie($type)["ID"];

			$statement = $connection->prepare("SELECT * FROM CS_Creation WHERE idType = ? and idCategorie = ?");

			$statement->bindParam(1, $idType);
			$statement->bindParam(2, $idCategorie);

			$statement->setFetchMode(PDO::FETCH_ASSOC);

			$statement->execute();

			$creations = [];

			while ($row = $statement->fetch()) {
				$row["IMAGE"] = ImageDAO::getImageById($row["IDIMAGE"])["PATH"];
				$row["THUMBNAIL"] = CreationDAO::getThumbnail($row["IMAGE"]);
				$row["CATEGORIE"] = CategorieDAO::getCategorieById($row["IDCATEGORIE"]);
				$row["TYPE"] = TypeDAO::getTypeById($row["IDTYPE"]);
				$creations[] = $row;
			}
			return $creations;
		}

		public static function getSlideShows() {
			$connection = Connection::getConnection();

			$statement = $connection->prepare("SELECT * FROM CS_Creation WHERE slideshow = 1");

			$statement->setFetchMode(PDO::FETCH_ASSOC);
			$statement->execute();

			$creations = [];

			while ($row = $statement->fetch()) {
				$row["IMAGE"] = ImageDAO::getImageById($row["IDIMAGE"])["PATH"];
				$row["TYPE"] = TypeDAO::getTypeById($row["IDTYPE"]);
				$row["IMAGESLIDESHOW"] = ImageDAO::getImageById($row["IDIMAGESLIDESHOW"])["PATH"];
				$creations[] = $row;
			}

			return $creations;
		}

		public static function getMuralesCommerce() {
			$connection = Connection::getConnection();

			$statement = $connection->prepare("SELECT * FROM CS_Creation WHERE idType = ?");

			$idType = TypeDAO::getType("Commerce")["ID"];

			$statement->bindParam(1, $idType);

			$statement->setFetchMode(PDO::FETCH_ASSOC);
			$statement->execute();

			$creations = [];

			while ($row = $statement->fetch()) {
				$row["IMAGE"] = ImageDAO::getImageById($row["IDIMAGE"])["PATH"];
				$row["THUMBNAIL"] = CreationDAO::getThumbnail($row["IMAGE"]);
				$row["CATEGORIE"] = CategorieDAO::getCategorieById($row["IDCATEGORIE"]);
				$row["TYPE"] = TypeDAO::getTypeById($row["IDTYPE"]);
				$creations[] = $row;
			}

			return $creations;
		}

		public static function getMuralesChambre() {
			$connection = Connection::getConnection();

			$statement = $connection->prepare("SELECT * FROM CS_Creation WHERE idType = ?");

			$idType = TypeDAO::getType("Chambre")["ID"];

			$statement->bindParam(1, $idType);

			$statement->setFetchMode(PDO::FETCH_ASSOC);
			$statement->execute();

			$creations = [];

			while ($row = $statement->fetch()) {
				$row["IMAGE"] = ImageDAO::getImageById($row["IDIMAGE"])["PATH"];
				$row["THUMBNAIL"] = CreationDAO::getThumbnail($row["IMAGE"]);
				$row["CATEGORIE"] = CategorieDAO::getCategorieById($row["IDCATEGORIE"]);
				$row["TYPE"] = TypeDAO::getTypeById($row["IDTYPE"]);
				$creations[] = $row;
			}

			return $creations;
		}

		public static function updateCreation($idCreation, $path, $pathSlideshow, $type, $categorie, $nom, $slideshow, $desc){
			$connection = Connection::getConnection();

			//TODO: UPLOAD l'aimge si n'existe pas (nouveau)
			$idImage = ImageDAO::getImage($path)["ID"];
			$idImageSlideshow = ImageDAO::getImage($pathSlideshow)["ID"];
			$idType = TypeDAO::getType($type)["ID"];

			
			if($slideshow === "true")
				$slideshow = 1;
			else
				$slideshow = 0;

			$idType = TypeDAO::getType($type)["ID"];
			$idCategorie = null;
			if($categorie !== null)
				$idCategorie = CategorieDAO::getCategorie($categorie)["ID"];

			var_dump ($idCreation);

			$statement = $connection->prepare("UPDATE CS_Creation SET idImage = ?,idImageSlideshow = ?, idType = ?,
																	idCategorie = ?, nom = ?, slideshow = ?, description = ? 
																	WHERE ID = ? ");

			$statement->bindParam(1, $idImage);
			$statement->bindParam(2, $idImageSlideshow);
			$statement->bindParam(3, $idType);
			$statement->bindParam(4, $idCategorie);
			$statement->bindParam(5, $nom);
			$statement->bindParam(6, $slideshow);
			$statement->bindParam(7, $desc);
			$statement->bindParam(8, $idCreation);

			return $statement->execute();
		}
	}
