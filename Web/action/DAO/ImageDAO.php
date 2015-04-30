<?php
	class ImageDAO {

		public static function getImages() {
			return;
		}

		public insertImage($path){
			$connection = Connection::getConnection();

			$statement = $connection->prepare("INSERT INTO CS_Image(path)
				VALUES(?)");
				
			$statement->bindParam(1, $path);

			$statement->execute();
		}
	}