<?php
	class CategorieDAO {

		public static function getAllCategories() {
			$connection = Connection::getConnection();
			
			$statement = $connection->prepare("SELECT * FROM CS_Categorie");

			$statement->setFetchMode(PDO::FETCH_ASSOC);
			$statement->execute();

			$categories = [];

			while ($row = $statement->fetch()) {
				$categories[] = $row;
			}

			return $categories;
		}
	}