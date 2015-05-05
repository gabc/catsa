<?php
	require_once("action/DAO/ImageDAO.php");
	require_once("action/DAO/TypeDAO.php");
	require_once("action/DAO/CategorieDAO.php");
	
	class CreationDAO {

		public static function getCreations() {
			return array(
						array("nom" => "Shose"
							 ,"description" => "patente"
							 ,"slideshow" => 0
							 ,"image" => "img\manege.t.jpg"),
						array("nom" => "Second"
							 ,"description" => "Secondement"
							 ,"slideshow" => 1
							 ,"image" => "img\manege.t.jpg"));
		}

		public static function insertCreation($path, $type, $categorie, $nom, $slideshow, $desc){
			$connection = Connection::getConnection();

			$idImage = ImageDAO::insertImage($path)["ID"];
			$idType = TypeDAO::getType($type)["ID"];
			$idCategorie = null;
			if($categorie !== null)
				$idCategorie = CategorieDAO::getCategorie($categorie)["ID"];

			 $statement = $connection->prepare("INSERT INTO CS_Creation(idImage, idType,idCategorie,
			 															nom, slideshow, description)
			 															VALUES(?,?,?,?,?,?)");
				
			$statement->bindParam(1, $idImage);
			$statement->bindParam(2, $idType);
			$statement->bindParam(3, $idCategorie);
			$statement->bindParam(4, $nom);
			$statement->bindParam(5, $slideshow);
			$statement->bindParam(6, $desc);
			try {

			$statement->execute();
			}
			catch (Exception $e) {
				echo "|". $nom ."|";
				var_dump($e);exit;
			}
		}
	}
