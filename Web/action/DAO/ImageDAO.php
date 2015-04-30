<?php
	class ImageDAO {

		public static function getImages() {
			return;
		}

		public static function insertImage($path){
			$connection = Connection::getConnection();

			$statement = $connection->prepare("INSERT INTO CS_Image(path)
				VALUES(?)");
				
			$statement->bindParam(1, $path);
			$statement->execute();

			return ImageDAO::getImage($path); //Retourne l'image pour insert Creation
		}

		public static function getImage($path){
			$connection = Connection::getConnection();
			
			$statement = $connection->prepare("SELECT * FROM CS_IMAGE WHERE PATH = ?");
			$statement->bindParam(1, $path);

			$statement->setFetchMode(PDO::FETCH_ASSOC);
			$statement->execute();

			$image = null;

			if ($row = $statement->fetch()) {
				$image = $row;
			}

			return $image;
		}
	}