<?php
/* -----------------------------------------------------
 *					                       				*
 *    Projet synthèse : H2015	           				*
 *    Fait Par : François Genest et Gabriel Beauchamp	*
 *					                       				*
 *----------------------------------------------------- */
?>
<?php
	class CategorieDAO {

		public static function insertCategorie($nom) {
			$connection = Connection::getConnection();

			$statement = $connection->prepare("INSERT INTO CS_Categorie(nom) VALUES(?)");

			$statement->bindParam(1, $nom);
			
			$statement->execute();
		}

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

		public static function getCategorie($nom) {
			$connection = Connection::getConnection();
			
			$statement = $connection->prepare("SELECT * FROM CS_Categorie WHERE nom = ?");
			$statement->bindParam(1, $nom);

			$statement->setFetchMode(PDO::FETCH_ASSOC);
			$statement->execute();

			$categorie = null;

			if ($row = $statement->fetch()) {
				$categorie = $row;
			}

			return $categorie;
		}

		public static function getCategorieById($id) {
			$connection = Connection::getConnection();
			
			$statement = $connection->prepare("SELECT * FROM CS_Categorie WHERE id = ?");
			$statement->bindParam(1, $id);

			$statement->setFetchMode(PDO::FETCH_ASSOC);
			$statement->execute();

			$categorie = null;

			if ($row = $statement->fetch()) {
				$categorie = $row;
			}

			return $categorie["NOM"];
		}
	}